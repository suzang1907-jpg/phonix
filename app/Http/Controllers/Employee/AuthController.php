<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\WebController;
use App\Pages\Auth;

class AuthController extends WebController
{
    protected static $entity = Auth::class;
}
