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
                if (config('x.force_https')) {
                    return redirect()->secure($url->target_path);
                } else {
                    return redirect($url->target_path);
                }
            }

            UrlService::setUrl($url);
        }

        return $next($request);
    }
}
