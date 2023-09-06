@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <div class="card">
                <h4>Tambah Kategori</h4>

<form action="/katadd" class="form-card" method="POST" >
    @csrf
    <div class="row justify-content-between text-left">
        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Kategori<span class="text-danger"> *</span></label> <input type="text" id="kategori" name="kategori" placeholder="Masukan Produk Terbaru" onblur="validate(1)"> </div>
        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-secondary">Tambah</button> </div>

    </div>
     
      
</form>
            </div>
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
                            <th scope="col">Id Kategori</th>
                            <th scope="col">Kategori</th>

                        </tr>
                    </thead>

                    <tbody>

                
                    @foreach ($kategori as $data)
                   

                    <tr>

                            <td>{{$data->Id_Kategori}} </td>
                            <td>{{$data->Kategori}} </td>
                            
                            {{-- <td>

                                <a href ="Ubah/{{$data->Id_Barang}}" class="btn btn-secondary">Edit</a>
                               <button onclick="return confirm('Hapus Data?')"  class="btn btn-sm btn-danger"><a href="Hapus/{{ $data->Id_Barang }}" method="post"><i class="fa fa-trash"></i></button></a>

                            </td> --}}

                    </tr>
                    {{-- @endforeach --}}
                    @endforeach
                    {{-- @endforeach --}}
                    </tbody>
                </table>

@endsection