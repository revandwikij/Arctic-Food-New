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
                  <a href="/">Home /</a>
                </span>
                <span class="item">About</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <hr>

      <section id="about-us">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
              <div class="image-holder">
                <img src="../assets/css/images/ab.jpg" alt="single" class="about-image img-fluid">
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="detail">
                <div class="display-header">
                  <h2 class="section-title">Bagaimana Artic Food Berdiri?</h2>
                  <p>
                    Toko e-commerce "Artic Food" dimulai dengan visi untuk menjadi sumber terkemuka makanan beku berkualitas tinggi. Proses dimulai dengan menyusun rencana bisnis yang matang, yang mencakup identifikasi pasar target, penelitian pesaing, dan perencanaan strategi bisnis.
                    <br> Tim di balik "Artic Food" merancang situs web e-commerce yang menarik dan user-friendly menggunakan platform e-commerce yang sesuai. Situs web ini mencakup tampilan produk yang menarik serta sistem pembayaran yang aman.
                    <br>Kami percaya pada kekuatan transformatif dari teknologi dan ingin mengubah dunia menjadi lebih baik dengan menyediakan platform untuk menghubungkan pembeli dan penjual.
                  </p>
                  <div class="btn-wrap">
                    <a href="/" class="btn btn-dark btn-medium d-flex align-items-center" tabindex="0">Berbelanja<i class="icon icon-arrow-io"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <hr>

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
                        <p>“Па кратке приче су већ „кратке“, има ли краћих? Хехе, као што име говори, кратке приче се састоје само од 500 – 700 речи. У ствари, неки људи то понекад називају филетом..”</p>
                        <div class="author-detail">
                          <div class="name">By Wildan Bugi</div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-detail">
                        <p>“El sol brilla ardientemente en Lampung. La luz fue bloqueada por los densos árboles, dejando solo un rayo delgado. Los pájaros piaban como si cantaran una canción a la naturaleza.”</p>
                        <div class="author-detail">
                          <div class="name">By Narayana Agung</div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="testimonial-detail">
                        <p>“Gazzz Teroz Sampe Ujikom.”</p>
                        <div class="author-detail">
                          <div class="name">By Revan Dwiki</div>
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

      {{-- <section id="brand-collection" class="padding-medium bg-light-grey">
        <div class="container">
          <div class="d-flex flex-wrap justify-content-between">
              <iframe src="https://www.retrogames.cc/embed/23087-super-billiard-championship-pool-japan.html" width="600" height="450" frameborder="no" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" scrolling="no"></iframe>    </section> --}}

      <section id="instagram" class="padding-large">
          <div class="container">
              <div class="section-header">
                  <h2 class="section-title">Follow our instagram</h2>
              </div>
              <p>Our official Instagram account <a href="https://www.instagram.com/arcticfood.23">@arcticfood.23</a> or <a href="https://www.instagram.com/arcticfood.23">#cayank_celamanya</a>
              </p>
              <div class="row d-flex flex-wrap justify-content-between">
                  <div class="col-lg-2 col-md-4 col-sm-6">
                      <figure class="zoom-effect">
                          <img src="../assets/css/images/rep.jpg" alt="instagram" class="insta-image" style="height:215.59px; width:215.59px;">
                          <i class="icon icon-instagram"></i>
                      </figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                      <figure class="zoom-effect">
                          <img src="../assets/css/images/Wildan.jpg" alt="instagram" class="insta-image" style="height:215.59px; width:215.59px">
                          <i class="icon icon-instagram"></i>
                      </figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                      <figure class="zoom-effect">
                          <img src="../assets/css/images/ray.jpeg" alt="instagram" class="insta-image" style="height:215.59px; width:215.59px">
                          <i class="icon icon-instagram"></i>
                      </figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                      <figure class="zoom-effect">
                          <img src="../assets/css/images/padilmini.jpeg" alt="instagram" class="insta-image" style="height:215.59px; width:215.59px">
                          <i class="icon icon-instagram"></i>
                      </figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                      <figure class="zoom-effect">
                          <img src="../assets/images/insta-image5.jpg" alt="instagram" class="insta-image" style="height:215.59px; width:215.59px">
                          <i class="icon icon-instagram"></i>
                      </figure>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                      <figure class="zoom-effect">
                          <img src="../assets/images/insta-image6.jpg" alt="instagram" class="insta-image" style="height:215.59px; width:215.59px">
                          <i class="icon icon-instagram"></i>
                      </figure>
                  </div>
              </div>
          </div>
      </section>
    @endsection
