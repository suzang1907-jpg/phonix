<?php

namespace App\Services;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class LogService
{
    public static function info($message, $context = [])
    {
        if (App::isProduction()) {
            return;
        }

        Log::info($message, $context);
    }
}
