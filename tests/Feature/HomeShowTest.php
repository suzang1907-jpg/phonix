<?php

namespace Tests\Feature;

use App\Routing\Amp;
use App\Routing\Web;
use App\Services\ShortUrlService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class HomeShowTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_home()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $response = $this->get(Web::route('web.home.show'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_home()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);

        $response = $this->get(Web::route('web.home.show'));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_see_home_as_amp()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $response = $this->get(Amp::route('amp.home.show'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_home_as_amp()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);

        $response = $this->get(Amp::route('amp.home.show'));

        $response->assertOk();
    }

    /** @test */
    public function home_page_contains_amp_tag()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $response = $this->get(Web::route('web.home.show'));

        $response->assertOk();

        $response->assertSee(ShortUrlService::get(Amp::route('amp.home.show')));
    }
}
