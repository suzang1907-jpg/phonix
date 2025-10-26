<?php

namespace Tests\Feature\Admin;

use App\Models\Domain;
use App\Routing\Admin;
use App\Services\ProjectService;
use App\Services\SiteService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class DomainCreateTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_domain_create_page()
    {
        $user = $this->userCreate();

        $this->authLogin($user);

        $this->domainCreate($user);

        $response = $this->get(Admin::route('admin.domain.create'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_not_see_domain_create_page()
    {
        $user = $this->userCreate();

        $this->domainCreate($user);

        $response = $this->get(Admin::route('admin.domain.create'));

        $response->assertRedirect();
    }

    /** @test */
    public function a_user_can_not_create_a_domain_twice()
    {
        $user = $this->userCreate();

        $this->authLogin($user);

        $this->domainCreate($user);

        $this->assertDatabaseCount('projects', 1);

        $this->assertDatabaseCount('domains', 1);

        $this->assertDatabaseCount('sites', 1);

        $this->post(route('admin.domain.store'), [
            'domain' => 'test.com'
        ]);

        $this->assertDatabaseCount('projects', 1);

        $this->assertDatabaseCount('sites', 2);

        $this->assertDatabaseCount('domains', 2);

        $this->post(route('admin.domain.store'), [
            'domain' => 'test.com'
        ]);

        $this->assertDatabaseCount('domains', 2);
    }

    /** @test */
    public function a_user_can_create_a_second_different_domain()
    {
        $user = $this->userCreate();

        $this->authLogin($user);

        $this->domainCreate($user);

        $this->assertDatabaseCount('domains', 1);

        $this->post(route('admin.domain.store'), [
            'domain' => 'test.com'
        ]);

        $this->assertDatabaseCount('domains', 2);

        $this->post(route('admin.domain.store'), [
            'domain' => 'test1.com'
        ]);

        $this->assertDatabaseCount('domains', 3);
    }
}
