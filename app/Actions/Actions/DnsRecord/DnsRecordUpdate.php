<?php

namespace App\Actions\DnsRecord;

use App\Actions\CloudflareIntegration\CloudflareIntegrationGet;
use Illuminate\Support\Facades\Http;
use Dev\PHPActions\Action;

class DnsRecordUpdate extends Action
{
    protected $secure = [
        'cloudflare_integration_id',
        'type',
        'name',
        'content',
        'proxied',
        'site',
        'dns_record'
    ];

    public function handle()
    {
        $site = $this->getData('site');
        $type = $this->getData('type', 'A');
        $name = $this->getData('name');
        $dns_record = $this->getData('dns_record');
        $proxied = $this->getData('proxied', false);
        $content = $this->getData('content');

        $cloudflare_integration_id = $this->getData('cloudflare_integration_id');

        if (empty($site)) {
            return;
        }

        if (empty($dns_record)) {
            return;
        }

        $cloudflare_integration = Action::build(CloudflareIntegrationGet::class)->data(['id' => $cloudflare_integration_id])->run()->getData('cloudflare_integration');

        if (empty($cloudflare_integration)) {
            return null;
        }

        $cloudflare_api_key = $site->project->cloudflare_api_key;

        $response = Http::withToken($cloudflare_api_key)->asJson()->put('https://api.cloudflare.com/client/v4/zones/' . $cloudflare_integration->zone_id . '/dns_records/' . $dns_record->cloudflare_id, [
            'content' => $content,
            'name' => $name,
            'proxied' => $proxied,
            'type' => $type
        ]);

        if (empty($response)) {
            return;
        }

        if (!$response->ok()) {
            return;
        }

        $raw_response = $response->json();

        $result = $raw_response['result'] ?? null;

        if (empty($result)) {
            return;
        }

        $dns_record->update([
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
}
