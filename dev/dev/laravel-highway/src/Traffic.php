<?php

namespace Dev\LaravelHighway;

/** Use this class if you want to add values ​​to your actions or override values */

class Traffic
{
    private static array $data = [];

    public static function attach(array | string $key, mixed $data = null)
    {
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                self::$data[$k] = $v;
            }

            return;
        }

        self::$data[$key] = $data;
    }

    public static function detach(array | string $key)
    {
        if (is_array($key)) {
            foreach ($key as $k) {
                unset(self::$data[$k]);
            }

            return;
        }

        unset(self::$data[$key]);
    }

    public static function clear()
    {
        self::$data = [];
    }

    public static function get(string | null $key = null): mixed
    {
        if (empty($key)) {
            return self::$data;
        }

        return self::$data[$key] ?? null;
    }
}
