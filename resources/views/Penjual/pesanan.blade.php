@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Pesanan Masuk</h1>
     </div>
</section>

<div class="container mt-5">

    <table class="table table-borderless main">
<thead>
<tr class="head">
  <th scope="col" class="ml-2">

  </th>
  <th scope="col">ID Pesanan</th>
  <th scope="col">Tanggal Pesan</th>
  <th scope="col">Pembeli</th>
  <th scope="col">Status Pesanan</th>
  <th scope="col">Total Bayar</th>
  <th scope="col">Kota Pengiriman</th>
  <th scope="col">Status Pembayaran</th>
  <th scope="col">Aksi</th>
</tr>
</thead>
<tbody>

@foreach ($pesanan as $item)

<tr class="rounded bg-white">
  <th scope="row">
       <div class="form-check">

       </div>
  </th>
  <td class="order-color">{{$item->Id_Pesanan}}</td>
  <td>{{$item->Tgl_Pesanan}}</td>
  <td class="d-flex align-items-center">

      <span class="ml-2">{{$item->username}}</span>
  </td>
  <td>

      {{ $item->Status_Pesanan }}

</div>
  </td>
  <td>{{$item->Total_Harga}}</td>
  <td>{{$item->Kota}}</td>
  <td>{{$item->Status_Pembayaran}}</td>
</div>
  </td>
  <td>
    @if ($item->Status_Pesanan == 'Menunggu Konfirmasi' && $item->Status_Pembayaran == 'Lunas')
    <form action="konfirm/{{ $item->Id_Pesanan }}" method="post">
      {{-- @csrf --}}
      {{ csrf_field() }}
      {{-- {{ csrf_token() }} --}}
    <button type="submit" class="btn btn-primary mb-2">Konfirmasi</button>
    </form>
    @endif
  </td>
</tr>

@endforeach

</tbody>
</table>

{{ $pesanan->links() }}

</div>

@endsection
