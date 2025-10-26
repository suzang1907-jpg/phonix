<?php

namespace App\Actions\Admin\Location;

use Dev\PHPActions\Action;
use App\Models\Country;
use App\Services\ProjectService;

class LocationCountryList extends Action
{
    public function handle()
    {
        $descending = $this->getData('sort', 'desc') == 'desc';

        $project = ProjectService::getProject();

        if (!empty($project?->location?->country)) {
            return [
                'countries' => Country::where('id', $project->location->country_id)->withCount('blogs')->orderBy('blogs_count', $descending ? 'desc' : 'asc')->list(),
            ];
        }

        return [
            'countries' => Country::withCount('blogs')->orderBy('blogs_count', $descending ? 'desc' : 'asc')->list(),
        ];
    }
}
