<?php

namespace App\Actions\GoogleAuthentication;

use Dev\PHPActions\Action;
use App\Models\GoogleAuthentication;

class GoogleAuthenticationList extends Action
{
    public function handle()
    {
        return [
            'google_authentications' => GoogleAuthentication::latest()->list(),
        ];
    }
}
