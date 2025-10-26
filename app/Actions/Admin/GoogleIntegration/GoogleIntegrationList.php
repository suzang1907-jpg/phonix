<?php

namespace App\Actions\Admin\GoogleIntegration;

use App\Services\PaginateRelation;
use App\Services\ProjectService;
use Dev\PHPActions\Action;

class GoogleIntegrationList extends Action
{
    public function handle()
    {
        $google_integrations = PaginateRelation::paginate(ProjectService::getProject()->googleIntegrations());

        return [
            'google_integrations' => $google_integrations
        ];
    }
}
