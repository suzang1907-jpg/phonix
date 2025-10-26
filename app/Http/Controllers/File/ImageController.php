<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use Dev\LaravelAssets\Models\Image;

class ImageController extends Controller
{
    protected static $entity = Image::class;
}
