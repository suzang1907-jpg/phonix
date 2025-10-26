<?php

namespace App\Http\Middleware;

use App\Models\CustomerToken;
use App\Services\CustomerTokenService;
use Carbon\Carbon;
use Closure;

class OptionalCustomerToken
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
        $customerTokenData = $request->customer_token;

        $tokenId = $customerTokenData['token_id'] ?? null;
        $customerId = $customerTokenData['customer_id'] ?? null;

        if (auth('customer')->check()) {
            return $next($request);
        }

        if (empty($tokenId) || empty($customerId)) {
            return $next($request);
        }

        $customerToken = CustomerToken::where('token_id', $tokenId)->first();

        if (empty($customerToken)) {
            return $next($request);
        }

        if ($customerId != $customerToken->customer_id) {
            return $next($request);
        }

        if (Carbon::now()->diffInHours($customerToken->created_at) > 24) {
            $customerToken->delete();
            return $next($request);
        }

        auth('customer')->login($customerToken->customer);

        CustomerTokenService::setCustomerToken($customerToken);

        return $next($request);
    }
}
