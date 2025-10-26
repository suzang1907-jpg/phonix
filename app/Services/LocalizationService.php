<?php

namespace App\Services;

class LocalizationService
{
    public static function id($location)
    {
        if (empty($location)) {
            return 'tr';
        } else {
            if (empty($location->country)) {
                return 'tr';
            } else {
                if ($location->country->country == 'turkey') {
                    return 'tr';
                } else if ($location->country->country == 'germany') {
                    return 'de';
                } else {
                    return 'en';
                }
            }
        }

        return 'tr';
    }

    public static function code($location)
    {
        if (empty($location)) {
            return 'tr_TR';
        } else {
            if (empty($location->country)) {
                return 'tr_TR';
            } else {
                if ($location->country->country == 'turkey') {
                    return 'tr_TR';
                } else if ($location->country->country == 'germany') {
                    return 'de_DE';
                } else {
                    return 'en_EN';
                }
            }
        }

        return 'tr_TR';
    }

    public static function languageMeta()
    {
        $location = LocationService::getLocation();

        if (empty($location)) {
            return 'tr, turkish, türkçe';
        } else {
            if (empty($location->country)) {
                return 'tr, turkish, türkçe';
            } else {
                if ($location->country->country == 'turkey') {
                    return 'tr, turkish, türkçe';
                } else if ($location->country->country == 'germany') {
                    return 'de, german, deutsch';
                } else {
                    return 'en, english, english';
                }
            }
        }

        return 'tr, turkish, türkçe';
    }
}
