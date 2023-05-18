<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="assets/images/Go-logo.png" alt="logo" width="300px" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="/admin">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html">Order</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="product.html">Barang</a>
                </li>
                <li class="nav-item">
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
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Data Barang</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id Barang</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Id Kategori</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Stok</th>
                            <th scope="col" >Keterangan Barang</th>
                            <th scope="col" >Harga</th>
                            
                        </tr>
                    </thead>
                   
                    <tbody>
                       
                    @foreach ($barang as $data)
                    
                    <tr>
                            
                            <td>{{$data->Id_Barang}} </td>
                            <td>
                                @if ($data->Foto_Barang)
                                <img style="max-width: 100px; max-height:100px" src="{{ url('Foto_barang'). '/'. $data->Foto_Barang }}">
                                    
                                @endif
                            </td>
                            <td>{{$data->Id_Kategori}} </td>
                            <td>{{$data->Nama_Barang}} </td>
                            <td>{{$data->Stok}} </td>
                            <td>{{$data->Keterangan_Barang}} </td>
                            <td>Rp. {{ number_format($data->Harga) }} </td>
                            <td>

                                <a href ="Ubah/{{$data->Id_Barang}}" class="btn btn-secondary">Edit</a>
                               <button onclick="return confirm('Hapus Data?')"  class="btn btn-sm btn-danger"><a href="Hapus/{{ $data->Id_Barang }}" method="post"><i class="fa fa-trash"></i></button></a>
                                
                            </td>

                    </tr>
                     @endforeach    
                    </tbody>
                  <a href ="/Tambah" class="btn btn-primary mb-5">Tambah Produk</a>
                  </table>
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