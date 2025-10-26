<?php

namespace App\Actions\District;

use App\Actions\Location\LocationStore;
use Dev\PHPActions\Action;
use App\Models\District;
use App\Models\City;
use Illuminate\Support\Str;

class DistrictStore extends Action
{
    public function handle()
    {
        $district = $this->getData('district');
        $city_id = $this->getData('city_id');
        $city = $this->getData('city');

        if (empty($city_id)) {
            if (empty($city)) {
                return null;
            }

            $city_model = City::where('city', $city)->first();

            if (empty($city_model)) {
                return null;
            }
            $city_id = $city_model->id;
        }

        if (empty($district)) {
            return null;
        }

        $district_model = District::where('district', $district)->where('city_id', $city_id)->first();

        if (!empty($district_model)) {
            Action::build(LocationStore::class)->data([
                'country_id' => $district_model->city->country_id,
                'city_id' => $city_id,
                'district_id' => $district_model->id,
            ])->run();

            return [
                'district' => $district_model
            ];
        }

        $id = $city_id . '_' . strtolower(Str::slug($district, '_'));

        $district_model = District::create([
            'id' => $id,
            'city_id' => $city_id,
            'district' => $district
        ]);

        Action::build(LocationStore::class)->data([
            'country_id' => $district_model->city->country_id,
            'city_id' => $city_id,
            'district_id' => $district_model->id,
        ])->run();

        return [
            'district' => $district_model
        ];
    }
}
