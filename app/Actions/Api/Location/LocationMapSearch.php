<?php

namespace App\Actions\Api\Location;

use App\Models\Map;
use App\Routing\Api;
use Dev\PHPActions\Action;

class LocationMapSearch extends Action
{
    public function handle()
    {
        $search  = $this->getData('search', '');

        $search = strtolower(trim($search));

        if (empty($search)) {
            return Api::done([
                'maps' => []
            ]);
        }

        $maps = Map::where('name', 'like', '%' . $search . '%')->orWhere('slug', 'like', '%' . $search . '%')->limit(25)->get();

        $maps = $maps->map(function ($map) {
            return $map->vue();
        });

        return Api::done([
            'maps' => $maps
        ]);
    }
}
