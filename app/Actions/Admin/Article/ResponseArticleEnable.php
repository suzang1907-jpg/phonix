<?php

namespace App\Actions\Admin\Article;

use App\Actions\Cache\CacheClear;
use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;

class ResponseArticleEnable extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return redirect()->back();
        }

        $article = Article::where('id', $id)->withoutGlobalScope(ArticleActiveScope::class)->first();

        if (empty($article)) {
            return redirect()->back();
        }

        $article->update([
            'hidden_at' => null,
        ]);

        Action::build(CacheClear::class)->run();

        return redirect()->back();
    }
}
