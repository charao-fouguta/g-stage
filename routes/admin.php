<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest');

    Route::middleware('auth:admin')->group(function() {
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
    });
});
