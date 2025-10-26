<?php

namespace App\Http\Middleware;

use App\Routing\Employee;
use Closure;

class OnlyEmployeeGuest
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
        if (auth('employee')->check()) {
            return Employee::redirect('employee.dashboard.show');
        }

        return $next($request);
    }
}
