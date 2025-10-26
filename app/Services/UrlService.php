<?php

namespace App\Services;

use App\Models\Url;

class UrlService
{
    private static Url | null $currentUrl = null;

    public static function setUrl(Url | null $url)
    {
        self::$currentUrl = $url;
    }

    public static function getUrl(): Url | null
    {
        return self::$currentUrl;
    }

    public static function getTargetPath($path = null) {
        if (empty($path)) {
            $path = url()->full();
        }

        $url = Url::where('path', $path)->first();

        if (empty($url)) {
            return $path;
        }

        if (empty($url->target_path)) {
            return $path;
        }

        return $url->target_path;
    }
}
