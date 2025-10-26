<?php

namespace App\Scopes;

use App\Services\ProjectService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class CurrentProjectScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if (!empty(ProjectService::getProject())) {
            $builder->where('project_id', ProjectService::getProject()->id);
        }
    }
}
