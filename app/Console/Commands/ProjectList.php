<?php

namespace App\Console\Commands;

use App\Actions\Project\ProjectConnectWorkspace as ProjectProjectConnectWorkspace;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;
use App\Models\Project;
class ProjectList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Project list';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $projects = Project::get();

foreach ($projects as $project) {
$this->info($project->id . ' ' . $project->name);
}

        $this->output->success('Done.');
    }
}
