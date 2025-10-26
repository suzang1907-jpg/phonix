<?php

namespace App\Console\Commands;

use App\Actions\Project\ProjectConnectWorkspace as ProjectProjectConnectWorkspace;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;

class ProjectConnectWorkspace extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:connect-workspace {project_id} {workspace_id}';

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
        $workspace_id = $this->argument('workspace_id');

        $project = Action::build(ProjectProjectConnectWorkspace::class)->data([
            'project_id' => $project_id,
            'workspace_id' => $workspace_id
        ])->run()->getData('project');

        if (empty($project)) {
            $this->output->error('Something went wrong.');
            return;
        }

        $this->output->success('Done.');
    }
}
