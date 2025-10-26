<?php

namespace Tests\Helpers;

use App\Constants\DomainType;
use App\Models\Domain;
use App\Models\User;

trait DomainTestHelperTrait
{
    public function domainCreate(User $user = null, $data = []): Domain
    {
        if (empty($user)) {
            $user = User::first();
        }

        if (empty($user)) {
            return null;
        }

        $data['id'] = $data['domain'] ?? config('app.domain');

        $project = $this->projectStore();

        $site = $this->siteStore($project, [
            'origin' => $data['domain'] ?? config('app.domain')
        ]);

        $domain = Domain::create(array_merge([
            'site_id' => $site->id,
            'domain' => config('app.domain'),
            'type' => DomainType::$primary
        ], $data));

        return $domain;
    }

    public function domainUpdate(Domain | string $domain = null, $data = []): Domain
    {
        if (is_string($domain)) {
            $domain = Domain::where('id', $domain)->first();
        }

        $domain->update($data);

        return $domain;
    }
}
