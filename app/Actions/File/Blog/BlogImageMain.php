<?php

namespace App\Actions\File\Blog;

use App\Models\Blog;
use App\Services\ImageService;
use App\Services\ProjectService;
use Dev\PHPActions\Action;
use Dev\PHPActions\Response;

class BlogImageMain extends Action
{
    public function handle()
    {
        $id = $this->getData('id');
        $size = $this->getData('size');

        if (empty($id)) {
            return;
        }

        $image = ProjectService::getProject()?->logo;

        if (empty($image)) {
            return response()->noContent();
        }

        $sizes = [
            240,
            350,
            400
        ];

        $optimized_image = ImageService::getOptimizedImage($image, $size, $sizes);

        if (!empty($optimized_image)) {
            $image = $optimized_image;
        }

        $image = $image->path();

        if (empty($image)) {
            return;
        }

if (! file_exists($image)) {
return response()->noContent();
}

        return response()->file($image, [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }

    public function error(Response $response)
    {
        $project = ProjectService::getProject();

        $image = $project->logo->path();

        if (empty($image)) {
            return response()->noContent();
        }

        return response()->file($image, [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
