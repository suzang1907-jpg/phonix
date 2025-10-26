<?php

namespace Tests\Feature\Admin;

use App\Routing\Admin;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class ProjectEditTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_project_edit_page()
    {
        $user = $this->userCreate();

        $this->authLogin($user);

        $domain = $this->domainCreate($user);

        $response = $this->get(Admin::route('admin.project.edit', ['id' => $domain->site->project_id]));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_not_see_project_edit_page()
    {
        $user = $this->userCreate();

        $domain = $this->domainCreate($user);

        $response = $this->get(Admin::route('admin.project.edit', ['id' => $domain->site->project_id]));

        $response->assertRedirect();
    }
}
