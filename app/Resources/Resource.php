<?php

namespace App\Resources;

use Illuminate\Support\Facades\Cache;

abstract class Resource
{
    protected string $suffix = '';

    abstract function path(): string;

    public function files(): array
    {
        $files = $this->_directoryFiles();

        return $files;
    }

    public function content($key_prefix = ''): string
    {
        $cache_key = $key_prefix . 'r_' . static::class;

        $content = Cache::get($cache_key);

        if (!empty($content)) {
            return $content;
        }

        $resources = $this->files();

        $content = '';

        foreach ($resources as $resource) {
            $content .= file_get_contents($resource) . PHP_EOL;
        }

        Cache::put($cache_key, $content, now()->addDay());

        return $content;
    }

    private function _directoryFiles(string | null $path = null): array
    {
        $files = [];

        $path = $path ?? $this->path();

        if (!file_exists($path)) {
            return [];
        }

        $fileNames = scandir($path);

        foreach ($fileNames as $fileName) {
            $filePath = $this->_filePath($path, $fileName);
            if ($fileName == '.' || $fileName == '..') {
                continue;
            }

            if (!str_ends_with($fileName, $this->suffix)) {
                continue;
            }

            if (is_dir($filePath)) {
                $subDir = $this->_directoryFiles($filePath);

                foreach ($subDir as $f) {
                    array_push($files, $f);
                }

                continue;
            }

            array_push($files, $filePath);
        }

        return $files;
    }

    private function _filePath(string $path, string $fileName)
    {
        if (str_ends_with($path, '/')) {
            return $path . $fileName;
        }

        if (str_starts_with($fileName, '/')) {
            return $path . $fileName;
        }

        return $path . '/' . $fileName;
    }
}
