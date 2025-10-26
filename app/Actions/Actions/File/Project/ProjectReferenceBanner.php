<?php

namespace App\Actions\File\Project;

use App\Models\Domain;
use App\Scopes\DomainProjectScope;
use App\Services\ProjectService;
use Dev\PHPActions\Action;

class ProjectReferenceBanner extends Action
{
    public function handle()
    {
        $reference = $this->getData('reference');

        if (!empty($reference)) {
            $reference = strtolower($reference);
            $reference = trim($reference);

            $reference = Domain::withoutGlobalScope(DomainProjectScope::class)->where('id', $reference)->limit(1)->get()->first();

            $logo = $reference?->site?->project?->supportBanner;
        }

        if (empty($logo)) {
            $logo = ProjectService::getProject()?->supportBanner;
        }

        if (empty($logo)) {
            return response()->noContent();
        }

        $image = $logo->path();

if (! file_exists($image))
{
return response()->noContent();
}
        return response()->file($image, [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
