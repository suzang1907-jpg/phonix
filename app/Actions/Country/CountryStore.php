<?php

namespace App\Actions\Country;

use App\Actions\Location\LocationStore;
use Dev\PHPActions\Action;
use App\Models\Country;
use Illuminate\Support\Str;

class CountryStore extends Action
{
    public function handle()
    {
        $country = $this->getData('country');

        if (empty($country)) {
            return null;
        }

        $country_model = Country::where('country', $country)->first();

        if (!empty($country_model)) {

            Action::build(LocationStore::class)->data([
                'country_id' => $country_model->id,
            ])->run();

            return [
                'country' => $country_model
            ];
        }

        $id = strtolower(Str::slug($country, '_'));

        $country_model = Country::create([
            'id' => $id,
            'country' => $country
        ]);

        Action::build(LocationStore::class)->data([
            'country_id' => $country_model->id,
        ])->run();

        return [
            'country' => $country_model
        ];
    }
}
