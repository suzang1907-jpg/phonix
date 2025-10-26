<?php

namespace App\Actions\Web\Location;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Models\Domain;
use App\Models\Url;
use App\Routing\Web;
use App\Services\CanonicalService;
use App\Services\LocationService;
use App\Services\UrlService;

class LocationDistrictShow extends Action
{
    public function handle()
    {
        $location = LocationService::getLocation();
        $country = $this->getData('country');
        $city_raw = $this->getData('city');
        $district_raw = $this->getData('district');

        if (empty($location)) {
            return Web::redirect('web.home.show');
        } else {
            if ($city_raw != $location->city?->city) {
                return Web::redirect('web.home.show');
            }

            if ($district_raw != $location->district?->district) {
                return Web::redirect('web.home.show');
            }
        }

        $url = UrlService::getUrl();

        if (empty($url)) {
            $domainForLocation = Domain::getForLocation($location, true);
            $url = Url::createForUrl($domainForLocation);

            if (! empty($url)) {
                if (! empty($url->target_path)) {
                    return redirect()->secure($url->target_path);
                }
            }
        }

        return [
            'canonical' => CanonicalService::getCanonicalUrl(),
            'blogs' => Blog::whereLocation()->list(),
        ];
    }
}
