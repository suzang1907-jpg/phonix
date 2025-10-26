<?php

namespace App\Http\Middleware;

use App\Services\LocationService;
use Closure;

class Localize
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
        LocationService::setup();

        return $next($request);
    }
}
