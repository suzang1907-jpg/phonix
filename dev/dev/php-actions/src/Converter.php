<?php

namespace Dev\PHPActions;

abstract class Converter
{
    private $data = [];

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public abstract function handle();

    public function getData(string $key)
    {
        return $this->data[$key] ?? null;
    }
}
