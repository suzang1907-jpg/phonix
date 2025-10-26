<?php

namespace App\Http\Controllers\Amp;

use App\Http\Controllers\AmpController;
use App\Models\Article;

class ArticleController extends AmpController
{
    protected static $entity = Article::class;
}
