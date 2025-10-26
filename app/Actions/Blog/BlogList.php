<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Routing\Web;

class BlogList extends Action
{
    public function handle()
    {
        return [
            'canonical' => Web::route('web.blog.list'),
            'blogs' => Blog::whereLocation()->latest()->list(),
        ];
    }
}
