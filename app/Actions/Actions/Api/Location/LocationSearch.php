<?php

namespace App\Actions\Api\Location;

use App\Models\Location;
use App\Routing\Api;
use Dev\PHPActions\Action;

class LocationSearch extends Action
{
    public function  handle()
    {
        $search  = $this->getData('search', '');

        $search = strtolower(trim($search));

        if (empty($search)) {
            return Api::done([
                'locations' => []
            ]);
        }

        $locations = Location::query()->with(['country', 'city', 'district']);
        $locations->orWherehas('country', function ($query) use ($search) {
            $query->where('countries.country', 'like', '%' . $search . '%');
        });
        $locations->orWherehas('city', function ($query) use ($search) {
            $query->where('cities.city', 'like', '%' . $search . '%');
        });
        $locations->orWherehas('district', function ($query) use ($search) {
            $query->where('districts.district', 'like', '%' . $search . '%');
        });

        $locations = $locations->limit(25)->get();

        $locations = $locations->map(function ($location) {
            return $location->vue();
        });

        return Api::done([
            'locations' => $locations
        ]);
    }
}
