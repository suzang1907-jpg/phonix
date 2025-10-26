<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Files\Sitemap;

class SitemapController extends AdminController
{
    protected static $entity = Sitemap::class;
}
