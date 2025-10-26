<?php

namespace App\Actions\Admin\Workspace;

use App\Models\Workspace;
use Dev\PHPActions\Action;
use App\Services\WorkspaceService;

class WorkspaceShow extends Action
{
    public function handle()
    {
        return [
            'workspace' =>  WorkspaceService::getWorkspace(),
            'workspaces' => Workspace::with('projects')->list()
        ];
    }
}
