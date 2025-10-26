<?php

namespace App\Actions\Admin\Blog;

use Dev\PHPActions\Action;
use App\Models\Blog;

class BlogList extends Action
{
    public function handle()
    {
        return [
            'blogs' => Blog::latest()->with('blogContent')->list(),
            'title' => "Gönderiler"
        ];
    }
}
