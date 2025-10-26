<?php

namespace App\Actions\Sitemap;

use App\Models\Sitemap;
use Dev\PHPActions\Action;

class SitemapSubmit extends Action
{
    protected $secure = [
        'user',
        'sitemap'
    ];

    public function handle()
    {
        $id = $this->getData('id');
        $sitemap = $this->getData('sitemap');
        $user = $this->getData('user');

        if (empty($sitemap)) {
            if (empty($id)) {
                return;
            }

            $sitemap = Sitemap::where('id', $id)->get()->first();
        }

        if (empty($sitemap)) {
            return;
        }

        if (empty($user)) {
            $user = auth()->user();
        }

        $sitemap = Action::build(SitemapGoogleSubmit::class)->data([
            'sitemap' => $sitemap,
            'user' => $user
        ])->run()->getData('sitemap');

        return [
            'sitemap' => $sitemap
        ];
    }
}
