<?php

namespace App\Services;

use App\Actions\Localization\LocalizationReplaceText;
use App\Constants\DomainType;
use App\Models\Article;
use App\Models\Blog;
use App\Models\Keyword;
use App\Models\Story;
use App\Services\Html\Attribute;
use App\Services\Html\Tag;
use App\Services\Html\TagCollection;
use Illuminate\Support\Facades\Route;
use Dev\PHPActions\Action;

abstract class Page
{
    public array $data = [];

    public static mixed $page = null;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getData(string $key)
    {
        return $this->data[$key] ?? request()->$key;
    }

    public static function setCurrentPage(mixed $page)
    {
        self::$page = $page;
    }

    public function canonical(): string
    {
        $canonical = $this->getData('canonical');

        if (!empty($canonical)) {
            return $canonical;
        }

        return url()->full();
    }

    public function domain()
    {
        return $this->getData('domain') ?? DomainService::getDomain();
    }

    public function site()
    {
        return SiteService::getSite();
    }

    public function project()
    {
        return ProjectService::getProject();
    }

    public function workspace()
    {
        return WorkspaceService::getWorkspace();
    }

    public static function current()
    {
        return self::$page;
    }

    public function headTags(): TagCollection
    {
        return new TagCollection();
    }

    public function htmlLang()
    {
        $location = LocationService::getLocation();

        return LocalizationService::id($location);
    }

    public function head(): string
    {
        $domain = $this->domain();

        $location = LocationService::getLocation();
        $city = LocationService::getCity();
        $district = LocationService::getDistrict();
        $country = LocationService::getCountry();

        $blogs = $this->getData('blogs');
        $stories = $this->getData('stories');

        $tagCollection = $this->headTags();

        $tagCollection->addTag(Tag::create('title')->setText($this->title()));

        /** OG */
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('property', 'og:title'))->addAttribute(Attribute::create('content', $this->title())));
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('property', 'og:site_name'))->addAttribute(Attribute::create('content', $this->title())));

        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('property', 'og:locale'))->addAttribute(Attribute::create('content', LocalizationService::code($location))));

        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('property', 'og:description'))->addAttribute(Attribute::create('content', $this->description())));
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('property', 'og:url'))->addAttribute(Attribute::create('content', $this->canonical())));

        /** Twitter */
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'twitter:title'))->addAttribute(Attribute::create('content', $this->title())));
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'twitter:description'))->addAttribute(Attribute::create('content', $this->description())));


        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('charset', 'utf-8')));

        if ($this->domain()->type != DomainType::$primary) {
            $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'icon'))->addAttribute(Attribute::create('href', route('file.project.reference.logo', ['reference' => $this->domain()->getCanonicalDomain()]))));
            $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'apple-touch-icon'))->addAttribute(Attribute::create('href', route('file.project.reference.logo', ['reference' => $this->domain()->getCanonicalDomain()]))));
        } else {
            $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'icon'))->addAttribute(Attribute::create('href', route('file.project.logo'))));
            $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'apple-touch-icon'))->addAttribute(Attribute::create('href', route('file.project.logo'))));
        }

        $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'manifest'))->addAttribute(Attribute::create('href', route('file.manifest.show'))));
        $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'alternate'))->addAttribute(Attribute::create('type', 'application/rss+xml'))->addAttribute(Attribute::create('title', $domain->getName()))->addAttribute(Attribute::create('href', route('file.rss.stories'))));
        $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'alternate'))->addAttribute(Attribute::create('type', 'application/rss+xml'))->addAttribute(Attribute::create('title', $domain->getName()))->addAttribute(Attribute::create('href', route('file.rss.blogs'))));
        $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'alternate'))->addAttribute(Attribute::create('type', 'application/rss+xml'))->addAttribute(Attribute::create('title', $domain->getName()))->addAttribute(Attribute::create('href', route('file.rss.articles'))));

        $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'canonical'))->addAttribute(Attribute::create('href', $this->canonical())));

        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'abstract'))->addAttribute(Attribute::create('content', $this->title())));
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'page-type'))->addAttribute(Attribute::create('content', $this->title())));
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'page-topic'))->addAttribute(Attribute::create('content', $this->title())));
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'publisher'))->addAttribute(Attribute::create('content', $this->title())));

        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'keywords'))->addAttribute(Attribute::create('content', $domain->keywordsToString())));
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'viewport'))->addAttribute(Attribute::create('content', 'width=device-width, initial-scale=1')));
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'Google'))->addAttribute(Attribute::create('content', 'notranslate')));

        $no_folow = [
            'web.policy.dmca',
            'web.policy.cookies',
        ];

        if (in_array(Route::current()->getName(), $no_folow)) {
            $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'Robots'))->addAttribute(Attribute::create('content', 'noindex, follow')));
            $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'Yahooseeker'))->addAttribute(Attribute::create('content', 'noindex, follow')));
        } else {
            $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'Robots'))->addAttribute(Attribute::create('content', 'index, imageindex, follow')));
            $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'Yahooseeker'))->addAttribute(Attribute::create('content', 'index, imageindex, follow')));
        }

        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'mobile-web-app-capable'))->addAttribute(Attribute::create('content', 'yes')));
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'theme-color'))->addAttribute(Attribute::create('content', '#ffffff')));
        $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'description'))->addAttribute(Attribute::create('content', $this->description())));

        if (!empty($district)) {
            $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'geo.placename'))->addAttribute(Attribute::create('content', __('location.' . $district->district))));
        } elseif (!empty($city)) {
            $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'geo.placename'))->addAttribute(Attribute::create('content', __('location.' . $city->city))));
        } elseif (!empty($country)) {
            $tagCollection->addTag(Tag::create('meta')->addAttribute(Attribute::create('name', 'geo.placename'))->addAttribute(Attribute::create('content', __('location.' . $country->country))));
        }

        if (!empty($blogs)) {
            if ($blogs->hasMorePages()) {
                $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'next'))->addAttribute(Attribute::create('href', $blogs->nextPageUrl())));
            }
            if ($blogs->currentPage() > 1) {
                $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'prev'))->addAttribute(Attribute::create('href', $blogs->previousPageUrl())));
            }
        } else if (!empty($stories)) {
            if ($stories->hasMorePages()) {
                $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'next'))->addAttribute(Attribute::create('href', $stories->nextPageUrl())));
            }
            if ($stories->currentPage() > 1) {
                $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'prev'))->addAttribute(Attribute::create('href', $stories->previousPageUrl())));
            }
        }

        $amphtml = $this->getData('amp_html');

        if (!empty($amphtml)) {
            $tagCollection->addTag(Tag::create('link')->addAttribute(Attribute::create('rel', 'amphtml'))->addAttribute(Attribute::create('href', $amphtml)));
        }

        return $tagCollection->render();
    }

    public function description(): string
    {
        $domain = $this->domain();

        $blogDescription = Blog::current()?->blogContentDescription();

        if (!empty($blogDescription)) {
            return $blogDescription;
        }

        $blogDescription = Blog::current()?->description;

        if (!empty($blogDescription)) {
            return $blogDescription;
        }

        $storyDescription = Story::current()?->description;

        if (!empty($storyDescription)) {
            return $storyDescription;
        }

        $locationDescription = $this->locationDescription();

        if (!empty($locationDescription)) {
            return $locationDescription  . $this->descriptionSuffix();
        }

        return $domain->getName()  . $this->descriptionSuffix();
    }

    public function descriptionSuffix(): string
    {
        if (Route::current()->getName() == 'web.blog.list') {
            return ' - ' . __('base.posts');
        }

        if (Route::current()->getName() == 'web.story.list') {
            return ' - ' . __('base.stories');
        }

        if (Route::current()->getName() == 'web.policy.cookies') {
            return ' - ' . __('base.cookies');
        }

        if (Route::current()->getName() == 'web.policy.dmca') {
            return ' - DMCA';
        }

        return '';
    }

    public function titleSuffix(): string
    {
        if (Route::current()->getName() == 'web.blog.list') {
            return ' - ' . __('base.posts');
        }

        if (Route::current()->getName() == 'web.story.list') {
            return ' - ' . __('base.stories');
        }

        if (Route::current()->getName() == 'web.policy.cookies') {
            return ' - ' . __('base.cookies');
        }

        if (Route::current()->getName() == 'web.policy.dmca') {
            return ' - DMCA';
        }

        return '';
    }

    public function headerSuffix(): string
    {
        if (Route::current()->getName() == 'web.blog.list') {
            return ' - ' . __('base.posts');
        }

        if (Route::current()->getName() == 'web.story.list') {
            return ' - ' . __('base.stories');
        }

        if (Route::current()->getName() == 'web.policy.cookies') {
            return ' - ' . __('base.cookies');
        }

        if (Route::current()->getName() == 'web.policy.dmca') {
            return ' - DMCA';
        }

        return '';
    }

    public function title(): string
    {
        $title = $this->getData('title');

        if (!empty($title)) {
            return $title;
        }

        $city = LocationService::getCity();
        $district = LocationService::getDistrict();

        $domain = $this->domain();

        $blogTitle = Blog::current()?->title;

        if (!empty($blogTitle)) {
            return $blogTitle;
        }

        $storyTitle = Story::current()?->title;

        if (!empty($storyTitle)) {
            return $storyTitle;
        }

        $articleTitle = Article::current()?->title;

        if (!empty($articleTitle)) {
            return $domain->getName() . ' - ' . $articleTitle;
        }

        $keywordTitle = Keyword::current()?->keyword;

        if (!empty($keywordTitle)) {
            $alias = $this->getData('alias');

            if (!empty($alias)) {
                return $alias . ' ' . $keywordTitle;
            }
            return $keywordTitle;
        }

        if (!empty($district)) {
            return __('location.' . $district->district) . ' ' . $domain->getName() . $this->titleSuffix();
        }

        if (!empty($city)) {
            return __('location.' . $city->city) . ' ' . $domain->getName() . $this->titleSuffix();
        }

        return ($domain->getName() ?? '') . $this->titleSuffix();
    }

    public function subtitle(): string | null
    {
        $locationDescription = $this->locationDescription();

        if (!empty($locationDescription)) {
            return $locationDescription;
        }

        return null;
    }

    public function header(): string
    {
        $title = $this->getData('title');

        $city = LocationService::getCity();
        $district = LocationService::getDistrict();

        if (!empty($title)) {
            return $title;
        }

        $domain = $this->domain();

        $keywordTitle = Keyword::current()?->keyword;

        if (!empty($keywordTitle)) {
            $alias = $this->getData('alias');

            if (!empty($alias)) {
                return $alias . ' ' . $keywordTitle;
            }

            return $keywordTitle;
        }

        if (!empty($district)) {
            return __('location.' . $district->district) . ' ' . $domain->getName() . $this->headerSuffix();
        }

        if (!empty($city)) {
            return __('location.' . $city->city) . ' ' . $domain->getName() . $this->headerSuffix();
        }

        return ($domain->getName() ?? '' )  . $this->headerSuffix();
    }

    public function locationDescription(): string | null
    {
        return Action::build(LocalizationReplaceText::class)->data([
            'text' =>  ProjectService::getProject()?->location_description
        ])->run()->getData('text');
    }
}
