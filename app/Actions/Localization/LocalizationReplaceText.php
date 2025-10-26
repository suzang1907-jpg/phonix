<?php

namespace App\Actions\Localization;

use App\Services\LocationService;
use Dev\PHPActions\Action;

class LocalizationReplaceText extends Action
{
    protected $secure = [
        'text',
        'location'
    ];

    public function handle()
    {
        $text = $this->getData('text');
        $location = $this->getData('location', LocationService::getLocation());

        $result = $text;

        $city = $location?->city;
        $district = $location?->district;
        $country = $location?->country;

        if (empty($result)) {
            return [
                'text' => $result
            ];
        }

        if (!empty($district)) {
            $result = str_replace('[/location/]', __('location.' . $district->district), $result);
        } else if (!empty($city)) {
            $result = str_replace('[/location/]', __('location.' . $city->city), $result);
        } else if (!empty($country)) {
            $result = str_replace('[/location/]', __('location.' . $country->country), $result);
        } else {
            $result = str_replace('[/location/]', '', $result);
        }

        return [
            'text' => $result
        ];
    }
}
