<?php

namespace App\Actions\Admin\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;

class ArticleList extends Action
{
    public function handle()
    {
        return [
            'title' => 'İlanlar',
            'articles' => Article::withoutGlobalScope(ArticleActiveScope::class)->with('analytics')->with('customer')->orderByRenewAt("asc")->list(100),
       ];
    }
}
