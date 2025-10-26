<?php

namespace Tests\Feature\Admin;

use App\Routing\Admin;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class BlogEditTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_blog_edit_page()
    {
        $user = $this->userCreate();

        $this->authLogin($user);

        $this->domainCreate($user);

        $blog = $this->blogCreate($user);

        $response = $this->get(Admin::route('admin.blog.edit', ['id' => $blog->id]));

        $response->assertOk();
    }
}
