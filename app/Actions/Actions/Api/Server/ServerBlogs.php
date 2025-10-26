<?php

namespace App\Actions\Api\Server;

use App\Models\Blog;
use App\Services\LocalizationService;
use Dev\PHPActions\Action;

class ServerBlogs extends Action
{
    public function  handle()
    {
        return response()->json();

        $project = Action::build(ServerGetProject::class)->run()->getData('project');

        if (empty($project)) {
            return response()->json();
        }

        $location_id  = $this->getData('location_id');

        if (empty($location_id)) {
            return response()->json();
        }

        $blogs = Blog::where('location_id', $location_id)->with('location')->get();

        $result = [];

        foreach ($blogs as $blog) {
            $location = $blog->location;

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

            array_push($result, [
                'id' => $blog->id,
                'title' => $blog->title,
                'description' => $blog->blogContentDescription(),
                'content' => $blog->getFormattedContent($project),
                'project_id' => $blog->project_id,
                'language' => LocalizationService::id($location),
                'location_id' => $location->id,
                'country' => $country->country,
                'city' => $city->city,
                'country_text' => __('location.' . $country->country),
                'city_text' => __('location.' . $city->city),
            ]);
        }

        return response()->json([
            'blogs' => $result
        ]);
    }
}
