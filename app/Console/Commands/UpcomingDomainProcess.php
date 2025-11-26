<?php

namespace App\Console\Commands;

use App\Actions\Domain\DomainStore;
use App\Constants\DomainType;
use App\Models\UpcomingDomain;
use Carbon\Carbon;
use Dev\PHPActions\Action;
use Illuminate\Console\Command;

class UpcomingDomainProcess extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upcoming-domain:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process upcoming domains that are due today';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::today()->format('Y-m-d');
        $upcomingDomains = UpcomingDomain::where('date', $today)->get();

        foreach ($upcomingDomains as $upcomingDomain) {
            $this->info("Processing domain: {$upcomingDomain->domain}");

            try {
                $domain = Action::build(DomainStore::class)->data([
                    'project_id' => $upcomingDomain->project_id,
                    'domain' => $upcomingDomain->domain,
                    'type' => DomainType::$offer_list
                ])->run()->getData('domain');

                if ($domain) {
                    $upcomingDomain->delete();
                    $this->info("Domain {$upcomingDomain->domain} created and removed from upcoming list.");
                } else {
                    $this->error("Failed to create domain {$upcomingDomain->domain}.");
                }
            } catch (\Exception $e) {
                $this->error("Error processing domain {$upcomingDomain->domain}: " . $e->getMessage());
            }
        }

        return 0;
    }
}
