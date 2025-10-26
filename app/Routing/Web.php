<?php

namespace App\Routing;

use App\Actions\Url\UrlSyncWithDomain;
use App\Constants\DomainType;
use App\Constants\TagCondition;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Domain;
use App\Models\Keyword;
use App\Models\Light;
use App\Models\Story;
use App\Models\Tag;
use App\Routing\Amp;
use App\Scopes\DomainProjectScope;
use App\Services\DomainService;
use App\Services\FastService;
use App\Services\LocationService;
use App\Services\Page;
use App\Services\WebPage;
use Exception;
use Illuminate\Support\Facades\Route;
use \Dev\LaravelHighway\Highway;
use Dev\PHPActions\Action;
use Illuminate\Support\Facades\Log;
class Web extends Highway
{
    protected static $namespace = 'App';

    public static function route(string $route, array $parameters = []): string
    {
        $domain = DomainService::getDomain();

        if (empty($domain)) {
            Action::build(UrlSyncWithDomain::class)->run();

            $domain = DomainService::getDomain();
        }
$url = null;
try {
        $url = route($route, $parameters);
} catch (Exception $e) {
Log::info($domain->domain);
Log::info($route);
Log::info($parameters);
Log::error($e);
}
        $canonical = $domain->getCanonicalDomain();

        if ($canonical?->type != DomainType::$primary && $domain->type != DomainType::$primary) {
            $primaryDomain =  Domain::where('type', DomainType::$primary)->whereNull('location_id')->withoutGlobalScope(DomainProjectScope::class)->first();

            return str_replace($domain->domain, $primaryDomain->domain, $url);
        }

        return str_replace('https://' . $domain->domain, 'https://' . $canonical?->domain ?? $domain->domain, $url);
    }

    public static function view(string $view, array $data = [])
    {
        $domain = DomainService::getDomain();

        if (empty($domain)) {
            Action::build(UrlSyncWithDomain::class)->run();

            $domain = DomainService::getDomain();
        }

        $amp = str_replace(strtolower(self::get_class_name()) . '.', 'amp.', explode('pages.', $view)[1]);

        $currentRoute = Route::current();
        $parameters = $currentRoute->parameters();

        $parameters = array_merge($parameters, request()->all());

        $ampParameters = [];

        foreach ($parameters as $key => $value) {
            $ampParameters[$key] = $value ?? $data[$key] ?? request()->$key;
$ampParameters["v"] = \Carbon\Carbon::now()->timestamp;
        }

        if (Route::has($amp)) {
            $amp = Amp::route($amp, $ampParameters);
        } else {
            $amp = null;
        }

        $blog = null;

        if (!key_exists('blog', $data)) {
            $blog = Blog::current();
        }

        $story = null;

        if (!key_exists('story', $data)) {
            $story = Story::current();
        }

        $article = null;

        if (!key_exists('article', $data)) {
            $article = Article::current();
        }

        $keyword = null;

        if (!key_exists('keyword', $data)) {
            $keyword = Keyword::current();
        }

        $tagDataCollection = [];

        $tagCollection = Tag::all();

        foreach ($tagCollection as $tagValue) {
            try {
                $tmp = TagCondition::query($tagValue);

                if (empty($tmp)) {
                    continue;
                }

                $tagDataCollection[$tagValue->id] = [
                    'data' => $tmp->list(15, null, $tagValue->id),
                    'tag' => $tagValue
                ];
            } catch (Exception $e) {
            }
        }

        if (!key_exists('blogs', $data)) {
            $data['blogs'] = Blog::whereLocation()->latest()->list(16);
        }

        $pageData = array_merge([
            'story' => $story,
            'blog' => $blog,
            'article' => $article,
            'amp_html' => $amp,
            'domain' => $domain,
            'keyword' => $keyword,
            'keywords' => $blog?->tags ?? $story?->tags ?? null,
            'location' => LocationService::getLocation(),
            'alias' => empty($keyword) ? null : request()->alias,
            'tags_data' => $tagDataCollection,
        ], $data);

        $webPage = new WebPage($pageData);

        Page::setCurrentPage($webPage);

        $pageData['page'] = $webPage;

        $rawView = view($view, $pageData);

        $rendered = $rawView->render();

        Light::createForHtml($rendered);

        return $rendered;
    }
}
