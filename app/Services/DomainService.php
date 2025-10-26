<?php

namespace App\Services;

use App\Models\Domain;

class DomainService
{
    private static Domain | null $current = null;

    public static function getDomain(): Domain | null
    {
        return self::$current;
    }

    public static function setDomain(Domain | null $domain)
    {
        self::$current = $domain;
    }
}
