<?php

namespace App\Routing;

use App\Actions\Url\UrlSyncWithDomain;
use App\Constants\DomainType;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Domain;
use App\Models\Keyword;
use App\Models\Story;
use App\Services\AdminPage;
use App\Services\DomainService;
use App\Services\LocationService;
use App\Services\Page;
use Dev\LaravelHighway\Highway;
use Dev\PHPActions\Action;

class Admin extends Highway
{
    public static function route(string $route, array $parameters = []): string
    {
        $domain = DomainService::getDomain();

        if (empty($domain)) {
            Action::build(UrlSyncWithDomain::class)->run();

            $domain = DomainService::getDomain();
        }

        $url = route($route, $parameters);

        $canonical = $domain->getCanonicalDomain();

        if ($canonical?->type != DomainType::$primary && $domain->type != DomainType::$primary) {
            $primaryDomain =  Domain::where('type', DomainType::$primary)->first();

            return str_replace($domain->domain, $primaryDomain->domain, $url);
        }

        return str_replace($domain->domain, $canonical?->domain ?? $domain->domain, $url);
    }

    public static function view(string $view, array $data = [])
    {
        $domain = DomainService::getDomain();

        if (empty($domain)) {
            Action::build(UrlSyncWithDomain::class)->run();

            $domain = DomainService::getDomain();
        }

        $blog = Blog::current();
        $story = Story::current();
        $article = Article::current();
        $keyword = Keyword::current();

        $pageData = array_merge([
            'canonical' => url()->full(),
            'story' => $story,
            'blog' => $blog,
            'article' => $article,
            'domain' => $domain,
            'keyword' => $keyword,
            'articles' => Article::all(),
            'keywords' => $blog?->tags ?? $story?->tags ?? null,
            'blogs' => Blog::list(),
            'location' => LocationService::getLocation(),
        ], $data);

        $webPage = new AdminPage($pageData);

        Page::setCurrentPage($webPage);

        $pageData['page'] = $webPage;

        return view($view, $pageData);
    }
}
