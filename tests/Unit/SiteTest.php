<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class SiteTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('sites', [
                'id',
                'project_id',
                'cloudflare_integration_id',
            ])
        );
    }

    /** @test */
    public function a_site_belongs_to_a_project()
    {
        $project = $this->projectStore();

        $site = $this->siteStore($project);

        $this->assertEquals($project->id, $site->project->id);
    }
}
