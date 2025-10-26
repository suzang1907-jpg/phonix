<?php

namespace App\Services;

use App\Models\Blog;

class BlogService extends Page
{
    public static function query()
    {
        $query = Blog::query();

        return $query;
    }
}
