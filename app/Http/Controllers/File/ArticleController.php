<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    protected static $entity = Article::class;
}
