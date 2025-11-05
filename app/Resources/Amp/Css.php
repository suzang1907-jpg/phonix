<?php

namespace App\Resources\Amp;

use App\Resources\Css as BaseCss;
use App\Services\DomainService;
use App\Services\Html\Attribute;
use App\Services\Html\Tag;
use App\Services\Html\TagCollection;
use App\Services\ProjectService;

class Css extends BaseCss
{
    function path(): string
    {
        return public_path('/build/amp/assets');
    }

    public function renderAsTag(Tag | null $tag = null)
    {
        $tagCollection = new TagCollection();

        $project = ProjectService::getProject();

        if (! empty($project)) {
            $raw_resource = $this->content($project->id);
        } else {
            $raw_resource = $this->content();
        }

        $tag = $tag ?? Tag::create('style')->addAttribute(Attribute::create('amp-custom'));

        $raw_resource .= ' .article-style-layer {' . $this->articleStyleLayer() . '}';
        $raw_resource .= ' .article-style-info {' . $this->articleStyleInfo() . '}';
        $raw_resource .= ' .article-list-item {' . $this->articleStyleRoot() . '}';
        $raw_resource .= ' .support-banner-style {' . $this->supportBannerStyle() . '}';

        $tagCollection->addTag($tag->setText($raw_resource));

        return $tagCollection->render();
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

    public function articleStyleInfo()
    {
        $style = "";
        return $style;
    }

        public function supportBannerStyle()
    {
        $primary_color = $this->appStyle()['amp']['primary_color'] ?? "#111111";
        $secondary_color = $this->appStyle()['amp']['secondary_color'] ?? "#111111";

        $primary_color .= "FF";
        $secondary_color .= "00";

        if (!empty($primary_color) && !empty($secondary_color)) {
            $style = "background-image: linear-gradient(to top, " . $primary_color . ", " . $secondary_color . ");";
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
        $style .= "background-color: #11111100;";
        return $style;
    }

    public function articleStyleLayer()
    {
        $primary_color = $this->appStyle()['amp']['primary_color'] ?? "#111111";
        $secondary_color = $this->appStyle()['amp']['secondary_color'] ?? "#111111";

        $primary_color .= "FF";
        $secondary_color .= "00";

        if (!empty($primary_color) && !empty($secondary_color)) {
            $style = "background-image: linear-gradient(to top, " . $primary_color . ", " . $secondary_color . ");";
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
        $style .= "background-color: #11111100;";
        return $style;
    }

    public function articleStyleRoot()
    {
        $primary_color = $this->appStyle()['amp']['primary_color'] ?? "#111111";
        $secondary_color = $this->appStyle()['amp']['secondary_color'] ?? "#11111100";

        if (!empty($primary_color) && !empty($secondary_color)) {
            $style = "background-image: linear-gradient(to top, " . $primary_color . ", " . $secondary_color . ");";
            $style .= "padding: 0.1rem;";
            return $style;
        }

        if (! empty($primary_color)) {
            $style = "";
            $style .= "background-color: " . $primary_color . ";";
            $style .= "padding: 0.1rem;";
            return $style;
        }

        if (! empty($secondary_color)) {
            $style = "";
            $style .= "background-color: " . $secondary_color . ";";
            $style .= "padding: 0.1rem;";
            return $style;
        }

        $style = "";
        $style .= "background-color: #111111;";
        $style .= "padding: 0.1rem;";
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
