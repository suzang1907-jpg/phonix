<?php

namespace App\Actions\File\Sitemap;

use Dev\PHPActions\Action;
use App\Models\Light;
use App\Models\Location;
use App\Services\DomainService;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Dev\PHPSitemap\ChangeFrequency;
use Dev\PHPSitemap\Sitemap;

class ResponseSitemapLocationCity extends Action
{
    public function handle()
    {
        $sitemap = new Sitemap();

        $page = $this->getData('page');

        $domain = DomainService::getDomain();

        $location = $domain->location;

        if (!empty($location) && !empty($location->city_id)) {
            $url = URL::route('web.location.city.show', [
                'country' => $location->country->country,
                'city' => $location->city->city
            ]);
            $sitemap->add($url, 0.6, ChangeFrequency::Monthly);
        } else {
            $project = ProjectService::getProject();

            if (! empty($project->location)) {
                $locations = Location::where('country_id', $project->location->country_id)->whereHas('city')->whereNull('district_id')->with('country')->with('city')->list(400, $page ?? 0);

                foreach ($locations as $location) {
                    $url = \App\Services\UrlService::getTargetPath(URL::route('web.location.city.show', [
                        'country' => $location->country->country,
                        'city' => $location->city->city
                    ]));
                    $sitemap->add($url, 0.6, ChangeFrequency::Monthly);
                }
            } else {
                $locations = Location::whereHas('city')->whereNull('district_id')->with('country')->with('city')->list(400, $page ?? 0);

                foreach ($locations as $location) {
                    $url = \App\Services\UrlService::getTargetPath(URL::route('web.location.city.show', [
                        'country' => $location->country->country,
                        'city' => $location->city->city
                    ]));
                    $sitemap->add($url, 0.6, ChangeFrequency::Monthly);
                }
            }
        }

$rs = $sitemap->generate();

Light::createForXml($rs);

        return Response::make($rs, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
