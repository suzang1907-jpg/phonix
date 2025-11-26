<?php

namespace App\Console\Commands;

use App\Models\UpcomingDomain;
use Illuminate\Console\Command;

class UpcomingDomainList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upcoming-domain:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all upcoming domains';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $domains = UpcomingDomain::all(['project_id', 'domain', 'date', 'created_at']);

        if ($domains->isEmpty()) {
            $this->info('No upcoming domains found.');
            return 0;
        }

        $this->table(
            ['Project ID', 'Domain', 'Date', 'Created At'],
            $domains->toArray()
        );

        return 0;
    }
}
