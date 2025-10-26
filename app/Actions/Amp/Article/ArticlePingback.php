<?php

namespace App\Actions\Amp\Article;

use App\Actions\ArticleAnalytic\ArticleAnalyticUpdate;
use App\Models\Article;
use App\Routing\Api;
use Dev\PHPActions\Action;

class ArticlePingback extends Action
{
    public function handle()
    {
        $article_id = $this->getData('article_id');

        if (empty($article_id)) {
            return Api::done();
        }

        $article = Article::where('id', $article_id)->get()->first();

        if (empty($article)) {
            return Api::done();
        }

        $article_analytic = Action::build(ArticleAnalyticUpdate::class)->data([
            'article_id' => $article->id,
            'increase_view_count' => true
        ])->run()->getData('article_analytic');

        $article_score = $article_analytic?->view_count ?? 0;

        $meta = $article['meta'] ?? [];

        $meta['view_count'] = $article_score;

        $article->update([
            'meta' => $meta
        ]);

        return Api::done();
    }
}
