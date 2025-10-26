<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\WebController;
use App\Models\Article;
class ArticleController extends WebController
{
    protected static $entity = Article::class;
}
