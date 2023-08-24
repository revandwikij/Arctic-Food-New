@extends('layouting.home.master')

@section('title', 'detail')

@section('content')
@foreach ($Barang as $item)
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-5">
               <div class="card">
                    <div class="card-header">
                        <a href="/" class="btn btn-primary">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 mt-5">
                                @if ($item->Foto_Barang)
                                <img src="{{ asset('uploads/' . $item->Foto_Barang) }}"  alt="Books" class="product-image">
                                @endif
                            </div>
                            <div class="col-md-6">
                                 <h3>{{ $item->Nama_Barang }}</h3>
                                 <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{number_format($item->Harga)}}</td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>:</td>
                                            <td>{{$item->Stok}}</td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td> {{$item->Keterangan_Barang}}</td>
                                        </tr>

                                            <tr>
                                                <td>Jumlah Pesanan</td>
                                                <td>:</td>
                                                <td>
                                                    <form action="/keranjang/{{$item->Id_Barang}}" method="POST">
                                                    @csrf
                                                    <input type="number" name="jumlah_pesan" class="form-control" required>
                                                    <button type="submit" class="btn btn-primary mt-3">Masukan Keranjang</button>
                                                    </form>
                                                </td>
                                            </tr>
                                    </tbody>
                                 </table>
                            </div>
                        </div>

                    </div>
               </div>
            </div>

        </div>

    </div>
        @endforeach
@endsection

