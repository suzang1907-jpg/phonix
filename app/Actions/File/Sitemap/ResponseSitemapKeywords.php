<?php

namespace App\Actions\File\Sitemap;

use Dev\PHPActions\Action;

use App\Models\Keyword;
use App\Routing\Web;
use Illuminate\Support\Facades\Response;
use Dev\PHPSitemap\ChangeFrequency;
use Dev\PHPSitemap\Sitemap;
use App\Models\Light;

class ResponseSitemapKeywords extends Action
{
    public function handle()
    {
        $sitemap = new Sitemap();

        $keywords = Keyword::get();

        foreach ($keywords as $keyword) {
            $sitemap->add(Web::route('web.keyword.show', [
                'id' => $keyword->id
            ]), 0.5, ChangeFrequency::Monthly);
        }

$rs = $sitemap->generate();

Light::createForXml($rs);

        return Response::make($rs, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
