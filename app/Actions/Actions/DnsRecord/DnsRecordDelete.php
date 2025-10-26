<?php

namespace App\Actions\DnsRecord;

use App\Actions\CloudflareIntegration\CloudflareIntegrationGet;
use Illuminate\Support\Facades\Http;
use Dev\PHPActions\Action;

class DnsRecordDelete extends Action
{
    protected $secure = [
        'cloudflare_integration_id',
        'site',
        'dns_record'
    ];

    public function handle()
    {
        $dns_record = $this->getData('dns_record');

        $site = $dns_record->site;

        $cloudflare_integration_id = $site->cloudflare_integration_id;

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

        Http::withToken($cloudflare_api_key)->delete('https://api.cloudflare.com/client/v4/zones/' . $cloudflare_integration->zone_id . '/dns_records/' . $dns_record->cloudflare_id);

        $dns_record->delete();

        return;
    }
}
