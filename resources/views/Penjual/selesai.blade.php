@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

    <br>

    <section class="jumbotron text-center">
        <div class="container">
            <h3 class="jumbotron-heading">Selesai</h3>
        </div>
    </section>

    <br>

    <div class="container mb-4">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="table-responsive">
                  <table id="myTable" class="table table-striped">
                    <thead>
                        <tr>
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
                        @foreach ($pesanan as $item)
                            <tr>
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
                                <td>{{ $item->Status_Pembayaran }}</td>
                                <td>
                                    @if ($item->Status_Pesanan == 'Diterima')
                                        <a href="/refund/{{ $item->Id_Pesanan }}" onclick="return confirm('Refund Pesanan?')" class="btn btn-primary mb-2">Refund</a>
                                        <form action="/tolak/{{ $item->Id_Pesanan }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-primary mb-2">Tolak</button>
                                        </form>
                                    @endif
                                    @if ($item->Status_Pesanan == 'Selesai')
                                        <p>✔</p>
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
        font-size: 12px
      }
    </style>

@endsection
