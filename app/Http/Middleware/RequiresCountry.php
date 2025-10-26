<?php

namespace App\Http\Middleware;

use App\Routing\Web;
use App\Services\LocationService;
use Closure;

class RequiresCountry
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
        if (empty(LocationService::getCountry())) {
            return Web::redirect('web.home.show');
        }

        return $next($request);
    }
}
