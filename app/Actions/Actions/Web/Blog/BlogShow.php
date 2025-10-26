<?php

namespace App\Actions\Web\Blog;

use Dev\PHPActions\Action;
use App\Models\Blog;
use App\Models\Domain;
use App\Models\Url;
use App\Routing\Web;
use App\Services\LocationService;
use App\Services\UrlService;

class BlogShow extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        $blog = null;

        if (!empty($id)) {
            $blog = Blog::where('id', $id)->limit(1)->with('blogContent')->first();
        }

        if (empty($blog)) {
            $blog = Blog::whereLocation()->random()->limit(1)->with('blogContent')->get()->first();
        }

        if (empty($blog)) {
            return Web::redirect('web.home.show');
        }

        $location = LocationService::getLocation();

        if (! empty($location)) {
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
        }

        return [
            'blog' => $blog,
            'canonical' => Web::route('web.blog.show', ['id' => $blog->id]),
        ];
    }
}
