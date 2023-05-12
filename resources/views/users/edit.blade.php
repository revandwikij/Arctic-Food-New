<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <h3>Edit Produk</h3>
                <div class="card">
                    <h5 class="text-center mb-4"></h5>
                    @foreach ($barang as $data)


                    <form action="/Edit" class="form-card" method="POST">
                    {{ csrf_field() }}
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Id_Barang<span class="text-danger"> *</span></label> <input type="text" id="Id_Barang" name="Id_Barang" value="{{$data->Id_Barang}}" placeholder="Masukan Id Baru" > </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Keterangan Barang<span class="text-danger"> *</span></label> <input type="text" id="Keterangan_Barang" name="Keterangan_Barang" value="{{$data->Keterangan_Barang}}"> </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Produk<span class="text-danger"> *</span></label> <input type="text" id="Nama_Barang" name="Nama_Barang" value="{{$data->Nama_Barang}}" placeholder="Masukan Produk Terbaru" > </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Stok<span class="text-danger"> *</span></label> <input type="text" id="Stok" name="Stok" value="{{$data->Stok}}" placeholder="""> </div>

                         </div>

                         <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">ID Kategori<span class="text-danger"> *</span></label> <input type="text" id="Id_Kategori" name="Id_Kategori" value="{{$data->Id_Kategori}}" placeholder=""> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Harga<span class="text-danger"> *</span></label> <input type="text" id="Harga" name="Harga" value="{{$data->Harga}}" placeholder=""> </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Simpan</button> </div>
                        </div>
                    </form>
                    @endforeach
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="{{ route('users.index') }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>


