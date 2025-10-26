<?php

use App\Models\Article;
use App\Pages\Auth;
use App\Pages\Dashboard;
use App\Routing\Customer;
use Illuminate\Support\Facades\Route;

Route::middleware(['shield'])->group(function () {
    Route::middleware(['calculate.origin', 'localize'])->group(function () {
        Route::middleware(['only.domain.primary'])->group(function () {
            Route::middleware(['only.customer.guest'])->group(function () {
                Customer::get(Auth::class, 'login', 'login');
                Customer::post(Auth::class, 'login/post', 'login.post');
            });
        });
    });
});

Route::middleware(['shield', 'calculate.origin', 'localize'])->group(function () {
    Route::middleware(['verify.customer.token'])->group(function () {
        Customer::get(Auth::class, 'logout', 'logout');
        Customer::get(Dashboard::class, '', 'show');
        Customer::get(Article::class, '{id}', 'edit');
        Customer::get(Article::class, '{id}/edit-password/generate', 'edit.password.generate');
        Customer::get(Article::class, '{id}/edit-password/delete', 'edit.password.delete');
        Customer::post(Article::class, '{id}/update', 'update');
    });
});

Route::middleware(['shield', 'calculate.origin', 'localize'])->group(function () {
    Customer::get(Article::class, '{id}/external', 'edit.external');
    Customer::post(Article::class, '{id}/update/external', 'update.external');
});
