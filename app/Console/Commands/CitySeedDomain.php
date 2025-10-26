<?php

namespace App\Console\Commands;

use App\Actions\Domain\DomainStore;
use App\Models\Domain;
use App\Models\Location;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;

class CitySeedDomain extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'city:seed-domain {domain_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'City Seed Domain';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $domain_id = $this->argument('domain_id');

        if (empty($domain_id)) {
            $this->output->error('Domain ID is empty');
            return;
        }

        $domain = Domain::where('id', $domain_id)->get()->first();

        if (empty($domain)) {
            $this->output->error('Domain is empty');
            return;
        }

        $project = $domain->site->project;

        if (empty($project)) {
            $this->output->error('Project is empty');
            return;
        }

        $project_location = $project->location;

        if (empty($project_location)) {
            $this->output->error('Project location is empty');
            return;
        }

        $country = $project_location->country;
        $cities = $country->cities;

        $this->output->progressStart(count($cities));

        foreach ($cities as $city) {
            $city_domain = Action::build(DomainStore::class)->data([
                'project_id' => $project->id,
                'domain' => $city->city . '.' . $domain->domain,
            ])->run();

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->output->success('Done');
    }
}
