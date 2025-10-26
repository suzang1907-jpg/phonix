<?php

namespace Tests\Feature\Admin;

use App\Routing\Admin;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class TagEditTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_tag_edit_page()
    {
        $user = $this->userCreate();

        $this->authLogin($user);

        $this->domainCreate($user);

        $tag = $this->tagCreate($user);

        $response = $this->get(Admin::route('admin.tag.edit', ['id' => $tag->id]));

        $response->assertOk();
    }
}
