<?php

namespace App\Actions\Domain;

use Dev\PHPActions\Action;
use App\Routing\Admin;
use App\Routing\Api;

class ResponseDomainUpdate extends Action
{
    public function handle()
    {
        return Api::done([], Admin::route('admin.domain.list'));
    }
}
