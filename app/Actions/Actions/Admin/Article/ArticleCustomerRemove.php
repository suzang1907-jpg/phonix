<?php

namespace App\Actions\Admin\Article;

use App\Actions\Cache\CacheClear;
use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;

class ArticleCustomerRemove extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        $article = Article::where('id', $id)->withoutGlobalScope(ArticleActiveScope::class)->first();

        if (empty($article)) {
            return null;
        }

        $article->update([
            'customer_id' => null,
            'customer_password' => null,
            'customer_username' => null,
        ]);

        Action::build(CacheClear::class)->run();

        return [
            'article' => $article,
        ];
    }
}
