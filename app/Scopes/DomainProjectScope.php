<?php

namespace App\Scopes;

use App\Services\ProjectService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class DomainProjectScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $project = ProjectService::getProject();

        if (!empty($project)) {
            $builder->whereHas('site', function ($q) use ($project) {
                $q->where('sites.project_id', $project->id);
            });
        }
    }
}
