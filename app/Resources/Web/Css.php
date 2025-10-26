<?php

namespace App\Resources\Web;

use App\Resources\Css as BaseCss;

class Css extends BaseCss
{
    function path(): string
    {
        return public_path('/build/web/assets/');
    }
}
