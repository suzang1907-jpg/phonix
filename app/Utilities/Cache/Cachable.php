<?php

namespace App\Utilities\Cache;

use App\Utilities\Cache\Cache;
use Illuminate\Database\Eloquent\Model;

trait Cachable
{
    public function cache(string $key): Cache
    {
        $cache_rule = $this->cachable[$key] ?? null;

        if (!is_array($cache_rule)) {
            $cache_rule = [
                'ttl' => $cache_rule ?? 1440,
                'ttl_renew' => true,
            ];
        }

        if ($this instanceof Model) {
            $cache_key = $key . '_' . $this->id . '_' . strtolower(last(explode('\\', static::class)));
        } else {
            $cache_key = $key . '_' . strtolower(last(explode('\\', static::class)));
        }

        return new Cache($cache_key, $cache_rule);
    }
}
