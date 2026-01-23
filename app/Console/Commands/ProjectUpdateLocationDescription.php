<?php

namespace App\Console\Commands;

use App\Actions\Project\ProjectConnectWorkspace as ProjectProjectConnectWorkspace;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;
use App\Models\Project;

class ProjectUpdateLocationDescription extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:update-location-description {project_id} {location_description}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Project Connect Workspace';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $project_id = $this->argument('project_id');
        $location_description = $this->argument('location_description');

        $project = Project::where(['id' => $project_id])->first();

$project->update(['location_description' => $location_description]);

        $this->output->success('Done.');
    }
}
