<?php

namespace App\Actions\Amp\Article;

use App\Models\Article;
use App\Services\DomainService;
use App\Services\ProjectService;
use Dev\PHPActions\Action;

class ArticleFetch extends Action
{
    protected $secure = [
        'render_as_json'
    ];

    public function handle()
    {
        $render_as_json = $this->getData('render_as_json');

        $articles = Article::inRandomOrder()->get();

        $result = $articles->map(function ($article) {
            $article_data = $article->vue();
            $meta = $article_data['meta'] ?? [];
            if (! empty($meta)) {
                if (! empty($meta['renew_at'] ?? null)) {
                    unset($meta['renew_at']);
                }
            }
            $article_data['meta'] = $meta;
            $phone_number = $article->phone_number;
            if (! empty($phone_number)) {
                $phone_number = str_replace(' ', '', $phone_number);
            }
            $whatsapp_number = $article->whatsapp_number;
            if (! empty($whatsapp_number)) {
                $whatsapp_number = str_replace(' ', '', $whatsapp_number);
            }

            $article_number = $phone_number;
            if (empty($article_number)) {
                $article_number = $whatsapp_number;
            }

            return [
                'number' => $article_number,
                'linkphone' => $article->getFormattedPhoneNumberLink(),
                'linkwhatsapp' => $article->getFormattedWhatsappLink(),
                'article' => $article_data,
                'url' => $article->amp(),
                'image' => route('file.article.main.image', ['id' => $article->id, 'xversion' => $article->image_id, 'size' => '400x600']),
            ];
        });

        $result = $result->all();

        $fresult = [];
        $eresult = [];
        $dresult = [];
        $xarticles = array_values(array_filter($result, function ($n) {
            return $n['article']['title'] != "**";
        }));
        $attempts = 0;
        $pa = [];
        foreach ($result as $a) {
            $ac = $xarticles[array_rand($xarticles)];

            while (in_array($ac['article']['id'], $pa) && $attempts < 100) {
                $attempts++;
                $ac = $xarticles[array_rand($xarticles)];
            }

            $attempts = 0;
            array_push($pa, $ac['article']['id']);
            $v = $a;
            if ($v["article"]["title"] == "**") {
                $va = $v["article"];
                $va["title"] = $ac["article"]["title"];
                $va["info"] = $ac["article"]["info"];
                $v["article"] = $va;
                $v["image"] = null;

                $va["title"] = "İlan Ver";
                $va["info"] = "İlan Ver";

                array_push($eresult, $v);
            } else {
                array_push($fresult, $v);
            }
        }

        if (! empty($fresult) && ! empty($eresult)) {
            $dresult = array_merge($fresult, $eresult);
        } else {
            $dresult = $fresult;
        }

        if ($render_as_json) {
            return [
                'items' => $dresult
            ];
        }

        return response()->json([
            'items' => $dresult
        ], 200, [
            'Content-Type' => 'application/json'
        ]);
    }
}
