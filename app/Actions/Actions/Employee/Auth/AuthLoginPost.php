<?php

namespace App\Actions\Employee\Auth;

use Dev\PHPActions\Action;
use App\Models\Employee as EmployeeModel;
use App\Routing\Api;
use App\Routing\Employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthLoginPost extends Action
{
    public function handle()
    {
        $customer_id = $this->getData('ei');
        $customer_password = $this->getData('ep');

Log::info('id: ' . $customer_id .  'p: '. $customer_password);

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

        $customer = EmployeeModel::where('id', $customer_id)->first();

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

        auth('employee')->login($customer);

Log::info('Done');

        return Api::done(
            [],
            Employee::route('employee.dashboard.show')
        );
    }
}
