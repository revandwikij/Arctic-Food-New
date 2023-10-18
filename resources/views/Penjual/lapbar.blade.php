@extends('layouting.layout admin.master')

@section('title', 'lapbar')

@section('content')


<br>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Laporan 1 </h1>
    </div>
</section>

<br>



<form action="/barlap" method="GET">
    @csrf
    <label for="tanggal_awal">Tanggal Awal:</label>
    <input type="date" name="tanggal_awal" id="tanggal_awal">

    <label for="tanggal_akhir">Tanggal Akhir:</label>
    <input type="date" name="tanggal_akhir" id="tanggal_akhir">

    <button type="submit">Tampilkan Laporan</button>
</form>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th scope="col">Tanggal</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga Barang</th>
                            <th scope="col">Terjual</th>
                            <th scope="col">Total Harga</th>

                        </tr>
                    </thead>

                    <tbody>



                        @foreach ($penjualan as $data)
                            <tr>


                                <td>{{ $data->tanggal_awal }} - {{ $data->tanggal_akhir }} </td>
                                <td>{{ $data->produk }} </td>
                                <td>Rp. {{ number_format($data->Harga) }} </td>
                                <td>{{ $data->total_terjual }} </td>
                                <td>Rp. {{ number_format($data->total_terjual * $data->Harga) }} </td>
                            </tr>
                        @endforeach

                        <tr>


                            <td colspan="3">Jumlah</td>
                            <td>{{ $penjualan->sum('total_terjual') }}</td>
                            {{-- <td>{{ $penjualan->sum('total_terjual * Harga') }}</td> --}}
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
                <div class="d-flex justify-content-end">
                    <a href="{{ url('/stream-pdf') }}" target="_blank" class="btn btn-primary">Lihat</a>
                    <a href="{{ url('/generate-pdf') }}" class="btn btn-success">Download</a>
                </div>
            </div>
        </div>
    </div>
</div>







@endsection
