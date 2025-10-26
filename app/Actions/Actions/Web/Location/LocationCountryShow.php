<?php

namespace App\Actions\Web\Location;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Models\City;
use App\Models\Location;
use App\Routing\Web;
use App\Services\CanonicalService;
use App\Services\LocationService;

class LocationCountryShow extends Action
{
    public function handle()
    {
        $location = LocationService::getLocation();

        if (empty($location)) {
            $country = $this->getData('country');

            $location = Location::where('id', $country)->with(['country', 'city', 'district'])->limit(1)->get()->first();

            if (empty($location)) {

                $city = City::where('city', $country)->limit(1)->get()->first();

                if (empty($city)) {
                    return Web::redirect('web.home.show');
                }

                $location = Location::where('city_id', $city->id)->whereNull('district_id')->with(['country', 'city', 'district'])->limit(1)->get()->first();

                if (empty($location)) {
                    return Web::redirect('web.home.show');
                }
            }

            LocationService::setLocation($location);
        }

        return [
            'canonical' => CanonicalService::getCanonicalUrl(),
            'blogs' => Blog::whereLocation()->list(),
        ];
    }
}
