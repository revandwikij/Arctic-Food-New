<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\userscontrollers;

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

// Route::resource('barang', BarangController::class);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/test', function () {
    return view('register');
});
Route::get('/coba', function () {
    return view('sign-in');
});


Route::post('/login/verif', [LoginController::class, 'validasi'] );
Route::get('/logout', [LoginController::class, 'logout'] );
Route::get('/Barang', [BarangController::class, 'index']);
Route::get('/Tambah', [BarangController::class, 'create']);
Route::get('Ubah/{Id_Barang}', [BarangController::class, 'edit']);
Route::post('/Form', [BarangController::class, 'store']);
Route::post('/Edit', [BarangController::class, 'update']);
Route::get('Hapus/{Id_Barang}', [BarangController::class, 'destroy']);

//
Route::get('/tampil.pelanggan', [pelangganController::class, 'index']);

//INI LOGIN-USERS
Route::get('/users', [userscontrollers::class, 'index']);
Route::get('/tambah', [userscontrollers::class, 'create']);
Route::post('/bikin', [userscontrollers::class, 'store']);
Route::post('/hapus', [userscontrollers::class, 'destroy']);
Route::get('/ganti/{id}', [userscontrollers::class, 'edit']);
Route::get('/hapus', [userscontrollers::class, 'destroy']);
Route::get('/cart', [KeranjangController::class, 'cart']);

// Route::get('/users/create', [userscontrollers::class, 'create']);


Route::post('/regis/verif', [LoginController::class, 'register'] );
