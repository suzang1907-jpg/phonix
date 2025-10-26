<?php

namespace App\Http\Middleware;

use App\Models\Domain;
use App\Services\DomainService;
use Closure;

class RedirectToAdminDomain
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
        $adminDomain = config('admin.domain');

        if (empty($adminDomain)) {
            return $next($request);
        }

        $domain = DomainService::getDomain();

        $url = url()->full();

        if (!str_starts_with($url, 'https://') && !str_starts_with($url, 'http://')) {
            return redirect(str_replace($domain->domain, $adminDomain, $url));
        }

        return $next($request);
    }
}
