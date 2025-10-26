<?php

namespace App\Actions\City;

use App\Actions\Location\LocationStore;
use Dev\PHPActions\Action;
use App\Models\City;
use App\Models\Country;
use Illuminate\Support\Str;

class CityStore extends Action
{
    public function handle()
    {
        $city = $this->getData('city');
        $country_id = $this->getData('country_id');
        $country = $this->getData('country');

        if (empty($country_id)) {
            if (empty($country)) {
                return null;
            }

            $country_model = Country::where('country', $country)->first();
            $country_id = $country_model->id;
        }

        if (empty($city)) {
            return null;
        }

        $city_model = City::where('city', $city)->where('country_id', $country_id)->first();

        if (!empty($city_model)) {

            Action::build(LocationStore::class)->data([
                'country_id' => $country_id,
                'city_id' => $city_model->id,
            ])->run();

            return [
                'city' => $city_model
            ];
        }

        $id = $country_id . '_' . strtolower(Str::slug($city, '_'));

        $city_model = City::create([
            'id' => $id,
            'country_id' => $country_id,
            'city' => $city
        ]);

        Action::build(LocationStore::class)->data([
            'country_id' => $country_id,
            'city_id' => $city_model->id,
        ])->run();

        return [
            'city' => $city_model
        ];
    }
}
