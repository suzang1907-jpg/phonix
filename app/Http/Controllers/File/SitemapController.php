<?php

namespace App\Http\Controllers\File;

use App\Files\Sitemap;
use Dev\LaravelHighway\HighwayController;

class SitemapController extends HighwayController
{
    protected static $entity = Sitemap::class;
}
