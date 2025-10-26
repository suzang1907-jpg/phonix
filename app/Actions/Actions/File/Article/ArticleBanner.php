<?php

namespace App\Actions\File\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;
use App\Services\ProjectService;

class ArticleBanner extends Action
{
    protected $validator = [
        'id' => 'required'
    ];

    public function handle()
    {
return response()->noContent();
        $id = $this->getData('id');

        $article = null;

        if (auth()->check()) {
            $article = Article::withoutGlobalScope(ArticleActiveScope::class)->where('id', $id)->first();
        } else {
            $article = Article::where('id', $id)->first();
        }

        if (empty($article)) {
            return response()->noContent();
        }

        $banner = ProjectService::getProject()->articleBanner;

        if (empty($banner)) {
            return response()->noContent();
        }

        return response()->file($banner->path(), [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
