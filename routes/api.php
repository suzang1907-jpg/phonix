<?php

use App\Models\Customer;
use App\Models\Location;
use App\Pages\Search;
use App\Routing\Api;
use App\Services\Server;
use Illuminate\Support\Facades\Route;

Route::middleware(['shield', 'calculate.origin', 'localize'])->group(function () {
    Route::middleware(['cors'])->group(function () {
        Route::middleware(['verify.user.token'])->group(function () {
            /** Location */
            Api::post(Location::class, 'search', 'search');
            Api::post(Location::class, 'map/search', 'map.search');
            Api::post(Search::class, 'admin/dashboard', 'adminDashboard');
            Api::post(Customer::class, 'search', 'search');
        });
        Route::middleware(['verify.employee.token'])->group(function () {
            Api::post(Customer::class, 'search/employee', 'search.employee');
        });
    });
});

Route::middleware(['shield', 'cors'])->group(function () {
    Api::post(Server::class, 'domains', 'domains');
    Api::post(Server::class, 'blogs', 'blogs');
    Api::post(Server::class, 'keywords', 'keywords');
});
