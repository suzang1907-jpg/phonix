<?php

namespace App\Actions\Admin\Article;

use Dev\PHPActions\Action;
use App\Routing\Admin;
use App\Routing\Api;

class ResponseArticleUpdate extends Action
{
    protected $secure = [
        'article'
    ];

    public function handle()
    {
        $article = $this->getData('article');

        if (empty($article)) {
            return Api::error();
        }

        return Api::done([
            'article_id' => $article->id
        ], Admin::route('admin.article.list'));
    }
}
