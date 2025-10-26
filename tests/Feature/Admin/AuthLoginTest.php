<?php

namespace Tests\Feature\Admin;

use App\Routing\Admin;
use App\Routing\Web;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class AuthLoginTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_guest_can_login()
    {
        $user = $this->userCreate();

        $this->domainCreate($user);

        $this->assertFalse(auth()->check());

        $response = $this->get(Web::route('web.auth.login'));

        $response->assertOk();

        $response = $this->post(Web::route('web.auth.login.post'), [
            'email' => 'test@test.com',
            'password' => '12345678'
        ]);

        $this->assertTrue(auth()->check());

        $response->assertRedirect(Admin::route('admin.dashboard.show'));
    }

    /** @test */
    public function a_user_can_not_login()
    {
        $user = $this->userCreate();

        $this->domainCreate($user);

        $this->authLogin($user);

        $this->assertTrue(auth()->check());

        $response = $this->post(Web::route('web.auth.login.post'), [
            'email' => 'test@test.com',
            'password' => '12345678'
        ]);

        $this->assertTrue(auth()->check());

        $response->assertRedirect(Admin::route('admin.dashboard.show'));
    }
}
