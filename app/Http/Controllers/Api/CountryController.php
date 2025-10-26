<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AmpController;
use App\Models\Country;

class CountryController extends AmpController
{
    protected static $entity = Country::class;
}
