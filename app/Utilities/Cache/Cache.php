<?php

namespace App\Utilities\Cache;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache as LaravelCache;

class Cache
{
    private string $key;

    private array $cache_rule = [];

    public function __construct(string $key, mixed $cache_rule = [])
    {
        $this->key = $key;
        $this->cache_rule = $cache_rule;
    }

    public function set(mixed $value, Carbon $ttl = null): Cache
    {
        if (empty($ttl)) {
            $ttl = now()->addSeconds($this->cache_rule['ttl'] ?? 1440);
        }

        $ttl_renew = true;

        if ($cache_rule['ttl_renew'] ?? false) {
            $ttl_renew = true;
        } else {
            $ttl_renew = false;
        }

        $data = [
            'value' => $value,
        ];

        if ($ttl_renew) {
            $data['ttl'] = $ttl;
        } else {
            $data['ttl'] = $this->ttl() ?? $ttl;
        }

        LaravelCache::put($this->key, $data, $data['ttl']);

        return $this;
    }

    public function get(mixed $default = null): mixed
    {
        $data = LaravelCache::get($this->key);

        if (empty($data)) {
            return $default;
        }

        return $data['value'] ?? $default;
    }

    public function clear(): Cache
    {
        LaravelCache::forget($this->key);

        return $this;
    }

    public function ttl(): Carbon | null
    {
        $data = LaravelCache::get($this->key);

        if (empty($data)) {
            return null;
        }

        $ttl = $data['ttl'] ?? null;

        if (empty($ttl)) {
            return null;
        }

        return Carbon::parse($ttl);
    }

    public function increment(int $step = 1): Cache
    {
        $value = $this->get(0);

        $value = $value + $step;

        $this->set($value, $this->ttl());

        return $this;
    }

    public function decrement(int $step = 1): Cache
    {
        $value = $this->get(0);

        $value = $value - $step;

        $this->set($value, $this->ttl());

        return $this;
    }
}
