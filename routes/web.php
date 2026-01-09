<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])
        ->name('profile')->middleware('password.confirm');

    // User Master
    Route::resource('users', Usercontroller::class);
});
