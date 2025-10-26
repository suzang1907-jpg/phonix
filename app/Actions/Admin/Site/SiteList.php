<?php

namespace App\Actions\Admin\Site;

use Dev\PHPActions\Action;
use App\Models\Site;
use App\Services\PaginateRelation;
use App\Services\ProjectService;

class SiteList extends Action
{
    public function handle()
    {
        return [
            'sites' =>  PaginateRelation::paginate(ProjectService::getProject()->sites()->latest()),
        ];
    }
}
