@extends('layouting.home.master')

@section('title', 'Detail')

@section('content')

<link rel="stylesheet" href="../assets/css/detil.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">



@foreach ($pesanan as $item)


<div class="detail-pesanan">
    <a href="/transaksi"><button class="back-button"><i class="fas fa-arrow-left" ></i> Kembali</button>
    <h2 class="dtl">Detail Pesanan</h2>
    <div class="order-info">
        <div>
            <p class="no-pesanan">No Pesanan : {{ $item->Id_Pesanan }}</p>
            <p class="tanggal-pembelian">Tanggal Pembelian : {{ $item->Tgl_Pesanan }}</p>
        </div>
        <div>
            <button class="status-dikirim-button">{{ $item->Status_Pesanan }}</button>
        </div>
    </div>
    <div class="alamat">
        <h2>Alamat Pengiriman</h2>
        <p>Nama: {{ $item->Nama_Penerima }}</p>
        <p>Alamat: {{ $item->Alamat_Lengkap }}</p>
        <p>Kota: {{ $item->Kota }}</p>
    </div>
    <div class="barang">
        <h2>Detail Barang</h2>
        <div class="item card">
            <img src="handphone.png" alt="Barang 1">
            <div class="item-details">
                <p class="item-name">Barang 1</p>
                <p class="item-quantity">Kuantitas: 2</p>
                <p class="item-subtotal">Subtotal: $100.00</p>
            </div>
            <a class="view-product-button" href="#">Lihat Produk</a>
        </div>

        <p>Total Harga: {{ $item->Total }}</p>
    </div>
    <div class="rincian-pembayaran">
        <h2>Rincian Pembayaran</h2>
        <p>Metode Pembayaran: Kartu Kredit</p>
        <p>Total Harga: {{ $item->Total }}</p>
        <p>Ongkos Kirim: {{ $item->Total_Shipping }}</p>

    </div>
    <p>Total Belanja: {{ $item->Total_Harga}}</p>
</div>
@endforeach
@endsection
