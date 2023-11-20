<?php

namespace App\Http\Controllers;

use App\Charts\AdminChart;
use App\Models\Alamat;
use App\Models\Barang;
use App\Models\Biaya_Ship;
use App\Models\DetailKeranjang;
use App\Models\kategori;
use App\Models\Keranjang;
use App\Models\OmsetView;
use App\Models\pelanggan;
use App\Models\Pembayaran;
use App\Models\PenjualanView;
use App\Models\BarangPerAkunView;
use App\Models\Penjual;
use App\Models\Pesan;
use App\Models\UlasanModel;
use App\Models\User;
use App\Models\users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class ViewController extends Controller
{
    public function home()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::where('Stok', '>', 0 )->paginate(12);
        $kategoris = kategori::all();
        $produkterlaris = DB::table('barang')
            ->join('detail_keranjang', 'barang.Id_Barang', '=', 'detail_keranjang.Id_Barang')
            ->join('keranjang', 'keranjang.Id_Keranjang', '=', 'detail_keranjang.Id_Keranjang')
            ->join('pesanan', 'pesanan.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
            ->where('pesanan.Status_Pesanan', '=', 'Selesai')
            ->where('barang.Stok', '>', 0)
            ->select('barang.Id_Barang', 'barang.Nama_Barang', 'barang.Foto_Barang', 'barang.Harga', DB::raw('COUNT(detail_keranjang.Kuantitas) AS jumlah_penjualan'))
            ->groupBy('barang.Id_Barang', 'barang.Nama_Barang', 'barang.Foto_Barang', 'barang.Harga')
            ->orderByDesc('jumlah_penjualan')
            ->limit(4)
            ->get();

        $produkbaru =  Barang::orderBy('created_at', 'desc')->take(3)->get();

        return view('index', compact('kategoris', 'barang', 'pelanggan', 'produkbaru'));
    }

    public function admin()
{
    $pelanggan = pelanggan::count();
    $test = pelanggan::join('alamat', 'pelanggan.Id_Pelanggan', '=', 'Alamat.Id_Pelanggan')
        ->get(['pelanggan.*', 'Alamat.Alamat_Lengkap']);
    $barang = Barang::count();
    $kategoris = kategori::all();

    $Total_Harga = Pembayaran::select(DB::raw("CAST(SUM(Total_Harga) as int) as Total_Harga"))
        ->GroupBy(DB::raw("Month(created_at)"))
        ->OrderBy(DB::raw("MONTH(created_at)"))
        ->pluck('Total_Harga');

    $bulan = Pembayaran::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->OrderBy(DB::raw("MONTH(created_at)"))
        ->pluck('bulan');

    $totalTransaksiBulanIni = Pembayaran::whereMonth('created_at', now()->month)->sum('Total_Harga');

    return view('penjual.home', compact('kategoris', 'test', 'pelanggan', 'barang', 'Total_Harga', 'bulan', 'totalTransaksiBulanIni'));
}


    public function login()
    {
        return view('login');
    }
    public function regis()
    {
        return view('register');
    }
    public function cart()
    {
        $user = auth()->user();
        // $test = DB::select('CALL Total_Keranjang(?)', [$user->id]);
        $test = DetailKeranjang::join('barang', 'barang.Id_Barang', '=', 'detail_keranjang.Id_Barang')
                ->join('keranjang', 'keranjang.Id_Keranjang', '=' ,'detail_keranjang.Id_Keranjang')
                ->join('pelanggan', 'pelanggan.Id_Pelanggan', '=' ,'keranjang.Id_Pelanggan')
                ->join('users', 'pelanggan.email', '=', 'users.email')
                ->where('users.id', '=', $user->id)
                ->where('keranjang.Status', '=', 'Aktif')
                ->latest('keranjang.created_at')
                ->get(['barang.*', 'detail_keranjang.*','pelanggan.*']);

        $cekcart = Keranjang::join('pelanggan', 'keranjang.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')->join('users', 'pelanggan.email', '=', 'users.email')
            ->where('users.id', '=', $user->id)
            ->where('keranjang.Status', '=', 'Aktif')
            ->latest('keranjang.created_at')
            ->select('keranjang.Id_Keranjang')->get();
        $alamat = Alamat::join('pelanggan', 'alamat.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')->join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->get();
        return view('users.shopping_cart', compact('test', 'cekcart', 'alamat'));
    }
    public function profil()
    {
        $user = auth()->user();
        $pelanggan = pelanggan::join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->get();
        $barang = Barang::all();
        $kategoris = kategori::all();
        $alamat = Alamat::join('pelanggan', 'alamat.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')->join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->get();
        $biaya_ship = Biaya_Ship::all();
        return view('users.profile', compact('kategoris', 'barang', 'pelanggan', 'biaya_ship', 'alamat'));
    }

    public function tambahadmin()
    {
        return view('penjual.tambahadmin');
    }

    public function profadm()
    {
        $user = auth()->user();
        $penjual = Penjual::join('users', 'penjual.email', '=', 'users.email')->where('users.id', '=', $user->id)->get();
        $admin = users::where('level', 'admin')->first();

        return view('Penjual.profileadmin', ['admin' => $admin, 'penjual' => $penjual]);
    }

    public function bayar()
    {
        $user = auth()->user();
        $pesan = Pesan::all();
        $alamat = Alamat::all()->find('Id_Pelanggan', '=', $user->id);
        return view('users.payment', compact('pesan'), compact('alamat'));
    }

    public function barang()
    {
        $test = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')
        ->sortable()
        ->paginate(3);
            // ->orderBy('Id_Barang', 'desc')
            // ->get(['barang.*', 'kategori.Kategori']);
        $kategori = kategori::all();
        return view('penjual.barang', compact('kategori', 'test'), ['test' => $test]);
    }

    public function tambahbarang()
    {
        // $test = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')
        //         ->get(['barang.*', 'kategori.Kategori']);
        $pelanggan = pelanggan::all();
        // $barang = Barang::all();
        $kategoris = kategori::all();
        return view('penjual.tambah', compact('pelanggan', 'kategoris'));
    }

    public function datapelanggan()
    {
        // $users = pelanggan::join('users', 'pelanggan.email', '=', 'users.email')->where('users.level', '=', 'pelanggan')->get('pelanggan.*');

        $users = DB::select("CALL store_procedure_pelanggan()");
        return view('users.index', compact('users'));
    }

    public function shop()
    {

        $barang = Barang::where('Stok', '>', 0)->paginate(12);
        $kategoris = kategori::all();

        return view('shop', compact('barang', 'kategoris'));
    }

    public function filtershop(Request $request)
    {

        $kategori = $request->input('kategori');

        $barang = Barang::where('Id_Kategori', $kategori)->paginate(12);
        $kategoris = kategori::all();

        // Kirim data barang ke view
        return view('shop', compact('barang', 'kategoris'));
    }

    public function carishop(Request $request)
    {

        $cari = $request->input('cari');

        $barang = Barang::where('Nama_Barang', 'LIKE', '%'. $cari. '%')->paginate(12);
        $kategoris = kategori::all();

        // Kirim data barang ke view
        return view('shop', compact('barang', 'kategoris'));
    }

    public function hargashop(Request $request)
    {

        $min = $request->input('min_harga');
        $max = $request->input('max_harga');

        $barang = Barang::whereBetween('Harga', [$min, $max])->paginate(12);
        $kategoris = kategori::all();


        return view('shop', compact('barang', 'kategoris'));
    }



    public function payment()
    {
        $waktu = Carbon::now();
        $user = auth()->user();
        $pesan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')->join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->latest('pesanan.created_at')->first();



        $datapesan = Pesan::join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
            ->join('pembayaran', 'pembayaran.Id_Shipping', '=', 'shipping.Id_Shipping')
            ->where('pesanan.Id_Pesanan', '=', $pesan->Id_Pesanan)->get();

        $datapesan1 = Pesan::join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
            ->where('pesanan.Id_Pesanan', '=', $pesan->Id_Pesanan)->first();

        $alamat = Alamat::join('pesanan', 'alamat.Id_Alamat', '=', 'pesanan.Id_Alamat')
            ->where('pesanan.Id_Pesanan', '=', $pesan->Id_Pesanan)->get();

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                // 'order_id' => $pesan->Id_Pesanan,
                'order_id' => $datapesan1->Id_Pesanan,
                'gross_amount' => $datapesan1->Total + $datapesan1->Total_Shipping,
            ),
            'customer_details' => array(
                'first_name' => $pesan->username,
                'email' => $pesan->email,
                'phone' => $pesan->no_Telp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('payment', compact('datapesan', 'alamat', 'snapToken', 'waktu'));
    }



    public function pesanan()
    {
        $pesanan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
            ->join('alamat', 'pesanan.Id_Alamat', '=', 'alamat.Id_Alamat')
            ->join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
            ->join('pembayaran', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')->where('pesanan.Status_Pesanan', '=', 'Menunggu Konfirmasi')->latest('pesanan.created_at')->paginate(10);
        return view('penjual.pesanan', compact('pesanan'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function thanks()
    {
        return view('thank');
    }

    public function dataship()
    {
        $ship = Biaya_Ship::sortable()->paginate(10);
        // dd($ship);
        return view('Penjual.dataship', compact('ship'));
    }

    public function tambahship()
    {
        return view('Penjual.tambahship');
    }

    public function riwayat()
{
    $user = auth()->user();
    $pesanan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
        ->join('users', 'users.email', '=', 'pelanggan.email')
        ->join('alamat', 'pesanan.Id_Alamat', '=', 'alamat.Id_Alamat')
        ->join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
        ->join('pembayaran', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')
        ->where('users.id', '=', $user->id)
        ->orderby('pesanan.created_at', 'desc')
        ->paginate(6);

    return view('riwayat', compact('pesanan'));
}

public function filriwayat(Request $request)
{
    $user = auth()->user();
    $pesanan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
        ->join('users', 'users.email', '=', 'pelanggan.email')
        ->join('alamat', 'pesanan.Id_Alamat', '=', 'alamat.Id_Alamat')
        ->join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
        ->join('pembayaran', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')
        ->where('users.id', '=', $user->id)
        ->where('pesanan.Status_Pesanan', '=', $request->status)
        ->paginate(6);

    return view('riwayat', compact('pesanan'));
}




    public function perludikirim()
    {
        $user = auth()->user();
        $pesan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')->join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->latest('pesanan.created_at')->select('pesanan.Id_Pesanan')->first();

        // $datapesan = Pesan::join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
        // ->where('pesanan.Id_Pesanan', '=', $pesan->Id_Pesanan)
        // ->where('pesanan')
        // ->get();

        $pesanan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
            ->join('alamat', 'pesanan.Id_Alamat', '=', 'alamat.Id_Alamat')
            ->join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
            ->join('pembayaran', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')->where('pesanan.Status_Pesanan', '=', 'Diproses')->orwhere('pesanan.Status_Pesanan', '=', 'Dikirim')->get();

        //     $alamat = Alamat::join('pesanan', 'alamat.Id_Alamat', '=', 'pesanan.Id_Alamat')
        //    ->where('pesanan.Id_Pesanan', '=', $pesan->Id_Pesanan)->get();

        return view('Penjual.perludikirim', compact('pesanan'));
    }

    public function selesai()
    {
        $user = auth()->user();
        $pesan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')->join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->latest('pesanan.created_at')->select('pesanan.Id_Pesanan')->first();

        // $datapesan = Pesan::join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
        // ->where('pesanan.Id_Pesanan', '=', $pesan->Id_Pesanan)
        // ->where('pesanan')
        // ->get();

        $pesanan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
            ->join('alamat', 'pesanan.Id_Alamat', '=', 'alamat.Id_Alamat')
            ->join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
            ->join('pembayaran', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')->where('pesanan.Status_Pesanan', '=', 'Selesai')->orwhere('pesanan.Status_Pesanan', '=', 'Dikirim')->get();

        //     $alamat = Alamat::join('pesanan', 'alamat.Id_Alamat', '=', 'pesanan.Id_Alamat')
        //    ->where('pesanan.Id_Pesanan', '=', $pesan->Id_Pesanan)->get();

        return view('penjual.selesai', compact('pesanan'));
    }

    public function profileadmin()
    {
        return view('penjual.profileadmin');
    }

    public function detailorder($Id_Pesanan)
    {
        $pesanan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
            ->join('alamat', 'pesanan.Id_Alamat', '=', 'alamat.Id_Alamat')
            ->join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
            ->join('pembayaran', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')->where('pesanan.Id_Pesanan', '=', $Id_Pesanan)->get();



        $databar = Barang::join('detail_keranjang', 'barang.Id_Barang', '=', 'detail_keranjang.Id_Barang')
        ->join('keranjang', 'keranjang.Id_Keranjang', '=', 'detail_keranjang.Id_Keranjang')
        ->join('pesanan', 'keranjang.Id_Keranjang', '=', 'pesanan.Id_Keranjang')
        ->where('pesanan.Id_Pesanan', '=', $Id_Pesanan)->get();


        return view('detilorder', compact('pesanan', 'databar'));
    }

    public function laporan()
    {
        return view('Penjual.laporan');
    }

    public function rincianlaporan()
    {
        return view('Penjual.rincianlaporan');
    }

    public function laporanPenjualan(Request $request)
    {
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');

        // $penjualan = PenjualanView::whereBetween('tanggal_awal', $tanggalAwal AND 'tanggal_akhir', $tanggalAkhir)->get();
        $penjualan = PenjualanView::whereBetween('tanggal_awal', [$tanggalAwal, $tanggalAkhir])->get();


        return view('Penjual.lapbar', ['penjualan' => $penjualan]);
    }

    public function barangkategori(Request $request)
    {
        $kategori = $request->input('kategori');
        // $kategoriValue = DB::select("SELECT CONVERT(?, utf8mb4_general_ci) AS kategori", [$request->kategori]);


        // Lakukan query untuk mengambil data PenjualanView sesuai kategori
        $test = [];

        if ($kategori) {
            $test = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')->where('kategori.Kategori', '=', $kategori)->paginate(5);
        }

        // Ambil semua kategori (jika diperlukan)
        $kategori = kategori::all();

        return view('Penjual.barang', ['test' => $test, 'kategori' => $kategori]);
    }

    public function lapbar()
    {
        $penjualan = PenjualanView::all();
        return view('Penjual.lapbar', compact('penjualan'));
    }

    public function lihat1()
    {
        $kategoris = kategori::all();
        $barang = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')->where('kategori.Kategori', '=', 'Olahan Daging')->pa();
        return view('shop', compact('barang', 'kategoris'));
    }

    public function lihat2()
    {
        $kategoris = kategori::all();
        $barang = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')->where('kategori.Kategori', '=', 'Olahan Laut')->get();
        return view('shop', compact('barang', 'kategoris'));
    }


    public function invoice()
    {
        return view('Penjual.invoice');
    }

    public function single($Id_Barang)
    {
        $user = auth()->user();

        $barang = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')->where('Id_Barang', $Id_Barang)->get();
        $pelanggan = pelanggan::join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->get();

        $ulasan = UlasanModel::select(
            'ulasan.*',
            'pelanggan.username',
            'barang.Nama_Barang',
            DB::raw("DATE_FORMAT(ulasan.created_at, '%m-%d-%Y') as formatted_created_at")
        )
            ->join('pelanggan', 'ulasan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
            ->join('barang', 'barang.Id_Barang', '=', 'ulasan.Id_Barang')
            ->where('ulasan.Id_Barang', $Id_Barang)
            ->orderBy('ulasan.created_at', 'desc')->get();

        return view('single-post', compact('barang', 'pelanggan', 'user', 'ulasan'));
    }

    // public function laporanOmset(Request $request)
    // {
    //     $bulanawal = $request->input('bulan_awal');
    //     $bulanakhir = $request->input('bulan_akhir');

    //     $penjualan = OmsetView::whereBetween('bulan', [$bulanawal, $bulanakhir])->get();

    //     return view('penjual.lapset', ['penjualan' => $penjualan]);
    // }

    // public function lapset()
    // {
    //     $penjualan = OmsetView::all();
    //     return view('penjual.lapset', compact('penjualan'));
    // }

    public function lapbarperakun(Request $request)
    {
        $barangperakun = BarangPerAkunView::all();

        return view('Penjual.lapbarperakun', ['barangperAkun' => $barangperakun]);
    }

    public function tampilanlapbarakun(Request $request)
    {
        $barangperakun = BarangPerAkunView::all();

        return view('Penjual.tampilanlapbarakun', ['barangperAkun' => $barangperakun]);
    }

    public function filterBarang($Id_Kategori) {
        if ($Id_Kategori) {
            $barang = Barang::where('Id_Kategori', $Id_Kategori)->get();
        } else {
            $barang = Barang::all();
        }

        // Mengembalikan data barang hasil filter sebagai respons
        return view('shop', compact('barang'));
    }

    public function otp() {
        return view('penjual.otp');
    }

    public function backupdb()
    {
        return view('Penjual.backupdb');
    }

    public function backnya()
    {

    //ENTER THE RELEVANT INFO BELOW
    $mysqlHostName      = env('DB_HOST');
    $mysqlUserName      = env('DB_USERNAME');
    $mysqlPassword      = env('DB_PASSWORD');
    $DbName             = env('DB_DATABASE');
    $backup_name        = "mybackup.sql";
    $tables = array(
        // "alamat",
        "barang",
        "biaya_shipping",
        "detail_keranjang",
        // "failed_jobs",
        "kategori",
        "keranjang",
        // "migrations",
        // "password_reset_tokens",
        // "pelanggan",
        "pembayaran",
        // "penjual",
        // "personal_access_tokens",
        "pesanan",
        "riwayat_pesanan",
        // "sessions",
        "shipping",
        "ulasan",
        // "users"
    );
        // $procedure = array(
        //     "FilterKategori",
        //     "Total_Keranjang",
        //     "store_procedure_pelanggan"
        // );
        // $view = array(
        //     "v_laporan_barang",
        //     "v_laporan_per_akun"
        // );
        // $trigger = array(
        //     "Regis_To_Login",
        //     "kurangi_stok_barang"
        // );

    $connect = new \PDO("mysql:host=$mysqlHostName;dbname=$DbName;charset=utf8", "$mysqlUserName", "$mysqlPassword",array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    $get_all_table_query = "SHOW TABLES";
    $statement = $connect->prepare($get_all_table_query);
    $statement->execute();
    $result = $statement->fetchAll();


    $output = '';
    foreach($tables as $table)
    {
     $show_table_query = "SHOW CREATE TABLE " . $table . "";
     $statement = $connect->prepare($show_table_query);
     $statement->execute();
     $show_table_result = $statement->fetchAll();

     foreach($show_table_result as $show_table_row)
     {
      $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
     }
     $select_query = "SELECT * FROM " . $table . "";
     $statement = $connect->prepare($select_query);
     $statement->execute();
     $total_row = $statement->rowCount();

     for($count=0; $count<$total_row; $count++)
     {
      $single_result = $statement->fetch(\PDO::FETCH_ASSOC);
      $table_column_array = array_keys($single_result);
      $table_value_array = array_values($single_result);
      $output .= "\nINSERT INTO $table (";
      $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
      $output .= "'" . implode("','", $table_value_array) . "');\n";
     }
    }

        // Backup Triggers
        // foreach ($trigger as $triggerName) {
        //     $show_trigger_query = "SHOW CREATE TRIGGER " . $triggerName;
        //     $statement = $connect->prepare($show_trigger_query);
        //     $statement->execute();
        //     $show_trigger_result = $statement->fetchAll();

        //     foreach ($show_trigger_result as $show_trigger_row) {
        //         $output .= "\n\n" . $show_trigger_row["SQL Original Statement"] . ";\n\n";
        //     }
        // }

        // Backup Views
        // foreach ($view as $viewName) {
        //     $show_view_query = "SHOW CREATE VIEW " . $viewName;
        //     $statement = $connect->prepare($show_view_query);
        //     $statement->execute();
        //     $show_view_result = $statement->fetchAll();

        //     foreach ($show_view_result as $show_view_row) {
        //         $output .= "\n\n" . $show_view_row["Create View"] . ";\n\n";
        //     }
        // }

        // Backup Stored Procedures
        // foreach ($procedure as $procedureName) {
        //     $show_procedure_query = "SHOW CREATE PROCEDURE " . $procedureName;
        //     $statement = $connect->prepare($show_procedure_query);
        //     $statement->execute();
        //     $show_procedure_result = $statement->fetchAll();

        //     foreach ($show_procedure_result as $show_procedure_row) {
        //         $output .= "\n\n" . $show_procedure_row["Create Procedure"] . ";\n\n";
        //     }
        // }

    $file_name = 'ArcticFood_DataBase_Ke' . '.sql';
    // . date('y-m-d') .
    $file_handle = fopen($file_name, 'w+');
    fwrite($file_handle, $output);
    fclose($file_handle);

   // Set header untuk memberitahu browser cara menangani file
   header('Content-Description: File Transfer');
   header('Content-Type: application/octet-stream');
   header('Content-Disposition: attachment; filename=' . basename($file_name));
   header('Content-Transfer-Encoding: binary');
   header('Expires: 0');
   header('Cache-Control: must-revalidate');
   header('Pragma: public');
   header('Content-Length: ' . filesize($file_name));

   // Bersihkan buffer output dan kirimkan file ke browser
   ob_clean();
   flush();
   readfile($file_name);

   // Hapus file setelah diunduh
   unlink($file_name);
   return Response::download($file_name, $file_name)->deleteFileAfterSend(true);
    }

    public function restorenya(Request $request)
    {
        $sqlFile = $request->file('sql_file');

        if ($sqlFile) {
            $content = file_get_contents($sqlFile);

            $tables = ["barang",
            "biaya_shipping",
            "detail_keranjang",
            // "failed_jobs",
            "kategori",
            "keranjang",
            // "migrations",
            // "password_reset_tokens",
            // "pelanggan",
            "pembayaran",
            // "penjual",
            // "personal_access_tokens",
            "pesanan",
            "riwayat_pesanan",
            // "sessions",
            "shipping",
            "ulasan",
            // "users"
            ];

            // Nonaktifkan kunci asing
            // Nonaktifkan kunci asing
            DB::statement('SET FOREIGN_KEY_CHECKS=0');

            foreach ($tables as $table) {
                // Periksa apakah tabel sudah ada
                if (Schema::hasTable($table)) {
                    // Hapus tabel yang ada
                    Schema::dropIfExists($table);
                }
            }

            // Jalankan perintah SQL dari file
            DB::unprepared($content);

            // Aktifkan kembali kunci asing
            DB::statement('SET FOREIGN_KEY_CHECKS=1');

            return back()
                ->with('success', 'Data berhasil dipulihkan dari file SQL.');
        }

        return redirect()
            ->back()
            ->with('error', 'Gagal memulihkan data. Pastikan Anda mengunggah file SQL yang benar.');
    }
}


