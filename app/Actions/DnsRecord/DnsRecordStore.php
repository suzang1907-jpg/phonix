<?php

namespace App\Actions\DnsRecord;

use App\Actions\CloudflareIntegration\CloudflareIntegrationGet;
use App\Models\DnsRecord;
use App\Models\Site;
use Illuminate\Support\Facades\Http;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;

class DnsRecordStore extends Action
{
    protected $secure = [
        'id',
        'type',
        'name',
        'content',
        'proxied',
        'site',
        'debug_console'
    ];

    public function handle()
    {
        $site = $this->getData('site');
        $type = $this->getData('type', 'A');
        $name = $this->getData('name');
        $proxied = $this->getData('proxied', false);
        $content = $this->getData('content');
        $debug_console = $this->getData('debug_console');

        $payload = [
            'content' => $content,
            'name' => $name,
            'proxied' => $proxied,
            'type' => $type
        ];

        $id = $this->getData('id');

        if (empty($site)) {
            return;
        }

        $cloudflare_integration = Action::build(CloudflareIntegrationGet::class)->data(['id' => $id])->run()->getData('cloudflare_integration');

        if (empty($cloudflare_integration)) {
            return null;
        }

        $cloudflare_api_key = $site->project->cloudflare_api_key;

        $dns_record = DnsRecord::where('type', $type)->where('content', $content)->where('name', $name)->get()->first();

        if (!empty($dns_record)) {
            return [
                'dns_record' => $dns_record
            ];
        }

        $response = Http::withToken($cloudflare_api_key)->asJson()->post('https://api.cloudflare.com/client/v4/zones/' . $cloudflare_integration->zone_id . '/dns_records', $payload);

        if (empty($response)) {
            if (!empty($debug_console)) {
                $debug_console->info('Response is empty');
                dd($response, $payload);
            }
            $this->syncDnsRecords($site, $payload);
            return;
        }

        if (!$response->ok()) {
            if (!empty($debug_console)) {
                $debug_console->info('Response not ok');
                dd($response, $payload);
            }
            $this->syncDnsRecords($site, $payload);
            return;
        }

        $raw_response = $response->json();

        $result = $raw_response['result'] ?? null;

        if (empty($result)) {
            if (!empty($debug_console)) {
                $debug_console->info('Response is empty');
                dd($response, $payload);
            }
            $this->syncDnsRecords($site, $payload);
            return;
        }

        $dns_record = DnsRecord::where('cloudflare_id', $result['id'])->get()->first();

        if (!empty($dns_record)) {
            $dns_record->update([
                'type' => $result['type'],
                'content' => $result['content'],
                'proxied' => $result['proxied'],
                'name' => $result['name']
            ]);

            return [
                'dns_record' => $dns_record
            ];
        }

        $id = 'dns_record_' . $site->id . '_' .  strtolower(Str::random());

        $dns_record = DnsRecord::create([
            'id' => $id,
            'site_id' => $site->id,
            'cloudflare_id' => $result['id'],
            'type' => $result['type'],
            'content' => $result['content'],
            'proxied' => $result['proxied'],
            'name' => $result['name']
        ]);

        return [
            'dns_record' => $dns_record
        ];
    }

    private function syncDnsRecords(Site $site, $payload)
    {
        $dns_record = $site->dnsRecords()->where('name', $payload['name'])->whereNot('content', $payload['content'])->get()->first();

        Action::build(DnsRecordUpdate::class)->data([
            'cloudflare_integration_id' => $site->cloudflare_integration_id,
            'type' => 'A',
            'site' => $site,
            'dns_record' => $dns_record
        ])->run();
    }
}
