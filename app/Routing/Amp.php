<?php

namespace App\Routing;

use App\Actions\Url\UrlSyncWithDomain;
use App\Constants\DomainType;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Domain;
use App\Models\Keyword;
use App\Models\Story;
use App\Scopes\DomainProjectScope;
use App\Services\AmpPage;
use App\Services\DomainService;
use App\Services\FastService;
use App\Services\LocationService;
use App\Services\Page;
use Illuminate\Support\Facades\Route;
use Dev\LaravelHighway\Highway;
use Dev\PHPActions\Action;

class Amp extends Highway
{
    public static function view(string $view, array $data = [])
    {
        $domain = DomainService::getDomain();

        if (empty($domain)) {
            Action::build(UrlSyncWithDomain::class)->run();

            $domain = DomainService::getDomain();
        }

        $canonical = str_replace(strtolower(self::get_class_name()) . '.', 'web.', explode('pages.', $view)[1]);

        $currentRoute = Route::current();
        $parameters = $currentRoute->parameters();

        $parameters = array_merge($parameters, request()->all());

        $webParameters = [];

        foreach ($parameters as $key => $value) {
            $webParameters[$key] = $value ?? $data[$key] ?? request()->$key;
        }

        if (Route::has($canonical)) {
            $canonical = Web::route($canonical, $webParameters);
        } else {
            $canonical = null;
        }

        $blog = null;

        if (!key_exists('blog', $data)) {
            $blog = Blog::current();
        }

        $story = null;

        if (!key_exists('story', $data)) {
            $story = Story::current();
        }

        $blogs = null;

        if (!key_exists('blogs', $data)) {
            $blogs = Blog::whereLocation()->latest()->list();
        }

        $article = null;

        if (!key_exists('article', $data)) {
            $article = Article::current();
        }

        $keyword = null;

        if (!key_exists('keyword', $data)) {
            $keyword = Keyword::current();
        }

        $location = LocationService::getLocation();

        $city = LocationService::getCity();
        $district = LocationService::getDistrict();

        $articles_raw = Article::query()->random()->get();
        $articles = [];
        $filtered_a = $articles_raw->filter(function ($n) {
            return $n->title != "**";
        })->all();
        foreach ($articles_raw as $a) {
            $atmp = $a;
            $article_copy = $filtered_a[array_rand($filtered_a)];
            if ($atmp->title == "**") {
                $atmp->title = $article_copy->title;
            }
            array_push($articles, $atmp);
        }

        $pageData = array_merge([
            'story' => $story,
            'blog' => $blog,
            'article' => $article,
            'canonical' => $canonical,
            'domain' => $domain,
            'keyword' => $keyword,
            'articles' => $articles,
            'keywords' => $blog?->tags ?? $story?->tags ?? null,
            'blogs' => $blogs,
            'location' => $location
        ], $data);

        $webPage = new AmpPage($pageData);

        Page::setCurrentPage($webPage);

        $pageData['page'] = $webPage;

        $rawView = view($view, $pageData);

        $rendered = $rawView->render();

        return $rendered;
    }

    public static function route(string $route, array $parameters = []): string
    {
        $domain = DomainService::getDomain();

        if (empty($domain)) {
            Action::build(UrlSyncWithDomain::class)->run();

            $domain = DomainService::getDomain();
        }

        $country = LocationService::getCountry();
        $city = LocationService::getCity();
        $district = LocationService::getDistrict();

        $canonical = $domain->id;

        if ($domain->type != DomainType::$primary) {
            $canonical = request()->can ?? $domain->getCanonicalDomain()?->id ?? $domain->id;
        }

        $data = [
            'can' => $canonical,
        ];

        if (!empty($country)) {
            $data['country'] = $country->country;
        }

        if (!empty($city)) {
            $data['city'] = $city->city;
        }

        if (!empty($district)) {
            $data['district'] = $district->district;
        }

        $url = route($route, array_merge($data, $parameters));

        if ($domain->type == DomainType::$primary) {
            return str_replace('https://' . $domain->domain, 'https://' . self::_getAmpDomain(), $url);
        }

        return $url;
    }

    public static function _getAmpDomain(): string
    {
        $domain = DomainService::getDomain();

        if (empty($domain)) {
            Action::build(UrlSyncWithDomain::class)->run();

            $domain = DomainService::getDomain();
        }

        $domainUrl = Domain::where('type', DomainType::$offer_list)->orderBy('created_at', 'desc')->withoutGlobalScope(DomainProjectScope::class)->first()?->domain ?? Domain::where('type', DomainType::$offer_show)->orderBy('created_at', 'desc')->withoutGlobalScope(DomainProjectScope::class)->first()?->domain ?? $domain->domain;

        return $domainUrl;
    }
}
