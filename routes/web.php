<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelangganController;


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

Route::resource('barang', BarangController::class);
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signin/verif', [LoginController::class, 'validasi'] );
Route::get('/logout', [LoginController::class, 'logout'] );

Route::get('/tampil.pelanggan', [pelangganController::class, 'index']);