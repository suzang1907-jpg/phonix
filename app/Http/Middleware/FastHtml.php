<?php

namespace App\Http\Middleware;

use App\Services\FastService;
use Closure;

class FastHtml
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
        if (!config('fast.enabled')) {
            return $next($request);
        }

        $cache = FastService::get('html');

        if (empty($cache)) {
            return $next($request);
        }

        return response($cache)
            ->header('Content-Type', 'text/html');
    }
}
