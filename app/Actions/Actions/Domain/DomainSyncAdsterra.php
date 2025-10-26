<?php

namespace App\Actions\Domain;

use App\Models\Domain;
use App\Scopes\DomainProjectScope;
use App\Services\Adsterra;
use Dev\PHPActions\Action;

class DomainSyncAdsterra extends Action
{
    protected $secure = [
        'id'
    ];

    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return;
        }

        $domain = Domain::where('id', $id)->withoutGlobalScope(DomainProjectScope::class)->limit(1)->get()->first();

        if (empty($domain)) {
            return;
        }

        $placements = Adsterra::getPlacementsForDomain($domain->domain);

        if (empty($placements)) {
            return;
        }

        $meta = [
            'adsterra' => [
                'direct_link' => $placements['DirectLink_1'] ?? null,
                'popunder' => $placements['Popunder_1'] ?? null,
                'native' => $placements['NativeBanner_1'] ?? null,
                'social' => $placements['SocialBar_1'] ?? null,
                'w300h250' => $placements['300x250_1'] ?? null,
                'w320h50' => $placements['320x50_1'] ?? null,
                'w160h300' => $placements['160x300_1'] ?? null,
                'w160h600' => $placements['160x600_1'] ?? null,
            ],
        ];

        return;

        $domain->update([
            'meta' => $meta
        ]);
    }
}
