<?php

namespace App\Actions\Admin\Customer;

use App\Models\Customer;
use App\Routing\Admin;
use Dev\PHPActions\Action;

class CustomerCreate extends Action
{
    public function handle()
    {
        return [
            'title' => 'Customer Create',
        ];
    }
}
