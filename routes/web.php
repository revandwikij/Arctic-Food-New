<?php

use App\Http\Controllers\BarangController;
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

Route::resource('barang', BarangController::class);

//login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login/verif', [LoginController::class, 'validasi'] );

//logout
Route::get('/logout', [LoginController::class, 'logout'] );

//register
Route::post('/register/validasi', [LoginController::class, 'register']);

//
Route::get('/tampil.pelanggan', [pelangganController::class, 'index']);

//INI LOGIN-USERS
Route::get('users', [userscontrollers::class, 'user']);
