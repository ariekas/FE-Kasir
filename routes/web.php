<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', admin::class, 'index')->name('adminDashboard');

Route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('adminDashboard');
Route::get('/', [App\Http\Controllers\userController::class, 'index'])->name('userDashboard');
Route::get('/members', [App\Http\Controllers\userController::class, 'members'])->name('members');
Route::get('/penjaga_gudang', [App\Http\Controllers\userController::class, 'penjaga_gudang'])->name('penjaga_gudang');