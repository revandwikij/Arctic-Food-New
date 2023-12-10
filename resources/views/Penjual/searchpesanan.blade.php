@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

    <style>
        tr.rounded.bg-white {
            border: 1px solid #ccafaf;
            /* Garis tepi 1px solid */
            border-radius: 10px;
            /* Membuat sudut elemen melengkung */
            padding: 10px;
            /* Padding untuk ruang di sekitar elemen */
        }
    </style>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Telah Diterima</h1>
        </div>
    </section>

    <div class="container mt-5">

        <div class="app-search-box" style="width: 50%">
            <form action="/selesai/search" method="POST">
                @csrf
                <input type="text" id="myInput" placeholder="Search..." style="width: 50%" name="cari"
                    class="form-control search-input">
                <button type="submit" class="btn search-btn btn-primary" value="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>


        <table class="table table-borderless main">
            <thead>
                <tr class="head">
                    <th scope="col" class="ml-2">



                    </th>
                    <th scope="col">ID Pesanan</th>
                    <th scope="col">Tanggal Pesan</th>
                    <th scope="col">Pembeli</th>
                    <th scope="col">Status Pesanan</th>
                    <th scope="col">Total Bayar</th>
                    <th scope="col">Kota Pengiriman</th>
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <h1>Search Results</h1>

                @if (count($pesan) > 0)

                    @foreach ($pesan as $item)
                        <tr class="rounded bg-white">
                            <th scope="row">
                                <div class="form-check">

                                </div>
                            </th>
                            <td class="order-color">{{ $item->Id_Pesanan }}</td>
                            <td>{{ $item->Tgl_Pesanan }}</td>
                            <td class="d-flex align-items-center">

                                <span class="ml-2">{{ $item->username }}</span>
                            </td>
                            <td>
                                <span class="ml-2">{{ $item->Status_Pesanan }}</span>

                            </td>
                            <td>{{ $item->Total_Harga }}</td>
                            <td>{{ $item->Kota }}</td>
                            <td>
                                {{ $item->Status_Pembayaran }}
    </td>
    <td>
        @if ($item->Status_Pesanan == 'Diterima')
            <a href="/refund/{{ $item->Id_Pesanan }}" onclick="(Refund Pesanan ?)"></a>
            <form action="/tolak/{{ $item->Id_Pesanan }}" method="post">
                <button type="submit" class="btn btn-primary mb-2">Tolak</button>
                @csrf

            </form>
        @endif
        @if ($item->Status_Pesanan == 'Selesai')
            <p>v</p>
        @endif
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


@endsection
