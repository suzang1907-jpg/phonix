<?php

namespace App\Actions\File\Article;

use App\Actions\File\Project\ProjectLogo;
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

        $image = $article->image;

        if (empty($image)) {
            return Action::build(ProjectLogo::class)->data([
                'size' => 400,
            ])->run();
        }

        $path = $image->path();

        if (empty($path)) {
            return Action::build(ProjectLogo::class)->data([
                'size' => 400,
            ])->run();
        }

        if (! file_exists($path)) {
            return Action::build(ProjectLogo::class)->data([
                'size' => 400,
            ])->run();
        }

        return response()->file($path, [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
