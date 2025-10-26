<?php

namespace App\Actions\Admin\Customer;

use App\Models\Customer;
use App\Routing\Admin;
use Dev\PHPActions\Action;

class CustomerDestroy extends Action
{
    public function handle()
    {
        $id = $this->getData('id');

        $customer = Customer::where('id', $id)->first();

        if (empty($customer)) {
            return redirect(Admin::route('admin.customer.list'));
        }

if (! empty($customer->articles()->count())) {
return redirect()->back();
}

        $customer->delete();

        return redirect(Admin::route('admin.customer.list'));
    }
}
