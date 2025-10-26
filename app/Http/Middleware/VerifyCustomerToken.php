<?php

namespace App\Http\Middleware;

use App\Models\CustomerToken;
use App\Routing\Web;
use App\Services\CustomerTokenService;
use Carbon\Carbon;
use Closure;

class VerifyCustomerToken
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
            return Web::redirect('web.home.show');
        }

        $customerToken = CustomerToken::where('token_id', $tokenId)->first();

        if (empty($customerToken)) {
            return Web::redirect('web.home.show');
        }

        if ($customerId != $customerToken->customer_id) {
            return Web::redirect('web.home.show');
        }

        if (Carbon::now()->diffInHours($customerToken->created_at) > 24) {
            $customerToken->delete();
            return Web::redirect('web.home.show');
        }

        auth('customer')->login($customerToken->customer);

        CustomerTokenService::setCustomerToken($customerToken);

        return $next($request);
    }
}
