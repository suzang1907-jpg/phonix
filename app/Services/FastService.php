<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Exception;
class FastService
{
    protected static $excluded_params = [
        '_gl',
        '_ga'
    ];

    public static function get(string $type = 'v')
    {
try {     
   $key = static::key($type);

        if (strlen($key) > 240) {
            return null;
        }

        if (!Cache::has($key)) {
            return null;
        }

        $cache = Cache::get($key);

        if (empty($cache)) {
            return null;
        }

        return $cache;
    }catch(Exception $e){}

return null;
}
    public static function save(mixed $value, string $type = 'v')
    {
        if (auth()->check()) {
            return;
        }

        $key = static::key($type);

        if (strlen($key) > 240) {
            return;
        }
try {
        Cache::put($key, $value, Carbon::now()->addWeek());
    }catch(Exception $e){}}

    private static function key(string $type = 'v')
    {
        $url = url()->full();

        foreach (static::$excluded_params as $excluded_param) {
            $param = request()->$excluded_param;

            if (!empty($param)) {
                $param = urlencode($param);
                $url = str_replace('&' . $excluded_param . '=' . $param, '', $url);
                $url = str_replace('?' . $excluded_param . '=' . $param, '', $url);
            }
        }

        return $type . '_' . $url;
    }
}
