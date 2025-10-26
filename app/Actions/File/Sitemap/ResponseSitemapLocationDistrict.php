<?php

namespace App\Actions\File\Sitemap;

use Dev\PHPActions\Action;

use App\Models\Location;
use App\Services\DomainService;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Dev\PHPSitemap\ChangeFrequency;
use Dev\PHPSitemap\Sitemap;
use App\Models\Light;

class ResponseSitemapLocationDistrict extends Action
{
    public function handle()
    {
        $sitemap = new Sitemap();

        $page = $this->getData('page');

        $domain = DomainService::getDomain();

        $location = $domain->location;

        if (!empty($location) && !empty($location->city_id) && !empty($location->district_id)) {
            $url = \App\Services\UrlService::getTargetPath(URL::route('web.location.district.show', [
                'country' => $location->country->country,
                'city' => $location->city->city,
                'district' => $location->district->district
            ]));
            $sitemap->add($url, 0.6, ChangeFrequency::Monthly);
        } elseif (!empty($location) && !empty($location->city_id)) {
            $locations = Location::whereHas('city')->whereHas('district')->with('country')->with('city')->with('district')->where('city_id', $location->city_id)->list(400, $page ?? 0);

            foreach ($locations as $tmp) {
                $url = \App\Services\UrlService::getTargetPath(URL::route('web.location.district.show', [
                    'country' => $tmp->country->country,
                    'city' => $tmp->city->city,
                    'district' => $tmp->district->district
                ]));

                $sitemap->add($url, 0.6, ChangeFrequency::Monthly);
            }
        } else {
            $locations = Location::whereHas('city')->whereHas('district')->with('country')->with('city')->with('district')->list(400, $page ?? 0);

            foreach ($locations as $location) {
                $url = \App\Services\UrlService::getTargetPath(URL::route('web.location.district.show', [
                    'country' => $location->country->country,
                    'city' => $location->city->city,
                    'district' => $location->district->district
                ]));

                $sitemap->add($url, 0.6, ChangeFrequency::Monthly);
            }
        }

$rs = $sitemap->generate();

Light::createForXml($rs);

        return Response::make($rs, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
