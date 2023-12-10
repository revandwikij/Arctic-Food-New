@extends('layouting.layout admin.master')

@section('title', 'lapbar')

@section('content')

<br>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Laporan Penjualan</h1>
    </div>
</section>

<br>

<div class="container">
    <form action="/penjualanpdf" method="GET">
        @csrf
        <div class="row justify-content-center mb-3">
            <div class="col-md-3">
                <label for="tanggal_awal" class="form-label">Tanggal Awal:</label>
                <input type="date" class="form-control" name="tanggal_awal" id="tanggal_awal">
            </div>
            <div class="col-md-3">
                <label for="tanggal_akhir" class="form-label">Tanggal Akhir:</label>
                <input type="date" class="form-control" name="tanggal_akhir" id="tanggal_akhir">
            </div>
            <div class="col-md-2 align-self-end">
                <button type="submit" name="action" value="lihat" class="btn btn-primary">Tampilkan Laporan</button>
    <button type="submit" name="action" value="download" class="btn btn-primary">Download Laporan</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        
        {{-- <div class="text-end">
            <a href="{{ url('/stream-pdf') }}" target="_blank" class="btn btn-primary">Lihat</a>
            <a href="{{ url('/generate-pdf') }}" class="btn btn-success">Download</a>
        </div> --}}
    </div>
</div>

@endsection
