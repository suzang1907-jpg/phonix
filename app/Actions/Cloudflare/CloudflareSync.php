<?php

namespace App\Actions\Cloudflare;

use App\Actions\DnsRecord\DnsRecordDelete;
use App\Actions\DnsRecord\DnsRecordStore;
use App\Actions\DnsRecord\DnsRecordSync;
use App\Models\Domain;
use App\Models\Site;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Dev\PHPActions\Action;
use Dev\PHPActions\Traits\RunsAsync;

class CloudflareSync extends Action
{
    use RunsAsync;

    public function handle()
    {
        Cache::forever('cloudflare_syncing_state', 'queued');
        return [
            'id' => 'cloudflare_sync'
        ];
    }

    public function dispatchJob(?array $data = [])
    {
        Cache::forever('cloudflare_syncing_state', 'running');

        $sites = Site::get();

        foreach ($sites as $site) {
            Action::build(DnsRecordSync::class)->data([
                'type' => 'A',
                'site' => $site
            ])->run();
        }

        $unconfirmed_domains = Domain::query()->whereNull('dns_record_confirmed_at')->get();

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
        }

        /** Wrong DNS Records */

        $sites = Site::get();

        foreach ($sites as $site) {
            $project = $site->project;
            $server_ip = config('app.server_ip');

            if (!empty($project->server_ip)) {
                $server_ip = $project->server_ip;
            }

            $dns_records_with_wrong_content = $site->dnsRecords()->where('type', 'A')->whereNot('name', 'like', 'admin.%')->whereNot('content', $server_ip)->get();

            foreach ($dns_records_with_wrong_content as $dns_record_with_wrong_content) {
                Action::build(DnsRecordDelete::class)->data([
                    'dns_record' => $dns_record_with_wrong_content
                ])->run();
            }

            $dns_records_with_wrong_content = $site->dnsRecords()->where('type', 'A')->where('name', 'like', 'admin.%')->whereNot('content', config('app.server_ip'))->get();

            foreach ($dns_records_with_wrong_content as $dns_record_with_wrong_content) {
                Action::build(DnsRecordDelete::class)->data([
                    'dns_record' => $dns_record_with_wrong_content
                ])->run();
            }
        }

        Cache::forget('cloudflare_syncing_state');
    }
}
