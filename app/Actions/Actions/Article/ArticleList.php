<?php

namespace App\Actions\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;

class ArticleList extends Action
{
    public function handle()
    {
        $articles = Article::withoutGlobalScope(ArticleActiveScope::class)->get();

        return [
            'articles' => $articles
        ];
    }
}
