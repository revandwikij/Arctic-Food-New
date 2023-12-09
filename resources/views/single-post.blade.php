@extends('layouting.home.master')

@section('title', 'Home')

@section('content')

    <section class="site-banner padding-small bg-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="item">
                            <a href="/">Home /</a>
                        </span>
                        <span class="item">Single post</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach ($barang as $data)
        <div class="main-content d-flex flex-wrap padding-large">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="page-title" style="font-size: 40px">{{ $data->Nama_Barang }}</h1>
                        <div class="feature-image">
                            @if ($data->Foto_Barang)
                                <img style="width: 350px; height:350px; margin-left: 60px" src="{{ asset('uploads/' . $data->Foto_Barang) }}">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="post-content">
                            {{-- <p><strong>There are shortcuts to happiness, and dressing is one of them.</strong></p>
              <p>Fashion is like dreaming with your feet! Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eisusmod tempor incidunt ut elit et.</p>
              <blockquote>Sit suscipit tortor turpis sed fringilla lectus facilisis amet. Ipsum, amet dolor curabitur non aliquet orci urna volutpat. Id aliquam neque, ut vivamus sit imperdiet enim, lacus, vel.</blockquote>
              <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, <a href="single-product.html">Casual Product</a> exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <p>
                <strong>Are you amazed ?</strong>
              </p>
              <ul style="list-style-type:disc;" class="inner-list">
                <li>Blandit mauris libero condimentum commodo sociis convallis sit.</li>
                <li>Magna diam amet justo sed vel dolor et volutpat integer.</li>
                <li>Laculis sit sapien hac odio elementum egestas neque.</li>
              </ul>
              <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam,<span class="highlight">quis nostrud exercitation</span> ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> --}}
                            {{-- <p>{{ $data->Keterangan_Barang }}</p> --}}
                            <br>
                            <br>
                            <br>
                            <table class="table">
                                <tbody style="font-weight: bold">
                                    <tr style="font-size: 20px; color:black">
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($data->Harga) }}</td>
                                    </tr>
                                    <tr style="font-size: 20px; color:black">
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td id="stok">{{ $data->Stok }}</td>
                                    </tr>
                                    <tr style="font-size: 20px; color:black">
                                        <td>Berat</td>
                                        <td>:</td>
                                        <td>{{ $data->Berat }} G</td>
                                    </tr>
                                    <tr style="font-size: 20px; color:black">
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td> {{ $data->Keterangan_Barang }}</td>
                                    </tr>

                                    <tr style="font-size: 20px; color:black">
                                        <td>Jumlah Pesanan</td>
                                        <td>:</td>
                                        <td>
                                            <form action="/keranjang/{{ $data->Id_Barang }}" method="POST">
                                                @csrf
                                                <input type="number" name="jumlah_pesan" class="form-control" style="">
                                                <button type="submit" class="btn btn-primary mt-3">Masukan
                                                    Keranjang</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="post-tags">
                                <div class="block-tag">
                                    <ul class="list-unstyled d-flex">
                                        <li>
                                            <a href="#"
                                                class="btn btn-dark btn-small btn-rounded">{{ $data->Kategori }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <section class="post-comment padding-large bg-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="comments-wrap">
                        <h3>Ulasan</h3>
                        @foreach($ulasan as $u)
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <div class="card card-white post">
                                        <div class="post-heading">
                                             
                                            <div class="float-left meta">
                                                <div class="title h5">
                                                    <h4>{{$u->username }}</h4>
                                                     
                                                </div>
                                                <h6 class="text-muted time">{{$u->formatted_created_at}}</h6>
                                            </div>
                                        </div> 

                                        
                                        <div class="post-description"> 
                                            <p>{{$u->Ulasan}}</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        @endforeach
                        <a href="/review/{{$data->Id_Barang}}">Lihat semua</a>
                        {{-- <div class="comment-list">
                            <article class="d-flex">
                                <img src="images/review-image1.jpg" alt="default" class="commentor-image">
                                <div class="author-post">
                                    <div class="comment-meta">
                                        <h4 class="meta-name">Rachel Ross</h4>
                                        <span class="meta-date">Aug 20,2022</span>
                                        <small class="comments-reply">
                                            <a href="#">
                                                <i class="icon icon-reply"></i>Reply </a>
                                        </small>
                                    </div>
                                    <p>Tristique tempis condimentum diam done ullancomroer sit element henddg sit he
                                        consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg
                                        sit he consequert.</p>
                                </div>
                            </article>
                            <div class="child-comments">
                                <article class="d-flex">
                                    <img src="images/review-image2.jpg" alt="sara" class="commentor-image">
                                    <div class="author-post">
                                        <div class="comment-meta">
                                            <h4 class="meta-name">Jane Park</h4>
                                            <span class="meta-date">Sep 3,2022</span>
                                            <small class="comments-reply">
                                                <a href="#">
                                                    <i class="icon icon-reply"></i>Reply </a>
                                            </small>
                                        </div>
                                        <p>Lorem diam done ullancomroer sit element henddg sit he consequert.Tristique
                                            tempis condimentum diam done ullancomroer sit element henddg sit he consequert.
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <article class="d-flex">
                                <img src="images/review-image1.jpg" alt="default" class="commentor-image">
                                <div class="author-post">
                                    <div class="comment-meta">
                                        <h4 class="meta-name">Rachel Ross</h4>
                                        <span class="meta-date">Aug 20,2022</span>
                                        <small class="comments-reply">
                                            <a href="#">
                                                <i class="icon icon-reply"></i>Reply </a>
                                        </small>
                                    </div>
                                    <p>Tristique tempis condimentum diam done ullancomroer sit element henddg sit he
                                        consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg
                                        sit he consequert.</p>
                                </div>
                            </article>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    

    <section id="shipping-information">
        <hr>
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center justify-content-between">
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box">
                        <i class="icon icon-truck"></i>
                        <h4 class="block-title">
                            <strong>Free shipping</strong> Over $200
                        </h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box">
                        <i class="icon icon-return"></i>
                        <h4 class="block-title">
                            <strong>Money back</strong> Return within 7 days
                        </h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box">
                        <i class="icon icon-tags1"></i>
                        <h4 class="block-title">
                            <strong>Buy 4 get 5th</strong> 50% off
                        </h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="icon-box">
                        <i class="icon icon-help_outline"></i>
                        <h4 class="block-title">
                            <strong>Any questions?</strong> experts are ready
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const stok = parseInt(document.getElementById("stok").textContent);
            const jumlahPesanInput = document.querySelector('input[name="jumlah_pesan"]');
            const submitButton = document.querySelector('button[type="submit"]');

            jumlahPesanInput.addEventListener("input", function() {
                const jumlahPesan = parseInt(jumlahPesanInput.value);
                if (jumlahPesan > stok) {
                    submitButton.disabled = true;
                    alert("Jumlah pesanan melebihi stok yang tersedia!");
                } else {
                    submitButton.disabled = false;
                }
            });
        });
    </script>

@endsection
