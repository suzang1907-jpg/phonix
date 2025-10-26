<?php

namespace App\Actions\Domain;

use Dev\PHPActions\Action;
use App\Models\Domain;
use App\Scopes\DomainProjectScope;

class DomainGetReferalDomains extends Action
{
    protected $secure = [
        'domain_id'
    ];

    public function handle()
    {
        $domain_id = $this->getData('domain_id');

        if (empty($domain_id)) {
            return;
        }

        $domain = Domain::withoutGlobalScope(DomainProjectScope::class)->where('id', $domain_id)->first();

        if (empty($domain)) {
            return;
        }

        $referal_domains = Domain::withoutGlobalScope(DomainProjectScope::class);

        if (!empty($domain->location_id)) {
            $referal_domains->where('location_id', $domain->location_id);
        }

        $referal_domains = $referal_domains->inRandomOrder()->limit(10)->get();

        if ($referal_domains->isEmpty()) {
            return null;
        }

        return [
            'domains' => $referal_domains,
        ];
    }
}
