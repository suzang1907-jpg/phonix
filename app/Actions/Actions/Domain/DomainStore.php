<?php

namespace App\Actions\Domain;

use App\Actions\Cache\CacheClear;
use App\Actions\CloudflareIntegration\CloudflareIntegrationStore;
use App\Actions\DnsRecord\DnsRecordStore;
use App\Actions\Project\ProjectGet;
use App\Actions\Site\SiteGetByDomain;
use App\Actions\Site\SiteStore;
use App\Actions\Sitemap\SitemapStore;
use App\Actions\Url\UrlGetOrigin;
use App\Actions\Url\UrlGetOriginType;
use App\Constants\DomainType;
use Dev\PHPActions\Action;
use App\Models\Domain;
use App\Models\Site;
use App\Scopes\DomainProjectScope;
use App\Services\ProjectService;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

class DomainStore extends Action
{
    protected $validator = [
        'domain' => 'required',
    ];

    protected $secure = [
        'project_id',
        'domain_id'
    ];

    public function handle()
    {
        $meta = $this->getData('meta');
        $project_id = $this->getData('project_id');
        $domain_id = $this->getData('domain_id');
        $type = $this->getData('type');
        $name = $this->getData('name');
        $domain = $this->getData('domain');
        $cloudflare_zone_identifier = $this->getData('cloudflare_zone_identifier');
        $server_ip = config('app.server_ip');
        $location_id = $this->getData('domain_location_id');

        $project = null;

        $site = null;

        if (empty($type)) {
            $type = DomainType::$primary;
        }

        if (!in_array($type, DomainType::values())) {
            $type = DomainType::$primary;
        }

        $data_meta = [];

        $domainData = [
            'meta' => $data_meta,
            'id' => $domain,
            'domain' => $domain,
            'type' => $type,
            'name' => $name,
            'location_id' => $location_id
        ];

        if (!empty($domain_id)) {
            $existingDomain = Domain::withoutGlobalScope(DomainProjectScope::class)->where('id', $domain_id)->get()->first();

            if (empty($existingDomain)) {
                return;
            }

            $site = $existingDomain->site;

            $site = $this->createCloudflareIntegration($site, $cloudflare_zone_identifier);

            $existingDomain->update([
                'meta' => $data_meta,
                'type' => $type,
                'name' => $name,
                'location_id' => $location_id,
            ]);

            Action::build(CacheClear::class)->run();

            return [
                'domain' => $existingDomain->fresh()
            ];
        }

        if (!empty($project_id)) {
            $project = Action::build(ProjectGet::class)->data(['id' => $project_id])->run()->getData('project');
        } else {
            $project = ProjectService::getProject();
        }

        if (empty($project)) {
            return;
        }

        if (!empty($project->server_ip)) {
            $server_ip = $project->server_ip;
        }

        $existingDomain = Domain::withoutGlobalScope(DomainProjectScope::class)->where('domain', $domain)->get()->first();

        if (!empty($existingDomain)) {
            $site = $existingDomain->site;

            $site = $this->createCloudflareIntegration($site, $cloudflare_zone_identifier);

            return [
                'domain' => $existingDomain->fresh()
            ];
        }

        $origin_type = Action::build(UrlGetOriginType::class)->data([
            'origin' => $domain
        ])->run()->getData();

        if ($origin_type['is_top']) {
            $site = Action::build(SiteStore::class)->data([
                'project_id' => $project->id,
                'origin' => $domain
            ])->run()->getData('site');

            if (empty($site)) {
                return null;
            }
        } else {
            $origin = Action::build(UrlGetOrigin::class)->data([
                'origin' => $domain
            ])->run()->getData('origin');

            $site = Action::build(SiteGetByDomain::class)->data([
                'origin' => $origin
            ])->run()->getData('site');
        }

        if (empty($site)) {
            return;
        }

        $site = $this->createCloudflareIntegration($site, $cloudflare_zone_identifier);

        if (empty($site)) {
            return;
        }

        $domainData['site_id'] = $site->id;

        $result = Domain::create($domainData);

        $result->update([
            'referal_domains' => Action::build(DomainGetReferalDomains::class)->data(['domain_id' => $result->id])->run()->getData('domains')?->map(function ($d) {
                return [
                    'domain' => $d->domain,
                    'id' => $d->id,
                ];
            })
        ]);

        if (str_starts_with($domain, 'admin.')) {
            $server_ip = config('app.server_ip');
        }

        Action::build(SitemapStore::class)->data([
            'domain' => $result
        ])->run();

        if (!App::runningUnitTests() && !empty($site->cloudflare_integration_id)) {
            $cloudflare_api_key = $project->cloudflare_api_key;

            if (!empty($cloudflare_api_key) && !empty($server_ip)) {
                if ($origin_type['is_top']) {
                    Action::build(DnsRecordStore::class)->data([
                        'id' => $site->cloudflare_integration_id,
                        'content' => $server_ip,
                        'name' => $domain,
                        'proxied' => true,
                        'type' => 'A',
                        'site' => $site
                    ])->run();
                } else {
                    Action::build(DnsRecordStore::class)->data([
                        'id' => $site->cloudflare_integration_id,
                        'content' => $server_ip,
                        'name' => $domain,
                        'proxied' => true,
                        'type' => 'A',
                        'site' => $site
                    ])->run();
                }
            }
        }

        $site->refresh();

        $dns_record_is_correct = $site->dnsRecords()->where('name', $result->domain)->where('content', $server_ip)->get()->first();

        if ($dns_record_is_correct) {
            $result->update([
                'dns_record_confirmed_at' => Carbon::now()
            ]);
        }

        return [
            'domain' => $result->fresh()
        ];
    }

    private function createCloudflareIntegration(Site $site, $cloudflare_zone_identifier)
    {
        if (!empty($cloudflare_zone_identifier) && empty($site->cloudflare_integration_id)) {
            $cloudflare_integration = Action::build(CloudflareIntegrationStore::class)->data([
                'zone_id' => $cloudflare_zone_identifier
            ])->run()->getData('cloudflare_integration');

            if (empty($cloudflare_integration)) {
                return null;
            }

            if ($site->cloudflare_integration_id == $cloudflare_integration->id) {
                return $site;
            }

            if (!empty(Site::where('cloudflare_integration_id', $cloudflare_integration->id)->get()->first())) {
                return null;
            }

            $site->update([
                'cloudflare_integration_id' => $cloudflare_integration->id
            ]);
        }

        return $site;
    }
}
