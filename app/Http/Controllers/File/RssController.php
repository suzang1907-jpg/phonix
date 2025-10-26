<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Domain;
use App\Models\Story;
use App\Services\DomainService;

class RssController extends Controller
{
    public function blogs()
    {
        $domain = DomainService::getDomain();

        return response()->view('rss.blogs', [
            'domain' => $domain,
            'blogs' => Blog::whereLocation()->latest()->list(100),
        ])->header('Content-Type', 'text/xml');
    }

    public function articles()
    {
        $domain = DomainService::getDomain();

        return response()->view('rss.articles', [
            'domain' => $domain,
            'articles' => Article::latest()->limit(100)->get(),
        ])->header('Content-Type', 'text/xml');
    }
    public function stories()
    {
        $domain = DomainService::getDomain();

        return response()->view('rss.stories', [
            'domain' => $domain,
            'stories' => Story::whereLocation()->latest()->list(100),
        ])->header('Content-Type', 'text/xml');
    }

}