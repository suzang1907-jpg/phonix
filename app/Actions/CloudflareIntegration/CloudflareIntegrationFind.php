<?php

namespace App\Actions\CloudflareIntegration;

use App\Models\CloudflareIntegration;
use Dev\PHPActions\Action;

class CloudflareIntegrationFind extends Action
{
    public function handle()
    {
        $id = $this->getData('id');
        $zone_id = $this->getData('zone_id');

        $cloudflare_integration = null;

        if (!empty($id)) {
            $cloudflare_integration = CloudflareIntegration::where('id', $id)->get()->first();
        } elseif (!empty($zone_id)) {
            $cloudflare_integration = CloudflareIntegration::where('zone_id', $zone_id)->get()->first();
        }

        if (empty($cloudflare_integration)) {
            return null;
        }

        return [
            'cloudflare_integration' => $cloudflare_integration
        ];
    }
}
