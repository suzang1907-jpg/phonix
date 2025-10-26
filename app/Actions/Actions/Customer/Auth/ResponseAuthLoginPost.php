<?php

namespace App\Actions\Customer\Auth;

use Dev\PHPActions\Action;
use App\Routing\Api;
use App\Routing\Customer;

class ResponseAuthLoginPost extends Action
{
    public function handle()
    {
        if (auth('customer')->check()) {
            return Api::done(
                [],
                Customer::route('customer.dashboard.show')
            );
        }

        return Api::error();
    }
}
