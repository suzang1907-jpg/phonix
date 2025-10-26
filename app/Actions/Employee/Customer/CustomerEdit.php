<?php

namespace App\Actions\Employee\Customer;

use App\Models\Customer;
use App\Routing\Employee;
use Dev\PHPActions\Action;

class CustomerEdit extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        $customer = Customer::where('id', $id)->first();

        if (empty($customer)) {
            return redirect(Employee::route('employee.customer.list'));
        }

        return [
            'title' => 'Müşteri düzenle',
            'customer' => $customer
        ];
    }
}
