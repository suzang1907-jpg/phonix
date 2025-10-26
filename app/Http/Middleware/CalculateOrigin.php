<?php

namespace App\Http\Middleware;

use App\Actions\Url\UrlSyncWithDomain;
use Closure;
use Dev\PHPActions\Action;

class CalculateOrigin
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
        $origin = request()->url();

        if (str_contains($origin, 'https://')) {
            $origin = explode('https://', $origin)[1];
        }

        if (str_contains($origin, 'http://')) {
            $origin = explode('http://', $origin)[1];
        }

        if (str_starts_with($origin, 'www.')) {
            $origin = str_replace('www.', '', $origin);
            $origin = 'https://' . $origin;

            return redirect()->secure($origin);
        }

        Action::build(UrlSyncWithDomain::class)->run();

        return $next($request);
    }
}
