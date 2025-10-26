<?php

namespace App\Actions\Domain;

use Dev\PHPActions\Action;
use App\Models\Domain;

class DomainEdit extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        $domainToEdit = Domain::where('id', $id)->first();

        return [
            'domainToEdit' => $domainToEdit,
        ];
    }
}
