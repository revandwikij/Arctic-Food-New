@extends('layouting.layout admin.master')

@section('title', 'Edit Produk')

@section('content')

    @if (session('errors'))
        <div class="alert alert-danger">
            {{ session('errors') }}
        </div>
    @endif

    <br>

    <section class="jumbotron text-center">
        <div class="container">
            <h3 class="jumbotron-heading">Edit Produk</h3>
        </div>
    </section>

    <br>

    <div class="container-fluid mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-11 col-lg-11 col-md-11 col-11">
                <div class="card shadow-lg p-2">
                    <div class="card-body">
                        @foreach ($barang as $data)
                            <form action="/Edit" class="form-card" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row mb-3">
                                    <div class="form-group col-sm-6">
                                        <label for="Id_Barang" class="form-label" style="color:black; font-weight:500;">ID
                                            Barang<span class="text-danger">
                                                *</span></label>
                                        <input type="text" class="form-control" id="Id_Barang" name="Id_Barang"
                                            value="{{ $data->Id_Barang }}" placeholder="Masukan Produk Terbaru"
                                            style="color: black" disabled readonly>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="Nama_Barang" class="form-label"
                                            style="color:black; font-weight:500;">Produk<span class="text-danger">
                                                *</span></label>
                                        <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang"
                                            value="{{ $data->Nama_Barang }}" placeholder="Masukan Produk Terbaru"
                                            style="color: black">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-12">
                                        <label for="Keterangan_Barang" class="form-label"
                                            style="color:black; font-weight:500;">Keterangan Barang<span
                                                class="text-danger"> *</span></label>
                                        <textarea id="Keterangan_Barang" name="Keterangan_Barang" class="form-control" style="height: 110px; color:black;">{{ $data->Keterangan_Barang }}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-sm-6">
                                        <label for="Id_Kategori" class="form-label"
                                            style="color:black; font-weight:500;">Kategori<span class="text-danger">
                                                *</span></label>
                                        <select name="Id_Kategori" id="Id_Kategori" class="form-select">
                                            @foreach ($kategoris as $k)
                                                <option value="{{ $k['Id_Kategori'] }}"
                                                    {{ $k['Id_Kategori'] == $data->Id_Kategori ? 'selected' : '' }}>
                                                    {{ $k['Kategori'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="Foto_Barang" class="form-label"
                                            style="color: black; font-weight: 500;">Foto Barang<span class="text-danger">
                                                *</span></label>
                                        <input type="file" class="form-control" id="Foto_Barang" name="Foto_Barang"
                                            value="{{ $data->Foto_Barang }}" style="color: black;">
                                        <a href="{{ asset('uploads/' . $data->Foto_Barang) }}" target="_blank"
                                            class="d-block text-end" style="font-size: smaller; font-weight: bold;">Lihat
                                            Gambar Sebelumnya</a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-sm-6">
                                        <label for="Brand" class="form-label"
                                            style="color:black; font-weight:500;">Merek<span class="text-danger">
                                                *</span></label>
                                        <input type="text" class="form-control" id="Brand" name="Brand"
                                            value="{{ $data->Brand }}" style="color: black">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="Berat" class="form-label"
                                            style="color:black; font-weight:500;">Berat<span class="text-danger">
                                                *</span></label>
                                        <input type="text" class="form-control" id="Berat" name="Berat"
                                            value="{{ $data->Berat }}" placeholder="Dalam Kg contoh : 0,5 = 500"
                                            style="color: black">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="form-group col-sm-6">
                                        <label for="Stok" class="form-label"
                                            style="color:black; font-weight:500;">Stok<span class="text-danger">
                                                *</span></label>
                                        <input type="text" class="form-control" id="Stok" name="Stok"
                                            value="{{ $data->Stok }}" style="color: black">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="Harga" class="form-label"
                                            style="color:black; font-weight:500;">Harga<span class="text-danger">
                                                *</span></label>
                                        <input type="text" class="form-control" id="Harga" name="Harga"
                                            value="{{ $data->Harga }}" style="color: black">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 text-end">
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
