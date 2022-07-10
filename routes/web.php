<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ElramaController;
use App\Http\Controllers\UcapanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UndanganController;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [UndanganController::class, 'index']);


Route::prefix('elrama')->group(function () {
    Route::get('/{name}', [ElramaController::class, 'index']);
    Route::post('/ucapan', [ElramaController::class, 'ucapan'])->name('ucapan');
    Route::get('/admin/login', [AdminController::class, 'index']);
    Route::post('/admin/login', [AdminController::class, 'login'])->name('login');
    Route::get('/admin', [AdminController::class, 'beranda']);
    Route::get('/admin/beranda',[AdminController::class, 'dashboard'])->name('beranda');
    Route::get('/admin/ucapan',[UcapanController::class, 'index'])->name('ucapanAdmin');
    Route::delete('/admin/ucapan/{id}',[UcapanController::class, 'destroy'])->name('hapusUcapan');
});
