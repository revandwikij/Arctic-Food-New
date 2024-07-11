@extends('layouting.layout admin.master')

@section('title', 'dashboard')

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
            <h3 class="jumbotron-heading">Data Admin</h3>
        </div>
    </section>

    <br>

    <div class="container">
        <div class="d-flex justify-content-between">
            <form action="/barkat" id="kategoriForm" method="GET">
                @csrf
                <div class="form-group">
                    <select class="form-select" name="kategori" id="kategori">
                        <option selected>PILIH KATEGORI</option>
                        @foreach ($kategori as $k)
                            <option>{{ $k->Kategori }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
            <div>
                <a href="/Tambah" class="btn btn-primary mb-5 me-2">Tambah Produk</a>
                <a href="/kategori" class="btn btn-secondary mb-5">Tambah Kategori</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="sorting">Id Barang</th>
                                        <th class="sorting">Foto</th>
                                        <th class="sorting">Kategori</th>
                                        <th class="sorting">Nama Barang</th>
                                        <th class="sorting">Stok</th>
                                        <th class="sorting">Keterangan Barang</th>
                                        <th class="sorting">Harga</th>
                                        <th class="sorting" style="width: 50px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($test as $data)
                                        <tr>
                                            <td>{{ $data->Id_Barang }} </td>
                                            <td>
                                                @if ($data->Foto_Barang)
                                                    <img src="{{ asset('uploads/' . $data->Foto_Barang) }}"
                                                        alt="{{ $data->Nama_Barang }}" width="100" height="100">
                                                @else
                                                    <img src="{{ asset('Foto_Barang/' . $data->Foto_Barang) }}"
                                                        alt="{{ $data->Nama_Barang }}" width="100" height="100">
                                                @endif
                                            </td>
                                            <td>{{ $data->Kategori }} </td>
                                            <td>{{ $data->Nama_Barang }} </td>
                                            <td>{{ $data->Stok }} </td>
                                            <td>{{ Str::limit($data->Keterangan_Barang, 50) }} </td>
                                            <td>Rp. {{ number_format($data->Harga) }} </td>
                                            <td>
                                                <a href="Ubah/{{ $data->Id_Barang }}"
                                                    class="btn btn-icon btn-sm btn-success waves-effect waves-light">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="Hapus/{{ $data->Id_Barang }}" method="post"
                                                    class="btn btn-icon btn-sm btn-danger waves-effect waves-light delete"
                                                    onclick="return confirm('Hapus Data?')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- {{ $test->links() }} --}}
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

        $('#kategori').change(function() {
            $('#kategoriForm').submit();
        });
    </script>

    <style>
        .table-responsive {
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
