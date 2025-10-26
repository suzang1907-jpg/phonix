<?php

namespace App\Actions\Location;

use App\Models\City;
use App\Models\District;
use App\Services\LocationConfigService;
use Dev\PHPActions\Action;
use Exception;

class LocationGetFromUrl extends Action
{
    protected $secure = [
        'country_id',
        'city_id',
        'district_id',
        'origin'
    ];

    public function handle()
    {
        $origin = $this->getData('origin');

        try {

            if (substr_count($origin, '.') == 2) {
                $a = explode('.', $origin)[0];

                if (str_contains($a, '-')) {
                    $a = explode('-', $a)[0];
                }

                $city = $a;

                if (array_key_exists($city, LocationConfigService::get(null, 'turkey'))) {
                    $cityModel = City::where('city', $city)->first();

                    return [
                        'location' => Action::build(LocationGet::class)->data([
                            'country_id' => $cityModel->country_id,
                            'city_id' => $cityModel->id,
                        ])->run()->getData('location')
                    ];
                } else {
                    $cities = array_keys(LocationConfigService::get(null, 'turkey'));

                    foreach ($cities as $cityValue) {
                        $districts = LocationConfigService::get($cityValue, 'turkey');
                        foreach ($districts as $district) {
                            if ($a == $district) {
                                $cityModel = City::where('city', $cityValue)->first();

                                return [
                                    'location' => Action::build(LocationGet::class)->data([
                                        'country_id' => $cityModel->country_id,
                                        'city_id' => $cityModel->id,
                                        'district_id' => District::where('district', $district)->first()->id
                                    ])->run()->getData('location')
                                ];
                            }
                        }
                    }
                }
            }
        } catch (Exception $e) {
        }

        return null;
    }
}
