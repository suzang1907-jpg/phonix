<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class CurrentCustomerScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if (auth('customer')->check()) {
            $builder->where('customer_id', auth('customer')->user()->id);
        }
    }
}
