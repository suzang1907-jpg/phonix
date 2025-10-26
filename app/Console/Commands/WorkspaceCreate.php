<?php

namespace App\Console\Commands;

use App\Actions\Workspace\WorkspaceStore;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;

class WorkspaceCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'workspace:create {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Workspace Create';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = $this->argument('name');

        $workspace = Action::build(WorkspaceStore::class)->data([
            'name' => $name,
        ])->run()->getData('workspace');

        if (empty($workspace)) {
            $this->output->error('Something went wrong.');
            return;
        }

        $this->info('Workspace id: ' . $workspace->id);
        $this->output->success('Done.');
    }
}
