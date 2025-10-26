<?php

namespace App\Console\Commands;

use App\Actions\DnsRecord\DnsRecordDelete;
use App\Actions\DnsRecord\DnsRecordStore;
use App\Actions\DnsRecord\DnsRecordSync;
use App\Models\Domain;
use App\Models\Site;
use Carbon\Carbon;
use Dev\PHPActions\Action;
use Illuminate\Console\Command;

class CloudflareSync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cloudflare:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cloudflare Sync';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
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

        $unconfirmed_domains = Domain::query()->whereNull('dns_record_confirmed_at')->get();

        $unconfirmed_domains_count = $unconfirmed_domains->count();

        $this->info('Unconfirmed Domains: ' . $unconfirmed_domains_count);

        $this->output->progressStart($unconfirmed_domains_count);

        foreach ($unconfirmed_domains as $domain) {
            $site = $domain->site;

            $server_ip = config('app.server_ip');

            $project = $site->project;

            if (!empty($project->server_ip)) {
                $server_ip = $project->server_ip;
            }

            if (str_starts_with($domain->domain, 'admin.')) {
                $is_correct = $site->dnsRecords()->where('name', $domain->domain)->where('content', config('app.server_ip'))->get()->first();
            } else {
                $is_correct = $site->dnsRecords()->where('name', $domain->domain)->where('content', $server_ip)->get()->first();
            }

            if ($is_correct) {
                $domain->update([
                    'dns_record_confirmed_at' => Carbon::now()
                ]);
            } else {
                if (str_starts_with($domain->domain, 'admin.')) {
                    Action::build(DnsRecordStore::class)->data([
                        'id' => $site->cloudflare_integration_id,
                        'content' => config('app.server_ip'),
                        'name' => $domain->domain,
                        'proxied' => true,
                        'type' => 'A',
                        'site' => $site,
                        'debug_console' => null
                    ])->run();
                } else {
                    Action::build(DnsRecordStore::class)->data([
                        'id' => $site->cloudflare_integration_id,
                        'content' => $server_ip,
                        'name' => $domain->domain,
                        'proxied' => true,
                        'type' => 'A',
                        'site' => $site,
                        'debug_console' => null
                    ])->run();
                }
            }

            $this->output->progressAdvance();
        }

        $this->output->progressFinish();

        /** Wrong DNS Records */

        $sites = Site::get();

        foreach ($sites as $site) {
            $this->info('Site: ' . $site->id);
            $project = $site->project;
            $server_ip = config('app.server_ip');

            if (!empty($project->server_ip)) {
                $server_ip = $project->server_ip;
            }

            $this->info('Deleting Wrong Dns Records...');

            $dns_records_with_wrong_content = $site->dnsRecords()->where('type', 'A')->whereNot('name', 'like', 'admin.%')->whereNot('content', $server_ip)->get();

            $dns_records_with_wrong_content_count = $dns_records_with_wrong_content->count();

            $this->output->progressStart($dns_records_with_wrong_content_count);

            foreach ($dns_records_with_wrong_content as $dns_record_with_wrong_content) {
                Action::build(DnsRecordDelete::class)->data([
                    'dns_record' => $dns_record_with_wrong_content
                ])->run();

                $this->output->progressAdvance();
            }
            $this->output->progressFinish();

            $dns_records_with_wrong_content = $site->dnsRecords()->where('type', 'A')->where('name', 'like', 'admin.%')->whereNot('content', config('app.server_ip'))->get();

            $dns_records_with_wrong_content_count = $dns_records_with_wrong_content->count();

            $this->output->progressStart($dns_records_with_wrong_content_count);

            foreach ($dns_records_with_wrong_content as $dns_record_with_wrong_content) {
                Action::build(DnsRecordDelete::class)->data([
                    'dns_record' => $dns_record_with_wrong_content
                ])->run();

                $this->output->progressAdvance();
            }
            $this->output->progressFinish();
        }

        $this->output->success('Done');
    }
}
