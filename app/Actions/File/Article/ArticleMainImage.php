<?php

namespace App\Actions\File\Article;

use App\Actions\File\Project\ProjectLogo;
use Dev\PHPActions\Action;
use App\Models\Article;
use App\Services\ImageService;

class ArticleMainImage extends Action
{
    protected $validator = [
        'id' => 'required'
    ];

    public function handle()
    {
        $id = $this->getData('id');
        $size = $this->getData('size');

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

        $sizes = [
            '192x192'
        ];

        $optimized_image = ImageService::getOptimizedImageWH($image, $size, $sizes);

        if (!empty($optimized_image)) {
            $image = $optimized_image;

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
        }

        return response()->file($path, [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
