<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Blog;

class BlogController extends AdminController
{
    protected static $entity = Blog::class;
}
