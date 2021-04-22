<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\TopController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\BrandCoordinationController;
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

        Route::get('/', [TopController::class, 'index'])->name('top');
        Route::resource('news', NewsController::class);
        Route::get('g-stage/create', [BrandController::class, 'gstage_create'])->name('gstage.create');
        Route::get('gallipoli/create', [BrandController::class, 'gallipoli_create'])->name('gallipoli.create');
        Route::post('brand', [BrandController::class, 'store'])->name('brand.store');
        Route::resource('coordination', BrandCoordinationController::class);
    });
});
