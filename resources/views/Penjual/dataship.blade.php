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

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id Shipping</th>
                            <th scope="col">Kota</th>
                            <th scope="col">Biaya / Gram</th>
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

                                <a href ="/editship/{{$data->Id_Biaya}}" class="btn btn-secondary">Edit</a>
                               <button onclick="return confirm('Hapus Data?')"  class="btn btn-sm btn-danger"><a href="/hapusship/{{ $data->Id_Biaya }}" method="post"><i class="fa fa-trash"></i></button></a>

                            </td>

                    </tr>
                    @endforeach
                    </tbody>
                  <a href ="/tambahship" class="btn btn-primary mb-5 me-2">Tambah Shipping</a>
                  {{-- <a href ="/kategori" class="btn btn-secondary mb-5">Tambah Kategori</a> --}}

                  </table>
            </div>
        </div>
    </div>
</div>

@endsection
