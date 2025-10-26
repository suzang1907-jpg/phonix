<?php

namespace App\Actions\Tag;

use Dev\PHPActions\Action;
use App\Routing\Admin;
use App\Routing\Api;

class ResponseTagUpdate extends Action
{
    protected $secure = [
        'tag'
    ];

    public function handle()
    {
        $tag = $this->getData('tag');

        if (empty($tag)) {
            return Api::error();
        }

        return Api::done([
            'tag' => $tag->vue(),
        ], Admin::route('admin.tag.list'));
    }
}
