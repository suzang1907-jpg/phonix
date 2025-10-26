<?php

namespace App\Http\Middleware;

use App\Actions\Url\UrlSyncWithDomain;
use App\Constants\DomainType;
use App\Models\Domain;
use App\Routing\Amp;
use App\Services\DomainService;
use Closure;
use Dev\PHPActions\Action;

class OnlyDomainPrimary
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
            return redirect()->secure(Domain::random()->limit(1)->get()->first()->domain);
        }

        if ($domain->type != DomainType::$primary) {
            return Amp::redirect('amp.home.show');
        }

        return $next($request);
    }
}
