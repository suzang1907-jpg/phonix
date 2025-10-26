<?php

namespace App\Actions\Amp\Location;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Models\City;
use App\Models\Location;
use App\Routing\Amp;
use App\Services\LocationService;

class LocationCountryShow extends Action
{
    public function handle()
    {
        $location = LocationService::getLocation();

        if (empty($location)) {
            $country = $this->getData('country');

            $location = Location::where('id', $country)->with(['country', 'city', 'district'])->get()->first();

            if (empty($location)) {
                $city = City::where('city', $country)->get()->first();

                if (empty($city)) {
                    return Amp::redirect('amp.home.show');
                }

                $location = Location::where('city_id', $city->id)->whereNull('district_id')->with(['country', 'city', 'district'])->get()->first();

                if (empty($location)) {
                    return Amp::redirect('amp.home.show');
                }
            }

            LocationService::setLocation($location);
        }

        return [
            'blogs' => Blog::whereLocation()->list(),
        ];
    }
}
