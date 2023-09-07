@extends('layouting.layout admin.master')

@section('title', 'editship')

@section('content')
@if(session('errors'))
    <div class="alert alert-danger">
        {{ session('errors') }}
    </div>
@endif

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Edit Shipping</h3>
            <div class="card">
                <h5 class="text-center mb-4"></h5>
                <form action="/tambahship/action" class="form-card" method="POST" enctype="multipart/form-data">
                    @csrf


                    {{-- <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3 mb-2">Id_Biaya<span class="text-danger"> *</span></label> <input type="text" id="Brand" name="Brand" placeholder="" onblur="validate(5)"> </div>
                    </div> --}}

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3 mb-2">Kota<span class="text-danger"> *</span></label> <input type="text" id="Berat" name="Kota" placeholder="Kota" onblur="validate(5)"> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3 mb-2">Biaya/gram<span class="text-danger"> *</span></label> <input type="text" id="Stok" name="Biaya_Shipping_per_Kg" placeholder="" onblur="validate(5)"> </div>
                    </div>


                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Edit</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>