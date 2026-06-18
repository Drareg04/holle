<?php

use App\Http\Controllers\Admin\CarouselController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecommendationController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;

// auth
Route::view('/login', "auth.login")->name('login');
Route::post("/login", [LoginController::class, 'passwordLogin']);

Route::get('/auth/{provider}/redirect', [LoginController::class, 'providerRedirect']);
Route::get('/auth/{provider}/callback', [LoginController::class, 'providerCallback']);
Route::get('/auth/logout', [LoginController::class, 'logout'])->name('logout');

// normal pages
Route::get('/', [RecommendationController::class, "mainPage"]);

Route::view("/search", "search");


// logged in routes
Route::group(['middleware' => ['auth']], function () {
    Route::view("/chat", "search");
});

// admin routes
Route::middleware([IsAdmin::class])->group(function () {
    Route::view("/admin", "admin.dash");
    Route::get("/admin/carousel", [CarouselController::class, "index"]);
    Route::get("/admin/carousel/create", [CarouselController::class, "create"]);

    Route::resource("admin/users", UserController::class);
});
