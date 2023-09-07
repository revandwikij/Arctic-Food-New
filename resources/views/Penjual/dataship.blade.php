@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')
@if(session('errors'))
    <div class="alert alert-danger">
        {{ session('errors') }}
    </div>
@endif

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Shipping</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id Shipping</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Biaya / Gram</th>
                        </tr>
                    </thead>

                    <tbody>

                    {{-- @foreach ($test as $data)

                    <tr>

                            <td>{{$data->Id_Barang}} </td>
                            <td>
                                @if ($data->Foto_Barang)
                                <img src="{{ asset('uploads/' . $data->Foto_Barang) }}" alt="{{ $data->Nama_Barang }}" width="100" height="100">

                                @endif
                            </td>
                            <td>{{$data->Kategori}} </td>
                            <td>{{$data->Nama_Barang}} </td>
                            <td>{{$data->Stok}} </td>
                            <td>{{$data->Keterangan_Barang}} </td>
                            <td>Rp. {{ number_format($data->Harga) }} </td>
                            <td>

                                <a href ="Ubah/{{$data->Id_Barang}}" class="btn btn-secondary">Edit</a>
                               <button onclick="return confirm('Hapus Data?')"  class="btn btn-sm btn-danger"><a href="Hapus/{{ $data->Id_Barang }}" method="post"><i class="fa fa-trash"></i></button></a>

                            </td>

                    </tr>
                    @endforeach
                    </tbody>
                  <a href ="/Tambah" class="btn btn-primary mb-5 me-2">Tambah Produk</a>
                  <a href ="/kategori" class="btn btn-secondary mb-5">Tambah Kategori</a>

                  </table>
            </div>
        </div>
    </div>
</div> --}}

@endsection
