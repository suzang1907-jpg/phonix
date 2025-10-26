<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Tag;

class TagController extends AdminController
{
    protected static $entity = Tag::class;
}
