<?php

namespace App\Actions\Admin\GoogleIntegration;

use App\Routing\Admin;
use App\Routing\Api;
use Dev\PHPActions\Action;
use Dev\PHPActions\Response;

class ResponseGoogleIntegrationStore extends Action
{
    protected $validator = [
        'google_authentication'
    ];

    protected $secure = [
        'google_authentication'
    ];

    public function handle()
    {
        return Api::done([], Admin::route('admin.googleintegration.list'));
    }

    public function error(?Response $response = null)
    {
        return Api::error();
    }
}
