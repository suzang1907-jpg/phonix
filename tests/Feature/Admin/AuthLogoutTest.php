<?php

namespace Tests\Feature\Admin;

use App\Routing\Admin;
use App\Routing\Web;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class AuthLogoutTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_logout()
    {
        $user = $this->userCreate();

        $this->domainCreate($user);

        $this->authLogin($user);

        $this->assertTrue(auth()->check());

        $response = $this->post(Web::route('admin.auth.logout'));

        $this->assertFalse(auth()->check());

        $response->assertRedirect(Web::route('web.auth.login'));
    }

    /** @test */
    public function a_guest_can_not_logout()
    {
        $user = $this->userCreate();

        $this->domainCreate($user);

        $this->assertFalse(auth()->check());

        $response = $this->post(Web::route('admin.auth.logout'));

        $this->assertFalse(auth()->check());

        $response->assertRedirect(Web::route('web.home.show'));
    }
}
