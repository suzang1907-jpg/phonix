<?php

namespace App\Actions\Amp\Location;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Models\City;
use App\Models\District;
use App\Models\Location;
use App\Routing\Amp;
use App\Services\LocationService;

class LocationCityShow extends Action
{
    public function handle()
    {
        $location = LocationService::getLocation();
        $country = $this->getData('country');
        $city_raw = $this->getData('city');

        if (empty($location)) {
            if (empty($country)) {
                return Amp::redirect('amp.home.show');
            }

            if (empty($city_raw)) {
                return Amp::redirect('amp.home.show');
            }

            $city = City::where('city', $country)->get()->first();

            if (empty($city)) {
                return Amp::redirect('amp.home.show');
            }

            $district = District::where('district', $city_raw)->where('city_id', $city->id)->get()->first();

            if (empty($district)) {
                return Amp::redirect('amp.home.show');
            }

            $location = Location::where('city_id', $district->city_id)->where('district_id', $district->id)->with(['country', 'city', 'district'])->get()->first();

            if (empty($location)) {
                return Amp::redirect('amp.home.show');
            }

            LocationService::setLocation($location);
        } else {
            if ($city_raw != $location->city?->city) {
                return Amp::redirect('amp.home.show');
            }
        }

        return [
            'blogs' => Blog::whereLocation()->list(),
        ];
    }
}
