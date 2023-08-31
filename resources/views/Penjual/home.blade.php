@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')
<div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-flutter'></i>
            <span class="logo_name">GoUMKM</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="/admin">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link-name">Beranda</span>
                </a>
                <ul class="sub-menu">
                    <li><a class="link-name" href="/admin">Beranda</a></li>
                </ul>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Transaksi</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-folder'></i>
                        <span class="link-name">File Master</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">File Master</a></li>
                    <li><a href="/barang">Barang</a></li>
                    <li><a href="/users">Pelanggan</a></li>

                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-transfer' ></i>
                        <span class="link-name">Transaksi</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">Transaksi</a></li>
                    <li><a href="/">Pesanan</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bxs-report' ></i>
                        <span class="link-name">Laporan</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">Laporan</a></li>
                    <li><a href="#">Laporan Penjualan </a></li>
                    <li><a href="#">Laporan Stok</a></li>
                </ul>
            </li>

            <li>
                <div class="icon-link">
                    <a href="#">
                        <box-icon name='user-rectangle' type='solid' ></box-icon>
                        <span class="link-name">Akun</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">Tambah Akun</a></li>
                    <li><a href="/add">Tambah Akun </a></li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-hard-hat' ></i>
                    <span class="link-name">Tentang</span>
                </a>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">Tentang</a></li>
                </ul>
            </li>
        <li>
        <div class="profile-details">
            {{-- <div class="profile-content">
                <img src="/gaya/img/gambar.png" alt="profile">
            </div> --}}
            <div class="name-job">
                <div class="profile-name">Revan Dwiki</div>
                <div class="name-job">Penjual</div>
            </div>
            <a href="/logout"><i class='bx bx-log-out' href="/logout"></i></a>
            </div>
        </li>
    </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' id="btn"></i>
            <span class="text"></span>
        </div>
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box3"></div>
        <div class="box4"></div>

        <div class="kotak1">
            <div class="container mb-4">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Username</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">No Telp</th>
                                    </tr>
                                </thead>

                                <tbody>

                                {{-- @foreach ($d as $data)
                                <tr>
                                    <th scope="col">{{ $data->username }}</th>
                                    <th scope="col">{{ $data->Alamat }}</th>
                                    <th scope="col">{{ $data->email }}</th>
                                    <th scope="col">{{ $data->jenkel }}</th>
                                    <th scope="col">{{ $data->no_Telp }}</th>
                                </tr>
                                @endforeach --}}

                                </tbody>
                              {{-- <a href ="/Tambah" class="btn btn-primary mb-5">Tambah Produk</a> --}}
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
