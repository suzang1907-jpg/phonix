<?php

namespace App\Actions\Amp\Location;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Routing\Amp;
use App\Services\LocationService;

class LocationDistrictShow extends Action
{
    public function handle()
    {
        $location = LocationService::getLocation();
        $country = $this->getData('country');
        $city_raw = $this->getData('city');
        $district_raw = $this->getData('district');

        if (empty($location)) {
            return Amp::redirect('amp.home.show');
        } else {
            if ($city_raw != $location->city?->city) {
                return Amp::redirect('amp.home.show');
            }

            if ($district_raw != $location->district?->district) {
                return Amp::redirect('amp.home.show');
            }
        }

        return [
            'blogs' => Blog::whereLocation()->list(),
        ];
    }
}
