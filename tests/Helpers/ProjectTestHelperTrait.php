<?php

namespace Tests\Helpers;

use App\Actions\Project\ProjectConnectWorkspace;
use App\Actions\Project\ProjectStore;
use App\Models\Project;
use Dev\PHPActions\Action;

trait ProjectTestHelperTrait
{
    public function projectStore(array $data = []): Project
    {
        $project = Action::build(ProjectStore::class)->run()->getData('project');

        return $project;
    }

    public function projectConnectWorkspace(string $project_id, string $workspace_id)
    {
        Action::build(ProjectConnectWorkspace::class)->data([
            'project_id' => $project_id,
            'workspace_id' => $workspace_id
        ])->run();
    }
}
