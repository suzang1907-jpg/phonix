<?php

namespace App\Http\Controllers\Amp;

use App\Http\Controllers\AmpController;
use App\Models\Blog;

class BlogController extends AmpController
{
    protected static $entity = Blog::class;
}
