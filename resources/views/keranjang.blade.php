@extends('layouting.home.master')

@section('title', 'Keranjang')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-website">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand active" href="./">Rhima Arhyan</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="./">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kategori.html">Kategori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produk.html">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pemesanan.html">Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testimoni.html">Testimoni</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="notifikasi.html">
                        <i class="fa fa-bell fa-1-5x"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="keranjang.html">
                        <i class="fa fa-shopping-basket fa-1-5x text-white"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle fa-1-5x"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="login.html">Login</a>
                        <a class="dropdown-item" href="mendaftar.html">Mendaftar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="profil.html">Profil</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="nav-scroller bg-white shadow-sm">
    <div class="container-fluid pt-2 pb-2">
        <a href="./">Halaman Utama</a> > Keranjang
    </div>
</div>

<div class="container my-5">
    <div class="list-group shadow-sm mb-4">
        <div class="list-group-item bg-light text-website b">
            <div class="row">
                <div class="col-sm-12 col-lg-1">
                </div>
                <div class="col-sm-12 col-lg-4">
                    Produk
                </div>
                <div class="col-sm-12 col-lg-3">
                    Harga Satuan
                </div>
                <div class="col-sm-12 col-lg-2">
                    Kuantitas
                </div>
                <div class="col-sm-12 col-lg-2">
                    Aksi
                </div>
            </div>
        </div>
        <div class="list-group-item">
            <div class="row my-4">
                <div class="col-sm-12 col-lg-1 mb-3">
                    <input type="checkbox" name="pilih">
                </div>
                <div class="col-sm-12 col-lg-4 mb-3">
                    <a href="produk-detail.html" class="hvnb">
                        <div class="media">
                            <img src="assets/img/produk/1.jpg" width="60" class="mr-3">
                            <div class="media-body text-dark">
                                Talisa Dress Women's Casual Short-Sleeve Premium Dress
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-3 mb-3">
                    <h4 class="text-website">Rp150.000</h4>
                </div>
                <div class="col-sm-12 col-lg-2 mb-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="input-group-text">-</button>
                            </div>
                            <input type="text" class="form-control" value="1">
                            <div class="input-group-append">
                                <button class="input-group-text">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-12 col-lg-2 mb-3">
                    <a href="#" class="b text-website">Hapus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body shadow-sm">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <input type="checkbox" name=""> Pilih Semua
            </div>
            <div class="col-sm-12 col-lg-3">
                <h5><span class="text-muted">Total Pesanan:</span> <span class="text-website">Rp150.000</span></h5>
            </div>
            <div class="col-sm-12 col-lg-3">
                <a href="checkout.html" class="hvnb">
                    <button class="btn bg-website btn-block text-white">Checkout</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="bg-website mt-5 p-2">
    <div class="container pt-4">
        <div class="row text-white">
            <div class="col-sm-12 col-lg-3">
                <h5>Informasi</h5>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Kontak</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Syarat dan Ketentuan</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Kebijakan Pengguna</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Lokasi Kami</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-lg-3">
                <h5>Belanja</h5>
                <ul class="list-unstyled">
                    <li><a href="produk.html"><i class="fa fa-angle-right"></i> Semua Produk</a></li>
                    <li><a href="produk.html"><i class="fa fa-angle-right"></i> Produk Baru</a></li>
                    <li><a href="produk.html"><i class="fa fa-angle-right"></i> Produk Spesial</a></li>
                    <li><a href="kategori.html"><i class="fa fa-angle-right"></i> Semua Kategori</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Customer Care</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-lg-3">
                <h5>Tentang Kami</h5>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-map-marker-alt"></i> Jalan Thamrin No.100, Medan Kota, Kota Medan, Indonesia.</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i> customer@rima.arhyan.com</a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-lg-3">
                <h5>Media Sosial</h5>
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/rima.arhyan"><i class="fa fa-angle-right"></i> Facebook</a></li>
                    <li><a href="https://twitter.com/rima.arhyan"><i class="fa fa-angle-right"></i> Twitter</a></li>
                    <li><a href="https://www.instagram.com/rima.arhyan"><i class="fa fa-angle-right"></i> Instagram</a></li>
                    <li><a href="https://line.me/@rima.arhyan"><i class="fa fa-angle-right"></i> Line Chat</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
