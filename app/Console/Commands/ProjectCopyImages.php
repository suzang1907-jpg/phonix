<?php

namespace App\Console\Commands;

use App\Actions\Project\ProjectConnectWorkspace as ProjectProjectConnectWorkspace;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;
use App\Models\Project;

class ProjectCopyImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:copy-images {project_id}';

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
        $refp = Project::first();

        $project = Project::where(['id' => $project_id])->first();

$project->update(['logo_id' => $refp->logo_id, 'amp_logo_id' => $refp->amp_logo_id, 'support_banner_id' => $refp->support_banner_id]);

        $this->output->success('Done.');
    }
}
