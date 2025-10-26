<?php

namespace App\Actions\Admin\Article;

use App\Actions\Cache\CacheClear;
use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;
use Illuminate\Support\Str;

class ArticleCustomerRefresh extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        $article = Article::where('id', $id)->withoutGlobalScope(ArticleActiveScope::class)->get()->first();

        if (empty($article)) {
            return;
        }

        $customer_id = Str::random();

        if (!empty(Article::withoutGlobalScope(ArticleActiveScope::class)->where('customer_id', $customer_id)->get()->first())) {
            return;
        }

        $article->update([
            'customer_id' => $customer_id,
            'customer_password' => Str::random(8),
            'customer_username' => Str::random(8),
        ]);

        Action::build(CacheClear::class)->run();

        return [
            'article' => $article,
        ];
    }
}
