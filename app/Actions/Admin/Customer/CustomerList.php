<?php

namespace App\Actions\Admin\Customer;

use App\Models\Customer;
use Dev\PHPActions\Action;

class CustomerList extends Action
{
    public function handle()
    {
        return [
            'title' => 'Customers',
            'customers' => Customer::orderBy('created_at', 'DESC')->with('articles')->list(200)
        ];
    }
}
