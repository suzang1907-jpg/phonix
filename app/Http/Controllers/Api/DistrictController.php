<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AmpController;
use App\Models\District;

class DistrictController extends AmpController
{
    protected static $entity = District::class;
}
