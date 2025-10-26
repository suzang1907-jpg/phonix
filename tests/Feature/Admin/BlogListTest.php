<?php

namespace Tests\Feature\Admin;

use App\Routing\Admin;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class BlogListTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_empty_blog_list_page()
    {
        $user = $this->userCreate();

        $this->authLogin($user);

        $this->domainCreate($user);

        $response = $this->get(Admin::route('admin.blog.list'));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_see_blog_list_page()
    {
        $user = $this->userCreate();

        $this->authLogin($user);

        $this->domainCreate($user);
        $this->blogCreate($user);

        $response = $this->get(Admin::route('admin.blog.list'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_not_see_blog_list_page()
    {
        $user = $this->userCreate();

        $this->domainCreate($user);

        $response = $this->get(Admin::route('admin.blog.list'));

        $response->assertRedirect();
    }
}
