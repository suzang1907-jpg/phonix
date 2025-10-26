<?php

namespace App\Actions\Domain;

use Dev\PHPActions\Action;
use App\Models\Domain;
use App\Models\GoogleAuthentication;
use App\Scopes\CurrentUserScope;
use Carbon\Carbon;
use Exception;
use Google\Service\Indexing;
use Google\Service\Indexing\UrlNotification;
use Google\Service\Webmasters;
use Illuminate\Support\Facades\URL;

class DomainSitemapSubmit extends Action
{
    protected $secure = [
        'domain'
    ];

    public function handle()
    {
        $id = $this->getData('id');
        $force = $this->getData('force');

        if (empty($id)) {
            $domainToSubmit = $this->getData('domain');
        } else {
            $domainToSubmit = Domain::where('id', $id)->first();
        }

        if (empty($domainToSubmit)) {
            return null;
        }

        if (!empty($domainToSubmit->google_sitemap_submitted_at) && !$force) {
            if (Carbon::now()->diffInHours($domainToSubmit->google_sitemap_submitted_at) < 24) {
                return null;
            }
        }

        $google_authentication = GoogleAuthentication::withoutGlobalScope(CurrentUserScope::class)->where('user_id', $domainToSubmit->user_id)->get()->first();

        if (empty($google_authentication)) {
            return null;
        }

        if ($google_authentication->shouldAuthenticate()) {
            return null;
        }

        $client = $google_authentication->client();

        $service = new Webmasters($client);

        try {
            URL::forceScheme('https');
            URL::forceRootUrl('https://' . $domainToSubmit->domain);

            $url = route('file.sitemap.show');

            if (!str_ends_with($url, '/')) {
                $url = $url . '/';
            }

            if (empty($domainToSubmit->google_site_id)) {
                $response = $service->sites->get('sc-domain:' . $domainToSubmit->domain);

                if (!empty($response) && !empty($response->siteUrl)) {
                    $domainToSubmit->update([
                        'google_site_id' => $response->siteUrl,
                        'google_permission_level' => $response->permissionLevel
                    ]);
                }
            }

            $result = $service->sitemaps->submit('sc-domain:' . $domainToSubmit->domain, $url);

            $domainToSubmit->update([
                'google_sitemap_submitted_at' => Carbon::now()
            ]);
        } catch (Exception $e) {
        }

        return null;
    }

    public function submitUrl(mixed $client, string $url)
    {
        try {
            $service = new Indexing($client);

            $urlNotification = new UrlNotification(['url' => $url, 'type' => 'URL_UPDATED']);

            $response = $service->urlNotifications->publish($urlNotification);
        } catch (Exception $e) {
        }
    }
}
