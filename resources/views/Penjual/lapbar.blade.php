@extends('layouting.layout admin.master')

@section('title', 'lapbar')

@section('content')

<form action="/barlap" method="GET">
    @csrf
    <label for="tanggal_awal">Tanggal Awal:</label>
    <input type="date" name="tanggal_awal" id="tanggal_awal">

    <label for="tanggal_akhir">Tanggal Akhir:</label>
    <input type="date" name="tanggal_akhir" id="tanggal_akhir">

    <button type="submit">Tampilkan Laporan</button>
</form>

<table>
    <thead>
        <tr>
            <th>Tanggal</th>
            <th>Produk</th>
            <th>Total Terjual</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($penjualan as $item)
            <tr>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->produk }}</td>
                <td>{{ $item->total_terjual }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection