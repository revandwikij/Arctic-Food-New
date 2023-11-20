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
    <h5> <label for="status" class="widget-title">Ulasan</label></h5>
<form action="/transaksi/result" method="GET">
    {{ csrf_field() }}
    <input type="textarea" name="ulasan">
    <button type="submit">Filter</button>
</form>

@endsection
