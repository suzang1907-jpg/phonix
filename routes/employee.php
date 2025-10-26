<?php

use App\Models\Article;
use App\Pages\Auth;
use App\Pages\Dashboard;
use App\Routing\Employee;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::middleware(['shield'])->group(function () {
    Route::middleware(['calculate.origin', 'localize'])->group(function () {
        Route::middleware(['only.domain.primary'])->group(function () {
            Route::middleware(['only.employee.guest'])->group(function () {
                Employee::get(Auth::class, 'login', 'login');
                Employee::post(Auth::class, 'login/post', 'login.post');
            });
        });
    });
});

Route::middleware(['shield', 'calculate.origin', 'localize'])->group(function () {
    Route::middleware(['verify.employee.token'])->group(function () {
        Employee::get(Auth::class, 'logout', 'logout');
        Employee::get(Dashboard::class, '', 'show');
Employee::get(Customer::class, 'create', 'create');
Employee::post(Customer::class, 'store', 'store');
Employee::get(Customer::class, 'list', 'list');
Employee::get(Customer::class, '{id}', 'edit');
Employee::post(Customer::class, '{id}/update', 'update');
Employee::get(Customer::class, '{id}/destroy', 'destroy');
Employee::get(Article::class, 'create', 'create');
Employee::post(Article::class, 'store', 'store');
        Employee::get(Article::class, '{id}', 'edit');
        Employee::post(Article::class, '{id}/update', 'update');
Employee::get(Article::class, '{id}/destroy', 'destroy');
Employee::get(Article::class, '{id}/disable', 'disable');
Employee::get(Article::class, '{id}/enable', 'enable');
    });
});
