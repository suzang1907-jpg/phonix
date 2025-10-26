<?php

namespace Tests\Helpers;

use Dev\PHPActions\Action;
use App\Actions\City\CityStore;
use App\Models\City;
use App\Models\Country;

trait CityTestHelperTrait
{
    public function cityCreate(Country | null $country = null, array $data = []): City
    {
        if (empty($country)) {
            $country = Country::first();
        }

        if (empty($country)) {
            return null;
        }

        $city_data = array_merge([
            'city' => 'ankara',
            'country_id' => $country->id,
        ], $data);

        $city = Action::build(CityStore::class)->data($city_data)->run()->getData('city');

        return $city;
    }
}
