@extends('layouting.home.history')

@section('title', 'Transaksi')

@section('content')

    <style>

    </style>

    <div class="container-order">

        {{-- <div class="kotak">
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
          </ul>
    </div> --}}
        <h2> <label for="status" class="widget-title">Ulasan</label></h2>
        @foreach ($ulasan as $item)
            <form action="/transaksi/result" method="GET">
                {{ csrf_field() }}

                <h3>{{ $item->Nama_Barang }}</h3>
                <textarea name="ulasan"></textarea>
                <button type="submit">Filter</button>
            </form>
        @endforeach

    @endsection
