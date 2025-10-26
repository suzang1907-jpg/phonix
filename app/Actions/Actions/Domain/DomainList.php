<?php

namespace App\Actions\Domain;

use Dev\PHPActions\Action;
use App\Services\PaginateRelation;
use App\Services\ProjectService;

class DomainList extends Action
{
    public function handle()
    {
        return [
            'domains' => PaginateRelation::paginate(ProjectService::getProject()->domains()->latest()),
        ];
    }
}
