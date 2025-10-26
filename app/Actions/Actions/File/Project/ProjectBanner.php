<?php

namespace App\Actions\File\Project;

use App\Services\ProjectService;
use Dev\PHPActions\Action;

class ProjectBanner extends Action
{
    public function handle()
    {
        $logo = ProjectService::getProject()?->supportBanner;

        if (empty($logo)) {
            return response()->noContent();
        }

        $image = $logo->path();

if (! file_exists($image)) {
return response()->noContent();
}

        return response()->file($image, [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
