<?php

namespace App\Actions\Sitemap;

use App\Services\PaginateRelation;
use Dev\PHPActions\Action;
use App\Services\ProjectService;

class SitemapList extends Action
{
    public function handle()
    {
        $domains = ProjectService::getProject()->domains()->doesntHave('sitemap')->get();

        foreach ($domains as $domain) {
            Action::build(SitemapStore::class)->data([
                'domain' => $domain
            ])->run();
        }

        $domains = ProjectService::getProject()->domains();

        return [
            'domains' => PaginateRelation::paginate($domains),
        ];
    }
}
