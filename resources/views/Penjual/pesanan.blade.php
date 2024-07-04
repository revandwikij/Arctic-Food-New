@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

    <br>

    <section class="jumbotron text-center">
        <div class="container">
            <h3 class="jumbotron-heading">Pesanan Masuk</h3>
        </div>
    </section>

    <br>

    <div class="container mb-4">
        <div class="card">
            <div class="card-body">
                <div class="col-12">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="sorting">ID Pesanan</th>
                                    <th class="sorting">Tanggal Pesan</th>
                                    <th class="sorting">Pembeli</th>
                                    <th class="sorting">Status Pesanan</th>
                                    <th class="sorting">Total Bayar</th>
                                    <th class="sorting">Kota Pengiriman</th>
                                    <th class="sorting">Status Pembayaran</th>
                                    <th class="sorting">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pesanan as $item)
                                    <td class="order-color">{{ $item->Id_Pesanan }}</td>
                                    <td>{{ $item->Tgl_Pesanan }}</td>
                                    <td class="d-flex align-items-center">
                                        <span class="ml-2">{{ $item->username }}</span>
                                    </td>
                                    <td>{{ $item->Status_Pesanan }}</td>
                                    <td>{{ $item->Total_Harga }}</td>
                                    <td>{{ $item->Kota }}</td>
                                    <td>{{ $item->Status_Pembayaran }}</td>
                                    <td>
                                        @if ($item->Status_Pesanan == 'Menunggu Konfirmasi' && $item->Status_Pembayaran == 'Lunas')
                                            <form action="konfirm/{{ $item->Id_Pesanan }}" method="post">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary mb-2">Konfirmasi</button>
                                            </form>
                                        @endif
                                    </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "order": [
                    [0, "desc"]
                ] 
            });
        });
    </script>

    <style>
        .table-responsive{
            font-size: 12px;
        }
    </style>
@endsection
