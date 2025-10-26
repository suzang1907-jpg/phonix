<?php

namespace App\Console\Commands;

use App\Actions\CloudflareIntegration\CloudflareIntegrationGet;
use App\Actions\DnsRecord\DnsRecordDelete;
use App\Actions\DnsRecord\DnsRecordSync;
use App\Models\Site;
use Dev\PHPActions\Action;
use Illuminate\Console\Command;

class CloudflareRecordDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cloudflare:delete-record {site}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cloudflare Record Delete';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $site = $this->argument('site');

        if (empty($site)) {
            return;
        }

        $site = Site::where('origin', $site)->first();

        if (empty($site)) {
            return;
        }

        $dnsRecords = $site->dnsRecords()->where('type', 'A')->get();

        $this->info('Record count before sync: ' . $site->dnsRecords()->where('type', 'A')->count());

        $cloudflare_integration = Action::build(CloudflareIntegrationGet::class)->data(['id' => $site->cloudflare_integration_id])->run()->getData('cloudflare_integration');

        if (empty($cloudflare_integration)) {
            $this->error('Cloudflare Integration is empty');
            return;
        }

        if (empty($site->project->cloudflare_api_key)) {
            $this->error('Cloudflare Api Key is empty');
            return;
        }

        Action::build(DnsRecordSync::class)->data([
            'type' => 'A',
            'site' => $site
        ])->run();

        $this->info('Record count after sync: ' . $site->dnsRecords()->where('type', 'A')->count());


        $this->info('Deleting all A type DNS Records for site:' . $site->origin);

        $dnsRecords = $site->dnsRecords()->where('type', 'A')->get();

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
