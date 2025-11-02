<?php

namespace App\Services;

use App\Actions\Location\LocationGetFromUrl;
use App\Actions\Url\UrlSyncWithDomain;
use App\Constants\DomainType;
use App\Models\Article;
use App\Models\Blog;
use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\Domain;
use App\Models\Location;
use App\Models\Story;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Dev\PHPActions\Action;

class LocationService
{
    private static Location | null $location = null;

    public static function setLocation(Location |null $location)
    {
        self::$location = $location;
    }

    public static function setup(): void
    {
        $domain = DomainService::getDomain();

        if (empty($domain)) {
            Action::build(UrlSyncWithDomain::class)->run();

            $domain = DomainService::getDomain();
        }

        if (empty($domain)) {
            Log::error('Domain is empty for: ' . url()->full());
            return;
        }

        $location = null;

        $location = Blog::current()?->location;

        if (!empty($location)) {
            self::apply($location);
            return;
        }

        $location = self::getFromParameters();

        if (empty($location) && $domain->type == DomainType::$primary) {
            $location = Action::build(LocationGetFromUrl::class)->run()->getData('location');
        }

        if (empty($location)) {
            $location = Story::current()?->location;
        }

        if (empty($location)) {
            $location = Article::current()?->location;
        }

        if (empty($location)) {

            $can = $domain->getCanonicalDomain();

            $location = $can?->location;
        }

        if (empty($location)) {
            $location = $domain?->location;
        }

        if (!empty($location) && $domain->type == DomainType::$primary) {
            $domain_location = $domain?->location;

            if (!empty($domain_location)) {
                if (!empty($domain_location->district_id)) {
                    if ($domain_location->district_id != $location->district_id) {
                        $location = $domain_location;
                    }
                }

                if (!empty($domain_location->city_id)) {
                    if ($domain_location->city_id != $location->city_id) {
                        $location = $domain_location;
                    }
                }
            }
        } else {
            if (empty($location)) {
                $location = $domain?->location;
            }
        }

        if (empty($location)) {
            $location = ProjectService::getProject()?->location;
        }

        self::apply($location);
    }

    private static function apply($location)
    {
        App::setLocale(LocalizationService::id($location));

        self::$location = $location;
    }

    private static function getFromParameters()
    {
        $country = request()->country;
        $city = request()->city;
        $district = request()->district;

        $districts = null;

        if (!empty($district)) {
            $districts = District::where('district', $district)->get();
        }

        if (!empty($city)) {
            $city = City::where('city', $city)->get()->first();
        }

        if (!empty($country)) {
            $country = Country::where('country', $country)->get()->first();
        }

        if (empty($districts) && empty($city) && empty($country)) {
            return null;
        }

        $location = Location::query();

        if (!empty($districts) && !$districts->isEmpty()) {
            $location->where(function ($query) use ($districts) {
                foreach ($districts as $district) {
                    $query->orWhere('district_id', $district->id);
                }
            });
        }

        if (!empty($city)) {
            $location->where('city_id', $city->id);
        }

        if (!empty($country)) {
            $location->where('country_id', $country->id);
        }

        return $location->get()->first();
    }

    public static function getCity(): City |null
    {
        return self::$location?->city;
    }

    public static function getDistrict(): District |null
    {
        return self::$location?->district;
    }

    public static function getCountry(): Country |null
    {
        return self::$location?->country;
    }

    public static function getCities()
    {
        return self::getCountry()?->cities;
    }

    public static function getDistricts()
    {
        return self::getCity()?->districts;
    }

    public static function getLocation(): Location | null
    {
        return self::$location;
    }

    public static function getUrlForDistrict(District $district, $url)
    {
        $currentDomain = DomainService::getDomain();

        $domain = Domain::query()->where('site_id', $currentDomain->site_id)->whereHas('location', function ($query) use ($district) {
            $query->where('locations.district_id', $district->id);
        })->get()->first();

        if (empty($domain)) {
            $domain = Domain::query()->whereHas('location', function ($query) use ($district) {
                $query->where('locations.district_id', $district->id);
            })->get()->first();
        }

        if (empty($domain)) {
            return $url;
        }

        return 'https://' . $domain->domain . '/';
    }

    public static function getUrlForCity(City $city, $url)
    {
        $currentDomain = DomainService::getDomain();

        $domain = Domain::query()->where('site_id', $currentDomain->site_id)->whereHas('location', function ($query) use ($city) {
            $query->where('locations.city_id', $city->id)->whereNull('locations.district_id');
        })->get()->first();

        if (empty($domain)) {
            $domain = Domain::query()->whereHas('location', function ($query) use ($city) {
                $query->where('locations.city_id', $city->id)->whereNull('locations.district_id');
            })->get()->first();
        }

        if (empty($domain)) {
            return $url;
        }

        return 'https://' . $domain->domain . '/';
    }
}
