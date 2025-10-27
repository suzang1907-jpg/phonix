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
            return [
                'article' => $article_data,
                'url' => $article->amp(),
                'image' => route('file.article.main.image', ['id' => $article->id, 'xversion' => $article->image_id]),
                'articlestyle' => $this->articleStyle(),
                'articlestyleroot' => $this->articleStyleRoot($article),
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

    public function appStyle()
    {
        $domain = DomainService::getDomain();
        $canonicalDomain = $domain->getCanonicalDomain();

        $current_project_meta_data = ProjectService::getProject()->getMetaData();
        $canonical_project_meta_data = $canonicalDomain?->site?->project->getMetaData();

        $app_name = $canonical_project_meta_data['app_name'] ?? $current_project_meta_data['app_name'] ?? [];

        $amp_data = $canonical_project_meta_data['amp'] ?? $current_project_meta_data['amp'] ?? [];

        return [
            'app_name' => $app_name,
            'amp' => [
                'primary_color' => $amp_data['primary_color'] ?? null,
                'secondary_color' => $amp_data['secondary_color'] ?? null,
                'grid_cols' => $amp_data['grid_cols'] ?? 2,
                'grid_gap' => $amp_data['grid_gap'] ?? 0.5,
            ]
        ];
    }

    public function articleStyle()
    {
        $primary_color = $this->appStyle()['amp']['primary_color'];
        $secondary_color = $this->appStyle()['amp']['secondary_color'];

        if (!empty($primary_color) && !empty($secondary_color)) {
            $style = "background-image: linear-gradient(to top right, var(--tw-gradient-stops));";
            $style .= "--tw-gradient-from: " . $primary_color . " var(--tw-gradient-from-position);";
            $style .= "--tw-gradient-to: " . $secondary_color . " var(--tw-gradient-to-position);";
            $style .= "--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);";
            return $style;
        }

        if (! empty($primary_color)) {
            $style = "";
            $style .= "background-color: " . $primary_color . ";";
            return $style;
        }

        if (! empty($secondary_color)) {
            $style = "";
            $style .= "background-color: " . $secondary_color . ";";
            return $style;
        }

        $style = "";
        $style .= "background-color: #111111;";
        return $style;
    }

    public function articleStyleRoot($article)
    {

        if (empty($article->meta)) {
            return '';
        }

        if (empty($article->meta['highlight'] ?? false)) {
            return '';
        }

        $primary_color = $this->appStyle()['amp']['primary_color'];
        $secondary_color = $this->appStyle()['amp']['secondary_color'];

        if (!empty($primary_color) && !empty($secondary_color)) {
            $style = "background-image: linear-gradient(to top right, var(--tw-gradient-stops));";
            $style .= "--tw-gradient-from: " . $primary_color . " var(--tw-gradient-from-position);";
            $style .= "--tw-gradient-to: " . $secondary_color . " var(--tw-gradient-to-position);";
            $style .= "--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);";
            $style .= "padding: 0.1rem;";
            $style .= "background-image: linear-gradient(to bottom, var(--tw-gradient-stops));";
            return $style;
        }

        if (! empty($primary_color)) {
            $style = "";
            $style .= "background-color: " . $primary_color . ";";
            $style .= "padding: 0.25rem;";
            return $style;
        }

        if (! empty($secondary_color)) {
            $style = "";
            $style .= "background-color: " . $secondary_color . ";";
            $style .= "padding: 0.25rem;";
            return $style;
        }

        $style = "";
        $style .= "background-color: #111111;";
        $style .= "padding: 0.25rem;";
        return $style;
    }

    public function ampGridStyle()
    {
        $style = "";

        $grid_cols = $this->appStyle()['amp']['grid_cols'] ?? 2;
        $grid_gap = $this->appStyle()['amp']['grid_gap'] ?? 0.5;

        $style .= "grid-template-columns: repeat(" . $grid_cols . ", minmax(0, 1fr));";
        $style .= "gap: " . $grid_gap . "rem ";
        return $style;
    }
}
