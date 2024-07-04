@extends('layouting.layout admin.master')

@section('title', 'lapbar')

@section('content')

<br>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Laporan Omset</h1>
    </div>
</section>

<br>

<div class="container mb-4">
    <div class="card">
        <div class="card-body">
            <form action="/omsetpdf" method="GET" target="_blank">
                @csrf
                <div class="row justify-content-center mb-3">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Bulan Awal</th>
                                <th scope="col">Bulan Akhir</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="month" class="form-control" name="bulan_awal" id="bulan_awal">
                                </td>
                                <td>
                                    <input type="month" class="form-control" name="bulan_akhir" id="bulan_akhir">
                                </td>
                                <td>
                                    <button type="submit" name="action" value="lihat" class="btn btn-primary mb-2">Tampilkan Laporan</button>
                                    <button type="submit" name="action" value="download" class="btn btn-primary mb-2">Download Laporan</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                {{-- Uncomment the table code below if you need to display the data --}}
                {{-- 
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Bulan</th>
                            <th scope="col">Omset</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penjualan as $data)
                            <tr>
                                <td>{{ date('F', strtotime($data->bulan)) }}</td>
                                <td>Rp. {{ number_format($data->Total_Harga) }} </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td>Jumlah</td>
                            <td>Rp. {{ number_format($penjualan->sum('Total_Harga')) }}</td>
                        </tr>
                    </tbody>
                </table>
                --}}
            </div>
        </div>
    </div>
</div>

@endsection
