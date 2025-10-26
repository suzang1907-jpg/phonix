<?php

namespace App\Services;

use App\Models\CustomerToken;

class CustomerTokenService
{
    private static ?CustomerToken $customerToken = null;

    public static function getCustomerToken()
    {
        if (empty(self::$customerToken)) {
            return null;
        }

        return self::$customerToken;
    }

    public static function setCustomerToken($token)
    {
        self::$customerToken = $token;
    }
}
