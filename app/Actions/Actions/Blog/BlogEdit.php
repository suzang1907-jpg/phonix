<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;
use App\Models\Blog;

class BlogEdit extends Action
{
    public function handle()
    {
        return [
            'blog' => Blog::where('id', $this->getData('id'))->first(),
        ];
    }
}
