<?php

namespace App\Actions\Domain;

use Dev\PHPActions\Action;
use App\Models\Domain;

class DomainDestroy extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return false;
        }

        Domain::where('id', $id)->first()?->delete();

        return true;
    }
}
