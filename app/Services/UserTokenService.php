<?php

namespace App\Services;

use App\Models\UserToken;

class UserTokenService
{
    private static ?UserToken $userToken = null;

    public static function getUserToken()
    {
        if (empty(self::$userToken)) {
            return null;
        }

        return self::$userToken;
    }

    public static function setUserToken($token)
    {
        self::$userToken = $token;
    }
}
