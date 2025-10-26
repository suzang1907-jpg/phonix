<?php

namespace App\Actions\Admin\Customer;

use App\Models\Customer;
use App\Routing\Admin;
use App\Routing\Api;
use App\Routing\Customer as RoutingCustomer;
use Dev\PHPActions\Action;

class CustomerUpdate extends Action
{
    public function handle()
    {
        $id = $this->getData('id');
        $whatsapp_phone_number = $this->getData('whatsapp_phone_number');
        $password = $this->getData('password');

        $customer = Customer::where('id', $id)->first();

        if (empty($customer)) {
            return Api::error();
        }

        if (! empty($whatsapp_phone_number)) {
            $whatsapp_phone_number = trim($whatsapp_phone_number);
        }

        $customer_data = ['whatsapp_phone_number' => $whatsapp_phone_number];

        if (! empty($password)) {
            $password = trim($password);

            if (strlen($password) >= 8) {
                $customer_data['password'] = bcrypt($password);
            }
        }

        $customer->update($customer_data);

        if ($customer->articles->isEmpty()) {
            return Api::done([
                'customer' => $customer
            ], Admin::route('admin.customer.list'));
        }

        return Api::done([
            'customer' => $customer
        ], RoutingCustomer::route('customer.auth.login', ['ci' => $customer->id, 'cp' => $password]));
    }
}
