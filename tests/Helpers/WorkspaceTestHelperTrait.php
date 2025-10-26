<?php

namespace Tests\Helpers;

use App\Actions\Workspace\WorkspaceStore;
use App\Models\Workspace;
use Dev\PHPActions\Action;

trait WorkspaceTestHelperTrait
{
    public function workspaceCreate($data = []): Workspace
    {
        $workspace = Action::build(WorkspaceStore::class)->data(array_merge([
            'name' => 'Test Workspace'
        ], $data))->run()->getData('workspace');

        return $workspace;
    }
}
