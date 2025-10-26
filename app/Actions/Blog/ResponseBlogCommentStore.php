<?php

namespace App\Actions\Blog;

use Dev\PHPActions\Action;
use App\Routing\Api;
use App\Routing\Web;

class ResponseBlogCommentStore extends Action
{
    public function handle()
    {
        return Api::done([
            'reload' => true
        ]);
    }
}
