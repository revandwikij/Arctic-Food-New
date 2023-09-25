@extends('layouting.layout admin.master')

@section('title', 'rincian laporan')

@section('content')

@if(session('errors'))
    <div class="alert alert-danger">
        {{ session('errors') }}
    </div>
@endif

<div class="app-search-box" style="width: 50%;">
    <form action="/dataship/search" method="POST" style="display: flex;">
        @csrf
        <input type="text" placeholder="Nama barang" style="width: 70%;" name="cari" class="form-control search-input">
        <button type="submit" class="btn search-btn btn-primary ml-2" value="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
</div><!--//app-search-box-->

<div class="container mt-5">
    <div class="text-right mt-4" style="margin-left: 92%">
        <button class="btn btn-danger">Hapus</button>
    </div>
    <h2 class="mb-4">Informasi Laporan</h2>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No. Pesanan</th>
                <th>Gambar Produk</th>
                <th>Nama Produk</th>
                <th>Kuantitas</th>
                <th>Total Harga</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>00213728881y32f3f</td>
                <td><img src="produk1.jpg" alt="Produk A" style="width: 80px;"></td>
                <td>Produk A</td>
                <td>10</td>
                <td>$100.00</td>
                <td>Selesai</td>
            </tr>
            <tr>
                <td>00221736416246294829</td>
                <td><img src="produk2.jpg" alt="Produk B" style="width: 80px;"></td>
                <td>Produk B</td>
                <td>5</td>
                <td>$50.00</td>
                <td>Proses</td>
            </tr>
            <tr>
                <td>00221736416246294829</td>
                <td><img src="../assets" alt="Produk B" style="width: 80px;"></td>
                <td>Produk B</td>
                <td>5</td>
                <td>$50.00</td>
                <td>Proses</td>
            </tr>
        </tbody>
    </table>
    <div class="text-right mt-4 " style="margin-left: 83%">
        <button class="btn btn-primary">Lihat</button>
        <button class="btn btn-success">Download</button>
    </div>
</div>


@endsection