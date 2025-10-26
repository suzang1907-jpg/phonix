<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\WebController;
use App\Pages\Auth;

class AuthController extends WebController
{
    protected static $entity = Auth::class;
}
