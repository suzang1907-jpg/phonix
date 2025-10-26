<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Pages\Auth;

class AuthController extends AdminController
{
    protected static $entity = Auth::class;
}
