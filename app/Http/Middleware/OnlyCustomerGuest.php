<?php

namespace App\Http\Middleware;

use App\Routing\Customer;
use Closure;

class OnlyCustomerGuest
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
        if (auth('customer')->check()) {
            return Customer::redirect('customer.dashboard.show');
        }

        return $next($request);
    }
}
