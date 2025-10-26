<?php

namespace App\Actions\Sitemap;

use Carbon\Carbon;
use Exception;
use Google\Service\Webmasters;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Dev\PHPActions\Action;

class SitemapGoogleSubmit extends Action
{
    protected $secure = [
        'sitemap',
        'user'
    ];

    public function handle()
    {
        $sitemap = $this->getData('sitemap');
        $user = $this->getData('user');

        $domain = $sitemap->domain;

        if (empty($domain)) {
            return;
        }

        if (!empty($sitemap->google_sitemap_submitted_at) && !empty($sitemap->google_site_id)) {
            if (Carbon::now()->diffInDays($sitemap->google_sitemap_submitted_at) < 1) {
                return;
            }
        }

        if (empty($sitemap->google_site_id)) {
            $sitemap = Action::build(SitemapGoogleAdd::class)->data([
                'domain' => $domain,
                'user' => $user
            ])->run()->getData('sitemap');

            if (empty($sitemap)) {
                return;
            }
        }

        $project = $domain->site->project;

        if (App::runningUnitTests() || $project->googleIntegrations->isEmpty()) {
            return;
        }

        if (empty($user)) {
            $user = auth()->user();
        }

        $google_authentication = $user->googleAuthentication;

        if (empty($google_authentication)) {
            return null;
        }

        $google_integration = $google_authentication->googleIntegration;

        if (empty($google_integration)) {
            return;
        }

        if ($google_integration->project_id != $project->id) {
            return;
        }

        if ($google_authentication->shouldAuthenticate()) {
            return null;
        }

        $client = $google_authentication->client();

        $service = new Webmasters($client);

        try {
            URL::forceScheme('https');
            URL::forceRootUrl('https://' . $domain->domain);

            $url = route('file.sitemap.show');

            if (!str_ends_with($url, '/')) {
                $url = $url . '/';
            }

            if (empty($sitemap->google_site_id)) {
                $response = $service->sites->get('sc-domain:' . $domain->domain);

                if (!empty($response) && !empty($response->siteUrl)) {
                    $sitemap = Action::build(SitemapUpdate::class)->data([
                        'domain' => $domain,
                        'google_site_id' => $response->siteUrl,
                        'google_permission_level' => $response->permissionLevel
                    ])->run()->getData('sitemap');
                }
            }

            $result = $service->sitemaps->submit('sc-domain:' . $domain->domain, $url);

            $sitemap = Action::build(SitemapUpdate::class)->data([
                'domain' => $domain,
                'google_sitemap_submitted_at' =>  Carbon::now()
            ])->run()->getData('sitemap');
        } catch (Exception $e) {
            Log::info($e);
        }

        return [
            'sitemap' => $sitemap
        ];
    }
}
