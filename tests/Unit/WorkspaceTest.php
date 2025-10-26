<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;

class WorkspaceTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('workspaces', [
                'id',
                'name',
            ])
        );
    }

    /** @test */
    public function a_workspace_can_have_projects()
    {
        $workspace = $this->workspaceCreate();
        $project  = $this->projectStore();
        $project1 = $this->projectStore();

        $this->projectConnectWorkspace($project->id, $workspace->id);
        $this->projectConnectWorkspace($project1->id, $workspace->id);

        $workspace->refresh();

        $this->assertEquals($project->id, $workspace->projects()->where('id', $project->id)->get()->first()->id);
        $this->assertEquals($project1->id, $workspace->projects()->where('id', $project1->id)->get()->first()->id);
    }
}
