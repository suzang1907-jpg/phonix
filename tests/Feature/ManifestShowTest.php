<?php

namespace Tests\Feature;

use App\Routing\File;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class ManifestShowTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_user_can_see_manifest_json()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);
        $this->authLogin($user);

        $response = $this->get(File::route('file.manifest.show'));

        $response->assertOk();
    }

    /** @test */
    public function a_guest_can_see_manifest_json()
    {
        $user = $this->userCreate();
        $this->domainCreate($user);

        $response = $this->get(File::route('file.manifest.show'));

        $response->assertOk();
    }
}
