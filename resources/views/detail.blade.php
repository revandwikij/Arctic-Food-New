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
                                @if ($data->Foto_Barang)
                                <img style="max-width: 200px; max-height:200px" src="{{ asset('uploads/' . $data->Foto_Barang) }}">
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
                                            <td id="stok">{{$data->Stok}}</td>
                                        </tr>
                                        <tr>
                                            <td>Berat</td>
                                            <td>:</td>
                                            <td>{{$data->Berat}} G</td>
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
                                                    <form action="/keranjang/{{$data->Id_Barang}}" method="POST">
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

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const stok = parseInt(document.getElementById("stok").textContent);
                const jumlahPesanInput = document.querySelector('input[name="jumlah_pesan"]');
                const submitButton = document.querySelector('button[type="submit"]');

                jumlahPesanInput.addEventListener("input", function () {
                    const jumlahPesan = parseInt(jumlahPesanInput.value);
                    if (jumlahPesan > stok) {
                        submitButton.disabled = true;
                        alert("Jumlah pesanan melebihi stok yang tersedia!");
                    } else {
                        submitButton.disabled = false;
                    }
                });
            });
        </script>

@endsection

