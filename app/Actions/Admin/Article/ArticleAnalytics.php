<?php

namespace App\Actions\Admin\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;

class ArticleAnalytics extends Action
{
    public function handle()
    {
        return [
            'title' => 'Analytics',
            'articles' => Article::withoutGlobalScope(ArticleActiveScope::class)->with('analytics')->latest()->list(),
        ];
    }
}
