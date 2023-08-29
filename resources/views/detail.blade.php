@extends('layouting.home.master')

@section('title', 'detail')

@section('content')
@foreach ($Barang as $data)
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
                                <img style="width: 200px" src="{{ url('Foto_barang'). '/'. $item->Foto_Barang }}">
                                @endif
                            </div>
                            <div class="col-md-6">
                                 <h3>{{ $data->Nama_Barang }}</h3>
                                 <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{number_format($data->Harga)}}</td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>:</td>
                                            <td>{{$data->Stok}}</td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td> {{$data->Keterangan_Barang}}</td>
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

