<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ElramaController;
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
    Route::get('login', [AdminController::class, 'login']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/beranda',[AdminController::class, 'home']);
    Route::get('/admin/ucapan',[AdminController::class, 'ucapan']);
});
