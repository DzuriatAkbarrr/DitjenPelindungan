<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1')->name('login.store');
Route::get('/setup', [AuthController::class, 'setupForm'])->name('setup');
Route::post('/setup', [AuthController::class, 'setup'])->middleware('throttle:5,1')->name('setup.store');

Route::middleware('auth')->group(function () {
    Route::view('/', 'dashboard')->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/pengguna', [UserController::class, 'index'])->name('users.index');
    Route::post('/pengguna', [UserController::class, 'store'])->name('users.store');
    Route::put('/pengguna/{user}/password', [UserController::class, 'updatePassword'])->name('users.password');
});
