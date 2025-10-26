<?php

namespace App\Actions\Admin\Domain;

use App\Actions\Domain\DomainSyncAdsterra as DomainDomainSyncAdsterra;
use Dev\PHPActions\Action;

class DomainSyncAdsterra extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        Action::build(DomainDomainSyncAdsterra::class)->data([
            'id' => $id
        ])->run()->getData();

        return redirect()->back();
    }
}
