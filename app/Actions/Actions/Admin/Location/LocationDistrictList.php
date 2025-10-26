<?php

namespace App\Actions\Admin\Location;

use Dev\PHPActions\Action;
use App\Models\District;
use App\Services\ProjectService;

class LocationDistrictList extends Action
{
    public function handle()
    {
        $descending = $this->getData('sort', 'desc') == 'desc';

        $project = ProjectService::getProject();

        $location = $project->location;

        $country = $location?->country;

        if (!empty($country)) {
            return [
                'districts' => $country->districts()->withCount('blogs')->orderBy('blogs_count', $descending ? 'desc' : 'asc')->list(),
            ];
        }

        return [
            'districts' => District::withCount('blogs')->orderBy('blogs_count', $descending ? 'desc' : 'asc')->list(),
        ];
    }
}
