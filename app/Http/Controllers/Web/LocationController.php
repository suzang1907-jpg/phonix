<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\WebController;
use App\Models\Location;

class LocationController extends WebController
{
    protected static $entity = Location::class;
}
