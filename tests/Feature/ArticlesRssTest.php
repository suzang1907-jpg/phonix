<?php

namespace Tests\Feature;

use App\Routing\File;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class ArticlesRssTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_articles_rss_feed()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->articleCreate();

        $response = $this->get(File::route('file.rss.articles'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_articles_rss_feed()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->articleCreate();

        $this->authLogout($user);

        $response = $this->get(File::route('file.rss.articles'));

        $response->assertOk();
    }
}
