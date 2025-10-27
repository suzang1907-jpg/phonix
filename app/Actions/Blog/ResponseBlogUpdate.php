<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;
use App\Routing\Admin;
use App\Routing\Api;
use Dev\PHPActions\Response;

class ResponseBlogUpdate extends Action
{
    protected $secure = [
        'blog'
    ];

    protected $validator = [
        'blog' => 'required'
    ];

    public function handle()
    {
        return Api::done([], Admin::route('admin.blog.list'));
    }

    public function error(?Response $response = null)
    {
        return Api::error();
    }
}
