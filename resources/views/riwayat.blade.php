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
    </div>
</div>
@endforeach

@endsection
