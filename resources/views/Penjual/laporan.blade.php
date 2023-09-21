@extends('layouting.layout admin.master')

@section('title', 'laporan')

@section('content')

@if(session('errors'))
    <div class="alert alert-danger">
        {{ session('errors') }}
    </div>
@endif

<div class="app-search-box" style="width: 50%;">
    <form action="/dataship/search" method="POST" style="display: flex;">
        @csrf
        <input type="text" placeholder="No. Laporan" style="width: 70%;" name="cari" class="form-control search-input">
        <button type="submit" class="btn search-btn btn-primary ml-2" value="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
</div><!--//app-search-box-->

<div class="container mt-5">
    <h2 class="mb-4">Tabel Laporan</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No Laporan</th>
                <th>Produk</th>
                <th>Kuantitas</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>00213728881y32f3f</td>
                <td>Produk A</td>
                <td>10</td>
                <td>$100.00</td>
                <td>Selesai</td>
                <td>
                    <button class="btn btn-primary btn-sm">Lihat</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                    <button class="btn btn-success btn-sm">Download</button>
                </td>
            </tr>
            <tr>
                <td>00221736416246294829</td>
                <td>Produk B</td>
                <td>5</td>
                <td>$50.00</td>
                <td>Proses</td>
                <td>
                    <button class="btn btn-primary btn-sm">Lihat</button>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                    <button class="btn btn-success btn-sm">Download</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
