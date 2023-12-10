@extends('layouting.layout admin.master')

@section('title', 'tambah')

@section('content')



<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Tambah Produk</h3>
            <div class="card">
                <h5 class="text-center mb-4"></h5>
                <form action="/Form" class="form-card" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3 mb-2">Produk<span class="text-danger"> *</span></label> <input type="text" id="Nama_Barang" name="Nama_Barang" placeholder="Masukan Produk Terbaru" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3 mb-2">Keterangan Barang<span class="text-danger"> *</span></label><textarea id="Keterangan_Barang" name="Keterangan_Barang" cols="30" rows="10"></textarea> </div>
                    </div>

                    <div class="row justify-content-between text-left">

                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3 mb-2">ID Kategori<span class="text-danger"> *</span></label>
                             <select name="Id_Kategori" id="Id_Kategori">
                                @foreach ($kategoris as $data)
                                <option value="{{$data['Id_Kategori']}}">{{$data['Kategori']}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3 mb-2">Foto Barang<span class="text-danger"> *</span></label> <input type="file" id="Foto_Barang" name="Foto_Barang" placeholder="" onblur="validate(3)"> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3 mb-2">Brand<span class="text-danger"> *</span></label> <input type="text" id="Brand" name="Brand" placeholder="" onblur="validate(5)"> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3 mb-2">Berat/gram<span class="text-danger"> *</span></label> <input type="text" id="Berat" name="Berat"  onblur="validate(5)"> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3 mb-2">Stok<span class="text-danger"> *</span></label> <input type="text" id="Stok" name="Stok" placeholder=""  onblur="validate(5)"> </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3 mb-2">Harga<span class="text-danger"> *</span></label> <input type="text" id="Harga" name="Harga" placeholder=""  onblur="validate(6)"> </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Tambah</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
