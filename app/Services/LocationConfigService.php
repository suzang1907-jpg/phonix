<?php

namespace App\Services;

class LocationConfigService
{
    public static function get(string | null $key = null, string | null $country = null)
    {
        $country = $country ?? LocationService::getCountry()->country;

        if (empty($key)) {
            return config('location_' . $country);
        }

        return config('location_' . $country . '.' . $key);
    }

    public static function map(string | null $key = null, string | null $country = null)
    {
        $country = $country ?? LocationService::getCountry()->country;

        if (empty($key)) {
            return config('locationmap_' . $country);
        }

        return config('locationmap_' . $country . '.' . $key);
    }
}
