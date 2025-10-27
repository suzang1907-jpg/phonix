<?php

namespace App\Actions\Story;

use Dev\PHPActions\Action;
use App\Routing\Admin;
use App\Routing\Api;
use Dev\PHPActions\Response;

class ResponseStoryUpdate extends Action
{
    protected $secure = [
        'story'
    ];

    protected $validator = [
        'story' => 'required'
    ];

    public function handle()
    {
        return Api::done([], Admin::route('admin.story.list'));
    }

    public function error(?Response $response = null)
    {
        return Api::error();
    }
}
