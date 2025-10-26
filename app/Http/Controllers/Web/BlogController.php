<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\WebController;
use App\Models\Blog;

class BlogController extends WebController
{
    protected static $entity = Blog::class;
}
