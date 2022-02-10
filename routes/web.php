<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/ruangan', [RuanganController::class, 'ruang'])->name('ruang');

Route::get('/detail', [RuanganController::class, 'detail'])->name('detail');