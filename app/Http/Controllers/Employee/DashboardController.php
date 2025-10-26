<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\WebController;
use App\Pages\Dashboard;

class DashboardController extends WebController
{
    protected static $entity = Dashboard::class;
}
