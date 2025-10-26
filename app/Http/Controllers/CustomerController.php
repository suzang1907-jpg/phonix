<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    protected static $entity = Customer::class;
}
