<?php

namespace App\Http\Middleware;

use App\Routing\Admin;
use Closure;

class OnlyGuest
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
        if (auth()->check()) {
            return Admin::redirect('admin.dashboard.show');
        }

        return $next($request);
    }
}
