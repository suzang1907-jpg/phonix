<?php

namespace App\Services;

use App\Models\Site;

class SiteService
{
    private static Site | null $current = null;

    public static function getSite(): Site | null
    {
        return self::$current;
    }

    public static function setSite(Site | null $site)
    {
        self::$current = $site;
    }
}
