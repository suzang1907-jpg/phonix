<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Location;

class LocationController extends AdminController
{
    protected static $entity = Location::class;
}
