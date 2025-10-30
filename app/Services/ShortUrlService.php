<?php

namespace App\Services;

class ShortUrlService
{
    public static function get($current_url)
    {
        $shorturl = config('x.short_url');

        if (empty($shorturl)) {
            return null;
        }

        $exploded = explode('/', $current_url, 4);

        $params = $exploded[3];

        $result = $shorturl;

        if (empty($params)) {
            $result = self::appendVersionTag($result);

            return $result;
        }

        $params = str_replace('amp/c/', 'ac-', $params);
        $params = str_replace('blog/', 'bc-', $params);
        $params = str_replace('location/', 'lc-', $params);
        $params = str_replace('country=', 'c-', $params);
        $params = str_replace('city=', 's-', $params);
        $params = str_replace('district=', 'd-', $params);
        $params = str_replace('.', 'f-', $params);
        $params = str_replace(':', 'g-', $params);
        $params = str_replace('/', 'b-', $params);
        $params = str_replace('?', 'e-', $params);

        if (!str_ends_with($result, '/')) {
            $result = $result . '/' . $params;
        } else {
            $result = $result . $params;
        }

        $result = self::appendVersionTag($result);

        return $result;
    }

    static function appendVersionTag($url)
    {
        $result = $url;

        $currentTime = \Carbon\Carbon::now()->timestamp;

        $intervalSeconds = 1 * 60;
        $v = $currentTime - ($currentTime % $intervalSeconds);

        if (str_contains('?', $result)) {
            $result = $result . '&v=' . $v;
        } else {
            $result = $result . '?v=' . $v;
        }

        return $result;
    }
}
