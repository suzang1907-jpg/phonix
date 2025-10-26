<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Dev\LaravelAssets\Models\Asset;

class AssetController extends Controller
{
    protected static $entity = Asset::class;
}
