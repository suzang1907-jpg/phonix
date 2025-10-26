<?php

namespace App\Actions\Admin\Project;

use App\Services\ProjectService;
use Dev\PHPActions\Action;

class ProjectEdit extends Action
{
    public function handle()
    {
        return [
            'project' => ProjectService::getProject()
        ];
    }
}
