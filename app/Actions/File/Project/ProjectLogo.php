<?php

namespace App\Actions\File\Project;

use App\Services\ImageService;
use App\Services\ProjectService;
use Dev\PHPActions\Action;
use Illuminate\Support\Facades\Log;

class ProjectLogo extends Action
{
    public function handle()
    {
        $size = $this->getData('size');

        $sizes = [
            12,
            48,
            240,
            350,
            400
        ];

        $logo = ProjectService::getProject()?->logo;

        if (empty($logo)) {
            return response()->noContent();
        }

        $optimized_image = ImageService::getOptimizedImage($logo, $size, $sizes);

        if (!empty($optimized_image)) {
            $logo = $optimized_image;
        }

        $image = $logo->path();

        if (empty($image)) {
            return response()->noContent();
        }

        if (! file_exists($image)) {
            return response()->noContent();
        }

        return response()->file($image, [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
