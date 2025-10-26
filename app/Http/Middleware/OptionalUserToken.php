<?php

namespace App\Http\Middleware;

use App\Models\UserToken;
use App\Services\UserTokenService;
use Carbon\Carbon;
use Closure;

class OptionalUserToken
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
        $userTokenData = $request->user_token;

        $tokenId = $userTokenData['token_id'] ?? null;
        $userId = $userTokenData['user_id'] ?? null;

        if (auth()->check()) {
            return $next($request);
        }

        if (empty($tokenId) || empty($userId)) {
            return $next($request);
        }

        $userToken = UserToken::where('token_id', $tokenId)->first();

        if (empty($userToken)) {
            return $next($request);
        }

        if ($userId != $userToken->user_id) {
            return $next($request);
        }

        if (Carbon::now()->diffInHours($userToken->created_at) > 24) {
            $userToken->delete();
            return $next($request);
        }

        auth()->login($userToken->user);

        UserTokenService::setUserToken($userToken);

        return $next($request);
    }
}
