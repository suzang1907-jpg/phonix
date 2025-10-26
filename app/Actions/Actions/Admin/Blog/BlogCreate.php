<?php

namespace App\Actions\Admin\Blog;

use Dev\PHPActions\Action;

class BlogCreate extends Action
{
    public function handle()
    {
        return [
            'title' => "Yeni Gönderi"
        ];
    }
}
