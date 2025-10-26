<?php

namespace App\Http\Controllers\Web;

use App\Pages\Home;
use Dev\LaravelHighway\HighwayController;

class HomeController extends HighwayController
{
    protected static $entity = Home::class;
}
