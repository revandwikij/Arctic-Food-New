@extends('layouting.home.history')

@section('title', 'Transaksi')

@section('content')


    

<h1>Riwayat Pembelian</h1>
@foreach ($pesanan as $item)
<div class="containerr">
    <div class="order-listt">
      <div class="order-itemm">
        
        
        <div class="order-thumbnaill">
          <img src="{{ asset($item->Foto_Barang) }}" alt="Produk">
        </div>
        <div class="order-detailss">
          <h2>{{ $item->Id_Pesanan }}</h2>
          <p>{{ $item->Tgl_Pesanan }}</p>
          <p>{{ $item->Total_Bayar }}</p>
          <p>{{ $item->Status_Pesanan }}</p>
          
          @if ($item->Status_Pesanan == 'Menunggu Konfirmasi')
          <a href="https://wa.me/6289656088434?text=Halo,%20saya%20mau%20bertanya"><button class="order-button"><i class="icon icon-phone"> Chat Penjual</i></button></a>
          @endif

          @if ($item->Status_Pesanan == 'Dikirim')
            <form action="/terima/{{ $item->Id_Pesanan }}" method="post">
            {{ csrf_field() }}
            <button type="submit" class="order-button">Pesanan Diterima</button>
            </form> 
          @endif
          
          @if ($item->Status_Pesanan == 'Selesai')
          <form action="kirim/{{ $item->Id_Pesanan }}" method="post">
          {{ csrf_field() }}
          <button class="review-button">Beri Rating</button>
          </form> 
          @endif

          <a href="/rincian/{{$item->Id_Pesanan}}"><button class="order-button">Lihat Detail Pesanan</button></a>
        </div>
      </div>


       
      
      </div>
    </div>
  </div>

@endforeach

@endsection