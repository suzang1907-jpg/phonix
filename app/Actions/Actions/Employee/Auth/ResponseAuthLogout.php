<?php

namespace App\Actions\Employee\Auth;

use App\Routing\Customer;
use Dev\PHPActions\Action;
use Exception;

class ResponseAuthLogout extends Action
{
    public function handle()
    {
        try {
            auth('employee')->user()->employeeTokens()->delete();
        } catch (Exception $e) {
        }

        $customer = auth('employee')->user();

        auth('employee')->logout();

        return Employee::redirect('employee.auth.login', ['ei' => $customer->id]);
    }
}
