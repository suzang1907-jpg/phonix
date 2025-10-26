<?php

namespace App\Actions\Customer\Auth;

use Dev\PHPActions\Action;
use App\Models\Customer as CustomerModel;
use App\Routing\Api;
use App\Routing\Customer;
use Illuminate\Support\Facades\Hash;

class AuthLoginPost extends Action
{
    public function handle()
    {
        $customer_id = $this->getData('ci');
        $customer_password = $this->getData('cp');

        if (empty($customer_id)) {
            return Api::error([
                'message' => 'customer_id_empty'
            ]);
        }

        if (empty($customer_password)) {
            return Api::error([
                'message' => 'credentials_does_not_match'
            ]);
        }

        $customer = CustomerModel::where('id', $customer_id)->first();

        if (empty($customer)) {
            return Api::error([
                'message' => 'credentials_does_not_match'
            ]);
        }

        if (! Hash::check($customer_password, $customer->password)) {
            return Api::error([
                'message' => 'credentials_does_not_match'
            ]);
        }

        auth('customer')->login($customer);

        return Api::done(
            [],
            Customer::route('customer.dashboard.show')
        );
    }
}
