<?php

namespace App\Console\Commands;

use App\Actions\Domain\DomainStore;
use App\Models\City;
use App\Models\Domain;
use App\Models\Location;
use Illuminate\Console\Command;
use Dev\PHPActions\Action;

class DistrictSeedDomain extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'district:seed-domain {city_id} {domain_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'District Seed Domain';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $domain_id = $this->argument('domain_id');
        $city_id = $this->argument('city_id');

        if (empty($domain_id)) {
            $this->output->error('Domain ID is empty');
            return;
        }

        $domain = Domain::where('id', $domain_id)->get()->first();

        if (empty($domain)) {
            $this->output->error('Domain is empty');
            return;
        }

        $city = City::where('id', $city_id)->get()->first();

        if (empty($city)) {
            $this->output->error('City is empty');
            return;
        }

        $project = $domain->site->project;

        if (empty($project)) {
            $this->output->error('Project is empty');
            return;
        }

        $districts = $city->districts;

        $this->output->progressStart(count($districts));

        foreach ($districts as $district) {
            $city = $district->city;

            $dis = $district->district;

            if (!empty($city) && !empty($dis)) {
                $district_domain = Action::build(DomainStore::class)->data([
                    'project_id' => $project->id,
                    'domain' => $dis . '-' . $city->city . '.' . $domain->domain,
                ])->run();
            }

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->output->success('Done');
    }
}
