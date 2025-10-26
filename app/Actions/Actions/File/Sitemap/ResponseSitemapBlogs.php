<?php

namespace App\Actions\File\Sitemap;

use Dev\PHPActions\Action;

use App\Models\Blog;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Dev\PHPSitemap\ChangeFrequency;
use Dev\PHPSitemap\Sitemap;
use App\Models\Light;

class ResponseSitemapBlogs extends Action
{
    public function handle()
    {
        $sitemap = new Sitemap();

        $page = $this->getData('page');

        $blogs = Blog::whereLocation()->list(400, $page ?? 0);

        foreach ($blogs as $blog) {
            $url = \App\Services\UrlService::getTargetPath(URL::route('web.blog.show', [
                'id' => $blog->id
            ]));
            $sitemap->add($url, 0.6, ChangeFrequency::Monthly);
        }

$rs = $sitemap->generate();

Light::createForXml($rs);
        return Response::make($rs, 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
