<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\WebController;
use App\Models\Customer;
class CustomerController extends WebController
{
    protected static $entity = Customer::class;
}
