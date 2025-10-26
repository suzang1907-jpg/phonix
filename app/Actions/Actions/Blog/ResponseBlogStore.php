<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;
use App\Routing\Admin;
use App\Routing\Api;
use Dev\PHPActions\Response;

class ResponseBlogStore extends Action
{
    protected $secure = [
        'blog'
    ];

    protected $validator = [
        'blog' => 'required'
    ];

    public function handle()
    {
        return Api::done(null, Admin::route('admin.blog.list'));
    }

    public function error(Response $response)
    {
        return Api::error();
    }
}
