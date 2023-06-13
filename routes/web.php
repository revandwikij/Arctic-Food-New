<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', [ViewController::class, 'home'])->middleware('auth');
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/regis', [ViewController::class, 'regis']);
Route::get('/profile', [ViewController::class, 'profile']);

Route::get('/p', function () {
    return view('coba');
});

Route::get('/coba', function () {
    return view('keranjang');
});

Route::get('/Barang', [ViewController::class, 'barang']);
Route::get('/Tambah', [ViewController::class, 'tambahbarang']);
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
Route::get('/bayar', [PaymentController::class, 'bayar']);
Route::get('/cart', [ViewController::class, 'cart']);
Route::get('/profil', [ViewController::class, 'profil']);
Route::get('/add', [ViewController::class, 'tambahadmin']);
Route::get('/detil', [ViewController::class, 'detail']);
Route::post('/tambahadmin', [PenjualController::class, 'store']);
Route::get('/detail/{Id_Barang}', [KeranjangController::class, 'index']);
Route::post('/pesan/{Id_Barang}', [KeranjangController::class, 'pesan']);
Route::post('/keranjang/{Id_Barang}', [KeranjangController::class, 'keranjang']);
Route::get('clean/{Id_Barang}', [KeranjangController::class, 'hapus']);



// Route::get('/users/create', [userscontrollers::class, 'create']);

// Admin
Route::get('/admin', [ViewController::class, 'admin']);


// Penjual





// Login - Register - Logout
Route::post('/login/verif', [LoginController::class, 'validasi'] );

Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/regis/verif', [LoginController::class, 'register'] );

// Route::post('/regis/verif', function (Request $request) {
//     pelanggan::create([
//         'id' => $request->id,
//         'username' => $request->username,
//         'password' => password_hash($request->password, PASSWORD_DEFAULT),
//         'email' => $request->email,
//         'jenkel' => $request->jenkel,
//         'no_telp' => $request->no_telp,
//     ]);

//     $request->validate([
//         'password' =>'required|confirmed|min:8'
//     ]);

//     return redirect('/login');
// });