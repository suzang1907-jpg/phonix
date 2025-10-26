<?php

namespace App\Http\Middleware;

use App\Actions\Url\UrlSyncWithDomain;
use App\Constants\DomainType;
use App\Models\Domain;
use App\Services\DomainService;
use Closure;
use Dev\PHPActions\Action;

class OnlyDomainAmp
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
        $domain = DomainService::getDomain();

        if (empty($domain)) {
            Action::build(UrlSyncWithDomain::class)->run();

            $domain = DomainService::getDomain();
        }

        if (empty($domain)) {
            return $this->redirectToAmpDomain($domain);
        }

        if ($domain->type == DomainType::$primary) {
            if (Domain::where('type', '!=', DomainType::$primary)->count() != 0) {
                return $this->redirectToAmpDomain($domain);
            }
        }

        return $next($request);
    }

    public function redirectToAmpDomain($domain)
    {
        $url = url()->full();

        $ampDomain = Domain::where('type', DomainType::$offer_list)->limit(1)->get()->first()?->domain ?? Domain::where('type', DomainType::$offer_show)->limit(1)->get()->first()?->domain;

        if (empty($ampDomain)) {
            return abort(404);
        }

        if (empty($domain) || is_string($domain)) {
            return redirect()->secure($ampDomain->domain);
        }

        return redirect()->secure(str_replace($domain->domain, $ampDomain, $url));
    }
}
