<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Pages\Dashboard;

class DashboardController extends AdminController
{
    protected static $entity = Dashboard::class;
}
