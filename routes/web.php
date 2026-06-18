<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// auth
Route::view('/login', "auth.login")->name('login');
Route::post("/login", [LoginController::class, 'passwordLogin']);

Route::get('/auth/{provider}/redirect', [LoginController::class, 'providerRedirect']);
Route::get('/auth/{provider}/callback', [LoginController::class, 'providerCallback']);
Route::get('/auth/logout', [LoginController::class, 'logout'])->name('logout');

// normal pages
Route::get('/', function () {
    return view('welcome');
});

Route::view("/search", "search");


// logged in routes
Route::group(['middleware' => ['auth']], function () {
    Route::view("/account", "search");
});
