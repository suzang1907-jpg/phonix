<?php

namespace App\Actions\Map;

use App\Models\Location;
use App\Models\Map;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;

class MapStore extends Action
{
    protected $secure = [
        'map_location_id',
        'url'
    ];

    public function handle()
    {
        $map_location_id = $this->getData('map_location_id');
        $url = $this->getData('url');

        $id = Str::slug('m-' . Str::random() . '-' . now()->timestamp);

        if (empty($url)) {
            return;
        }

        if (empty($map_location_id)) {
            return;
        }

        $location = Location::where('id', $map_location_id)->first();

        if (empty($location)) {
            return;
        }

        $country = $location->country?->country;
        $city = $location->city?->city;
        $district = $location->district?->district;

        $name = '';
        $slug = '';

        if (! empty($country)) {
            $name = __('location.' . $country);
            $slug = $country;
        }

        if (! empty($city)) {
            $name .= ' ' . __('location.' . $city);
            $slug .= ' ' . $city;
        }

        if (! empty($district)) {
            $name .= ' ' . __('location.' . $district);
            $slug .= ' ' . $district;
        }

        if (empty($name)) {
            return;
        }

        if (empty($slug)) {
            return;
        }

        $map = Map::create([
            'id' => $id,
            'url' => $url,
            'location_id' => $map_location_id,
            'name' => $name,
            'slug' => $slug,
        ]);

        return [
            'map' => $map
        ];
    }
}
