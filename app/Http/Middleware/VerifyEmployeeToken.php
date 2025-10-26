<?php

namespace App\Http\Middleware;

use App\Models\EmployeeToken;
use App\Routing\Web;
use App\Services\EmployeeTokenService;
use Carbon\Carbon;
use Closure;

class VerifyEmployeeToken
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
            return Web::redirect('web.home.show');
        }

        $customerToken = EmployeeToken::where('token_id', $tokenId)->first();

        if (empty($customerToken)) {
            return Web::redirect('web.home.show');
        }

        if ($customerId != $customerToken->employee_id) {
            return Web::redirect('web.home.show');
        }

        if (Carbon::now()->diffInHours($customerToken->created_at) > 24) {
            $customerToken->delete();
            return Web::redirect('web.home.show');
        }

        auth('employee')->login($customerToken->employee);

        EmployeeTokenService::setEmployeeToken($customerToken);

        return $next($request);
    }
}
