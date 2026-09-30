<?php

use App\Http\Controllers\Sesditjen\AssignmentLetterController;
use App\Http\Controllers\Sesditjen\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('sesditjen')->name('sesditjen.')->group(function () {
    Route::get('/dashboard', DashboardController::class)
        ->name('dashboard');

    Route::get('/surat-perjalanan-dinas', [AssignmentLetterController::class, 'index'])
        ->name('surat-perjalanan-dinas.index');
    Route::get('/persetujuan-surat-perjalanan-dinas', [AssignmentLetterController::class, 'approvals'])
        ->name('surat-perjalanan-dinas.approvals');
    Route::patch('/surat-perjalanan-dinas/{assignmentLetter}/keputusan', [AssignmentLetterController::class, 'decide'])
        ->name('surat-perjalanan-dinas.decide');
});
