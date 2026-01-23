<?php

namespace App\Console\Commands;

use App\Actions\Project\ProjectConnectWorkspace as ProjectProjectConnectWorkspace;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;
use App\Models\Project;
class ProjectRotateColors extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:rotate-colors';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Project rotate colors';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $projects = Project::get();

$colors = [
[
"primary_color" => "#f39fab",
"secondary_color" => "#f39fab",
],
[
"primary_color" => "#cf4160",
"secondary_color" => "#cf4160",
],
[
"primary_color" => "#b20e5e",
"secondary_color" => "#b20e5e",
],
[
"primary_color" => "#41f49a",
"secondary_color" => "#41f49a",
],
[
"primary_color" => "#57978e",
"secondary_color" => "#57978e",
],
[
"primary_color" => "#27c552",
"secondary_color" => "#27c552",
]
];

$c = $colors[array_rand($colors)];

foreach ($projects as $project) {
$meta = $project->meta_data ?? [];
$amp_meta = $meta['amp'] ?? [];
$amp_meta = array_merge($amp_meta, $c);
$meta['amp'] = $amp_meta;
$this->info(json_encode($meta, JSON_PRETTY_PRINT));
$project->update(['meta_data' => $meta]);
$this->info($project->id . ' ' . $project->name);
}

        $this->output->success('Done.');
    }
}
