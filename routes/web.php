<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PdfController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userscontrollers;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\ChartController;
use App\Models\Barang;
use App\Models\pelanggan;
use App\Models\Shipping;
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

// HOME
Route::get('/', [ViewController::class, 'home']);

// Login - Register - Logout
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::post('/login/verif', [LoginController::class, 'validasi'] );
Route::get('/regis', [ViewController::class, 'regis'])->name('regis');
Route::post('/regis/verif', [LoginController::class, 'register'] )->name('register.verif');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/updatepassword', [LoginController::class, 'updatepassword']);



// VIEW
Route::get('/detail/{Id_Barang}', [PesanController::class, 'index']);
Route::get('/shop', [ViewController::class, 'shop']);
Route::get('/about', [ViewController::class, 'about']);
Route::get('/contact', [ViewController::class, 'contact']);
Route::get('/profile', [ViewController::class, 'profil'])->middleware('auth')->name('profile');

//penjual kak
Route::group(['middleware' => ['auth', 'seller']], function () {
    Route::get('/dataship', [ViewController::class, 'dataship']);
    Route::post('/dataship/search', [SearchController::class, 'searchship']);
    Route::post('/tambahship/action', [ShippingController::class, 'store']);
    Route::get('/tambahship', [ViewController::class, 'tambahship']);
    Route::get('/editship/{Id_Biaya}', [ShippingController::class, 'edit']);
    Route::post('/edit', [ShippingController::class, 'update']);
    Route::get('/hapusship/{Id_Biaya}', [ShippingController::class, 'destroy']);
    Route::get('/perludikirim', [ViewController::class, 'perludikirim']);
    Route::get('/laporan', [ViewController::class, 'laporan']);
    Route::get('/rincianlaporan', [ViewController::class, 'rincianlaporan']);
// Route::group(['middleware' => ['auth', 'seller']], function () {
    Route::get('/kategori', [BarangController::class, 'kategori']);
    Route::post('/katadd', [BarangController::class, 'addkategori']);
    Route::get('/admin', [ViewController::class, 'admin']);
    Route::get('/barang', [ViewController::class, 'barang']);
    Route::get('/barkat', [ViewController::class, 'barangkategori']);
    Route::get('/Tambah', [ViewController::class, 'tambahbarang']);
    Route::get('Ubah/{Id_Barang}', [BarangController::class, 'edit']);
    Route::post('/Form', [BarangController::class, 'store']);
    Route::post('/Edit', [BarangController::class, 'update']);
    Route::get('Hapus/{Id_Barang}', [BarangController::class, 'destroy']);
    Route::post('/barang/search', [SearchController::class, 'searchbarang']);
    Route::get('/users', [Viewcontroller::class, 'datapelanggan']);
    Route::post('/users/search', [SearchController::class, 'searchuser']);
    Route::get('/order', [ViewController::class, 'pesanan']);

    Route::get('/barlap', [ViewController::class, 'laporanPenjualan']);
    Route::get('/omset', [ViewController::class, 'laporanOmset']);
    Route::post('konfirm/{Id_Pesanan}', [PesanController::class, 'konfirm']);
    Route::get('/profileadmin', [ViewController::class, 'profileadmin']);
    Route::get('/laporanbarang', [ViewController::class, 'lapbar']);
    Route::get('/laporanomset', [ViewController::class, 'lapset']);
    Route::get('/generate-pdf', [PdfController::class, 'generatePDF']);
    Route::get('/stream-pdf', [PdfController::class, 'streamPDF']);
    Route::get('/generate-pdf2', [PdfController::class, 'generatePDF2']);
    Route::get('/stream-pdf2', [PdfController::class, 'streamPDF2']);
    Route::get('/lihatinvoice/{Id_Pesanan}', [PdfController::class, 'invoice']);
    Route::get('/kiriminvoice/{Id_Pesanan}', [PdfController::class, 'kirim']);
    Route::get('/invoice', [ViewController::class, 'invoice']);
    Route::get('/otp', [ViewController::class, 'otp']);

    Route::get('/profileadmin', [ViewController::class, 'profadm']);


    Route::post('kirim/{Id_Pesanan}', [PesanController::class, 'konfirmkirim']);

});



Route::group(['middleware' => ['auth', 'pembeli']], function () {
    Route::get('/bayar', [ViewController::class, 'bayar']);
    Route::get('/cart', [ViewController::class, 'cart']);
    Route::get('/profil', [ViewController::class, 'profil']);
    Route::get('/payment', [ViewController::class, 'payment']);
    Route::get('/thanks', [ViewController::class, 'thanks']);
    Route::post('/pesan/{Id_Barang}', [PesanController::class, 'pesan']);
    Route::post('/keranjang/{id}', [PesanController::class, 'keranjang'])->middleware('auth');
    Route::get('/clean/{Id_Barang}', [PesanController::class, 'hapus']);
    Route::get('/beli/{Id_Keranjang}', [PesanController::class, 'checkout']);
    Route::post('/bayar/{Id_Pesanan}', [PesanController::class, 'pembayaran']);
    Route::post('/terima/{Id_Pesanan}', [PesanController::class, 'terima']);
    Route::get('/alamat', [AlamatController::class, 'addaddress']);
    Route::get('/single/{Id_Barang}',[ViewController::class, 'single']);
    Route::post('/ulasan/{Id_Barang}',[UlasanController::class, 'store']);
    Route::get('/detail/{Id_Barang}', [PesanController::class, 'index']);
    Route::get('/shop', [ViewController::class, 'shop']);
    Route::get('/shop/result', [ViewController::class, 'filtershop']);
    Route::get('/shop/search', [ViewController::class, 'carishop']);
    Route::get('/shop/price', [ViewController::class, 'hargashop']);
    Route::get('/lihat', [ViewController::class, 'lihat1']);
    Route::get('/lihat1', [ViewController::class, 'lihat2']);
    Route::get('/contact', [ViewController::class, 'contact']);
    Route::get('/rincian/{Id_Barang}', [ViewController::class, 'detailorder']);
    Route::get('/barang/filter',[ViewController::class, 'filter']);
    Route::get('/about', [ViewController::class, 'about']);
    Route::get('/transaksi', [ViewController::class, 'riwayat']);
    Route::get('/filter-barang/{Id_Kategori}', [ViewController::class, 'filterBarang']);
    Route::get('/profile', [ViewController::class, 'profil'])->middleware('auth')->name('profile');

});




//INI LOGIN-USERS
Route::post('/updatepel', [userscontrollers::class, 'updatepel']);
Route::get('/bayar', [ViewController::class, 'bayar']);
Route::get('/cart', [ViewController::class, 'cart'])->middleware('auth');
Route::get('/profil', [ViewController::class, 'profil']);
Route::get('/payment', [ViewController::class, 'payment']);
Route::get('/thanks', [ViewController::class, 'thanks']);
Route::post('/pesan/{Id_Barang}', [PesanController::class, 'pesan']);
Route::post('/keranjang/{id}', [PesanController::class, 'keranjang'])->middleware('auth');
Route::get('/clean/{Id_Barang}', [PesanController::class, 'hapus']);
Route::post('/beli/{Id_Keranjang}', [PesanController::class, 'checkout']);
Route::get('/alamat', [AlamatController::class, 'addaddress']);

// Route::get('/tambah', [userscontrollers::class, 'create']);
// Route::post('/bikin', [userscontrollers::class, 'store']);
// Route::post('/hapus', [userscontrollers::class, 'destroy']);
// Route::get('/ganti/{id}', [userscontrollers::class, 'edit']);
// Route::get('/hapus', [userscontrollers::class, 'destroy']);



Route::post('/tambahadmin', [PenjualController::class, 'store']);
Route::get('/add', [ViewController::class, 'tambahadmin']);
// Route::get('/detil', [ViewController::class, 'detail']);
// Route::get('/coba', [ViewController::class, 'coba']);













