@extends('layouting.home.master')

@section('title', 'detail')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{$Barang->Nama_Barang}}</h2>
            </div>
        </div>
    </div>
        
@endsection

