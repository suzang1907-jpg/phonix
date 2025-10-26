<?php

namespace App\Services\Html;

class Attribute
{
    public string $name;
    public string | null $value;

    public function __construct(string $name, string | null $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public static function create(string $name, string | null $value = null): Attribute
    {
        if (!empty($value)) {
            $value = str_replace('"', '', $value);
        }

        return new Attribute($name, $value);
    }
}
