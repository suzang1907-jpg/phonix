<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AmpController;
use App\Models\City;

class CityController extends AmpController
{
    protected static $entity = City::class;
}
