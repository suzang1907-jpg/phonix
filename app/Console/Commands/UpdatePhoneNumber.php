<?php

namespace App\Console\Commands;

use App\Actions\Cache\CacheClear;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Dev\PHPActions\Action;
use App\Models\Project;
class UpdatePhoneNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:phone-number {value}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'App Heal';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
$value = $this->argument('value');

if (empty($value)) {
return;
}

        $projects = Project::get();

foreach ($projects as $project) {
$project->update([
'support_phone_number' => $value
]);
}

        $this->output->success('Done');
    }
}
