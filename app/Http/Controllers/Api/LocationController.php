<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AmpController;
use App\Models\Location;

class LocationController extends AmpController
{
    protected static $entity = Location::class;
}
