@extends('layouting.home.master')

@section('title', 'Detail')

@section('content')

<link rel="stylesheet" href="../assets/css/detil.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">



@foreach ($pesanan as $item)


<div class="detail-pesanan">
    {{-- <a href="/transaksi"><button class="back-button"><i class="fas fa-arrow-left" ></i> Kembali</button> --}}
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

        @foreach ($databar as $data)
        <div class="item card">
            <img src="{{ asset('uploads/' . $data->Foto_Barang) }}" alt="Barang 1">
            <div class="item-details">
                <p class="item-name">{{ $data->Nama_Barang }}</p>
                <p class="item-quantity"> Kuantitas  : {{ $data->Kuantitas }}</p>
                <p class="item-subtotal"> Sub Total : Rp. {{ number_format ($data->Sub_Total) }}</p>
            </div>
            <a class="view-product-button" style="margin-left: 40%" href="/single/{{$data->Id_Barang}}">Lihat Produk</a>
        </div>
        @endforeach
        {{-- <p>Total Harga: Rp. {{ number_format($item->Total) }}</p> --}}
    </div>
    <div class="rincian-pembayaran">
        <h2>Rincian Pembayaran</h2>
        <p>Total Harga: Rp. {{ number_format( $item->Total) }}</p>
        <p>Ongkos Kirim: Rp.  {{ number_format($item->Total_Shipping) }}</p>

    </div>
    <p>Total Belanja: Rp. {{ number_format($item->Total_Harga)}}</p>
</div>
@endforeach
@endsection
