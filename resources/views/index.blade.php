@extends('layouting.home.master')

@section('title', 'Home')

@section('content')

    <section id="billboard" class="overflow-hidden">

      <button class="button-prev">
        <i class="icon icon-chevron-left"></i>
      </button>
      <button class="button-next">
        <i class="icon icon-chevron-right"></i>
      </button>
      <div class="swiper main-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image: url('../assets/images/banner1.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
            <div class="banner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h2 class="banner-title">Summer Collection</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac.</p>
                    <div class="btn-wrap">
                      <a href="/shop" class="btn btn-light btn-medium d-flex align-items-center" tabindex="0">Shop it now <i class="icon icon-arrow-io"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide" style="background-image: url('../assets/images/banner2.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;">
            <div class="banner-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h2 class="banner-title">Casual Collection</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero ipsum enim pharetra hac.</p>
                    <div class="btn-wrap">
                      <a href="/shop" class="btn btn-light btn-light-arrow btn-medium d-flex align-items-center" tabindex="0">Shop it now <i class="icon icon-arrow-io"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="featured-products" class="product-store padding-large">
      <div class="container">
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
          <h2 class="section-title">Featured Products</h2>
          <div class="btn-wrap">
            <a href="/shop" class="d-flex align-items-center">View all products <i class="icon icon icon-arrow-io"></i></a>
          </div>
        </div>
        <div class="swiper product-swiper overflow-hidden">
          <div class="swiper-wrapper">
            @foreach ($barang as $item)
                
          
            
            <div class="product-item col-lg-4 col-md-6 col-sm-6">
              <div class="image-holder">
                @if($item->Foto_Barang)
                <img src="{{ asset('uploads/' . $item->Foto_Barang) }}"  alt="Books" class="product-image">
              </div>
              @endif
              <div class="cart-concern">
                <div class="cart-button d-flex justify-content-between align-items-center">
                  <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                  </button>
                  <button type="button" class="view-btn tooltip
                      d-flex">
                    <i class="icon icon-screen-full"></i>
                    <span class="tooltip-text">Quick view</span>
                  </button>
                  <button type="button" class="wishlist-btn">
                    <i class="icon icon-heart"></i>
                  </button>
                </div>
              </div>
              <div class="product-detail">
                <h3 class="product-title">
                  <a href="/detail/{{$item->Id_Barang}}">{{$item->Nama_Barang}}</a>
                </h3>
                <div class="item-price text-primary">{{$item->Harga}}</div>
              </div>
            </div>
            @endforeach
    {{-- @foreach ($barang as $b)

            <div class="swiper-slide">
              <div class="product-item">
                <div class="image-holder">
                    @if ($b->Foto_Barang)
                        <img class="product-image" style="max-width: 400px; max-height:420px" alt="Books" src="{{ url('Foto_barang'). '/'. $b->Foto_Barang }}">
                    @endif
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <form action="/detail/{{$b->Id_Barang}}" method="get">
                        <button type="submit" class="view-btn tooltip
                            d-flex">
                        <i class="icon icon-screen-full"></i>
                        <span class="tooltip-text">Quick view</span>
                        </button>
                    </form>
                  </div>
                </div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="/detail/{{ $b->Id_Barang }}">{{ $b->Nama_Barang }}</a>
                  </h3>
                  <span class="item-price text-primary">Rp.{{number_format($b->Harga)}}</span>
                </div>
            </div>
        </div>
        @endforeach --}}
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section id="latest-collection">
      <div class="container">
        <div class="product-collection row">
          <div class="col-lg-7 col-md-12 left-content">
            <div class="collection-item">
              <div class="products-thumb">
                <img src="../assets/images/collection-item1.jpg" alt="collection item" class="large-image image-rounded">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
                <div class="categories">casual collection</div>
                <h3 class="item-title">AYAM</h3>
                <p>Ayam goreng istimewa dengan rempah khas, renyah di luar, lembut di dalam, cita rasa tak terlupakan.</p>
                <div class="btn-wrap">
                  <a href="/shop" class="d-flex align-items-center">shop collection <i class="icon icon-arrow-io"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 right-content flex-wrap">
            <div class="collection-item top-item">
              <div class="products-thumb">
                <img src="../assets/images/collection-item2.jpg" alt="collection item" class="small-image image-rounded">
              </div>
              <div class="col-md-6 product-entry">
                <div class="categories">Basic Collection</div>
                <h3 class="item-title">SAPI</h3>
                <div class="btn-wrap">
                  <a href="/shop" class="d-flex align-items-center">shop collection <i class="icon icon-arrow-io"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="collection-item bottom-item">
              <div class="products-thumb">
                <img src="../assets/images/collection-item3.jpg" alt="collection item" class="small-image image-rounded">
              </div>
              <div class="col-md-6 product-entry">
                <div class="categories">Best Selling Product</div>
                <h3 class="item-title">IKAN</h3>
                <div class="btn-wrap">
                  <a href="/shop" class="d-flex align-items-center">shop collection <i class="icon icon-arrow-io"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="subscribe" class="padding-large">
      <div class="container">
        <div class="row">
          <div class="block-text col-md-6">
            <div class="section-header">
              <h2 class="section-title">Get 25% off Discount Coupons</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dictumst amet, metus, sit massa posuere maecenas. At tellus ut nunc amet vel egestas.</p>
          </div>
          <div class="subscribe-content col-md-6">
            <form id="form" class="d-flex justify-content-between">
              <input type="text" name="email" placeholder="Enter your email addresss here">
              <button class="btn btn-dark">Subscribe Now</button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section id="selling-products" class="product-store bg-light-grey padding-large">
      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Best selling products</h2>
        </div>
        <ul class="tabs list-unstyled">
          <li data-tab-target="#all" class="active tab">All</li>
          <li data-tab-target="#" class="tab"></li>
        </ul>

        <div class="tab-content">
          <div id="all" data-tab-content class="active">
            @foreach ($barang as $b)
            <div class="row d-flex flex-wrap">
              <div class="product-item col-lg-3 col-md-6 col-sm-6">
                <div class="image-holder">
                    @if ($b->Foto_Barang)
                    <img class="product-image" src="{{ url('Foto_barang'). '/'. $b->Foto_Barang }}">
                    @endif
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="view-btn tooltip
                        d-flex">
                      <i class="icon icon-screen-full"></i>
                      <span class="tooltip-text">Quick view</span>
                    </button>
                  </div>
                </div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="single-product.html">{{ $b->Nama_Barang }}</a>
                  </h3>
                  <div class="item-price text-primary">Rp.{{number_format($b->Harga)}}</div>
                </div>
              </div>
        @endforeach
            </div>
          </div>
          @foreach ($kategoris as $k)

          <div id="{{ $k->Id_Kategori }}" data-tab-content>

          <div class="row d-flex flex-wrap">
                @foreach ($barang as $b)
              <div class="product-item col-lg-3 col-md-6 col-sm-6">
                <div class="image-holder">
                    @if ($b->Foto_Barang)
                    <img class="product-image" src="{{ url('Foto_barang'). '/'. $b->Foto_Barang }}">
                    @endif
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="view-btn tooltip
                        d-flex">
                      <i class="icon icon-screen-full"></i>
                      <span class="tooltip-text">Quick view</span>
                    </button>
                  </div>
                </div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="single-product.html">{{ $b->Nama_Barang }}</a>
                  </h3>
                  <div class="item-price text-primary">Rp.{{number_format($b->Harga)}}</div>
                </div>
              </div>
            @endforeach

            </div>
            @endforeach
          </div>
          <div id="tshirts" data-tab-content>
            <div class="row d-flex flex-wrap">
              <div class="product-item col-lg-3 col-md-6 col-sm-6">
                <div class="image-holder">
                  <img src="../assets/images/selling-products3.jpg" alt="Books" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                    </button>
                    <button type="button" class="view-btn tooltip
                        d-flex">
                      <i class="icon icon-screen-full"></i>
                      <span class="tooltip-text">Quick view</span>
                    </button>
                    <button type="button" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="single-product.html">Silk White Shirt</a>
                  </h3>
                  <div class="item-price text-primary">$35.00</div>
                </div>
              </div>
              <div class="product-item col-lg-3 col-md-6 col-sm-6">
                <div class="image-holder">
                  <img src="../assets/images/selling-products8.jpg" alt="Books" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                    </button>
                    <button type="button" class="view-btn tooltip
                        d-flex">
                      <i class="icon icon-screen-full"></i>
                      <span class="tooltip-text">Quick view</span>
                    </button>
                    <button type="button" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="single-product.html">White Half T-shirt</a>
                  </h3>
                  <div class="item-price text-primary">$30.00</div>
                </div>
              </div>
              <div class="product-item col-lg-3 col-md-6 col-sm-6">
                <div class="image-holder">
                  <img src="../assets/images/selling-products5.jpg" alt="Books" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                    </button>
                    <button type="button" class="view-btn tooltip
                        d-flex">
                      <i class="icon icon-screen-full"></i>
                      <span class="tooltip-text">Quick view</span>
                    </button>
                    <button type="button" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="single-product.html">Ghee Half T-shirt</a>
                  </h3>
                  <div class="item-price text-primary">$40.00</div>
                </div>
              </div>
              <div class="product-item col-lg-3 col-md-6 col-sm-6">
                <div class="image-holder">
                  <img src="../assets/images/selling-products7.jpg" alt="Books" class="product-image">
                </div>
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                    </button>
                    <button type="button" class="view-btn tooltip
                        d-flex">
                      <i class="icon icon-screen-full"></i>
                      <span class="tooltip-text">Quick view</span>
                    </button>
                    <button type="button" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </button>
                  </div>
                </div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="single-product.html">Long Sleeve T-shirt</a>
                  </h3>
                  <div class="item-price text-primary">$40.00</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="flash-sales" class="product-store padding-large">

      <div class="container">
        <div class="section-header">
          <h2 class="section-title">Flash sales</h2>
        </div>
        <div class="swiper product-swiper flash-sales overflow-hidden">

          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="product-item">
                <img src="../assets/images/selling-products9.jpg" alt="Books" class="product-image">
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                    </button>
                    <button type="button" class="view-btn tooltip
                        d-flex">
                      <i class="icon icon-screen-full"></i>
                      <span class="tooltip-text">Quick view</span>
                    </button>
                    <button type="button" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </button>
                  </div>
                </div>
                <div class="discount">10% Off</div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="single-product.html">Full sleeve cover shirt</a>
                  </h3>
                  <div class="item-price text-primary">
                    <del class="prev-price">$50.00</del>$40.00
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item">
                <img src="../assets/images/selling-products10.jpg" alt="Books" class="product-image">
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                    </button>
                    <button type="button" class="view-btn tooltip
                        d-flex">
                      <i class="icon icon-screen-full"></i>
                      <span class="tooltip-text">Quick view</span>
                    </button>
                    <button type="button" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </button>
                  </div>
                </div>
                <div class="discount">10% Off</div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="single-product.html">Long Sleeve T-shirt</a>
                  </h3>
                  <div class="item-price text-primary">
                    <del class="prev-price">$50.00</del>$40.00
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item">
                <img src="../assets/images/selling-products11.jpg" alt="Books" class="product-image">
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                    </button>
                    <button type="button" class="view-btn tooltip
                        d-flex">
                      <i class="icon icon-screen-full"></i>
                      <span class="tooltip-text">Quick view</span>
                    </button>
                    <button type="button" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </button>
                  </div>
                </div>
                <div class="discount">10% Off</div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="single-product.html">Grey Check Coat</a>
                  </h3>
                  <div class="item-price text-primary">
                    <del class="prev-price">$55.00</del>$45.00
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item">
                <img src="../assets/images/selling-products12.jpg" alt="Books" class="product-image">
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                    </button>
                    <button type="button" class="view-btn tooltip
                        d-flex">
                      <i class="icon icon-screen-full"></i>
                      <span class="tooltip-text">Quick view</span>
                    </button>
                    <button type="button" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </button>
                  </div>
                </div>
                <div class="discount">10% Off</div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="single-product.html">Silk White Shirt</a>
                  </h3>
                  <div class="item-price text-primary">
                    <del class="prev-price">$45.00</del>$35.00
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-item">
                <img src="../assets/images/selling-products8.jpg" alt="Books" class="product-image">
                <div class="cart-concern">
                  <div class="cart-button d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                    </button>
                    <button type="button" class="view-btn tooltip
                        d-flex">
                      <i class="icon icon-screen-full"></i>
                      <span class="tooltip-text">Quick view</span>
                    </button>
                    <button type="button" class="wishlist-btn">
                      <i class="icon icon-heart"></i>
                    </button>
                  </div>
                </div>
                <div class="discount">10% Off</div>
                <div class="product-detail">
                  <h3 class="product-title">
                    <a href="single-product.html">Blue Jeans pant</a>
                  </h3>
                  <div class="item-price text-primary">
                    <del class="prev-price">$45.00</del>$35.00
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>

        </div>
      </div>
    </section>

    <section class="shoppify-section-banner">
      <div class="container">
        <div class="product-collection">
          <div class="left-content collection-item">
            <div class="products-thumb">
              <img src="../assets/images/model.jpg" alt="collection item" class="large-image image-rounded">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
              <div class="categories">Denim collection</div>
              <h3 class="item-title">The casual selection.</h3>
              <p>Vel non viverra ligula odio ornare turpis mauris. Odio aliquam, tincidunt ut vitae elit risus. Tempor egestas condimentum et ac rutrum dui, odio.</p>
              <div class="btn-wrap">
                <a href="/shop" class="d-flex align-items-center">shop collection <i class="icon icon-arrow-io"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="quotation" class="align-center padding-large">
      <div class="inner-content">
        <h2 class="section-title divider">Quote of the day</h2>
        <blockquote>
          <q>It's true, I don't like the whole cutoff-shorts-and-T-shirt look, but I think you can look fantastic in casual clothes.</q>
          <div class="author-name">- Dr. Seuss</div>
        </blockquote>
      </div>
    </section>

    <hr>
    <section id="latest-blog" class="padding-large">
      <div class="container">
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
          <h2 class="section-title">our Journal</h2>
          <div class="btn-wrap align-right">
            <a href="blog.html" class="d-flex align-items-center">Read All Articles <i class="icon icon icon-arrow-io"></i>
            </a>
          </div>
        </div>
        <div class="row d-flex flex-wrap">
          <article class="col-md-4 post-item">
            <div class="image-holder zoom-effect">
              <a href="single-post.html">
                <img src="../assets/images/post-img1.jpg" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content d-flex">
              <div class="meta-date">
                <div class="meta-day text-primary">22</div>
                <div class="meta-month">Aug-2021</div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="single-post.html">top 10 casual look ideas to dress up your kids</a>
                </h3>
                <a href="blog.html" class="blog-categories">Fashion</a>
              </div>
            </div>
          </article>
          <article class="col-md-4 post-item">
            <div class="image-holder zoom-effect">
              <a href="single-post.html">
                <img src="../assets/images/post-img2.jpg" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content d-flex">
              <div class="meta-date">
                <div class="meta-day text-primary">25</div>
                <div class="meta-month">Aug-2021</div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="single-post.html">Latest trends of wearing street wears supremely</a>
                </h3>
                <a href="blog.html" class="blog-categories">Trending</a>
              </div>
            </div>
          </article>
          <article class="col-md-4 post-item">
            <div class="image-holder zoom-effect">
              <a href="single-post.html">
                <img src="../assets/images/post-img3.jpg" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content d-flex">
              <div class="meta-date">
                <div class="meta-day text-primary">28</div>
                <div class="meta-month">Aug-2021</div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="single-post.html">types of comfortable clothes ideas for women</a>
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
          <img src="../assets/images/brand1.png" alt="phone" class="brand-image">
          <img src="../assets/images/brand2.png" alt="phone" class="brand-image">
          <img src="../assets/images/brand3.png" alt="phone" class="brand-image">
          <img src="../assets/images/brand4.png" alt="phone" class="brand-image">
          <img src="../assets/images/brand5.png" alt="phone" class="brand-image">
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
              <img src="../assets/images/insta-image1.jpg" alt="instagram" class="insta-image">
              <i class="icon icon-instagram"></i>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <figure class="zoom-effect">
              <img src="../assets/images/insta-image2.jpg" alt="instagram" class="insta-image">
              <i class="icon icon-instagram"></i>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <figure class="zoom-effect">
              <img src="../assets/images/insta-image3.jpg" alt="instagram" class="insta-image">
              <i class="icon icon-instagram"></i>
            </figure>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <figure class="zoom-effect">
              <img src="../assets/images/insta-image4.jpg" alt="instagram" class="insta-image">
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
@endsection
