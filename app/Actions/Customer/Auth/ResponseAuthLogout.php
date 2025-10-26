<?php

namespace App\Actions\Customer\Auth;

use App\Routing\Customer;
use Dev\PHPActions\Action;
use Exception;

class ResponseAuthLogout extends Action
{
    public function handle()
    {
        try {
            auth('customer')->user()->customerTokens()->delete();
        } catch (Exception $e) {
        }

        $customer = auth('customer')->user();

        auth('customer')->logout();

        return Customer::redirect('customer.auth.login', ['ci' => $customer->id]);
    }
}
