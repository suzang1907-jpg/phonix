<?php

namespace App\Actions\Auth;

use Dev\PHPActions\Action;

class AuthLogin extends Action
{

    public function handle()
    {
        return [
            'title' => 'Authentication'
        ];
    }
}
