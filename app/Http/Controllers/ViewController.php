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
use App\Models\PenjualanView;
use App\Models\Pesan;
use App\Models\UlasanModel;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function home()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::paginate(12);
        $kategoris = kategori::all();
        $produkterlaris = DB::table('barang')
            ->join('detail_keranjang', 'barang.Id_Barang', '=', 'detail_keranjang.Id_Barang')
            ->join('keranjang', 'keranjang.Id_Keranjang', '=', 'detail_keranjang.Id_Keranjang')
            ->join('pesanan', 'pesanan.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
            ->where('pesanan.Status_Pesanan', '=', 'Selesai')
            ->select('barang.Id_Barang', 'barang.Nama_Barang', 'barang.Foto_Barang', 'barang.Harga', DB::raw('COUNT(detail_keranjang.Kuantitas) AS jumlah_penjualan'))
            ->groupBy('barang.Id_Barang', 'barang.Nama_Barang', 'barang.Foto_Barang', 'barang.Harga')
            ->orderByDesc('jumlah_penjualan')
            ->limit(4)
            ->get();

        return view('index', compact('kategoris', 'barang', 'pelanggan', 'produkterlaris'));
    }

    public function admin()
    {
        $pelanggan = pelanggan::count();
        // $alamat = Alamat::all();
        $test = pelanggan::join('Alamat', 'pelanggan.Id_Pelanggan', '=', 'Alamat.Id_Pelanggan')
            ->get(['pelanggan.*', 'Alamat.Alamat_Lengkap']);
        // $d = DB::select('CALL store_procedure_pelanggan()');
        $barang = Barang::count();
        $kategoris = kategori::all();

        // $chart = new AdminChart;
        // $chart->labels(['Jan', 'Feb', 'Mar']);
        // $chart->dataset('Users by trimester', 'line', [10, 25, 13]);

        return view('Penjual.home', compact('kategoris', 'test', 'pelanggan', 'barang'));
            // , 'chart'
    }

    public function login()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('login', compact('kategoris'), compact('barang'), compact('pelanggan'));
    }
    public function regis()
    {
        $pelanggan = pelanggan::all();
        $barang = Barang::all();
        $kategoris = kategori::all();
        return view('register', compact('kategoris'), compact('barang'), compact('pelanggan'));
    }
    public function cart()
    {
        $user = auth()->user();
        $test = DetailKeranjang::join('barang', 'barang.Id_Barang', '=', 'detail_keranjang.Id_Barang')
                ->join('keranjang', 'keranjang.Id_Keranjang', '=' ,'detail_keranjang.Id_Keranjang')
                ->join('pelanggan', 'pelanggan.Id_Pelanggan', '=' ,'keranjang.Id_Pelanggan')
                ->join('users', 'pelanggan.email', '=', 'users.email')
                ->where('users.id', '=', $user->id)
                ->where('keranjang.Status', '=', 'Aktif')
                ->latest('keranjang.created_at')
                ->get(['barang.*', 'detail_keranjang.*','pelanggan.*']);
        $pelanggan = pelanggan::all();
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
        auth()->user();

        return view('Penjual.tambahadmin');
    }

    public function profadm()
    {

        $admin = users::where('level', 'admin')->first();

        return view('penjual.profileadmin', ['admin' => $admin]);
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
            // ->orderBy('Id_Barang', 'desc')
            ->get(['barang.*', 'kategori.Kategori']);
        $kategori = kategori::all();
        return view('Penjual.barang', compact('kategori', 'test'), ['test' => $test]);
    }

    public function tambahbarang()
    {
        // $test = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')
        //         ->get(['barang.*', 'kategori.Kategori']);
        $pelanggan = pelanggan::all();
        // $barang = Barang::all();
        $kategoris = kategori::all();
        return view('Penjual.tambah', compact('pelanggan', 'kategoris'));
    }

    public function datapelanggan()
    {
        $users = pelanggan::join('users', 'pelanggan.email', '=', 'users.email')->where('users.level', '=', 'pelanggan')->get('pelanggan.*');

        return view('users.index', compact('users'));
    }

    public function shop()
    {
        
        $barang = Barang::paginate(12);
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

    

    public function payment()
    {
        $user = auth()->user();
        $pesan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')->join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->latest('pesanan.created_at')->first();



        $datapesan = Pesan::join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
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

        return view('payment', compact('datapesan', 'alamat', 'snapToken'));
    }



    public function pesanan()
    {
        $pesanan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
            ->join('alamat', 'pesanan.Id_Alamat', '=', 'alamat.Id_Alamat')
            ->join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
            ->join('pembayaran', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')->where('pesanan.Status_Pesanan', '=', 'Menunggu Konfirmasi')->get();
        return view('Penjual.pesanan', compact('pesanan'));
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
        $ship = Biaya_Ship::all();
        // dd($ship);
        return view('penjual.dataship', compact('ship'));
    }

    public function tambahship()
    {
        return view('penjual.tambahship');
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
        ->paginate(6); // Add the paginate method here

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

        return view('penjual.perludikirim', compact('pesanan'));
    }

    public function profileadmin()
    {
        return view('Penjual.profileadmin');
    }

    public function detailorder($Id_Pesanan)
    {
        $pesanan = Pesan::join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
            ->join('alamat', 'pesanan.Id_Alamat', '=', 'alamat.Id_Alamat')
            ->join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
            ->join('pembayaran', 'shipping.Id_Shipping', '=', 'pembayaran.Id_Shipping')->where('pesanan.Id_Pesanan', '=', $Id_Pesanan)->get();


        return view('detilorder', compact('pesanan'));
    }





    public function laporan()
    {
        return view('penjual.laporan');
    }

    public function rincianlaporan()
    {
        return view('penjual.rincianlaporan');
    }

    public function laporanPenjualan(Request $request)
    {
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');

        $penjualan = PenjualanView::where('tanggal_awal', $tanggalAwal)->where('tanggal_akhir', $tanggalAkhir)->get();

        return view('penjual.lapbar', ['penjualan' => $penjualan]);
    }

    public function barangkategori(Request $request)
    {
        $kategoriValue = $request->input('kategori');

        // Lakukan query untuk mengambil data PenjualanView sesuai kategori
        $test = [];

        if ($kategoriValue) {
            $test = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')
                ->where('kategori.Kategori', $kategoriValue)
                ->get();
        }

        // Ambil semua kategori (jika diperlukan)
        $kategori = kategori::all();

        return view('penjual.barang', ['test' => $test, 'kategori' => $kategori]);
    }

    public function lapbar()
    {
        $penjualan = PenjualanView::all();
        return view('penjual.lapbar', compact('penjualan'));
    }

    public function lihat1()
    {
        $kategoris = kategori::all();
        $barang = Barang::join('kategori', 'barang.Id_Kategori', '=', 'kategori.Id_Kategori')->where('kategori.Kategori', '=', 'Olahan Daging')->get();
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
        return view('penjual.invoice');
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

    public function laporanOmset(Request $request)
    {
        $bulanawal = $request->input('bulan_awal');
        $bulanakhir = $request->input('bulan_akhir');

        $penjualan = OmsetView::whereBetween('bulan', [$bulanawal, $bulanakhir])->get();

        return view('penjual.lapset', ['penjualan' => $penjualan]);
    }

    public function lapset()
    {
        $penjualan = OmsetView::all();
        return view('penjual.lapset', compact('penjualan'));
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

}
