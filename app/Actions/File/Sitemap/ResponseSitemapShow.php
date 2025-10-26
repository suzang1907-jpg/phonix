<?php

namespace App\Actions\File\Sitemap;

use Dev\PHPActions\Action;

use App\Models\Blog;
use App\Models\Location;
use App\Models\Story;
use App\Routing\File;
use App\Services\DomainService;
use Illuminate\Support\Facades\Response;
use Dev\PHPSitemap\SitemapIndex;
use App\Models\Light;

class ResponseSitemapShow extends Action
{
    public function handle()
    {
	$domain = DomainService::getDomain();

	if (empty($domain)) {
		return response()->noContent();
}

        $sitemap = new SitemapIndex();

        $values = [
            File::route('file.sitemap.main'),
            File::route('file.sitemap.keywords'),
        ];

        $blogs = null;

        $blogs = Blog::whereLocation()->list(400);

        $lastPage = $blogs->lastPage();
        $lastPage++;

        for ($i = 1; $i < $lastPage; $i++) {
            array_push($values, File::route('file.sitemap.blogs', [
                'page' => $i
            ]));
        }

        $stories = null;

        $stories = Story::whereLocation()->list(400);

        $lastPage = $stories->lastPage();
        $lastPage++;

        for ($i = 1; $i < $lastPage; $i++) {
            array_push($values, File::route('file.sitemap.stories', [
                'page' => $i
            ]));
        }

        $blogs = null;

        $locations = Location::whereNull('city_id')->whereNull('district_id')->with('country')->list(400, $page ?? 0);

        $lastPage = $locations->lastPage();
        $lastPage++;

        for ($i = 1; $i < $lastPage; $i++) {
            array_push($values, File::route('file.sitemap.location.country', [
                'page' => $i
            ]));
        }

        $locationQuery = Location::whereHas('city')->whereNull('district_id')->with('country')->with('city');

        $location = DomainService::getDomain()->location;

        if (!empty($location)) {
            if (!empty($location->city_id)) {
                $locationQuery->where('city_id', $location->city_id);
            }
        }

        $locations = $locationQuery->list(400, $page ?? 0);

        $lastPage = $locations->lastPage();
        $lastPage++;

        for ($i = 1; $i < $lastPage; $i++) {
            array_push($values, File::route('file.sitemap.location.city', [
                'page' => $i
            ]));
        }

        $locationQuery = Location::whereHas('city')->whereHas('district')->with('country')->with('city')->with('district');

        $location = DomainService::getDomain()->location;

        if (!empty($location)) {
            if (!empty($location->city_id)) {
                $locationQuery->where('city_id', $location->city_id);
            }

            if (!empty($location->district_id)) {
                $locationQuery->where('district_id', $location->district_id);
            }
        }

        $locations = $locationQuery->list(400, $page ?? 0);

        $lastPage = $locations->lastPage();
        $lastPage++;

        for ($i = 1; $i < $lastPage; $i++) {
            array_push($values, File::route('file.sitemap.location.district', [
                'page' => $i
            ]));
        }

        foreach ($values as $value) {
            $sitemap->add($value);
        }

$rs = $sitemap->generate();

Light::createForXml($rs);

        return Response::make($rs, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
