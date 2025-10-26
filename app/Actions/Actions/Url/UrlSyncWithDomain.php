<?php

namespace App\Actions\Url;

use Dev\PHPActions\Action;
use App\Services\DomainService;
use Illuminate\Support\Facades\URL;
use App\Actions\Url\UrlGetOrigin;
use App\Models\Domain;
use App\Scopes\DomainProjectScope;
use App\Services\ProjectService;
use App\Services\SiteService;
use Illuminate\Support\Facades\App;

class UrlSyncWithDomain extends Action
{
    public function handle()
    {

        $origin = Action::build(UrlGetOrigin::class)->run()->getData('origin');

        $domain = Domain::withoutGlobalScope(DomainProjectScope::class)->where('domain', $origin)->get()->first();

        DomainService::setDomain($domain);

        if (!empty($domain)) {
            $site = $domain->site;
            SiteService::setSite($domain->site);

            if (!empty($site)) {
                $project = $site->project;
                ProjectService::setProject($project);
            }
        }

        try {
            URL::forceScheme('https');
            $domain = DomainService::getDomain();

            $url = 'https://' . $domain->domain;
            URL::forceRootUrl($url);
            config([
                'app.url' => $domain->domain
            ]);

            \Illuminate\Pagination\AbstractPaginator::currentPathResolver(function () {
                $url = app('url');
                return $url->current();
            });
        } catch (\Exception $e) {
        }
    }
}
