<?php

namespace App\Actions\Project;

use App\Models\Project;
use Dev\PHPActions\Action;

class ProjectGet extends Action
{
    protected $secure = [
        'id'
    ];

    public function handle()
    {
        $id = $this->getData('id');

        $project = Project::where('id', $id)->get()->first();

        if (empty($project)) {
            return null;
        }

        return [
            'project' => $project
        ];
    }
}
