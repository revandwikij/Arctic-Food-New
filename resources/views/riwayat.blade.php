@extends('layouting.home.history')

@section('title', 'Transaksi')

@section('content')

<style>

</style>

<div class="container-order">

    {{-- <div class="kotak">
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
          </ul>
    </div> --}}
    <h1>Riwayat Pembelian</h1>

@if(count($pesanan) > 0)
<form action="/transaksi/result" method="GET">
    {{ csrf_field() }}
   <h5> <label for="status" class="widget-title">Pilih Status:</label></h5>
    <select name="status" id="status">
        <option value="">Semua</option>
        <option value="Selesai">Selesai</option>
        <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
        <option value="Dikirim">Dikirim</option>
        <option value="Dibatalkan">Dibatalkan</option>
     </select>
    <button type="submit">Filter</button>
</form>
    @foreach ($pesanan as $item)
    <div class="order-list">
        <div class="order-item">
            <div class="order-thumbnail">
                {{-- <img src="{{ asset($item->Foto_Barang) }}" alt="Foto Barang"> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                  </svg>
            </div>

            <div class="order-details">
                <h2>{{ $item->Id_Pesanan }}</h2>
                <p>{{ $item->Tgl_Pesanan }}</p>
                <p>{{ $item->Total_Bayar }}</p>
                <p>{{ $item->Status_Pesanan }}</p>
            </div>

            <div class="button-container">
                <a href="/rincian/{{$item->Id_Pesanan}}">
                    <button class="view-button">Lihat Detail Pesanan</button>
                </a>

                @if ($item->Status_Pesanan == 'Menunggu Konfirmasi' || $item->Status_Pesanan == 'Selesai')
                <a href="/refund/{{ $item->Id_Pesanan }}">
                    <button class="cancel-button"><i class="cancel-button">Refund</i></button>
                </a>
                @endif

                @if ($item->Status_Pembayaran == 'Belum Lunas')
                <a href="/riwpayment/{{ $item->Id_Pesanan }}">
                    <button class="chat-button"><i class="accept-button">Bayar</i></button>
                </a>
                @endif

                @if ($item->Status_Pesanan == 'Menunggu Konfirmasi' || $item->Status_Pesanan == 'Dikirim' || $item->Status_Pesanan == 'Selesai')
                <a href="https://wa.me/6289656088434?text=Halo,%20saya%20mau%20bertanya">
                    <button class="chat-button"><i class="icon icon-phone"> Chat Penjual</i></button>
                </a>
                @endif

                @if ($item->Status_Pesanan == 'Dikirim')
                <form action="/terima/{{ $item->Id_Pesanan }}" method="post">
                    {{ csrf_field() }}
                    <button onclick="return confirm('Sudah Diterima?')" class="accept-button">Pesanan Diterima</button>
                </form>
                @endif

                @if ($item->Status_Pesanan == 'Selesai')
                <form action="/ulasan" method="post">
                    {{ csrf_field() }}
                    <button class="review-button" type="submit">Beri Ulasan</button>
                </form>
                @endif

            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="no-transaction-message">
        <p>Kamu belum memiliki transaksi. Ayo mulai berbelanja sekarang!</p>
        <a href="/halaman-belanja">
            <button class="shop-button">Belanja Sekarang</button>
        </a>
    </div>
@endif
    <div class="pagination-links">
        {{ $pesanan->links() }}
    </div>
</div>
</div>



@endsection
