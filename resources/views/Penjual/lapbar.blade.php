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
    <form action="/barlap" method="GET">
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
                <button type="submit" class="btn btn-primary">Tampilkan Laporan</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    {{-- <th scope="col">Tanggal</th> --}}
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Terjual</th>
                    <th scope="col">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan as $data)
                    <tr>
                        {{-- <td>{{ $data->tanggal_awal }} - {{ $data->tanggal_akhir }}</td> --}}
                        <td>{{ $data->produk }}</td>
                        <td>Rp. {{ number_format($data->Harga) }}</td>
                        <td>{{ $data->total_terjual }}</td>
                        <td>Rp. {{ number_format($data->total_terjual * $data->Harga) }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2">Jumlah</td>
                    <td>{{ $penjualan->sum('total_terjual') }}</td>
                    <td>
                        @php
                            $totalPenjualan = 0;
                            foreach ($penjualan as $data) {
                                $totalPenjualan += $data->total_terjual * $data->Harga;
                            }
                            echo "Rp. " . number_format($totalPenjualan);
                        @endphp
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="text-end">
            <a href="{{ url('/stream-pdf') }}" target="_blank" class="btn btn-primary">Lihat</a>
            <a href="{{ url('/generate-pdf') }}" class="btn btn-success">Download</a>
        </div>
    </div>
</div>

@endsection
