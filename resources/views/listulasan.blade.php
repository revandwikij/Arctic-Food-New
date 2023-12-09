@extends('layouting.home.master')

@section('title', 'Ulasan')

@section('content')

<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            @foreach ($ulasan as $item)
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1">
                <img class="img-fluid img-responsive rounded product-image" src="{{ asset('uploads/' . $item->Foto_Barang) }}"></div>
                <div class="col-md-6 mt-1">
                    <h5>{{ $item->Nama_Barang}}</h5>
                   
                     <div class="mt-1 mb-1 spec-1"><span>{{$item->Kategori}}</span></div>
                    <p class="text-justify text-truncate para mb-0">{{$item->Keterangan_Barang}}<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">Rp. {{number_format($item->Harga)}}</h4> 
                    </div>
                    
                    <div class="d-flex flex-column mt-4">
                        <a href="/formulasan/{{$item->Id_Barang}}" class="btn btn-primary btn-sm">Beri Ulasan</a>
                     </div>
                </div>
            </div>
            @endforeach  
        </div>
    </div>
</div>

@endsection