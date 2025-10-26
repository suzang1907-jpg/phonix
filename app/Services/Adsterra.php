<?php

namespace App\Services;

use App\Models\Domain;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Adsterra
{
    public static function domains()
    {
        $response = self::get('https://api3.adsterratools.com/publisher/domains.json');

        if (empty($response)) {
            return null;
        }

        $domains = $response->json('items');

        return $domains;
    }

    public static function domainPlacements(string $id)
    {
        $response = self::get('https://api3.adsterratools.com/publisher/domain/' . $id . '/placements.json');

        if (empty($response)) {
            return null;
        }

        $placements = $response->json('items');

        return $placements;
    }

    public static function getPlacementsForDomain(string $value)
    {
        $domains = self::domains();

        if (empty($domains)) {
            return null;
        }

        foreach ($domains as $domain) {
            if (strtolower($domain['title'] ?? '') == strtolower($value)) {
                $placements = self::domainPlacements($domain['id']);

                $result = [];
                foreach ($placements as $placement) {
                    $result[$placement['alias']] = $placement;
                }

                return $result;
            }
        }

        return null;
    }

    private static function get(string $url)
    {
        $key = self::key();

        if (empty($key)) {
            return null;
        }

        return Http::withHeader('X-API-Key', $key)->get($url);
    }

    public static function statistics()
    {
        $cached = Cache::get('adsterra_statistics');

        if (!empty($cached)) {
            return $cached;
        }

        $url = 'https://api3.adsterratools.com/publisher/stats.json?start_date=' . now()->yesterday()->format('Y-m-d') . '&finish_date=' . now()->format('Y-m-d') . '&group_by=date';

        $response = self::get($url);

        if (empty($response)) {
            return [
                'today' => null,
                'yesterday' => null
            ];
        }

        $statistics = $response->json('items');

        if (empty($statistics)) {
            $result =  [
                'today' => null,
                'yesterday' => null
            ];
        } else if (count($statistics) == 1) {
            $result = [
                'today' => last($statistics),
                'yesterday' => null,
            ];
        } else {
            $result = [
                'today' => last($statistics),
                'yesterday' => $statistics[count($statistics) - 2]
            ];
        }

        Cache::put('adsterra_statistics', $result, now()->addMinutes(5));

        return $result;
    }

    private static function key()
    {
        $key = config('adsterra.api_key');

        if (empty($key)) {
            return null;
        }

        return $key;
    }
}
