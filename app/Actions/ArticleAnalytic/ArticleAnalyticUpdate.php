<?php

namespace App\Actions\ArticleAnalytic;

use App\Models\ArticleAnalytic;
use Dev\PHPActions\Action;

class ArticleAnalyticUpdate extends Action
{
    public function handle()
    {
        $article_id = $this->getData('article_id');
        $increase_view_count = $this->getData('increase_view_count');
        $increase_phone_click_count = $this->getData('increase_phone_click_count');
        $increase_whatsapp_click_count = $this->getData('increase_whatsapp_click_count');

        if (empty($article_id)) {
            return;
        }

        $current_date = now()->toDateString();

        $article_analytic = ArticleAnalytic::where('article_id', $article_id)->where('date', $current_date)->first();

        if (empty($article_analytic)) {
            $id = 'aa_' . $article_id . '_' . $current_date;

            $article_analytic = ArticleAnalytic::create([
                'id' => $id,
                'article_id' => $article_id,
                'view_count' => $increase_view_count ? 1 : 0,
                'phone_click_count' => $increase_phone_click_count ? 1 : 0,
                'whatsapp_click_count' => $increase_whatsapp_click_count ? 1 : 0,
                'meta' => null,
                'date' => $current_date
            ]);
        } else {
            $phone_click_count = $article_analytic->phone_click_count ?? 0;
            $whatsapp_click_count = $article_analytic->whatsapp_click_count ?? 0;
            $view_count = $article_analytic->view_count ?? 0;

            $article_analytic->update([
                'view_count' => $increase_view_count ? ($view_count + 1) : $view_count,
                'phone_click_count' => $increase_phone_click_count ? ($phone_click_count + 1) : $phone_click_count,
                'whatsapp_click_count' => $increase_whatsapp_click_count ? ($whatsapp_click_count + 1) : $whatsapp_click_count,
                'meta' => null,
            ]);
        }

        return [
            'article_analytic' => $article_analytic
        ];
    }
}
