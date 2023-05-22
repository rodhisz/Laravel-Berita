<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BeritaController::class, 'index'])->name('index');

Route::get('/create', [BeritaController::class, 'create'])->name('create');
Route::post('/create/berita', [BeritaController::class, 'store'])->name('store');

Route::get('/show/{id}', [BeritaController::class, 'show'])->name('show');

Route::get('/edit/{id}', [BeritaController::class, 'edit'])->name('edit');
Route::put('/edit/{id}/update', [BeritaController::class, 'update'])->name('update');

Route::delete('/delete/{id}', [BeritaController::class, 'destroy'])->name('destroy');
