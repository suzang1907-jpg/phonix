<?php

namespace App\Actions\File\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;
use App\Services\ProjectService;

class ArticleWaterMark extends Action
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

        $water_mark = ProjectService::getProject()->articleWatermark;

        if (empty($water_mark)) {
            return response()->noContent();
        }

        return response()->file($water_mark->path(), [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
