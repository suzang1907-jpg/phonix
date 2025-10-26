<?php

namespace App\Actions\Location;

use Dev\PHPActions\Action;
use App\Models\Location;

class LocationStore extends Action
{
    protected $secure = [
        'counrty_id',
        'city_id',
        'district_id'
    ];

    public function handle()
    {
        $country_id = $this->getData('country_id');
        $city_id = $this->getData('city_id');
        $district_id = $this->getData('district_id');

        $id = 'l_' . $country_id;

        if (!empty($district_id)) {
            $id = 'l_' . $district_id;
        } elseif (!empty($city_id)) {
            $id = 'l_' . $city_id;
        }

        $location = Location::where('id', $id)->get()->first();

        if (!empty($location)) {
            return [
                'location' => $location
            ];
        }

        $location = Location::create([
            'id' => $id,
            'country_id' => $country_id,
            'city_id' => $city_id,
            'district_id' => $district_id
        ]);

        return [
            'location' => $location
        ];
    }
}
