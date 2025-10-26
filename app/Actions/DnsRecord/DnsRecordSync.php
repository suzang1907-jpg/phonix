<?php

namespace App\Actions\DnsRecord;

use App\Actions\CloudflareIntegration\CloudflareIntegrationGet;
use App\Models\DnsRecord;
use Illuminate\Support\Facades\Http;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;

class DnsRecordSync extends Action
{
    protected $secure = [
        'id',
        'type',
        'site'
    ];

    public function handle()
    {
        $site = $this->getData('site');
        $type = $this->getData('type', 'A');

        $id = $this->getData('id');

        if (empty($site)) {
            return;
        }

        $cloudflare_integration = Action::build(CloudflareIntegrationGet::class)->data(['id' => $site->cloudflare_integration_id])->run()->getData('cloudflare_integration');

        if (empty($cloudflare_integration)) {
            return null;
        }

        $cloudflare_api_key = $site->project->cloudflare_api_key;

        $queryData = [
            'per_page' => 2000
        ];

        if (!empty($type)) {
            $queryData['type'] = $type;
        }

        $response = Http::withToken($cloudflare_api_key)->asJson()->get('https://api.cloudflare.com/client/v4/zones/' . $cloudflare_integration->zone_id . '/dns_records', $queryData);

        if (empty($response)) {
            return null;
        }

        if (!$response->ok()) {
            return null;
        }

        $raw_response = $response->json();

        $result = $raw_response['result'] ?? null;

        if (empty($result)) {
            return;
        }

        foreach ($result as $key => $value) {
            $dns_record = DnsRecord::where('cloudflare_id', $value['id'])->get()->first();

            if (!empty($dns_record)) {
                $dns_record->update([
                    'type' => $value['type'],
                    'content' => $value['content'],
                    'proxied' => $value['proxied'],
                    'name' => $value['name']
                ]);
            } else {
                $id = 'dns_record_' . $site->id . '_' .  strtolower(Str::random()) . '_' . $key;

                DnsRecord::create([
                    'id' => $id,
                    'site_id' => $site->id,
                    'cloudflare_id' => $value['id'],
                    'type' => $value['type'],
                    'content' => $value['content'],
                    'proxied' => $value['proxied'],
                    'name' => $value['name']
                ]);
            }
        }

        return true;
    }
}
