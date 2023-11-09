@extends('layouting.layout admin.master')

@section('title', 'laporan barang akun')

@section('content')

<br>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Laporan Barang Per Akun</h1>
    </div>
</section>

<br>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jumlah Barang yang Dibeli</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangperAkun as $data)
                            <tr>
                                <td>{{ $data->username }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->produk }} x {{ $data->TotalJumlah }}</td>
                            </tr>
                        @endforeach
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
