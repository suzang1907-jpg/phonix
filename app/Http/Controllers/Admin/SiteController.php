<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Site;

class SiteController extends AdminController
{
    protected static $entity = Site::class;
}
