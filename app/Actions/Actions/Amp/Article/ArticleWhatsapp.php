<?php

namespace App\Actions\Amp\Article;

use App\Actions\ArticleAnalytic\ArticleAnalyticUpdate;
use App\Models\Article;
use App\Routing\Amp;
use Dev\PHPActions\Action;

class ArticleWhatsapp extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return Amp::redirect('amp.home.show');
        }

        $article = Article::where('id', $id)->get()->first();

        if (empty($article)) {
            return Amp::redirect('amp.home.show');
        }

        $url = $article->getFormattedWhatsappLink();

        Action::build(ArticleAnalyticUpdate::class)->data([
            'article_id' => $article->id,
            'increase_whatsapp_click_count' => true
        ])->run();

        return redirect($url);
    }
}
