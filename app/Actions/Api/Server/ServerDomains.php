<?php

namespace App\Actions\Api\Server;

use App\Actions\Localization\LocalizationReplaceText;
use App\Constants\DomainType;
use App\Models\Domain;
use App\Scopes\DomainProjectScope;
use App\Services\LocalizationService;
use Dev\PHPActions\Action;

class ServerDomains extends Action
{
    public function  handle()
    {
        $project = Action::build(ServerGetProject::class)->run()->getData('project');

        if (empty($project)) {
            return response()->json();
        }

        $domains = $project->domains()->where('type', DomainType::$primary)->with('site')->with('location')->get();

        $result = [];

        foreach ($domains as $domain) {
            $location = $domain->location;

            if (empty($location)) {
                continue;
            }

            $country = $location->country;

            if (empty($country)) {
                continue;
            }

            $city = $location->city;

            if (empty($city)) {
                continue;
            }

            $amp = Domain::where('type', DomainType::$offer_list)->withoutGlobalScope(DomainProjectScope::class)->first()?->domain ?? Domain::where('type', DomainType::$offer_show)->withoutGlobalScope(DomainProjectScope::class)->first()?->domain ?? $domain->domain;

            if (empty($amp)) {
                continue;
            }

            array_push($result, [
                'id' => $domain->id,
                'domain' => $domain->domain,
                'name' => $domain->name ?? $project->name,
                'amp' => $amp,
                'project_id' => $domain->site->project_id,
                'location_text' => $project->location_text,
                'site_id' => $domain->site_id,
                'language' => LocalizationService::id($location),
                'location_id' => $location->id,
                'country' =>  $country->country,
                'city' => $city->city,
                'country_text' => __('location.' . $country->country),
                'city_text' => __('location.' . $city->city),
                'google_maps_url' => config('locationmap_' . $country->country . '.' . $city->city),
                'description' => Action::build(LocalizationReplaceText::class)->data([
                    'text' =>  $project->location_description,
                    'location' => $domain->location
                ])->run()->getData('text')
            ]);
        }

        return response()->json([
            'domains' => $result
        ]);
    }
}
