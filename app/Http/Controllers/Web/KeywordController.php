<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\WebController;
use App\Models\Keyword;

class KeywordController extends WebController
{
    protected static $entity = Keyword::class;
}
