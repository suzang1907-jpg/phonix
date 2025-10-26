<?php

namespace App\Services\Html;

class TagCollection
{
    public $tags = [];

    public function addTag(Tag $tag): TagCollection
    {
        array_push($this->tags, $tag);

        return  $this;
    }

    public function render(): string
    {
        $result = '';
        foreach ($this->tags as $tag) {
            $result .= $tag->render() . PHP_EOL;
        }

        return $result;
    }
}
