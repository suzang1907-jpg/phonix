<?php

namespace App\Actions\Admin\Workspace;

use App\Routing\Admin;
use Dev\PHPActions\Action;
use App\Services\WorkspaceService;

class WorkspaceEdit extends Action
{
    public function handle()
    {
        $workspace = WorkspaceService::getWorkspace();

        if (empty($workspace)) {
            return Admin::redirect('admin.workspace.create');
        }

        return [
            'workspace' =>  $workspace,
        ];
    }
}
