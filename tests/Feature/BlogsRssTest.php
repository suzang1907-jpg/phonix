<?php

namespace Tests\Feature;

use App\Routing\File;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class BlogsRssTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_blogs_rss_feed()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->blogCreate();

        $response = $this->get(File::route('file.rss.blogs'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_blogs_rss_feed()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->blogCreate();

        $this->authLogout($user);

        $response = $this->get(File::route('file.rss.blogs'));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_see_blogs_rss_feed_for_specific_city()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->blogCreate();

        $response = $this->get(File::route('file.rss.blogs'));

        $response->assertOk();
    }
}
