<?php

namespace Tests\Feature;

use App\Routing\Web;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class CookiesShowTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_cookies()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $response = $this->get(Web::route('web.policy.cookies'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_cookies()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);

        $response = $this->get(Web::route('web.policy.cookies'));

        $response->assertOk();
    }
}
