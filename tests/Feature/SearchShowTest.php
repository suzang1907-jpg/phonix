<?php

namespace Tests\Feature;

use App\Routing\Amp;
use App\Routing\Web;
use App\Services\ShortUrlService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class SearchShowTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_search()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->blogCreate($user);
        $this->storyCreate($user);

        $search = 'test';

        $response = $this->get(Web::route('web.search.show', [
            'search' => $search
        ]));

        $response->assertOk();

        $response = $this->get(Web::route('web.search.show'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_search()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);

        $search = 'test';

        $response = $this->get(Web::route('web.search.show', [
            'search' => $search
        ]));

        $response->assertOk();

        $response = $this->get(Web::route('web.search.show'));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_see_search_as_amp()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $search = 'test';

        $response = $this->get(Amp::route('amp.search.show', [
            'search' => $search
        ]));

        $response->assertOk();

        $response = $this->get(Amp::route('amp.search.show'));

        $response->assertOk();
    }

    /** @test */
    public function search_page_contains_amp_tag()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $search = 'test';

        $response = $this->get(Web::route('web.search.show', [
            'search' => $search
        ]));

        $response->assertOk();

        $response->assertSee(ShortUrlService::get(Amp::route('amp.search.show', [
            'search' => $search
        ])));


        $response = $this->get(Web::route('web.search.show'));

        $response->assertOk();

        $response->assertSee(ShortUrlService::get(Amp::route('amp.search.show')));
    }
}
