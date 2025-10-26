<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Models\Keyword;

class KeywordController extends AdminController
{
    protected static $entity = Keyword::class;
}
