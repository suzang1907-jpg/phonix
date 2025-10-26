<?php

namespace App\Actions\Domain;

use Dev\PHPActions\Action;
use App\Routing\Admin;
use App\Routing\Api;

class ResponseDomainStore extends Action
{
    protected $secure = [
        'domain'
    ];

    public function handle()
    {
        $domain = $this->getData('domain');

        if (empty($domain)) {
            return Api::error();
        }

        return Api::done([], Admin::route('admin.domain.list'));
    }
}
