<?php

namespace App\Actions\Site;

use App\Models\Site;
use Illuminate\Support\Facades\Log;
use Dev\PHPActions\Action;

class SiteGetByDomain extends Action
{
    protected $secure = [
        'origin'
    ];

    public function handle()
    {
        $origin = $this->getData('origin');

        if (empty($origin)) {
            return;
        }

        $explodedOrigin = explode('.', $origin);

        $explodedOriginCount = count($explodedOrigin);

        if ($explodedOriginCount < 2) {
            return;
        }

        $domain = '';

        for ($i = $explodedOriginCount - 2; $i < $explodedOriginCount; $i++) {
            if ($i < $explodedOriginCount - 1) {
                $domain .= $explodedOrigin[$i] . '.';
            } else {
                $domain .= $explodedOrigin[$i];
            }
        }

        $site = Site::where('origin', $domain)->get()->first();

        if (empty($site)) {
            return;
        }

        return [
            'site' => $site
        ];
    }
}
