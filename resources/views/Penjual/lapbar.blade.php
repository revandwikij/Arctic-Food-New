@extends('layouting.layout admin.master')

@section('title', 'lapbar')

@section('content')

    <br>

    <section class="jumbotron text-center">
        <div class="container">
            <h3 class="jumbotron-heading">Laporan Penjualan</h3>
        </div>
    </section>

    <br>

    <div class="container mb-4">
        <div class="card">
            <div class="card-body">
                <form action="/penjualanpdf" method="GET" target="_blank">
                    @csrf
                    <div class="row justify-content-center mb-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal Awal</th>
                                    <th scope="col">Tanggal Akhir</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="date" class="form-control" name="tanggal_awal" id="tanggal_awal">
                                    </td>
                                    <td>
                                        <input type="date" class="form-control" name="tanggal_akhir" id="tanggal_akhir">
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

@endsection
