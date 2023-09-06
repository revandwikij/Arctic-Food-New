@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Pesanan</h1>
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


<tr class="rounded bg-white">
  <th scope="row">
       <div class="form-check">
 
       </div>
  </th>
  <td class="order-color">121 091</td>
  <td>Mar 21</td>
  <td class="d-flex align-items-center">
      <img src="https://i.imgur.com/C4egmYM.jpg" class="rounded-circle" width="25">
      <span class="ml-2">Harrient Santigo</span>
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
  <td>$604.50</td>
  <td>$182.40</td>
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


</tbody>
</table>
    

</div>


@endsection