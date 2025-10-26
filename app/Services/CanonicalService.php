<?php

namespace App\Services;

use App\Models\Domain;
use App\Models\Location;
use App\Routing\Web;
use Illuminate\Support\Facades\Route;

class CanonicalService
{
    private static string | null $canonicalUrl = null;

    public static function getCanonicalUrl(Location | null $location = null): string
    {
        if (! empty(self::$canonicalUrl)) {
            return self::$canonicalUrl;
        }

        $location = $location ?? LocationService::getLocation();

        $currentDomain = DomainService::getDomain();
        $currentUrl = url()->full();

        $domainForLocation = Domain::getForLocation($location);

        if (! empty($domainForLocation)) {
            self::$canonicalUrl = self::GetUrlForLocation($location, $currentUrl, $currentDomain, $domainForLocation);

            return self::$canonicalUrl;
        }

        return $currentUrl;
    }

    public static function GetUrlForLocation(Location $location, $urlPath = null, Domain $currentDomain = null, Domain $domainForLocation = null)
    {
        $domainForLocation = $domainForLocation ?? Domain::getForLocation($location);
        $currentRouteName = Route::current()->getName();
        $urlPath = $urlPath ?? url()->full();
        $currentDomain = $currentDomain ?? DomainService::getDomain();

        if (! empty($domainForLocation)) {
            if ($currentRouteName == 'web.location.district.show' && ! empty($domainForLocation->location?->district_id)) {
                return 'https://' . $domainForLocation->domain . '/';
            }

            if ($currentRouteName == 'web.location.city.show') {
                return 'https://' . $domainForLocation->domain . '/';
            }

            return str_replace($currentDomain->domain, $domainForLocation->domain, $urlPath);
        }

        return $urlPath;
    }
}
