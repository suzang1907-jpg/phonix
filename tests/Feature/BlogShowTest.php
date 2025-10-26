<?php

namespace Tests\Feature;

use App\Routing\Amp;
use App\Routing\Web;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;

class BlogShowTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_blog()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $blog = $this->blogCreate();

        $response = $this->get(Web::route('web.blog.show', ['id' => $blog->id]));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_blog()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $blog = $this->blogCreate();

        $this->authLogout($user);

        $response = $this->get(Web::route('web.blog.show', ['id' => $blog->id]));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_see_blog_as_amp()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $blog = $this->blogCreate();

        $response = $this->get(Amp::route('amp.blog.show', ['id' => $blog->id]));

        $response->assertOk();
    }


    /** @test */
    public function blog_show_page_contains_amp_html_tag()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $blog = $this->blogCreate();

        $response = $this->get(Web::route('web.blog.show', ['id' => $blog->id]));

        $response->assertOk();

        $response->assertSee(Amp::route('amp.blog.show', ['id' => $blog->id]));
    }
}
