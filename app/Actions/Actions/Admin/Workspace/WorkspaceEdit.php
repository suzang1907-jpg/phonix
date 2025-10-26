<?php

namespace App\Actions\Admin\Workspace;

use Dev\PHPActions\Action;
use App\Services\WorkspaceService;

class WorkspaceEdit extends Action
{
    public function handle()
    {
        return [
            'workspace' =>  WorkspaceService::getWorkspace(),
        ];
    }
}
