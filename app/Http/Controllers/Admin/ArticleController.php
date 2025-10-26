<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Article;

class ArticleController extends AdminController
{
    protected static $entity = Article::class;
}
