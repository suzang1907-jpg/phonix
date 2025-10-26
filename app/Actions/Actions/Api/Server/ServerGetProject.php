<?php

namespace App\Actions\Api\Server;

use App\Models\Project;
use App\Services\ProjectService;
use Dev\PHPActions\Action;

class ServerGetProject extends Action
{
    public function  handle()
    {
        $project_id  = $this->getData('x_project_id');
        $key  = $this->getData('x_project_key');

        if (empty($key)) {
            return;
        }

        if (empty($project_id)) {
            return;
        }

        $project = Project::where('id', $project_id)->with('domains')->get()->first();

        if (empty($project)) {
            return;
        }

        if (!empty($project->api_ips)) {
            if (!in_array(request()->ip(), $project->api_ips ?? [])) {
                return;
            }
        }

        if ($project->api_key != $key) {
            return;
        }

        ProjectService::setProject($project);

        return [
            'project' => $project
        ];
    }
}
