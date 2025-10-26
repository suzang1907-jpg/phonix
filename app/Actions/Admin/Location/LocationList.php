<?php

namespace App\Actions\Admin\Location;

use Dev\PHPActions\Action;
use App\Models\City;
use App\Models\Country;
use App\Models\District;

class LocationList extends Action
{
    public function handle()
    {
        return [
            'latest_countries' => Country::withCount('blogs')->orderBy('blogs_count', 'desc')->list(4),
            'latest_cities' => City::withCount('blogs')->orderBy('blogs_count', 'desc')->list(4),
            'latest_districts' => District::withCount('blogs')->orderBy('blogs_count', 'desc')->list(4),
        ];
    }
}
