<?php

namespace App\Actions\Project;

use App\Models\Project;
use App\Models\Workspace;
use Dev\PHPActions\Action;

class ProjectConnectWorkspace extends Action
{
    protected $secure = [
        'workspace_id',
        'project_id'
    ];

    public function handle()
    {
        $project_id = $this->getData('project_id');
        $workspace_id = $this->getData('workspace_id');

        if (empty($project_id)) {
            return;
        }

        if (empty($workspace_id)) {
            return;
        }

        $project = Project::where('id', $project_id)->get()->first();

        if (empty($project)) {
            return;
        }

        $workspace = Workspace::where('id', $workspace_id)->get()->first();

        if (empty($workspace)) {
            return;
        }

        $project->update([
            'workspace_id' => $workspace_id
        ]);

        return [
            'project' => $project
        ];
    }
}
