<?php

namespace App\Actions\Sitemap;

use Exception;
use Google\Service\Webmasters;
use Illuminate\Support\Facades\App;
use Dev\PHPActions\Action;

class SitemapGoogleAdd extends Action
{
    protected $secure = [
        'domain',
        'user'
    ];

    public function handle()
    {
        $domain = $this->getData('domain');
        $user = $this->getData('user');

        if (empty($domain)) {
            return;
        }

        $project = $domain->site->project;

        if (App::runningUnitTests() || $project->googleIntegrations->isEmpty()) {
            $sitemap = Action::build(SitemapUpdate::class)->data([
                'domain' => $domain,
            ])->run()->getData('sitemap');

            return [
                'sitemap' => $sitemap
            ];
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
            return;
        }

        $client = $google_authentication->client();

        $service = new Webmasters($client);

        $googleAddResponse = null;

        $google_site_id = 'sc-domain:' . $domain->domain;

        try {
            $googleAddResponse = $service->sites->add($google_site_id);
        } catch (Exception $e) {
        }

        if (empty($googleAddResponse)) {
            try {
                $googleAddResponse = $service->sites->get($google_site_id);
            } catch (Exception $e) {
            }

            if (empty($googleAddResponse)) {
                return;
            }
        }

        $sitemap = Action::build(SitemapUpdate::class)->data([
            'domain' => $domain,
        ])->run()->getData('sitemap');

        return [
            'sitemap' => $sitemap
        ];
    }
}
