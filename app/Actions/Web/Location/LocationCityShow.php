<?php

namespace App\Actions\Web\Location;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Models\City;
use App\Models\District;
use App\Models\Domain;
use App\Models\Location;
use App\Models\Url;
use App\Routing\Web;
use App\Services\CanonicalService;
use App\Services\DomainService;
use App\Services\LocationService;
use App\Services\UrlService;

class LocationCityShow extends Action
{
    public function handle()
    {
        $location = LocationService::getLocation();
        $country = $this->getData('country');
        $city_raw = $this->getData('city');

        if (empty($location)) {
            if (empty($country)) {
                return Web::redirect('web.home.show');
            }

            if (empty($city_raw)) {
                return Web::redirect('web.home.show');
            }

            $city = City::where('city', $country)->limit(1)->get()->first();

            if (empty($city)) {
                return Web::redirect('web.home.show');
            }

            $district = District::where('district', $city_raw)->where('city_id', $city->id)->limit(1)->get()->first();

            if (empty($district)) {
                return Web::redirect('web.home.show');
            }

            $location = Location::where('city_id', $district->city_id)->where('district_id', $district->id)->with(['country', 'city', 'district'])->limit(1)->get()->first();

            if (empty($location)) {
                return Web::redirect('web.home.show');
            }

            LocationService::setLocation($location);
        } else {
            if ($city_raw != $location->city?->city) {
                return Web::redirect('web.home.show');
            }
        }

        $url = UrlService::getUrl();

        if (empty($url)) {
            $domainForLocation = Domain::getForLocation($location, true);
            $url = Url::createForUrl($domainForLocation);

            if (! empty($url)) {
                if (! empty($url->target_path)) {
                    return redirect()->secure($url->target_path);
                }
            }
        }

        return [
            'canonical' => CanonicalService::getCanonicalUrl(),
            'blogs' => Blog::whereLocation()->list(),
        ];
    }
}
