<?php

namespace App\Http\Controllers;

use App\Events\EventPembayaran;
use App\Models\activity_log;
use App\Models\Alamat;
use App\Models\Barang;
use App\Models\Biaya_Ship;
use App\Models\DetailKeranjang;
use App\Models\kategori;
use App\Models\Keranjang;
use App\Models\Notif as ModelsNotif;
use App\Models\Pesan;
use App\Models\User;
use App\Models\pelanggan;
use App\Models\Pembayaran;
use App\Models\Shipping;
use App\Models\users;
use App\Notifications\Notif;
use App\Notifications\PesananMasukNotification;
// use App\Notifications\Notif;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;

class PesanController extends Controller
{
    public function index($Id_Barang)
    {
        $kategoris = kategori::all();
        $Barang = Barang::where('Id_Barang', $Id_Barang)->get();
        return view('detail', compact('Barang'), compact('kategoris'));
    }

    public function pesan(Request $request, $Id_Barang)
    {
        $Barang = Barang::where('Id_Barang', $Id_Barang)->get();
        return redirect('/');
    }

    public function keranjang(Request $request, $Id_Barang)
    {
        if (Auth::id()) {


            $user = auth()->user();
            $Barang = Barang::where('Id_Barang', $Id_Barang)->first();
            $cek = Pelanggan::join('users', 'pelanggan.email', '=', 'users.email')
            ->where('users.id', '=', $user->id)->select('pelanggan.Id_Pelanggan')->first();
            $pecah = json_decode($cek, true);
            $kran = $pecah['Id_Pelanggan'];


            $lastUid1 = DetailKeranjang::orderBy('id', 'desc')->first()->Id_Detail_Keranjang ?? 'D000';
            $nextNumber1 = (int) substr($lastUid1, 1) + 1;
            $newUid1 = 'D' . str_pad($nextNumber1, 3, '0', STR_PAD_LEFT);

            $lastUid = Keranjang::orderBy('id', 'desc')->first()->Id_Keranjang ?? 'K000';
            $nextNumber = (int) substr($lastUid, 1) + 1;
            $newUid = 'K' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

            if (Keranjang::where('Id_Pelanggan', $kran)->where('Status', '=', 'Aktif')->exists())
            {

                $cekcart = Keranjang::join('pelanggan', 'keranjang.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
                ->join('users', 'pelanggan.email', '=', 'users.email')
                    ->where('users.id', '=', $user->id)
                    ->where('keranjang.Status', '=', 'Aktif')
                    ->select('keranjang.Id_Keranjang')->first();
                $pecah2 = json_decode($cekcart, true);
                $kran2 = $pecah2['Id_Keranjang'];

                $cekbarang = DetailKeranjang::join('keranjang', 'detail_keranjang.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
                ->join('pelanggan', 'keranjang.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
                ->join('users', 'pelanggan.email', '=', 'users.email')
                ->where('users.id', '=', $user->id)
                ->where('detail_keranjang.Id_Barang', '=', $Barang->Id_Barang)->first();

                if($cekbarang)
                {
                    if (DetailKeranjang::where('Id_Barang', $cekbarang->Id_Barang)->exists())
                    {
                        if($Barang->Stok < $request->jumlah_pesan)
                        {
                            return redirect()->back()->with('error', 'Stok tidak cukup');
                        }else{
                            DetailKeranjang::where('Id_Barang', $Barang->Id_Barang)->update([
                                'Id_Keranjang' => $kran2,
                                'Id_Barang' => $Barang->Id_Barang,
                                'Kuantitas' => $request->jumlah_pesan,
                                'Sub_Total' => $request->jumlah_pesan * $Barang->Harga,
                                'Sub_Beban' => $request->jumlah_pesan * $Barang->Berat,
                            ]);
                            return redirect('/cart');
                        }

                    }
                }

                else {

                if($Barang->Stok < $request->jumlah_pesan)
                {
                    return redirect()->back()->with('error', 'Stok tidak cukup');
                }

                    $coba = new DetailKeranjang();
                    $coba->Id_Detail_Keranjang = $newUid1;
                    $coba->Id_Keranjang = $kran2;
                    $coba->Id_Barang = $Barang->Id_Barang;
                    $coba->Kuantitas = $request->jumlah_pesan;
                    $coba->Sub_Total = $Barang->Harga * $request->jumlah_pesan;
                    $coba->Sub_Beban = $Barang->Berat * $request->jumlah_pesan;
                    $coba->save();

                    return redirect('/cart');
                }
            }

            else {
            $keranjang  = new Keranjang;
            $keranjang->Id_Keranjang = $newUid;
            $keranjang->Id_Pelanggan = $kran;
            $keranjang->Status = "Aktif";
            $keranjang->save();

            if($Barang->Stok < $request->jumlah_pesan)
            {
             return redirect()->back()->with('error', 'Stok tidak cukup');
            }

            $cek4 = $keranjang->Id_Keranjang;
            $coba = new DetailKeranjang();
            $coba->Id_Detail_Keranjang = $newUid1;
            $coba->Id_Keranjang = $cek4;
            $coba->Id_Barang = $Barang->Id_Barang;
            $coba->Kuantitas = $request->jumlah_pesan;
            $coba->Sub_Total = $Barang->Harga * $request->jumlah_pesan;
            $coba->Sub_Beban = $Barang->Berat * $request->jumlah_pesan;
            $coba->save();

                return redirect('/cart');
            }
        }
    }

    public function hapus($Id_Detail_Keranjang)
    {


        DB::table('detail_keranjang')->where('Id_Detail_Keranjang', $Id_Detail_Keranjang)->delete();

        return redirect('/cart');
    }

    public function checkout($Id_Keranjang, Request $request)
    {
        if (Auth::id()) {
            $user = auth()->user();
            $keranjang = Keranjang::where('Id_Keranjang', $Id_Keranjang)->first();

            $pelanggan = Keranjang::join('pelanggan', 'keranjang.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
            ->where('keranjang.Id_Keranjang', '=', $Id_Keranjang)->first();
            $buattotal = DetailKeranjang::join('keranjang', 'detail_keranjang.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
            ->join('pelanggan', 'keranjang.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')
            ->join('users', 'pelanggan.email', '=', 'users.email')
            ->where('users.id', '=', $user->id)
            ->where('keranjang.Status', '=', 'Aktif')->get();


            // $lastUid = Pesan::orderBy('id', 'desc')->first()->Id_Pesanan ?? 'O000';
            // $nextNumber = (int) substr($lastUid, 1) + 1;
            // $newUid = 'O' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);


            $totalbeban = 0;
            $totalharga = 0;
            foreach ($buattotal as $coba) {
                $totalbeban += $coba->Sub_Beban;
                $totalharga += $coba->Sub_Total;
            };


            $pesan = new Pesan();
            $pesan->Id_Pesanan = 'ORDR' . date('Ymd') . mt_rand(1000, 9999);
            $pesan->Id_Keranjang = $keranjang->Id_Keranjang;
            $pesan->Id_Pelanggan = $pelanggan->Id_Pelanggan;
            $pesan->Id_Alamat = $request->Id_Alamat;
            $pesan->Total = $totalharga;
            $pesan->Total_Beban = $totalbeban;
            $pesan->Tgl_Pesanan = now();
            $pesan->Status_Pesanan = 'Menunggu Konfirmasi';
            $pesan->save();


            $lastUid1 = Shipping::orderBy('id', 'desc')->first()->Id_Shipping ?? 'S000';
            $nextNumber1 = (int) substr($lastUid1, 1) + 1;
            $newUid1 = 'S' . str_pad($nextNumber1, 3, '0', STR_PAD_LEFT);


            $kota = Pesan::join('alamat', 'alamat.Id_Alamat', '=', 'pesanan.Id_Alamat')
                ->where('pesanan.Id_Pesanan', '=', $pesan->Id_Pesanan)
                ->select('alamat.Kota')->first();

            $biyship = Biaya_Ship::where('Kota', $kota->Kota)->first();


            $totalbb = $totalbeban / 1000;

            $cek30 = $pesan->Id_Pesanan;
            $ship = new Shipping();
            $ship->Id_Shipping = $newUid1;
            $ship->Id_Pesanan = $cek30;
            $ship->Id_Biaya = $biyship->Id_Biaya;
            $ship->Total_Shipping = $biyship->Biaya_Shipping_per_Kg * $totalbb;
            $ship->save();

            $order = Pesan::join('shipping', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')->where('shipping.Id_Shipping', $ship->Id_Shipping)->first();
            $lastUid3 = Pembayaran::orderBy('id', 'desc')->first()->Id_Pembayaran ?? 'M000';
            $nextNumber3 = (int) substr($lastUid3, 1) + 1;
            $newUid3 = 'M' . str_pad($nextNumber3, 3, '0', STR_PAD_LEFT);

            $bayar = new Pembayaran();
            $bayar->Id_Pembayaran = $newUid3;
            $bayar->Id_Shipping = $order->Id_Shipping;
            $bayar->Total_Harga = $order->Total_Shipping + $order->Total;
            $bayar->Status_Pembayaran = 'Belum Lunas';
            $bayar->Tgl_Pembayaran = now();
            $bayar->waktu_kadaluarsa = now()->addSeconds(30);
            $bayar->save();

            // $notif = "Ada yg memesan";

            // Notification::send($user, new Notif($notif));

            return redirect('/payment');
        }
    }



    public function callback(Request $request)

    {

        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed === $request->signature_key) {
            if ($request->transaction_status === 'capture') {

                DetailKeranjang::join('keranjang', 'detail_keranjang.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
                    ->join('pesanan', 'pesanan.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
                    ->where('pesanan.Id_Pesanan', '=', $request->order_id)
                    ->update(['keranjang.Status' => 'Dicheckout']);

                $id_pesanan = $request->order_id;
                $detailPesanan = DetailKeranjang::join('keranjang', 'detail_keranjang.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
                    ->join('pesanan', 'pesanan.Id_Keranjang', '=', 'keranjang.Id_Keranjang')
                    ->where('pesanan.Id_Pesanan', '=', $id_pesanan)
                    ->where('keranjang.Status', '=', 'Dicheckout')
                    ->select('detail_keranjang.Id_Barang', 'detail_keranjang.Kuantitas')
                    ->get();


                     Pembayaran::join('shipping', 'pembayaran.Id_Shipping', '=', 'shipping.Id_Shipping')
                    ->join('pesanan', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
                    ->where('pesanan.Id_Pesanan', '=', $id_pesanan)
                    ->update(['pembayaran.Status_Pembayaran' => 'Lunas']);

                    Pembayaran::join('shipping', 'pembayaran.Id_Shipping', '=', 'shipping.Id_Shipping')
                    ->join('pesanan', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')
                    ->where('pesanan.Id_Pesanan', '=', $id_pesanan)
                    ->update(['pembayaran.Tgl_Pembayaran' => $request->transaction_time]);




                foreach ($detailPesanan as $detail) {
                    $barang = Barang::where('Id_Barang', $detail->Id_Barang)->first();
                    if ($barang) {
                        $barang->Stok -= $detail->Kuantitas;
                        $barang->save();
                    }


                    // $user = User::all();
                    // $data = "Ada pesanan baru masuk";

                    // $user->notify(new Notif($data));

                }







                // $admin = DB::table('users')->where('role', 'penjual')->first(); // Replace with your logic to find the admin
                // $admin->notify(new Notif($bayar));

                // $lastUid2 = ModelsNotif::orderBy('id', 'desc')->first()->Id_Notif ?? 'N000';
                // $nextNumber2 = (int) substr($lastUid2, 1) + 1;
                // $newUid2 = 'N' . str_pad($nextNumber2, 3, '0', STR_PAD_LEFT);

                // $message = "Pelanggan telah melakukan pembayaran.";

                // $user = auth()->user();
                // $cek = Pelanggan::join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->select('pelanggan.Id_Pelanggan')->first();
                // $pecah = json_decode($cek, true);
                // $kran = $pecah['Id_Pelanggan'];

                // $notification = new ModelsNotif();
                // $notification->Id_Notif = $newUid2;
                // $notification->Id_Pelanggan = $kran;
                // $notification->message = $message;
                // $notification->save();



            }





            // $admin = DB::table('users')->where('level', 'penjual')->get(); // Ganti ini sesuai dengan logika pengambilan admin
            // Notification::send($admin, new Notif($bayar));

            // $isPaymentSuccess = $request->input('transaction_status') === 'settlement';

        }
    }






    public function konfirm($Id_Pesanan)
    {

        $Pesan = Pesan::where('Id_Pesanan', $Id_Pesanan)->first();

        Pesan::where('Id_Pesanan', $Id_Pesanan)->update([
            'Id_Pelanggan' => $Pesan->Id_Pelanggan,
            'Id_Keranjang' => $Pesan->Id_Keranjang,
            'Id_Alamat' => $Pesan->Id_Alamat,
            'Total' => $Pesan->Total,
            'Total_Beban' => $Pesan->Total_Beban,
            'Status_Pesanan' => 'Diproses'
        ]);

        return redirect('/order');
    }

    public function konfirmkirim($Id_Pesanan)
    {

        $Pesan = Pesan::where('Id_Pesanan', $Id_Pesanan)->first();

        Pesan::where('Id_Pesanan', $Id_Pesanan)->update([
            'Id_Pelanggan' => $Pesan->Id_Pelanggan,
            'Id_Keranjang' => $Pesan->Id_Keranjang,
            'Id_Alamat' => $Pesan->Id_Alamat,
            'Total' => $Pesan->Total,
            'Total_Beban' => $Pesan->Total_Beban,
            'Status_Pesanan' => 'Dikirim'
        ]);

        return redirect('/perludikirim');
    }

    public function terima($Id_Pesanan)
    {

        $Pesan = Pesan::where('Id_Pesanan', $Id_Pesanan)->first();

        Pesan::where('Id_Pesanan', $Id_Pesanan)->update([
            'Id_Pelanggan' => $Pesan->Id_Pelanggan,
            'Id_Keranjang' => $Pesan->Id_Keranjang,
            'Id_Alamat' => $Pesan->Id_Alamat,
            'Total' => $Pesan->Total,
            'Total_Beban' => $Pesan->Total_Beban,
            'Status_Pesanan' => 'Selesai'
        ]);

        return redirect('/transaksi');
    }

    public function hapuspayment()
    {
        $user = auth()->user();
        $bayar = Pembayaran::join('shipping', 'pembayaran.Id_Shipping', '=', 'shipping.Id_Shipping')->join('pesanan', 'pesanan.Id_Pesanan', '=', 'shipping.Id_Pesanan')->join('pelanggan', 'pesanan.Id_Pelanggan', '=', 'pelanggan.Id_Pelanggan')->join('users', 'pelanggan.email', '=', 'users.email')->where('users.id', '=', $user->id)->latest('pembayaran.created_at')->first(['pembayaran.Id_Pembayaran', 'pesanan.Id_Pesanan', 'shipping.Id_Shipping']);


        if($bayar)
        {
            Pembayaran::where('Id_Pembayaran', $bayar->Id_Pembayaran)->delete();
            Shipping::where('Id_Shipping', $bayar->Id_Shipping)->delete();
            Pesan::where('Id_Pesanan', $bayar->Id_Pesanan)->delete();

             return redirect('/cart');
        }
    }

    public function notify(Request $request)
    {
        if ($request->transaction_status === 'capture') {
            // Tambahkan logika yang diperlukan setelah transaksi berhasil dicapture
    
            // Mengirim notifikasi ke admin
            $admin = User::where('role', 'admin')->first(); // Ganti ini sesuai dengan logika pengambilan admin
            $admin->notify(new PesananMasukNotification($pesan));
    }
}
}
