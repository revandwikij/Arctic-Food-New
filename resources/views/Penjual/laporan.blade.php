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
    <h2 class="mb-4">Laporan Saya</h2>

    <form method="post" action="">
        @csrf
        <label for="periode_awal">Periode Awal:</label>
        <input type="date" name="periode_awal" id="periode_awal">
        <label for="periode_akhir">Periode Akhir:</label>
        <input type="date" name="periode_akhir" id="periode_akhir">
        <button type="submit">Filter</button>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id Laporan</th>
                <th>Tanggal Perbulan</th>
                <th>Rincian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>00213728881y32f3f</td>
                <td>1-31 Jan 2023</td>
                <td>
                    <a href="/rincianlaporan" class="btn btn-primary btn-sm">Lihat Rincian</a>
                </td>
            </tr>
            </tr>
        </tbody>
    </table>
</div>

@endsection