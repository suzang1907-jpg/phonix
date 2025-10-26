<?php

namespace App\Actions\Manifest;

use App\Actions\Url\UrlGetWithoutDistraction;
use Dev\PHPActions\Action;
use App\Services\DomainService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class ResponseManifestShow extends Action
{
    public function handle()
    {
        $domain = DomainService::getDomain();

        $data = [
            'domain' => $domain
        ];

        $rendered = view('manifest')->with($data)->render();

        $cache_key = 'v_' . Action::build(UrlGetWithoutDistraction::class)->run()->getData('url');

        if (strlen($cache_key) <= 240) {
            Cache::put($cache_key, $rendered, Carbon::now()->addDay());
        }

        return response($rendered, 200, [
            'Content-Type' => 'application/json'
        ]);
    }
}
