<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::get('/', [BarangController::class, 'list'])->name('home');

Route::get('/form', [BarangController::class, 'form']);
Route::post('/processForm', [BarangController::class, 'processForm']);
Route::get('/edit/{id}', [BarangController::class, 'edit']);
Route::post('/processEdit/{id}', [BarangController::class, 'processEdit']);

Route::get('/hapus/{id}', [BarangController::class, 'hapus']);