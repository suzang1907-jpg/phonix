<?php

namespace App\Traits\Models;

trait Searchable
{
    public function scopeSearch($query, mixed $search, string | array | null $fields = null)
    {
        if (empty($search)) {
            return $query;
        }

        $fields = $fields ?? $this->searchable ?? [];

        $query = $query->where(function ($query) use ($search, $fields) {
            if (is_array($fields)) {
                foreach ($fields as $field) {
                    $query->orWhere($field, 'LIKE', '%' . $search . '%');
                }
            } else {
                $query->orWhere($fields, 'LIKE', '%' . $search . '%');
            }
        });

        return $query;
    }
}
