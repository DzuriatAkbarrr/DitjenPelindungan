<?php

use App\Http\Controllers\Kepegawaian\AssignmentLetterController;
use App\Http\Controllers\Kepegawaian\DashboardController;
use App\Http\Controllers\Kepegawaian\EmployeeRecordController;
use App\Http\Controllers\Kepegawaian\LeaveRecordController;
use App\Http\Controllers\Kepegawaian\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('kepegawaian')->name('kepegawaian.')->group(function () {
    Route::get('/dashboard', DashboardController::class)
        ->name('dashboard');

    Route::get('/cuti', [LeaveRecordController::class, 'index'])
        ->name('cuti.index');
    Route::post('/cuti', [LeaveRecordController::class, 'store'])
        ->name('cuti.store');
    Route::delete('/cuti/{leaveRecord}', [LeaveRecordController::class, 'destroy'])
        ->name('cuti.destroy');

    Route::get('/surat-tugas', [AssignmentLetterController::class, 'index'])
        ->name('surat-tugas.index');
    Route::post('/surat-tugas', [AssignmentLetterController::class, 'store'])
        ->name('surat-tugas.store');
    Route::delete('/surat-tugas/{assignmentLetter}', [AssignmentLetterController::class, 'destroy'])
        ->name('surat-tugas.destroy');

    Route::get('/pegawai', [EmployeeRecordController::class, 'index'])
        ->name('pegawai.index');
    Route::post('/pegawai', [EmployeeRecordController::class, 'store'])
        ->name('pegawai.store');
    Route::patch('/pegawai/{employeeRecord}/status', [EmployeeRecordController::class, 'updateStatus'])
        ->name('pegawai.status');
    Route::delete('/pegawai/{employeeRecord}', [EmployeeRecordController::class, 'destroy'])
        ->name('pegawai.destroy');

    Route::get('/pengguna', [UserController::class, 'index'])
        ->name('users.index');
    Route::post('/pengguna', [UserController::class, 'store'])
        ->name('users.store');
    Route::put('/pengguna/{user}/password', [UserController::class, 'updatePassword'])
        ->name('users.password');
});
