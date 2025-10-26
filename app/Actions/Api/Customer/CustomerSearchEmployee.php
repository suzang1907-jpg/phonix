<?php

namespace App\Actions\Api\Customer;

use App\Models\Customer;
use App\Routing\Api;
use Dev\PHPActions\Action;

class CustomerSearchEmployee extends Action
{
    public function handle()
    {
        $search = $this->getData('search');

        if (empty($search)) {
            return Api::done([
                'customers' => []
            ]);
        }

        $search = trim($search);


        if (empty($search)) {
            return Api::done([
                'customers' => []
            ]);
        }

        $customers = Customer::where('whatsapp_phone_number', 'like', '%' . $search . '%')->orWhere('id', 'like', '%' . $search . '%')->limit(4)->get();

        $customers = $customers->map(function ($customer) {
            return $customer->toArray();
        });

        return Api::done([
            'customers' => $customers
        ]);
    }
}
