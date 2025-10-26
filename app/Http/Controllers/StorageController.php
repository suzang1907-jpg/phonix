<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Dev\LaravelHighway\HighwayController;

class StorageController extends HighwayController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getDefaultLogoResponse()
    {
        return response()->file(public_path('logo.jpg'), [
            "Cache-Control" => "private, max-age=31536000",
            "pragma" => "private"
        ]);
    }
}
