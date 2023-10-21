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
    @foreach ($pesanan as $item)
    <div class="order-list">
        <div class="order-item">
            <div class="order-thumbnail">
                <img src="{{ asset($item->Foto_Barang) }}" alt="Foto Barang">
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

                @if ($item->Status_Pesanan == 'Menunggu Konfirmasi')
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
                <form action="kirim/{{ $item->Id_Pesanan }}" method="post">
                    {{ csrf_field() }}
                    <button class="review-button">Beri Rating</button>
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
