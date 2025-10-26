<?php

namespace App\Actions\Auth;

use Dev\PHPActions\Action;
use App\Routing\Web;
use Exception;

class ResponseAuthLogout extends Action
{
    public function handle()
    {
        try {
            auth()->user()->userTokens()->delete();
        } catch (Exception $e) {
        }

        auth()->logout();

        return Web::redirect('web.auth.login');
    }
}
