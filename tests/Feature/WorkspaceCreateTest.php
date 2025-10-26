<?php

namespace Tests\Feature;

use App\Actions\Workspace\WorkspaceStore;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Dev\PHPActions\Action;

class WorkspaceCreateTest extends TestCase
{
    use DatabaseMigrations;
    use WithFaker;

    /** @test */
    public function a_workspace_can_be_created()
    {
        $this->assertDatabaseCount('workspaces', 0);

        $workspace = Action::build(WorkspaceStore::class)->data([
            'name' => 'Test Workspace'
        ])->run()->getData('workspace');

        $this->assertNotEmpty($workspace);

        $this->assertEquals('Test Workspace', $workspace->name);

        $this->assertDatabaseCount('workspaces', 1);
    }

    /** @test */
    public function a_workspace_can_not_be_created_when_name_is_empty()
    {
        $this->assertDatabaseCount('workspaces', 0);

        $workspace = Action::build(WorkspaceStore::class)->run()->getData('workspace');

        $this->assertEmpty($workspace);

        $this->assertDatabaseCount('workspaces', 0);
    }
}
