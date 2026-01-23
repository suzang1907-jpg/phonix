<?php

namespace App\Console\Commands;

use App\Actions\Domain\DomainStore;
use App\Constants\DomainType;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;
use App\Models\Domain;
use App\Models\Project;
use App\Models\Site;

class DomainProjectUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'domain:project-update {domain} {project_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Domain project update';


    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        
        $domain = $this->argument('domain');
$project_id = $this->argument('project_id');
        
$project = Project::where(['id' => $project_id])->first();
$domain_m = Domain::where(['id' => $domain])->first();
if (empty($project)) {
$this->output->error('Project not found');
return;
}
$site = Site::where(['origin' => $domain])->first();
if (! empty($site)) {
$site->update(['project_id' => $project->id]);
}

        $this->output->success('Done.');
    }
}
