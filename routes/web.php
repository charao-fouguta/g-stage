<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandGstageController;
use App\Http\Controllers\BrandGallipoliController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\StoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TopController::class, 'index'])->name('top');
Route::get('/about', [AboutController::class, 'index'])->name('about'); 
Route::get('/g-stage', [BrandGstageController::class, 'index'])->name('g-stage');
Route::get('/gallipoli', [BrandGallipoliController::class, 'index'])->name('gallipoli');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/store', [StoreController::class, 'index'])->name('store');