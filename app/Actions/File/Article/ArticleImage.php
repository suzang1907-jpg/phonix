<?php

namespace App\Actions\File\Article;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Scopes\ArticleActiveScope;

class ArticleImage extends Action
{
    protected $validator = [
        'id' => 'required',
        'image_id' => 'required'
    ];

    public function handle()
    {
        $id = $this->getData('id');
        $image_id = $this->getData('image_id');

        $article = null;

        if (auth()->check()) {
            $article = Article::withoutGlobalScope(ArticleActiveScope::class)->where('id', $id)->first();
        } else {
            $article = Article::where('id', $id)->first();
        }

        if (empty($article)) {
            return response()->noContent();
        }

        $image = $article->images()->where('image_id', $image_id)->first();

        if (empty($image)) {
            return response()->noContent();
        }

        $path = $image->path();

        if (empty($path)) {
            return response()->noContent();
        }

        if (! file_exists($path)) {
            return response()->noContent();
        }

        return response()->file($path, [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
