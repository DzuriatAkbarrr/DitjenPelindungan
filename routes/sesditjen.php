<?php

use App\Http\Controllers\Sesditjen\AssignmentLetterController;
use App\Http\Controllers\Sesditjen\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('sesditjen')->name('sesditjen.')->group(function () {
    Route::get('/dashboard', DashboardController::class)
        ->name('dashboard');

    Route::get('/surat-tugas', [AssignmentLetterController::class, 'index'])
        ->name('surat-tugas.index');
    Route::get('/persetujuan-surat-tugas', [AssignmentLetterController::class, 'approvals'])
        ->name('surat-tugas.approvals');
    Route::patch('/surat-tugas/{assignmentLetter}/keputusan', [AssignmentLetterController::class, 'decide'])
        ->name('surat-tugas.decide');
});
