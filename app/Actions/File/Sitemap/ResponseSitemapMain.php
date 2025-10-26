<?php

namespace App\Actions\File\Sitemap;

use Dev\PHPActions\Action;

use App\Routing\Web;
use Illuminate\Support\Facades\Response;
use Dev\PHPSitemap\ChangeFrequency;
use Dev\PHPSitemap\Sitemap;
use App\Models\Light;

class ResponseSitemapMain extends Action
{
    public function handle()
    {
        $sitemap = new Sitemap();

        $urls = [
            'web.home.show',
            'web.blog.list',
            'web.story.list',
        ];

        foreach ($urls as $url) {
            $sitemap->add(Web::route($url), 0.7, ChangeFrequency::Daily);
        }

$content = $sitemap->generate();

Light::createForXml($content);

        return Response::make($content, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
