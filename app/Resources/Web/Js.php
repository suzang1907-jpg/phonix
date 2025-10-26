<?php

namespace App\Resources\Web;

use App\Resources\Js as BaseJs;

class Js extends BaseJs
{
    function path(): string
    {
        return public_path('/build/assets/');
    }
}
