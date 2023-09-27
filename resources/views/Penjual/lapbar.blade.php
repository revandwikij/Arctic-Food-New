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
                                                       
                            <th scope="col">Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Terjual</th>
                             

                        </tr>
                    </thead>

                    <tbody>

                         

                        @foreach ($penjualan as $data)
                            <tr>

                                
                                <td>{{ $data->produk }} </td>
                                <td>Rp. {{ number_format($data->Harga) }} </td>
                                <td>{{ $data->total_terjual }} </td>
                                <td>{{ $data->Keterangan_Barang }} </td>
                                

                            </tr>
                        @endforeach
 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




 


@endsection