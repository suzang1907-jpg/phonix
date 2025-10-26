<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Story;

class StoryController extends AdminController
{
    protected static $entity = Story::class;
}
