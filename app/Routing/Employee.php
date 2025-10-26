<?php

namespace App\Routing;

use App\Actions\Url\UrlSyncWithDomain;
use App\Constants\DomainType;
use App\Models\Domain;
use App\Services\EmployeePage;
use App\Services\DomainService;
use App\Services\Page;
use Dev\LaravelHighway\Highway;
use Dev\PHPActions\Action;

class Employee extends Highway
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

    public static function view(string $view, array $data = [])
    {
        $domain = DomainService::getDomain();

        if (empty($domain)) {
            Action::build(UrlSyncWithDomain::class)->run();

            $domain = DomainService::getDomain();
        }

        $pageData = array_merge([
            'canonical' => url()->full(),
        ], $data);

        $customerPage = new EmployeePage($pageData);

        Page::setCurrentPage($customerPage);

        $pageData['page'] = $customerPage;

        return view($view, $pageData);
    }
}
