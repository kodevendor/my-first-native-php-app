<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

Route::get('/login', [App\Http\Controllers\MobileController::class, 'showLoginForm'])->name('login');

Route::get('/register', [App\Http\Controllers\MobileController::class, 'showRegisterForm'])->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\MobileController::class, 'home'])->name('mobile.home');
    Route::get('/profile', [App\Http\Controllers\MobileController::class, 'profile'])->name('mobile.profile');
    Route::get('/settings', [App\Http\Controllers\MobileController::class, 'settings'])->name('mobile.settings');
});
