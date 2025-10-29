<?php

namespace App\Actions\Admin\Workspace;

use App\Services\ProjectService;
use Dev\PHPActions\Action;

class WorkspaceCreate extends Action
{
    public function handle()
    {
        return [
            'project' => ProjectService::getProject()
        ];
    }
}
