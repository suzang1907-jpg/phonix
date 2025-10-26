<?php

namespace App\Actions\Font;

use App\Actions\Url\UrlGetWithoutDistraction;
use Dev\PHPActions\Action;
use App\Services\DomainService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class ResponseFontRoboto extends Action
{
    public function handle()
    {
        $css = file_get_contents(resource_path('fonts/roboto.css'));

        $css = str_replace('[/url/]', 'https://' . DomainService::getDomain()->domain, $css);

        $rendered = view('font')->with([
            'css' => $css
        ])->render();

        $cache_key = 'v_' . Action::build(UrlGetWithoutDistraction::class)->run()->getData('url');

        if (strlen($cache_key) <= 240) {
            Cache::put($cache_key, $rendered, Carbon::now()->addDay());
        }

        return response($rendered, 200, [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private",
            'Content-Type' => 'text/css'
        ]);
    }
}
