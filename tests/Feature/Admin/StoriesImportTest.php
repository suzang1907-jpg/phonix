<?php

namespace Tests\Feature\Admin;

use App\Routing\Admin;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class StoriesImportTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_stories_import()
    {
        $user = $this->userCreate();

        $this->domainCreate($user);

        $this->authLogin($user);

        $response = $this->get(Admin::route('admin.story.import.show'));

        $response->assertOk();
    }

    /** @test */
    public function a_user_can_import_stories()
    {
        $user = $this->userCreate();

        $this->domainCreate($user);

        $this->authLogin($user);

        $stories_template = base64_encode(file_get_contents(app_path('../tests/resources/stories_template.csv')));

        $this->assertDatabaseCount('stories', 0);

        $response = $this->post(Admin::route('admin.story.import'), [
            'backup' => $stories_template,
            'key_count' => 14,
        ]);

        $this->assertDatabaseCount('stories', 1);
    }

        /** @test */
        public function a_guest_can_not_import_stories()
        {
            $user = $this->userCreate();
    
            $this->domainCreate($user);
    
            $stories_template = base64_encode(file_get_contents(app_path('../tests/resources/stories_template.csv')));
    
            $this->assertDatabaseCount('stories', 0);
    
            $response = $this->post(Admin::route('admin.story.import'), [
                'backup' => $stories_template,
                'key_count' => 14,
            ]);
    
            $this->assertDatabaseCount('stories', 0);
        }
}
