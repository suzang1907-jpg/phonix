<?php

namespace Tests\Feature;

use App\Routing\Amp;
use App\Routing\Web;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class StoryListTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_story_list()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->storyCreate();

        $response = $this->get(Web::route('web.story.list'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_story_list()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->storyCreate();

        $this->authLogout($user);

        $response = $this->get(Web::route('web.story.list'));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_see_story_list_as_amp()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->storyCreate();

        $response = $this->get(Amp::route('amp.story.list'));

        $response->assertOk();
    }


    /** @test */
    public function story_list_page_contains_amp_page()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $this->storyCreate();

        $response = $this->get(Web::route('web.story.list'));

        $response->assertOk();

        $response->assertSee(Amp::route('amp.story.list'));
    }
}
