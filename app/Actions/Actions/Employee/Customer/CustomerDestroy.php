<?php

namespace App\Actions\Employee\Customer;

use App\Models\Customer;
use App\Routing\Employee;
use Dev\PHPActions\Action;

class CustomerDestroy extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        $customer = Customer::where('id', $id)->first();

        if (empty($customer)) {
            return redirect(Employee::route('employee.customer.list'));
        }

if (! empty($customer->articles()->count())) {
return redirect()->back();
}

        $customer->delete();

        return redirect(Employee::route('employee.customer.list'));
    }
}
