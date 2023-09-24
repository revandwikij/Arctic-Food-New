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
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Judul Laporan</th>
                <th>No. Laporan</th>
                <th>Status Laporan</th>
                <th>Tanggal Perbulan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nama laporan</td>
                <td>00213728881y32f3f</td>
                <td>Selesai</td>
                <td>1-31 Jan 2023</td>
                <td>
                    <a href="/rincianlaporan" class="btn btn-primary btn-sm">Lihat Rincian</a>
                </td>
            </tr>
            <tr>
                <td>Nama laporan</td>
                <td>00221736416246294829</td>
                <td>Proses</td>
                <td>1-29 Feb 2023</td>
                <td>
                    <a href="/rincianlaporan" class="btn btn-primary btn-sm">Lihat Rincian</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection