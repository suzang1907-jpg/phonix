<?php

namespace Tests\Feature;

use App\Routing\Web;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class DmcaShowTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_dmca()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $response = $this->get(Web::route('web.policy.dmca'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_dmca()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);

        $response = $this->get(Web::route('web.policy.dmca'));

        $response->assertOk();
    }
}
