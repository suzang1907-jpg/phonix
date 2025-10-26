<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Blog;
use App\Models\Keyword;
use App\Models\Story;

class AmpPage extends Page
{
    public function title(): string
    {
        $city = LocationService::getCity();
        $district = LocationService::getDistrict();

        $domain = DomainService::getDomain();
        $canonicalDomain = $domain->getCanonicalDomain();

        $domainName =  $canonicalDomain?->site?->project?->name ?? ProjectService::getProject()->name ?? $canonicalDomain?->getName();

        $articleTitle = Article::current()?->title;

        if (!empty($articleTitle)) {
            return $articleTitle;
        }

        if (!empty($district)) {
            return __('location.' . $district->district) . ' ' . $domainName;
        }

        if (!empty($city)) {
            return __('location.' . $city->city) . ' ' . $domainName;
        }

        $blogTitle = Blog::current()?->title;

        if (!empty($blogTitle)) {
            return $blogTitle;
        }

        $storyTitle = Story::current()?->title;

        if (!empty($storyTitle)) {
            return $storyTitle;
        }

        $keywordTitle = Keyword::current()?->keyword;

        if (!empty($keywordTitle)) {
            $alias = $this->getData('alias');

            if (!empty($alias)) {
                return $alias;
            }
            return $keywordTitle;
        }

        return $domainName;
    }

    public function canonical(): string
    {
        return $this->getData('canonical') ?? url()->full();
    }

    public function heading()
    {
        $city = LocationService::getCity();
        $district = LocationService::getDistrict();

        $domain = DomainService::getDomain();
        $canonicalDomain = $domain->getCanonicalDomain();

        $domainName =  $canonicalDomain?->site?->project?->amp_name ?? ProjectService::getProject()->amp_name ?? $canonicalDomain?->getName();

        $articleTitle = Article::current()?->title;

        if (!empty($articleTitle)) {
            return $articleTitle;
        }

        if (!empty($district)) {
            return __('location.' . $district->district) . ' ' . $domainName;
        }

        if (!empty($city)) {
            return __('location.' . $city->city) . ' ' . $domainName;
        }

        $blogTitle = Blog::current()?->title;

        if (!empty($blogTitle)) {
            return $blogTitle;
        }

        $storyTitle = Story::current()?->title;

        if (!empty($storyTitle)) {
            return $storyTitle;
        }

        $keywordTitle = Keyword::current()?->keyword;

        if (!empty($keywordTitle)) {
            $alias = $this->getData('alias');

            if (!empty($alias)) {
                return $alias;
            }
            return $keywordTitle;
        }

        return $domainName;
    }

    public function appStyle()
    {
        $domain = DomainService::getDomain();
        $canonicalDomain = $domain->getCanonicalDomain();

        $current_project_meta_data = ProjectService::getProject()->getMetaData();
        $canonical_project_meta_data = $canonicalDomain?->site?->project->getMetaData();

        $app_name = $canonical_project_meta_data['app_name'] ?? $current_project_meta_data['app_name'] ?? [];

        $amp_data = $canonical_project_meta_data['amp'] ?? $current_project_meta_data['amp'] ?? [];

        return [
            'app_name' => $app_name,
            'amp' => [
                'primary_color' => $amp_data['primary_color'] ?? null,
                'secondary_color' => $amp_data['secondary_color'] ?? null,
                'grid_cols' => $amp_data['grid_cols'] ?? 2,
                'grid_gap' => $amp_data['grid_gap'] ?? 0.5,
            ]
        ];
    }

    public function articleStyle()
    {
        $primary_color = $this->appStyle()['amp']['primary_color'];
        $secondary_color = $this->appStyle()['amp']['secondary_color'];

        if (!empty($primary_color) && !empty($secondary_color)) {
            $style = "background-image: linear-gradient(to top right, var(--tw-gradient-stops));";
            $style .= "--tw-gradient-from: " . $primary_color . " var(--tw-gradient-from-position);";
            $style .= "--tw-gradient-to: " . $secondary_color . " var(--tw-gradient-to-position);";
            $style .= "--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);";
            return $style;
        }

        if (! empty($primary_color)) {
            $style = "";
            $style .= "background-color: " . $primary_color . ";";
            return $style;
        }

        if (! empty($secondary_color)) {
            $style = "";
            $style .= "background-color: " . $secondary_color . ";";
            return $style;
        }

        $style = "";
        $style .= "background-color: #111111;";
        return $style;
    }

    public function articleStyleRoot($article)
    {

        if (empty($article->meta)) {
            return '';
        }

        if (empty($article->meta['highlight'] ?? false)) {
            return '';
        }

        $primary_color = $this->appStyle()['amp']['primary_color'];
        $secondary_color = $this->appStyle()['amp']['secondary_color'];

        if (!empty($primary_color) && !empty($secondary_color)) {
            $style = "background-image: linear-gradient(to top right, var(--tw-gradient-stops));";
            $style .= "--tw-gradient-from: " . $primary_color . " var(--tw-gradient-from-position);";
            $style .= "--tw-gradient-to: " . $secondary_color . " var(--tw-gradient-to-position);";
            $style .= "--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);";
            $style .= "padding: 0.1rem;";
            $style .= "background-image: linear-gradient(to bottom, var(--tw-gradient-stops));";
            return $style;
        }

        if (! empty($primary_color)) {
            $style = "";
            $style .= "background-color: " . $primary_color . ";";
            $style .= "padding: 0.25rem;";
            return $style;
        }

        if (! empty($secondary_color)) {
            $style = "";
            $style .= "background-color: " . $secondary_color . ";";
            $style .= "padding: 0.25rem;";
            return $style;
        }

        $style = "";
        $style .= "background-color: #111111;";
        $style .= "padding: 0.25rem;";
        return $style;
    }

    public function ampGridStyle()
    {
        $style = "";

        $grid_cols = $this->appStyle()['amp']['grid_cols'] ?? 2;
        $grid_gap = $this->appStyle()['amp']['grid_gap'] ?? 0.5;

        $style .= "grid-template-columns: repeat(" . $grid_cols . ", minmax(0, 1fr));";
        $style .= "gap: " . $grid_gap . "rem ";
        return $style;
    }
}
