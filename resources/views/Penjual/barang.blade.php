@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

    @if (session('errors'))
        <div class="alert alert-danger">
            {{ session('errors') }}
        </div>
    @endif

    <br>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Data admin</h1>
        </div>
    </section>

    <br>

    <div class="container">
        <div class="d-flex justify-content-between">

            <div class="app-search-box" style="width: 50%">
                {{-- <form action="/barang/search" method="POST">
                    @csrf --}}
                    <input type="text" id="myInput" placeholder="Search..." style="width: 50%" name="cari" class="form-control search-input">
                    {{-- <button type="submit" class="btn search-btn btn-primary" value="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button> --}}
                {{-- </form> --}}
            </div><!--//app-search-box-->
            <div>
                {{-- <select id="kategori">
                    <option value="" selected disabled>Pilih Kategori</option> <!-- Opsi default -->
                    @foreach ($kategori as $k)
                        <option value="{{ $k->Id_Kategori }}" id="{{ $k->Id_Kategori }}">{{ $k->Kategori }}</option>
                    @endforeach
                </select> --}}

                <form action="/barkat" method="GET">
                    @csrf
                    <label for="kategori">Kategori</label>
                    {{-- <input type="date" name="Kategori" id="Kategori"> --}}
                    <select name="kategori" id="kategori">
                        <option value="" selected disabled>Pilih Kategori</option> <!-- Opsi default -->
                        @foreach ($kategori as $k)
                            <option>{{ $k->Kategori }}</option>
                        @endforeach
                    </select>

                    <button type="submit">Klik</button>
                </form>

            </div>
            <div>
                <a href="/Tambah" class="btn btn-primary mb-5 me-2">Tambah Produk</a>
                <a href="/kategori" class="btn btn-secondary mb-5">Tambah Kategori</a>
            </div>
        </div>
    </div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th class="sorting">Id Barang</th>
                                <th class="sorting">Foto</th>
                                <th class="sorting">Kategori</th>
                                <th class="sorting">Nama Produk</th>
                                <th class="sorting">Stok</th>
                                <th class="sorting">Keterangan Barang</th>
                                <th class="sorting">Harga</th>
                                <th class="sorting">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- @if (isset($barang))
                                <h2>Search Results for "{{ $cari }}"</h2> --}}

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
                                    <td>{{ $data->Keterangan_Barang }} </td>
                                    <td>Rp. {{ number_format($data->Harga) }} </td>
                                    <td>

                                        <a href="Ubah/{{ $data->Id_Barang }}" class="btn btn-secondary">Edit</a>
                                        <button onclick="return confirm('Hapus Data?')" class="btn btn-sm btn-danger"><a
                                                href="Hapus/{{ $data->Id_Barang }}" method="post"><i
                                                    class="fa fa-trash"></i></button></a>

                                    </td>

                                </tr>
                            @endforeach

                            {{-- @endif --}}
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            var table - $("#myTable").DataTable({
                "pageLength" : 15,
                // "searching" : false,
                "lengthChange" : false,
                "pagingType" : "simple_numbers",

                columnDefs: [
                    {
                        searchable: false,
                        orderable: false,
                        targts: 0
                    }
                ]

                order: [[3, 'asc']]
            });

            table
            .on('order.dt search.dt', function(){
                let i = 1;

                table 
                .cells(null, 0, { search: 'applied', order:'applied' })
                .every(function(cell){
                    this.data(i++)
                });
            })
            .draw();

            $("#myInput").on("keyup", function() {
                table.search( this.value ).draw();
            });
        });
    </script>
    
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    

@endsection
