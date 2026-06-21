<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MiscController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\Seller\ServiceController;
use App\Http\Controllers\SettingsController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsSeller;
use Illuminate\Support\Facades\Route;

// auth
Route::view('/login', "auth.login")->name('login');
Route::post("/login", [LoginController::class, 'passwordLogin']);

Route::get('/auth/{provider}/redirect', [LoginController::class, 'providerRedirect']);
Route::get('/auth/{provider}/callback', [LoginController::class, 'providerCallback']);
Route::get('/auth/logout', [LoginController::class, 'logout'])->name('logout');


// admin routes
Route::middleware([IsAdmin::class])->group(function () {
    Route::view("/admin", "admin.dash");

    Route::resource("/admin/users", UserController::class);
});


// normal pages
Route::get('/', [RecommendationController::class, "mainPage"]);

Route::view("/search", "search");


// logged in routes
Route::group(['middleware' => ['auth']], function () {
    Route::view("/chat", "search");

    Route::get('/settings', [SettingsController::class, "account"]);
    Route::get('/settings/seller', [SettingsController::class, "seller"]);
    Route::post('/settings/seller', [SettingsController::class, "sellerSubmit"]);

    Route::get('/settings/payment', [SettingsController::class, "payment"]);
});

// seller routes
Route::middleware([IsSeller::class])->group(function () {
    Route::view("/seller", "seller.dash");
    Route::resource("/seller/services", ServiceController::class);
});




// misc pages
Route::get("{slug}", [MiscController::class, "miscPage"]);
