<?php

namespace App\Actions\GoogleAuthentication;

use Dev\PHPActions\Action;
use App\Models\GoogleAuthentication;
use App\Models\GoogleIntegration;
use App\Services\ProjectService;

class GoogleAuthenticationStore extends Action
{
    public function handle()
    {
        $google_authentication = GoogleAuthentication::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->email,
            'google_integration_id' => ProjectService::getProject()->googleIntegrations->first()->id
        ]);

        return [
            'google_authentication' => $google_authentication
        ];
    }
}
