<?php

namespace App\Http\Middleware;

use App\Models\UserToken;
use App\Routing\Web;
use App\Services\UserTokenService;
use Carbon\Carbon;
use Closure;

class VerifyUserToken
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

        if (auth('user')->check()) {
            return $next($request);
        }

        if (empty($tokenId) || empty($userId)) {
            return Web::redirect('web.home.show');
        }

        $userToken = UserToken::where('token_id', $tokenId)->first();

        if (empty($userToken)) {
            return Web::redirect('web.home.show');
        }

        if ($userId != $userToken->user_id) {
            return Web::redirect('web.home.show');
        }

        if (Carbon::now()->diffInHours($userToken->created_at) > 24) {
            $userToken->delete();
            return Web::redirect('web.home.show');
        }

        auth('user')->login($userToken->user);

        UserTokenService::setUserToken($userToken);

        return $next($request);
    }
}
