<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Map;

class MapController extends AdminController
{
    protected static $entity = Map::class;
}
