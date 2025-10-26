<?php

namespace App\Actions\CloudflareIntegration;

use App\Models\CloudflareIntegration;
use Dev\PHPActions\Action;

class CloudflareIntegrationGet extends Action
{
    protected $secure = [
        'id'
    ];

    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return null;
        }

        $cloudflare_integration = CloudflareIntegration::where('id', $id)->first();

        if (empty($cloudflare_integration)) {
            return null;
        }

        return [
            'cloudflare_integration' => $cloudflare_integration
        ];
    }
}
