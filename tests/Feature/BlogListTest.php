<?php

namespace Tests\Feature;

use App\Routing\Amp;
use App\Routing\Web;
use App\Services\ShortUrlService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class BlogListTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_blogs()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->blogCreate();

        $response = $this->get(Web::route('web.blog.list'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_blogs()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->blogCreate();

        $this->authLogout($user);

        $response = $this->get(Web::route('web.blog.list'));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_see_blogs_as_amp()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->blogCreate();

        $response = $this->get(Amp::route('amp.blog.list'));

        $response->assertOk();
    }


    /** @test */
    public function blogs_page_contains_amp_page()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->blogCreate();

        $response = $this->get(Web::route('web.blog.list'));

        $response->assertOk();

        $response->assertSee(ShortUrlService::get(Amp::route('amp.blog.list')));
    }
}
