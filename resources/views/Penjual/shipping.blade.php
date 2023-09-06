@extends('layouting.layout admin.master')

@section('title', 'shipping')

@section('content')

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