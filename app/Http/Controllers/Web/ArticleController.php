<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\WebController;
use App\Models\Article;
class ArticleController extends WebController
{
    protected static $entity = Article::class;
}
