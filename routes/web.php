<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MobileController::class, 'home'])->name('mobile.home');
Route::get('/profile', [App\Http\Controllers\MobileController::class, 'profile'])->name('mobile.profile');
