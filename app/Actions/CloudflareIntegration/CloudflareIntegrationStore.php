<?php

namespace App\Actions\CloudflareIntegration;

use App\Models\CloudflareIntegration;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;

class CloudflareIntegrationStore extends Action
{
    protected $secure = [
        'zone_id'
    ];

    public function handle()
    {
        $zone_id = $this->getData('zone_id');

        $cloudflare_integration = Action::build(CloudflareIntegrationFind::class)->data([
            'zone_id' => $zone_id
        ])->run()->getData('cloudflare_integration');

        if (! empty($cloudflare_integration)) {
            return [
                'cloudflare_integration' => $cloudflare_integration
            ];
        }

        $id = 'cloudflare_integration_' . now()->timestamp . '_' . Str::random(16);

        $cloudflare_integration = CloudflareIntegration::create([
            'id' => $id,
            'zone_id' => $zone_id
        ]);

        return [
            'cloudflare_integration' => $cloudflare_integration
        ];
    }
}
