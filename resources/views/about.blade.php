@extends('layouting.home.master')

@section('title', 'About')

@section('content')

    <section class="site-banner jarallax min-height300 padding-large" style="background: url(images/hero-image.jpg) no-repeat;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">About us</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="index.html">Home /</a>
              </span>
              <span class="item">About</span>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="about-us">
      <div class="container ">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6 col-md-12">
            <div class="image-holder">
              <img src="../assets/css/images/ab.jpg" alt="single" class="about-image">
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="detail">
              <div class="display-header">
                <h2 class="section-title">Bagaimana Artic Food Berdiri?</h2>
                <p>Toko e-commerce "Artic Food" dimulai dengan visi untuk menjadi sumber terkemuka makanan beku berkualitas tinggi. Proses dimulai dengan menyusun rencana bisnis yang matang, yang mencakup identifikasi pasar target, penelitian pesaing, dan perencanaan strategi bisnis.
                  <br> Tim di balik "Artic Food" merancang situs web e-commerce yang menarik dan user-friendly menggunakan platform e-commerce yang sesuai. Situs web ini mencakup tampilan produk yang menarik serta sistem pembayaran yang aman.
                  <br>Kami percaya pada kekuatan transformatif dari teknologi dan ingin mengubah dunia menjadi lebih baik dengan menyediakan platform untuk menghubungkan pembeli dan penjual.
                </p>
                <div class="btn-wrap">
                  <a href="/" class="btn btn-dark btn-medium d-flex align-items-center" tabindex="0">Berbelanja<i class="icon icon-arrow-io"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="padding-large">
      <div class="container">
        <div class="reviews-content">
          <div class="row d-flex flex-wrap">
            <div class="col-md-2">
              <div class="review-icon">
                <i class="icon icon-right-quote"></i>
              </div>
            </div>
            <div class="col-md-8">
              <div class="swiper testimonial-swiper overflow-hidden">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial-detail">
                      <p>“Dignissim massa diam elementum habitant fames. Id nullam pellentesque nisi, eget cursus dictumst pharetra, sit. Pulvinar laoreet id porttitor egestas dui urna. Porttitor nibh magna dolor ultrices iaculis sit iaculis.”</p>
                      <div class="author-detail">
                        <div class="name">By Maggie Rio</div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="testimonial-detail">
                      <p>“Dignissim massa diam elementum habitant fames. Id nullam pellentesque nisi, eget cursus dictumst pharetra, sit. Pulvinar laoreet id porttitor egestas dui urna. Porttitor nibh magna dolor ultrices iaculis sit iaculis.”</p>
                      <div class="author-detail">
                        <div class="name">By John Smith</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-arrows">
                <button class="prev-button">
                  <i class="icon icon-arrow-left"></i>
                </button>
                <button class="next-button">
                  <i class="icon icon-arrow-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

    <section id="brand-collection" class="padding-medium bg-light-grey">
      <div class="container">
        <div class="d-flex flex-wrap justify-content-between">
         
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
                        <img src="../assets/css/images/rep.jpg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="../assets/css/images/Wildan.jpg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="../assets/css/images/ray.jpeg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="../assets/css/images/padilmini.jpeg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="../assets/images/insta-image5.jpg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <figure class="zoom-effect">
                        <img src="../assets/images/insta-image6.jpg" alt="instagram" class="insta-image">
                        <i class="icon icon-instagram"></i>
                    </figure>
                </div>
            </div>
        </div>
    </section>
  @endsection