<?php

namespace Tests\Feature;

use App\Routing\Amp;
use App\Routing\Web;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class StoryShowTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_story()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $story = $this->storyCreate();

        $response = $this->get(Web::route('web.story.show', ['id' => $story->id]));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_story()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $story = $this->storyCreate();

        $this->authLogout($user);

        $response = $this->get(Web::route('web.story.show', ['id' => $story->id]));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_see_story_as_amp()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $story = $this->storyCreate();

        $response = $this->get(Amp::route('amp.story.show', ['id' => $story->id]));

        $response->assertOk();
    }


    /** @test */
    public function story_show_page_contains_amp_html_tag()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $story = $this->storyCreate();

        $response = $this->get(Web::route('web.story.show', ['id' => $story->id]));

        $response->assertOk();

        $response->assertSee(Amp::route('amp.story.show', ['id' => $story->id]));
    }
}
