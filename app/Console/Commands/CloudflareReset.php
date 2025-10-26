<?php

namespace App\Console\Commands;

use App\Actions\DnsRecord\DnsRecordDelete;
use App\Actions\DnsRecord\DnsRecordStore;
use App\Actions\DnsRecord\DnsRecordSync;
use App\Models\DnsRecord;
use App\Models\Domain;
use App\Models\Site;
use Carbon\Carbon;
use Dev\PHPActions\Action;
use Illuminate\Console\Command;

class CloudflareReset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cloudflare:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cloudflare Reset';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $domains = Domain::get();

        $this->info('Resetting domains verified status');

        $this->output->progressStart(count($domains));

        foreach ($domains as $domain) {
            $domain->update([
                'dns_record_confirmed_at' => null,
            ]);
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->info('Sync DNS Records');

        $sites = Site::get();

        $sites_count = $sites->count();

        $this->info('Sites: ' . $sites_count);

        $this->output->progressStart($sites_count);

        foreach ($sites as $site) {
            Action::build(DnsRecordSync::class)->data([
                'type' => 'A',
                'site' => $site
            ])->run();

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        $this->info('Deleting all A type DNS Records');

        $dnsRecords = DnsRecord::get();

        $dnsRecords_count = $dnsRecords->count();

        $this->output->progressStart($dnsRecords_count);

        foreach ($dnsRecords as $dnsRecord) {
            Action::build(DnsRecordDelete::class)->data([
                'dns_record' => $dnsRecord
            ])->run();

            $this->output->progressAdvance();
        }
        $this->output->progressFinish();
    }
}
