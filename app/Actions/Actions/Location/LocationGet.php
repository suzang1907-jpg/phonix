<?php

namespace App\Actions\Location;

use Dev\PHPActions\Action;
use App\Models\Location;

class LocationGet extends Action
{
    protected $secure = [
        'country_id',
        'city_id',
        'district_id',
        'id'
    ];

    public function handle()
    {
        $id = $this->getData('id', '');
        $country_id = $this->getData('country_id', '');
        $city_id = $this->getData('city_id', '');
        $district_id = $this->getData('district_id', '');

        if (empty($id)) {
            $id = $country_id . '_' . $city_id . '_' . $district_id;
        }

        $location = Location::where('id', $id)->with('country')->with('city')->with('district')->get()->first();

        if (empty($location)) {
            return null;
        }

        return [
            'location' => $location
        ];
    }
}
