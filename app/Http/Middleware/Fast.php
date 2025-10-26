<?php

namespace App\Http\Middleware;

use App\Services\FastService;
use Closure;

class Fast
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

        $cache = FastService::get();

        if (empty($cache)) {
            return $next($request);
        }

        return response($cache);
    }
}
