<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class ProjectTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('projects', [
                'id',
                'support_phone_number',
                'support_banner_id',
                'name',
                'logo_id',
                'amp_name',
                'amp_logo_id',
                'location_id',
                'location_description',
                'google_tag',
                'cloudflare_api_email',
                'cloudflare_api_key',
                'article_watermark_id',
                'article_banner_id',
                'location_text',
                'workspace_id',
                'server_ip',
                'api_key',
                'api_ips',
                'meta_data'
            ])
        );
    }

    /** @test */
    public function a_project_has_many_sites()
    {
        $project = $this->projectStore();

        $site = $this->siteStore($project);

        $project->refresh();

        $this->assertEquals($site->id, $project->sites->first()->id);
    }

    /** @test */
    public function a_project_can_belong_to_a_workspace()
    {
        $workspace = $this->workspaceCreate();
        $project  = $this->projectStore();

        $this->projectConnectWorkspace($project->id, $workspace->id);

        $project->refresh();

        $this->assertEquals($workspace->id, $project->workspace->id);
    }
}
