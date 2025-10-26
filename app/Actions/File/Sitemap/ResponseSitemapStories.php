<?php

namespace App\Actions\File\Sitemap;

use Dev\PHPActions\Action;

use App\Models\Light;
use App\Models\Story;
use App\Routing\Web;
use Illuminate\Support\Facades\Response;
use Dev\PHPSitemap\ChangeFrequency;
use Dev\PHPSitemap\Sitemap;

class ResponseSitemapStories extends Action
{
    public function handle()
    {
        $sitemap = new Sitemap();

        $stories = null;

        $stories = Story::whereLocation()->list(400, $page ?? 0);

        foreach ($stories as $story) {
            $url = Web::route('web.story.show', [
                'id' => $story->id,
            ]);
            $sitemap->add($url, 0.5, ChangeFrequency::Monthly);
        }

$rs = $sitemap->generate();

Light::createForXml($rs);

        return Response::make($rs, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
