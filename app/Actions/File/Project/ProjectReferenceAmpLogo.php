<?php

namespace App\Actions\File\Project;

use App\Models\Domain;
use App\Scopes\DomainProjectScope;
use App\Services\ProjectService;
use Dev\PHPActions\Action;

class ProjectReferenceAmpLogo extends Action
{
    public function handle()
    {
        $reference = $this->getData('reference');

        if (!empty($reference)) {
            $reference = strtolower($reference);
            $reference = trim($reference);

            $reference = Domain::withoutGlobalScope(DomainProjectScope::class)->where('id', $reference)->limit(1)->get()->first();

            $logo = $reference?->site?->project?->ampLogo;
        }

        if (empty($logo)) {
            $logo = ProjectService::getProject()?->ampLogo;
        }

        if (empty($logo)) {
            return response()->noContent();
        }

        $image = $logo->path();

        return response()->file($image, [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
