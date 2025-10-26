<?php

namespace App\Actions\File\Article;

use Dev\PHPActions\Action;
use App\Models\Article;

class ArticleMainImage extends Action
{
    protected $validator = [
        'id' => 'required'
    ];

    public function handle()
    {
        $id = $this->getData('id');

        $article = null;

        $article = Article::where('id', $id)->limit(1)->first();

        if (empty($article)) {
            return response()->noContent();
        }

if ($article->title == "**") {
//$ran_article = Article::where("title", "!=", "**")->inRandomOrder()->first();
//$article->image = $ran_article->image;
}

        $image = $article->image;

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
