<?php

namespace Tests\Helpers;

use Dev\PHPActions\Action;
use App\Actions\District\DistrictStore;
use App\Models\District;
use App\Models\City;

trait DistrictTestHelperTrait
{
    public function districtCreate(City | null $city = null, array $data = []): District
    {
        if (empty($city)) {
            $city = City::first();
        }

        if (empty($city)) {
            return null;
        }

        $district_data = array_merge([
            'district' => 'akyurt',
            'city_id' => $city->id,
        ], $data);

        $district = Action::build(DistrictStore::class)->data($district_data)->run()->getData('district');

        return $district;
    }
}
