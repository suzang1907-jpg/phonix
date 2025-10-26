<?php

namespace Tests\Helpers;

use Dev\PHPActions\Action;
use App\Actions\Country\CountryStore;
use App\Models\Country;
use App\Models\User;

trait CountryTestHelperTrait
{
    public function countryCreate(array $data = []): Country
    {
        $country_data = array_merge([
            'country' => 'turkey',
        ], $data);

        $country = Action::build(CountryStore::class)->data($country_data)->run()->getData('country');

        return $country;
    }
}
