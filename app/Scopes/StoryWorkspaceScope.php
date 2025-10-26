<?php

namespace App\Scopes;

use App\Services\WorkspaceService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class StoryWorkspaceScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $workspace = WorkspaceService::getWorkspace();

        if (!empty($workspace)) {
            $projects = $workspace->projects;
            $builder->where(function ($query) use ($projects) {
                foreach ($projects as $project) {
                    $query->orWhere('project_id', $project->id);
                }
            });
        }
    }
}
