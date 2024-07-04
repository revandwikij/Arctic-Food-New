@extends('layouting.layout admin.master')

@section('title', 'edit')

@section('content')

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

    
    @if (session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif

    <br>
    
    <section class="jumbotron text-center">
        <div class="container">
            <h3 class="jumbotron-heading">Data Pelanggan</h3>
        </div>
    </section>

    <br>

    <div class="container">
        <div class="container mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="sorting">No</th>
                                            <th class="sorting">Nama</th>
                                            <th class="sorting">Email</th>
                                            <th class="sorting">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $no)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $no->username }}</td>
                                                <td>{{ $no->email }}</td>
                                                <td>
                                                    <form method="POST" action="/hapus" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger" style="font-size: 8px;"
                                                            onclick="return confirm('Hapus Data?')">Laporkan</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
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
    </style>

@endsection
