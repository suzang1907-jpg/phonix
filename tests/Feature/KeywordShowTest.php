<?php

namespace Tests\Feature;

use App\Routing\Amp;
use App\Routing\Web;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class KeywordShowTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_keyword()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $keyword = $this->keywordCreate();

        $response = $this->get(Web::route('web.keyword.show', [
            'id' => $keyword->id
        ]));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_keyword()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $keyword = $this->keywordCreate();

        $this->authLogout($user);

        $response = $this->get(Web::route('web.keyword.show', [
            'id' => $keyword->id
        ]));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_see_keyword_as_amp()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $keyword = $this->keywordCreate();

        $response = $this->get(Amp::route('amp.keyword.show', [
            'id' => $keyword->id
        ]));

        $response->assertOk();
    }

    /** @test */
    public function keyword_page_contains_amp_tag()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $keyword = $this->keywordCreate();

        $response = $this->get(Web::route('web.keyword.show', [
            'id' => $keyword->id
        ]));

        $response->assertOk();

        $response->assertSee(Amp::route('amp.keyword.show', [
            'id' => $keyword->id
        ]));
    }
}
