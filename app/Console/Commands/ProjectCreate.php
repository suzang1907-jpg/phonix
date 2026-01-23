<?php

namespace App\Console\Commands;

use App\Actions\Domain\DomainStore;
use App\Actions\Project\ProjectStore;
use App\Models\Project;
use App\Constants\DomainType;
use App\Models\User;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;
class ProjectCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:create {name} {amp_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Project create';


    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $name = $this->argument('name');
        $amp_name = $this->argument('amp_name');
$refp = Project::first();
$id = 'p_' . now()->timestamp . '_' . strtolower(Str::random());
        $project = Project::create([
'id' => $id,
'name' => $name,
'amp_name' => $amp_name,
'support_phone_number' => $refp->support_phone_number
        ]);
        if (empty($project)) {
            $this->error('Error while storing project.');
            return;
        }

        $this->info('Project ID: ' . $project->id, true);
    }
}
