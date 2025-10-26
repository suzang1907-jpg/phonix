<?php

namespace App\Services;

class PaginateRelation
{
    public static function paginate($relation, $limit = 15, $page = null, string $id = 'page')
    {
        $page = $page ?? request()->page;

        return $relation->paginate($limit, ['*'], $id, $page ?? 0);
    }
}
