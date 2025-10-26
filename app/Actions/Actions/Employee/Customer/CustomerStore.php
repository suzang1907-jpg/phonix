<?php

namespace App\Actions\Employee\Customer;

use App\Models\Customer;
use App\Routing\Employee;
use App\Routing\Api;
use Dev\PHPActions\Action;
use Illuminate\Support\Str;

class CustomerStore extends Action
{
    public function handle()
    {
        $whatsapp_phone_number = $this->getData('whatsapp_phone_number');
        $password = $this->getData('password');

        $id = Str::slug('c-' . Str::random());

        if (! empty($whatsapp_phone_number)) {
            $whatsapp_phone_number = trim($whatsapp_phone_number);
        }

        if (empty($password)) {
            return;
        }
        $password = trim($password);

        if (strlen($password) < 8) {
            return;
        }

        $customer = Customer::create([
            'whatsapp_phone_number' => $whatsapp_phone_number,
            'id' => $id,
            'is_active' => true,
            'password' => bcrypt($password),
        ]);

        return Api::done([
            'customer' => $customer
        ], Employee::route('employee.customer.list'));
    }
}
