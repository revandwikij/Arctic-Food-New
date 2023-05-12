<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">GoUMKM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.html">Barang  </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Kontak</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>
 

<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
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
        </div>
    </div>
</div>

 
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a href="#">Back to top</a>
                </p>
                <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by <a href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>t-php</i></a> | <span>v. 1.0</span></p>
            </div>
        </div>
    </div>
</footer>