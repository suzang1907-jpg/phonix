<?php

namespace App\Actions\Admin\Workspace;

use App\Actions\Cache\CacheClear;
use App\Actions\Workspace\WorkspaceStore as WorkspaceWorkspaceStore;
use App\Routing\Admin;
use App\Routing\Api;
use Dev\PHPActions\Action;
use App\Services\WorkspaceService;
use App\Actions\Project\ProjectConnectWorkspace;

class WorkspaceStore extends Action
{
    public function handle()
    {
        $meta = $this->getData('meta');
        $workspace_name = $this->getData('workspace_name');
        $project_id = $this->getData('workspace_project_id');

        $workspace = Action::build(WorkspaceWorkspaceStore::class)->data([
            'meta' => $meta,
            'name' => $workspace_name
        ])->run()->getData('workspace');

        if (empty($workspace)) {
            return Api::error();
        }

        $project = Action::build(ProjectConnectWorkspace::class)->data([
            'project_id' => $project_id,
            'workspace_id' => $workspace->id
        ])->run()->getData('project');

        return Api::done([
            'workspace' => $workspace->vue(),
            'redirect' => Admin::route('admin.workspace.edit', ['workspace_id' => $workspace->id])
        ]);
    }
}
