@extends('layouting.layout admin.master')

@section('title', 'dataship')

@section('content')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

    @if (session('errors'))
        <div class="alert alert-danger">
            {{ session('errors') }}
        </div>
    @endif

    <br>

    <section class="jumbotron text-center">
        <div class="container">
            <h3 class="jumbotron-heading">Data Shipping</h3>
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
                                        <th scope="col">Id Shipping</th>
                                        <th scope="col">Kota</th>
                                        <th scope="col">Biaya/Gram</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ship as $data)
                                        <tr>
                                            <td>{{ $data->Id_Biaya }} </td>
                                            <td>{{ $data->Kota }} </td>
                                            <td>{{ $data->Biaya_Shipping_per_Kg }} </td>
                                            <td>
                                                <a href="/editship/{{ $data->Id_Biaya }}" class="btn btn-icon btn-sm btn-success waves-effect waves-light">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="/hapusship/{{ $data->Id_Biaya }}" method="post"
                                                        class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete"
                                                        onclick="return confirm('Hapus Data?')">
                                                <i class="fa fa-trash"></i></a>
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
            font-size: 12px;
        }
        .btn.btn-icon {
            padding: 0.715rem 0.736rem;
        }
        .btn.btn-sm.btn-icon {
            padding: 0.5rem;
        }

        .btn.btn-lg.btn-icon {
            padding: 1rem;
        }

        .btn.btn-square {
            border-radius: 0;
        }

        .btn.btn-round {
            border-radius: 2rem;
        }
    </style>
@endsection
