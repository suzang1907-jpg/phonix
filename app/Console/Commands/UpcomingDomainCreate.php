<?php

namespace App\Console\Commands;

use App\Models\UpcomingDomain;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpcomingDomainCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upcoming-domain:create {project_id} {domain} {day} {month} {year}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add an upcoming domain with a release date';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $project_id = $this->argument('project_id');
        $domain = $this->argument('domain');
        $day = $this->argument('day');
        $month = $this->argument('month');
        $year = $this->argument('year');

        try {
            $date = Carbon::createFromDate($year, $month, $day);
        } catch (\Exception $e) {
            $this->error('Invalid date provided.');
            return 1;
        }

        if (UpcomingDomain::where('domain', $domain)->exists()) {
            $this->error("Domain {$domain} already exists.");
            return 1;
        }

        UpcomingDomain::create([
            'project_id' => $project_id,
            'domain' => $domain,
            'date' => $date->format('Y-m-d'),
        ]);

        $this->info("Upcoming domain {$domain} added successfully for {$date->format('Y-m-d')}.");
        return 0;
    }
}
