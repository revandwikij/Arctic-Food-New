@extends('layouting.layout admin.master')

@section('title', 'Edit Shipping')

@section('content')
    @if (session('errors'))
        <div class="alert alert-danger">
            {{ session('errors') }}
        </div>
    @endif

    <br>

    <section class="jumbotron text-center">
        <div class="container">
            <h3 class="jumbotron-heading">Edit Produk</h3>
        </div>
    </section>

    <br>

    <div class="container-fluid mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-11 col-lg-11 col-md-11 col-11">
                <div class="card shadow-lg p-3">
                    <div class="card-body">
                        @foreach ($biaya_shipping as $S)
                            <form action="/edit" class="form-card" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="form-group col-12">
                                        <label for="Id_Biaya" class="form-label" style="color: black; font-weight: 500;">ID
                                            Biaya<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" id="Id_Biaya" name="Id_Biaya"
                                            placeholder="Id_Biaya" value="{{ $S->Id_Biaya }}" disabled readonly
                                            style="color: black;">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="form-group col-sm-6">
                                        <label for="Kota" class="form-label"
                                            style="color: black; font-weight: 500;">Kota<span class="text-danger">
                                                *</span></label>
                                        <input type="text" class="form-control" id="Kota" name="Kota"
                                            placeholder="Kota" value="{{ $S->Kota }}" style="color: black;">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="Biaya_Shipping_per_Kg" class="form-label"
                                            style="color: black; font-weight: 500;">Biaya/gram<span class="text-danger">
                                                *</span></label>
                                        <input type="text" class="form-control" id="Biaya_Shipping_per_Kg"
                                            name="Biaya_Shipping_per_Kg" placeholder=""
                                            value="{{ $S->Biaya_Shipping_per_Kg }}" style="color: black;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12 text-end">
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
