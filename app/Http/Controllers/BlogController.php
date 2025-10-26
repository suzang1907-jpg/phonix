<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    protected static $entity = Blog::class;
}
