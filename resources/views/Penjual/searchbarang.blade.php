@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

    @if (session('errors'))
        <div class="alert alert-danger">
            {{ session('errors') }}
        </div>
    @endif

    <br>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Data admin</h1>
        </div>
    </section>

    <div class="container">
        <div class="d-flex justify-content-between">

            <div class="app-search-box" style="width: 50%">
                <form action="/barang/search" method="POST">
                    @csrf
                    <input type="text" placeholder="Search..." style="width: 50%" name="cari" class="form-control search-input">
                    <button type="submit" class="btn search-btn btn-primary" value="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div><!--//app-search-box-->
            <div>
                <a href="/Tambah" class="btn btn-primary mb-5 me-2">Tambah Produk</a>
                <a href="/kategori" class="btn btn-secondary mb-5">Tambah Kategori</a>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id Barang</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Keterangan Barang</th>
                                <th scope="col">Harga</th>

                            </tr>
                        </thead>

                        <tbody>

                            <h1>Search Results</h1>

                            @if (count($test) > 0)

                                @foreach ($test as $data)
                                    <tr>

                                        <td>{{ $data->Id_Barang }} </td>
                                        <td>
                                            @if ($data->Foto_Barang)
                                                <img src="{{ asset('uploads/' . $data->Foto_Barang) }}"
                                                    alt="{{ $data->Nama_Barang }}" width="100" height="100">
                                            @else
                                                <img src="{{ asset('Foto_Barang/' . $data->Foto_Barang) }}"
                                                    alt="{{ $data->Nama_Barang }}" width="100" height="100">
                                            @endif
                                        </td>
                                        <td>{{ $data->Kategori }} </td>
                                        <td>{{ $data->Nama_Barang }} </td>
                                        <td>{{ $data->Stok }} </td>
                                        <td>{{ $data->Keterangan_Barang }} </td>
                                        <td>Rp. {{ number_format($data->Harga) }} </td>
                                        <td>

                                            <a href="Ubah/{{ $data->Id_Barang }}" class="btn btn-secondary">Edit</a>
                                            <button onclick="return confirm('Hapus Data?')" class="btn btn-sm btn-danger"><a
                                                    href="Hapus/{{ $data->Id_Barang }}" method="post"><i
                                                        class="fa fa-trash"></i></button></a>

                                        </td>

                                    </tr>
                                @endforeach
                            @else
                                <p>No results found for '{{ $cari }}'.</p>
                            @endif
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
