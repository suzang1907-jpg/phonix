<?php

namespace App\Actions\File\Sitemap;

use Dev\PHPActions\Action;
use App\Models\Light;
use App\Models\Location;
use App\Services\ProjectService;
use App\Services\WorkspaceService;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Dev\PHPSitemap\ChangeFrequency;
use Dev\PHPSitemap\Sitemap;

class ResponseSitemapLocationCountry extends Action
{
    public function handle()
    {
        $sitemap = new Sitemap();

        $page = $this->getData('page');

        $project = ProjectService::getProject();

        if (! empty($project->location)) {
            $url = URL::route('web.location.country.show', [
                'country' => $project->location->country->country
            ]);
            $sitemap->add($url, 0.6, ChangeFrequency::Monthly);
        } else {
            $locations = Location::whereNull('city_id')->whereNull('district_id')->with('country')->list(400, $page ?? 0);

            foreach ($locations as $location) {
                $url = URL::route('web.location.country.show', [
                    'country' => $location->country->country
                ]);
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
