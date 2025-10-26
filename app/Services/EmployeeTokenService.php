<?php

namespace App\Services;

use App\Models\EmployeeToken;

class EmployeeTokenService
{
    private static ?EmployeeToken $employeeToken = null;

    public static function getEmployeeToken()
    {
        if (empty(self::$employeeToken)) {
            return null;
        }

        return self::$employeeToken;
    }

    public static function setEmployeeToken($token)
    {
        self::$employeeToken = $token;
    }
}
