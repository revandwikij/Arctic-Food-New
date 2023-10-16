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



<form action="/omset" method="GET">
    @csrf
    <label for="bulan_awal">Bulan Awal:</label>
    <input type="month" name="bulan_awal" id="bulan_awal">

    <label for="bulan_akhir">Bulan Akhir:</label>
    <input type="month" name="bulan_akhir" id="bulan_akhir">

    <button type="submit">Tampilkan Laporan</button>
</form>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
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
                                <td>{{ $data->tanggal }} </td>
                                <td>Rp. {{ number_format($data->total_harga) }} </td>
                            </tr>
                        @endforeach

                        <tr>


                            <td>Jumlah</td>
                            <td>{{ $penjualan->sum('Total_Harga') }}</td>
                            {{-- <td>{{ $penjualan->sum('total_terjual * Harga') }}</td> --}}
                            {{-- <td>
                                @php
                                    $totalPenjualan = 0;
                                    foreach ($penjualan as $data) {
                                        $totalPenjualan += $data->total_terjual * $data->Harga;
                                    }
                                    echo "Rp. " . number_format($totalPenjualan);
                                @endphp
                            </td> --}}

                        </tr>

                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    <a href="{{ url('/stream-pdf2') }}" target="_blank" class="btn btn-primary">Lihat</a>
                    <a href="{{ url('/generate-pdf2') }}" class="btn btn-success">Download</a>
                </div>
            </div>
        </div>
    </div>
</div>







@endsection
