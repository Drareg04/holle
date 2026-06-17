<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ->name('login');
Route::get('/auth/authentik/redirect', [LoginController::class, 'authentikRedirect']);
Route::get('/auth/authentik/callback', [LoginController::class, 'authentikCallback']);
Route::get('/auth/google/redirect', [LoginController::class, 'googleRedirect']);
Route::get('/auth/google/callback', [LoginController::class, 'googleCallback']);

Route::get('/auth/logout', [LoginController::class, 'logout'])->name('logout');