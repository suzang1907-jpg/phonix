<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Dev\LaravelHighway\HighwayController;

class AdminController extends HighwayController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
