<?php

namespace App\Services\Html;

use Illuminate\Support\Facades\Blade;

class Tag
{
    public $attributes = [];
    public string $tag;
    public string | null $text = null;

    public function __construct(string $tag)
    {
        $this->tag = $tag;
    }

    public static function create(string $tag): Tag
    {
        return new Tag($tag);
    }

    public function addAttribute(Attribute $attribute): Tag
    {
        array_push($this->attributes, $attribute);

        return $this;
    }

    public function setText(string $text): Tag
    {
        $this->text = $text;

        return $this;
    }

    public function render(): string
    {
        $begin = '<' . $this->tag . ' ';

        $renderedAttributes = '';

        foreach ($this->attributes as $attribute) {
            if (empty($attribute->value)) {
                $renderedAttributes .= $attribute->name . ' ';
            } else {
                $renderedAttributes .= $attribute->name . '=' . '"' . $attribute->value . '" ';
            }
        }

        if (!empty($this->text)) {
            $result = $begin . $renderedAttributes . '>' . $this->text . '</' . $this->tag . '>';
        } else {
            $result = $begin . $renderedAttributes . '/>';
        }

        return $result;
    }
}
