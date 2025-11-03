<?php

namespace App\Actions\Admin\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;
use Carbon\Carbon;

class ResponseArticleRenew extends Action
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

        $article_meta = $article->meta;

        $renew_at = $article_meta['renew_at'] ?? null;

        if (empty($renew_at)) {
            return redirect()->back();
        }

        $date = $renew_at['date'] ?? null;

        if (empty($date)) {
            return redirect()->back();
        }

        $date = Carbon::parse($date);
        $date->addDays(7);
        $renew_at['date'] = $date->toIso8601String();
        $article_meta['renew_at'] = $renew_at;

        $article->update([
            'meta' => $article_meta,
        ]);

        return redirect()->back();
    }
}
