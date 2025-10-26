<?php

namespace App\Http\Middleware;

use App\Models\Url;
use App\Services\UrlService;
use Closure;

class UrlRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $url = Url::where('path', url()->full())->first();

        if (! empty($url)) {
            if (! empty($url->target_path)) {
                return redirect()->secure($url->target_path);
            }

            UrlService::setUrl($url);
        }

        return $next($request);
    }
}
