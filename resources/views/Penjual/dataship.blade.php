@extends('layouting.layout admin.master')

@section('title', 'dataship')

@section('content')
@if(session('errors'))
    <div class="alert alert-danger">
        {{ session('errors') }}
    </div>
@endif

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Shipping</h1>
     </div>
</section>

<br>

<div class="container">
    <div class="d-flex justify-content-between">
        <div class="app-search-box" style="width: 50%">
            <form action="/dataship/search" method="POST">
                @csrf
                <input type="text" placeholder="Search..." style="width: 50%" name="cari" class="form-control search-input">
                <button type="submit" class="btn search-btn btn-primary" value="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div><!--//app-search-box-->
        <div>
            <a href="/tambahship" class="btn btn-primary mb-5 me-2">Tambah Shipping</a>
        </div>
    </div>
</div>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id Shipping</th>
                            <th scope="col">
                                @sortablelink('Kota', 'Kota')
                            </th>
                            <th scope="col">
                                @sortablelink('Biaya_Shipping_per_Kg', 'Biaya / gram')
                            </th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ship as $data)
                        <tr>
                            <td>{{$data->Id_Biaya}} </td>
                            <td>{{$data->Kota}} </td>
                            <td>{{$data->Biaya_Shipping_per_Kg}} </td>
                            <td>
                                <a href="/editship/{{$data->Id_Biaya}}" class="btn btn-secondary">Edit</a>
                                <button onclick="return confirm('Hapus Data?')" class="btn btn-sm btn-danger">
                                    <a href="/hapusship/{{ $data->Id_Biaya }}" method="post"><i class="fa fa-trash"></i></a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $ship->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
