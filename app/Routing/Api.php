<?php

namespace App\Routing;

use App\Actions\Url\UrlSyncWithDomain;
use App\Constants\DomainType;
use App\Models\Domain;
use App\Services\DomainService;
use Illuminate\Http\JsonResponse;
use Dev\LaravelHighway\Highway;
use Dev\PHPActions\Action;

class Api extends Highway
{
    public static function route(string $route, array $parameters = []): string
    {
        $domain = DomainService::getDomain();

        if (empty($domain)) {
            Action::build(UrlSyncWithDomain::class)->run();

            $domain = DomainService::getDomain();
        }

        $url = route($route, $parameters);

        $canonical = $domain->getCanonicalDomain();

        if ($canonical?->type != DomainType::$primary && $domain->type != DomainType::$primary) {
            $primaryDomain =  Domain::where('type', DomainType::$primary)->first();

            return str_replace($domain->domain, $primaryDomain->domain, $url);
        }

        return str_replace($domain->domain, $canonical?->domain ?? $domain->domain, $url);
    }

    public static function done(array | null $data = [], string | null $redirect = null): JsonResponse
    {
        return response()->json([
            'status' => 'done',
            'redirect' => $redirect,
            'data' => $data ?? [],
        ]);
    }

    public static function error(array | null $data = [], string | null $redirect = null): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'redirect' => $redirect,
            'data' => $data ?? [],
        ]);
    }
}
