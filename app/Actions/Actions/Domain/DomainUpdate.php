<?php

namespace App\Actions\Domain;

use Dev\PHPActions\Action;

class DomainUpdate extends Action
{
    protected $validator = [
        'domain' => 'required',
        'id' => 'required',
    ];

    public function handle()
    {
        
        return Action::build(DomainStore::class)->data([
            'domain_id' => $this->getData('id'),
            'domain' => $this->getData('domain'),
            'meta' => $this->getData('meta'),
            'type' => $this->getData('type'),
            'name' => $this->getData('name'),
            'domain_location_id' => $this->getData('domain_location_id'),
            'cloudflare_zone_identifier' => $this->getData('cloudflare_zone_identifier'),
        ])->run();
    }
}
