<?php

namespace App\Actions\Employee\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Routing\Web;
use App\Scopes\ArticleActiveScope;

class ArticleEdit extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        $article = Article::withoutGlobalScope(ArticleActiveScope::class)->where('id', $id)->with('analytics')->get()->first();

        if (empty($article)) {
            return Web::redirect('web.home.show');
        }

      

        return [
            'article' => $article
        ];
    }
}
