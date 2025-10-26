<?php

namespace App\Traits\Models;

use App\Services\LocationService;

trait BelongsToLocation
{
    public function scopeWhereLocation($query)
    {
        $location = LocationService::getLocation();

        if (empty($location)) {
            return $query;
        }

        if (empty($location->city_id) && empty($location->district_id)) {
            return $query;
        }

        $query = $query->where('location_id',  $location->id);

        return $query;
    }
}
