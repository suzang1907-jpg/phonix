<?php

namespace App\Actions\Admin\Location;

use Dev\PHPActions\Action;
use App\Models\City;
use App\Services\ProjectService;

class LocationCityList extends Action
{
    public function handle()
    {
        $descending = $this->getData('sort', 'desc') == 'desc';

        $project = ProjectService::getProject();

        if (!empty($project?->location?->country)) {
            return [
                'cities' => City::where('country_id', $project->location->country_id)->withCount('blogs')->orderBy('blogs_count', $descending ? 'desc' : 'asc')->list(),
            ];
        }

        return [
            'cities' => City::withCount('blogs')->orderBy('blogs_count', $descending ? 'desc' : 'asc')->list(),
        ];
    }
}
