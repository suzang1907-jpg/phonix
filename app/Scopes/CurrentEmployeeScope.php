<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class CurrentEmployeeScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if (auth('employee')->check()) {
            $builder->where('employee_id', auth('employee')->user()->id);
        }
    }
}
