<?php

namespace App\Actions\Employee\Auth;

use Dev\PHPActions\Action;
use App\Routing\Api;
use App\Routing\Employee;

class ResponseAuthLoginPost extends Action
{
    public function handle()
    {
        if (auth('employee')->check()) {
            return Api::done(
                [],
                Employee::route('employee.dashboard.show')
            );
        }

        return Api::error();
    }
}
