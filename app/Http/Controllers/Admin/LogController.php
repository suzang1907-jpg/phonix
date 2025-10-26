<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Log;

class LogController extends AdminController
{
    protected static $entity = Log::class;
}
