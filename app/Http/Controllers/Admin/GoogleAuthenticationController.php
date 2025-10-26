<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\GoogleAuthentication;

class GoogleAuthenticationController extends AdminController
{
    protected static $entity = GoogleAuthentication::class;
}
