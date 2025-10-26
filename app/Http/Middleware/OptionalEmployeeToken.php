<?php

namespace App\Http\Middleware;

use App\Models\EmployeeToken;
use App\Services\EmployeeTokenService;
use Carbon\Carbon;
use Closure;

class OptionalEmployeeToken
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
        $customerTokenData = $request->employee_token;

        $tokenId = $customerTokenData['token_id'] ?? null;
        $customerId = $customerTokenData['employee_id'] ?? null;

        if (auth('employee')->check()) {
            return $next($request);
        }

        if (empty($tokenId) || empty($customerId)) {
            return $next($request);
        }

        $customerToken = EmployeeToken::where('token_id', $tokenId)->first();

        if (empty($customerToken)) {
            return $next($request);
        }

        if ($customerId != $customerToken->employee_id) {
            return $next($request);
        }

        if (Carbon::now()->diffInHours($customerToken->created_at) > 24) {
            $customerToken->delete();
            return $next($request);
        }

        auth('employee')->login($customerToken->employee);

        EmployeeTokenService::setEmployeeToken($customerToken);

        return $next($request);
    }
}
