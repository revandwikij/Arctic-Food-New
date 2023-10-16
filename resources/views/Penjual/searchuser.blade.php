@extends('layouting.layout admin.master')

@section('title', 'edit')

@section('content')

@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
<div class="card card-default">
    <div class="card-header">
        <form class="form-inline" action="/users/search" method="POST">
            @csrf
            <div class="form-group mr-1">
                <input class="form-control" type="text" name="cari" placeholder="Pencarian..." />
            </div>
            <div class="form-group mr-1">
                <button class="btn btn-success">Refresh</button>
            </div>


        </form>
    </div>
    <div class="card-body p-0 table-responsive">
        <table class="table table-bordered table-striped table-hover mb-0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jumlah Transaksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <h1>Search Results</h1>

                @if (count($users) > 0)

                @foreach ($users as $no)

                <tr>
                    <td>{{ $no->Id_Pelanggan}}</td>
                    <td>{{ $no->username}}</td>
                    <td>{{ $no->email}}</td>
                    <td>0</td>


                    <td>
                     <form method="POST" action="/hapus" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Laporkan</button>
                    </form>
                </td>
            </tr>
            @endforeach

            @else
                <p>No results found for '{{ $cari }}'.</p>
            @endif
        </table>
    </div>
</div>

@endsection