<?php

namespace App\Actions\Sitemap;

use App\Models\Sitemap;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;

class SitemapStore extends Action
{
    protected $secure = [
        'domain'
    ];

    public function handle()
    {
        $domain = $this->getData('domain');

        if (empty($domain)) {
            return;
        }

        $sitemap = Sitemap::where('domain_id', $domain->id)->get()->first();

        if (!empty($sitemap)) {
            return [
                'sitemap' => $sitemap
            ];
        }

        $sitemap = Sitemap::create([
            'id' => 'sitemap_' . $domain->id . '_' . strtolower(Str::random()),
            'domain_id' => $domain->id,
        ]);

        return [
            'sitemap' => $sitemap
        ];
    }
}
