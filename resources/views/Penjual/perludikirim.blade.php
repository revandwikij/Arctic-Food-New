@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Perlu Dikirim</h1>
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
  <th scope="col">Kirim Email</th>
</tr>
</thead>
<tbody>

@foreach ($pesan as $item)
    

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
      <div class="dropdown">
<button class="btn btn-warning btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
Unfullfilled
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<li><a class="dropdown-item" href="#">Fullfilled</a></li>
<li><a class="dropdown-item" href="#">Unfullfilled</a></li>
<li><a class="dropdown-item" href="#">Hold</a></li>
</ul>
</div>
  </td>
  <td>{{$item->Total_Harga}}</td>
  <td>{{$item->Kota}}</td>
  <td>
       <div class="dropdown">
<button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
Authorized
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
<li><a class="dropdown-item" href="#">Yes</a></li>
<li><a class="dropdown-item" href="#">No</a></li>

</ul>
</div>
  </td>
  <td>Today</td>

</tr>

@endforeach


</tbody>
</table>
    

</div>


@endsection