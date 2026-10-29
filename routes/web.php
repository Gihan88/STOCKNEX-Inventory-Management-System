<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

// Homepage
Route::get('/', function () {
    return redirect()->route('login');
});

// Login Page
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');

// Login Authentication
Route::post('/login', [LoginController::class, 'login'])
    ->middleware('guest');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
// Product Management Routes
Route::middleware('auth')->group(function () {
    Route::resource('products', ProductController::class)
        ->except(['show']);
});
// Customer Management Routes
Route::middleware('auth')->group(function () {

    Route::resource('customers', CustomerController::class)
        ->except(['show']);

});
// User Management Routes
Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class)
        ->except(['show']);
});
// Settings Routes
Route::middleware('auth')->group(function () {

    Route::get('/settings', [\App\Http\Controllers\SettingsController::class, 'index'])
        ->name('settings.index');

    Route::put('/settings/profile', [\App\Http\Controllers\SettingsController::class, 'updateProfile'])
        ->name('settings.profile');

    Route::put('/settings/password', [\App\Http\Controllers\SettingsController::class, 'updatePassword'])
        ->name('settings.password');

});
