<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('Home');
});

Route::get('/signin', function () {
    return view('sign-in');
});


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signin/verif', [LoginController::class, 'validasi'] );
Route::get('/logout', [LoginController::class, 'logout'] );
Route::get('/Barang', [BarangController::class, 'index']);
Route::get('/Tambah', [BarangController::class, 'create']);
Route::get('/Ubah', [BarangController::class, 'edit']);
Route::post('/Form', [BarangController::class, 'store']);
Route::post('/Edit', [BarangController::class, 'update']);

//
Route::get('/tampil.pelanggan', [pelangganController::class, 'index']);