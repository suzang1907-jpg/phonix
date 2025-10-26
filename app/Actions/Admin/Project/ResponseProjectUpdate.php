<?php

namespace App\Actions\Admin\Project;

use Dev\PHPActions\Action;
use App\Routing\Admin;
use App\Routing\Api;

class ResponseProjectUpdate extends Action
{
    public function handle()
    {
        $project = $this->getData('project');

        if (empty($project)) {
            return Api::error();
        }

        return Api::done([], Admin::route('admin.project.edit', ['id' => $project->id]));
    }
}
