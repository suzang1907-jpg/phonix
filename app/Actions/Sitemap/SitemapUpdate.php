<?php

namespace App\Actions\Sitemap;

use App\Models\Sitemap;
use Dev\PHPActions\Action;

class SitemapUpdate extends Action
{
    protected $secure = [
        'domain',
        'google_site_id',
        'google_permission_level',
        'google_sitemap_submitted_at'
    ];

    public function handle()
    {
        $domain = $this->getData('domain');
        $google_site_id = $this->getData('google_site_id');
        $google_permission_level = $this->getData('google_permission_level');
        $google_sitemap_submitted_at = $this->getData('google_sitemap_submitted_at');

        if (empty($domain)) {
            return;
        }

        $sitemap = Sitemap::where('domain_id', $domain->id)->get()->first();

        if (empty($sitemap)) {
            $sitemap = Action::build(SitemapStore::class)->data([
                'domain' => $domain
            ])->run()->getData('sitemap');
        }

        if (empty($google_permission_level)) {
            $google_permission_level = $sitemap->google_permission_level;
        }

        if (empty($google_site_id)) {
            $google_site_id = $sitemap->google_site_id;
        }

        $sitemap->update([
            'google_site_id' => $google_site_id,
            'google_permission_level' => $google_permission_level,
            'google_sitemap_submitted_at' => $google_sitemap_submitted_at
        ]);

        return [
            'sitemap' => $sitemap
        ];
    }
}
