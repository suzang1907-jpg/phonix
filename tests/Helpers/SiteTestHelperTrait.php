<?php

namespace Tests\Helpers;

use App\Actions\Site\SiteStore;
use App\Models\Project;
use App\Models\Site;
use Dev\PHPActions\Action;

trait SiteTestHelperTrait
{
    public function siteStore(Project $project, array $data = []): Site
    {
        $site = Action::build(SiteStore::class)->data(array_merge([
            'project_id' => $project->id,
            'origin' => config('app.domain')
        ], $data))->run()->getData('site');

        return $site;
    }
}
