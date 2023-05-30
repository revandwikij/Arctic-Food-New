@extends('layouting.home.master')

@section('title', 'detail')

@section('content')
    <div class="container">
        @foreach ($Barang as $item)
            
        
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $item->Nama_Barang }}</h2>
            </div>
            @if ($item->Foto_Barang)
            <img style="max-width: 100px; max-height:100px" src="{{ url('Foto_barang'). '/'. $item->Foto_Barang }}">
            @endif
        </div>
        
    </div>
        @endforeach
@endsection

