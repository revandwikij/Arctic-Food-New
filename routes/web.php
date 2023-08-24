<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userscontrollers;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PesanController;
use App\Models\pelanggan;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

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

Route::get('/', [ViewController::class, 'home']);
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/regis', [ViewController::class, 'regis'])->name('regis');
Route::get('/profile', [ViewController::class, 'profil'])->middleware('auth')->name('profile');


//BARANG
Route::get('/Barang', [ViewController::class, 'barang']);
Route::get('/Tambah', [ViewController::class, 'tambahbarang']);
Route::get('Ubah/{Id_Barang}', [BarangController::class, 'edit']);
Route::post('/Form', [BarangController::class, 'store']);
Route::post('/Edit', [BarangController::class, 'update']);
Route::get('Hapus/{Id_Barang}', [BarangController::class, 'destroy']);
Route::get('/barang/cari', [BarangController::class, 'search']);


//INI LOGIN-USERS
Route::get('/users', [userscontrollers::class, 'index']);
Route::get('/tambah', [userscontrollers::class, 'create']);
Route::post('/bikin', [userscontrollers::class, 'store']);
Route::post('/hapus', [userscontrollers::class, 'destroy']);
Route::get('/ganti/{id}', [userscontrollers::class, 'edit']);
Route::get('/hapus', [userscontrollers::class, 'destroy']);
Route::get('/bayar', [ViewController::class, 'bayar']);
Route::get('/cart', [ViewController::class, 'cart'])->middleware('auth');
Route::get('/profil', [ViewController::class, 'profil']);
Route::get('/shop', [ViewController::class, 'shop']);
Route::get('/add', [ViewController::class, 'tambahadmin']);
Route::get('/detil', [ViewController::class, 'detail']);
Route::get('/coba', [ViewController::class, 'coba']);
Route::post('/tambahadmin', [PenjualController::class, 'store']);
Route::get('/detail/{Id_Barang}', [PesanController::class, 'index']);
Route::post('/pesan/{Id_Barang}', [PesanController::class, 'pesan']);
Route::post('/keranjang/{Id_Barang}', [PesanController::class, 'keranjang'])->middleware('auth');
Route::get('clean/{Id_Barang}', [PesanController::class, 'hapus']);
Route::get('/beli', [PesanController::class, 'checkout']);
Route::get('/alamat', [AlamatController::class, 'addaddress']);


// Admin
Route::get('/admin', [ViewController::class, 'admin']);


// Penjual





// Login - Register - Logout
Route::post('/login/verif', [LoginController::class, 'validasi'] );
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/regis/verif', [LoginController::class, 'register'] )->name('register.verif');
