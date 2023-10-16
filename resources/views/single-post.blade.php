@extends('layouting.home.master')

@section('title', 'Detail')

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
                        <h1 class="page-title">{{ $data->Nama_Barang }}</h1>
                        <div class="feature-image">
                            @if ($data->Foto_Barang)
                                <img style="width: 500px; height:500px" src="{{ asset('uploads/' . $data->Foto_Barang) }}">
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
                                    <tr style="font-size: 35px">
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($data->Harga) }}</td>
                                    </tr>
                                    <tr style="font-size: 35px">
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td id="stok">{{ $data->Stok }}</td>
                                    </tr>
                                    <tr style="font-size: 35px">
                                        <td>Berat</td>
                                        <td>:</td>
                                        <td>{{ $data->Berat }} G</td>
                                    </tr>
                                    <tr style="font-size: 35px">
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td> {{ $data->Keterangan_Barang }}</td>
                                    </tr>

                                    <tr style="font-size: 30px">
                                        <td>Jumlah Pesanan</td>
                                        <td>:</td>
                                        <td>
                                            <form action="/keranjang/{{ $data->Id_Barang }}" method="POST">
                                                @csrf
                                                <input type="number" name="jumlah_pesan" class="form-control" required>
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
                            <div class="social-links d-flex margin-small">
                                <div class="element-title">Share:</div>
                                <ul class="d-flex list-unstyled">
                                    <li>
                                        <a href="#"><i class="icon icon-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon icon-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon icon-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon icon-youtube-play"></i></a>
                                    </li>
                                </ul>
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
                        <h3>Comments</h3>

                        <div class="comment-list">
                            @foreach ($ulasan as $u)
                                <article class="d-flex">
                                    {{-- <img src="images/review-image1.jpg" alt="default" class="commentor-image"> --}}
                                    <div class="author-post">
                                        <div class="comment-meta">
                                            <h4 class="meta-name">{{ $u->username }}</h4>
                                            <span class="meta-date">{{ $u->formatted_created_at }}</span>
                                            <small class="comments-reply">
                                                <a href="#">
                                                    <i class="icon icon-reply"></i>Reply </a>
                                            </small>
                                        </div>
                                        <div
                                            style="height:200px;width:500px;border:0px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                                            {{ $u->Ulasan }}
                                        </div>
                                        {{-- <p>Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.</p> --}}
                                    </div>
                                </article>
                            @endforeach
                            {{-- <div class="child-comments">
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
                      <p>Lorem diam done ullancomroer sit element henddg sit he consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.</p>
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
                    <p>Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.Tristique tempis condimentum diam done ullancomroer sit element henddg sit he consequert.</p>
                  </div>
                </article> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="comment-respond">
                        <h3>Leave a Comment</h3>
                        @foreach ($barang as $data)
                            <form method="post" action="/ulasan/{{ $data->Id_Barang }}" class="form-group">
                                {{ csrf_field() }}
                                @foreach ($pelanggan as $item)
                                    <input class="u-full-width" type="text" name="Username" id="author"
                                        class="form-control" value="{{ Auth::user()->username }}">
                                    <textarea class="u-full-width" id="comment" class="form-control" name="Ulasan" placeholder="Write your comment here"
                                        rows="20"></textarea>
                                    <label class="example-send-yourself-copy">
                                        <input type="checkbox">
                                        <span class="label-body">Save my name, email, and website in this browser for the
                                            next time I comment.</span>
                                    </label>
                                    <button type="submit" name="submit" class="btn btn-dark btn-medium">Submit</button>
                                @endforeach
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="latest-blog" class="padding-large">
        <div class="container">
            <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
                <h2 class="section-title">Related Posts</h2>
                <div class="btn-wrap align-right">
                    <a href="#" class="d-flex align-items-center">Read All Articles <i
                            class="icon icon icon-arrow-io"></i>
                    </a>
                </div>
            </div>
            <div class="row d-flex flex-wrap">
                <article class="col-md-4 post-item">
                    <div class="image-holder zoom-effect">
                        <a href="#">
                            <img src="images/post-img1.jpg" alt="post" class="post-image">
                        </a>
                    </div>
                    <div class="post-content d-flex">
                        <div class="meta-date">
                            <div class="meta-day text-primary">22</div>
                            <div class="meta-month">Aug-2021</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="#">top 10 casual look ideas to dress up your kids</a>
                            </h3>
                            <a href="blog.html" class="blog-categories">Fashion</a>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 post-item">
                    <div class="image-holder zoom-effect">
                        <a href="#">
                            <img src="images/post-img2.jpg" alt="post" class="post-image">
                        </a>
                    </div>
                    <div class="post-content d-flex">
                        <div class="meta-date">
                            <div class="meta-day text-primary">25</div>
                            <div class="meta-month">Aug-2021</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="#">Latest trends of wearing street wears supremely</a>
                            </h3>
                            <a href="blog.html" class="blog-categories">Trending</a>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 post-item">
                    <div class="image-holder zoom-effect">
                        <a href="#">
                            <img src="images/post-img3.jpg" alt="post" class="post-image">
                        </a>
                    </div>
                    <div class="post-content d-flex">
                        <div class="meta-date">
                            <div class="meta-day text-primary">28</div>
                            <div class="meta-month">Aug-2021</div>
                        </div>
                        <div class="post-header">
                            <h3 class="post-title">
                                <a href="#">types of comfortable clothes ideas for women</a>
                            </h3>
                            <a href="blog.html" class="blog-categories">Inspiration</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="brand-collection" class="padding-medium bg-light-grey">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between">
                <img src="images/brand1.png" alt="phone" class="brand-image">
                <img src="images/brand2.png" alt="phone" class="brand-image">
                <img src="images/brand3.png" alt="phone" class="brand-image">
                <img src="images/brand4.png" alt="phone" class="brand-image">
                <img src="images/brand5.png" alt="phone" class="brand-image">
            </div>
        </div>
    </section>

    <section id="instagram" class="padding-large">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Follow our instagram</h2>
            </div>
            <p>Our official Instagram account <a href="#">@ultras</a> or <a href="#">#ultras_clothing</a>
            </p>
            <div class="row d-flex flex-wrap justify-content-between">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="images/insta-image1.jpg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="images/insta-image2.jpg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="images/insta-image3.jpg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="images/insta-image4.jpg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="images/insta-image5.jpg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="images/insta-image6.jpg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
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