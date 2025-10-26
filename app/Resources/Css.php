<?php

namespace App\Resources;

use App\Services\Html\Tag;
use App\Services\Html\TagCollection;

abstract class Css extends Resource
{
    protected string $suffix = '.css';

    public function renderAsTag(Tag | null $tag = null)
    {
        $tagCollection = new TagCollection();

        $raw_resource = $this->content();

        $tag = $tag ?? Tag::create('style');

        $tagCollection->addTag($tag->setText($raw_resource));

        return $tagCollection->render();
    }
}
