<?php

namespace App\Constants;

class DomainType
{
    public static string $primary = 'primary';
    public static string $offer_list = 'offer_list';
    public static string $offer_show = 'offer_show';

    public static function values()
    {
        return [
            self::$primary,
            self::$offer_list,
            self::$offer_show
        ];
    }
}
