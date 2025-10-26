<?php

namespace App\Traits\Models;

trait Listable
{
    public function scopeList($query, $limit = 15, $page = null, string $id = 'page')
    {
        $page = $page ?? request()->page;

        return $query->paginate($limit, ['*'], $id, $page ?? 0);
    }
}
