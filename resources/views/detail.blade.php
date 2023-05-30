@extends('layouting.home.master')

@section('title', 'detail')

@section('content')
    <div class="container">
        @foreach ($Barang as $item)
            
        
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $item->Nama_Barang }}</h2>
            </div>
        </div>
    </div>
        @endforeach
@endsection

