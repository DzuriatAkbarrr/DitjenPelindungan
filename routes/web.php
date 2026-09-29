<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginForm'])
    ->name('login');
Route::post('/login', [AuthController::class, 'login'])
    ->middleware('throttle:5,1')
    ->name('login.store');
Route::get('/setup', [AuthController::class, 'setupForm'])
    ->name('setup');
Route::post('/setup', [AuthController::class, 'setup'])
    ->middleware('throttle:5,1')
    ->name('setup.store');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return auth()->user()->role === 'sesditjen'
            ? redirect()->route('sesditjen.dashboard')
            : redirect()->route('kepegawaian.dashboard');
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});

require __DIR__ . '/kepegawaian.php';
require __DIR__ . '/sesditjen.php';
