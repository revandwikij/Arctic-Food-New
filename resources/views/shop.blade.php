@extends('layouting.home.master')

@section('title', 'Shop')

@section('content')

    <section class="site-banner jarallax min-height300 padding-large"
        style="background: url(../assets/images/hero-image.jpg) no-repeat; background-position: top;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Shop page</h1>
                    <div class="breadcrumbs">
                        <span class="item">
                            <a href="index.html">Home /</a>
                        </span>
                        <span class="item">Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="shopify-grid padding-large">
        <div class="container">
            <div class="row">

                <section id="selling-products" class="col-md-9 product-store">
                    <div class="container">
                        <ul class="tabs list-unstyled">
                            @foreach ($kategori as $item) 
                            <li data-tab-target="#{{ $item->Kategori }}" class="tab">{{ $item->Kategori }}</li> 
                            @endforeach
                    {{-- 
                    <li data-tab-target="#shoes" class="tab">Shoes</li>
                    <li data-tab-target="#tshirts" class="tab">Tshirts</li>
                    <li data-tab-target="#pants" class="tab">Pants</li>
                    <li data-tab-target="#hoodie" class="tab">Hoodie</li>
                    <li data-tab-target="#outer" class="tab">Outer</li>
                    <li data-tab-target="#jackets" class="tab">Jackets</li>
                    <li data-tab-target="#accessories" class="tab">Accessories</li> 
                    --}}
                        </ul>
                        <div class="tab-content">
                            <div id="all" data-tab-content class="active">
                                <div class="row d-flex flex-wrap">
                                    @foreach ($barang as $data)
                                        <div class="product-item col-lg-4 col-md-6 col-sm-6">
                                            <div class="image-holder">
                                                @if ($data->Foto_Barang)
                                                    <img src="{{ asset('uploads/' . $data->Foto_Barang) }}"
                                                        alt="{{ $data->Nama_Barang }}" class="product-image">
                                                @endif
                                            </div>
                                            <div class="cart-concern">
                                                <div class="cart-button d-flex justify-content-between align-items-center">
                                                    <button type="button"
                                                        class="btn-wrap cart-link d-flex align-items-center">add to cart <i
                                                            class="icon icon-arrow-io"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="view-btn tooltip d-flex">
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
                                                    <a href="single-product.html">{{ $data->Nama_Barang }}</a>
                                                </h3>
                                                <div class="item-price text-primary">{{ $data->Harga }}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @foreach ($kategori as $item)
                            <div id="{{ $item -> Kategori }}" data-tab-content>
                              <div class="row d-flex flex-wrap">
                                @foreach ($barang as $data)
                                <div class="product-item col-lg-4 col-md-6 col-sm-6">
                                  <div class="image-holder">
                                    @if($item->Foto_Barang)
                                      <img src="{{ asset('uploads/' . $item->Foto_Barang) }}"  alt="Books" class="product-image">
                                    @endif
                                    {{-- <img src="../assets/images/selling-products3.jpg" alt="Books" class="product-image"> --}}
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
                                      <a href="single-product.html">{{ $data -> Nama_Barang }}</a>
                                    </h3>
                                    <div class="item-price text-primary">{{ $data -> Harga }}</div>
                                  </div>
                                </div>
                                @endforeach
                              </div>
                            </div>
                            @endforeach
                {{-- <div id="shoes" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products13.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Orange white Nike</a>
                        </h3>
                        <div class="item-price text-primary">$55.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products14.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Running Shoe</a>
                        </h3>
                        <div class="item-price text-primary">$65.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products15.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Tennis Shoe</a>
                        </h3>
                        <div class="item-price text-primary">$80.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products16.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Nike Brand Shoe</a>
                        </h3>
                        <div class="item-price text-primary">$65.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="pants" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products1.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Half sleeve T-shirt</a>
                        </h3>
                        <div class="item-price text-primary">$40.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products4.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Grunge Hoodie</a>
                        </h3>
                        <div class="item-price text-primary">$30.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
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
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products2.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Stylish Grey Pant</a>
                        </h3>
                        <div class="item-price text-primary">$40.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="hoodie" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products17.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">White Hoodie</a>
                        </h3>
                        <div class="item-price text-primary">$40.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products4.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Navy Blue Hoodie</a>
                        </h3>
                        <div class="item-price text-primary">$45.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products18.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Dark Green Hoodie</a>
                        </h3>
                        <div class="item-price text-primary">$35.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="outer" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
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
                        <div class="item-price text-primary">$ 35.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products4.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Grunge Hoodie</a>
                        </h3>
                        <div class="item-price text-primary">$ 30.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products6.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Grey Check Coat</a>
                        </h3>
                        <div class="item-price text-primary">$ 30.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
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
                        <div class="item-price text-primary">$ 40.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="jackets" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
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
                          <a href="single-product.html">Full Sleeve Jeans Jacket</a>
                        </h3>
                        <div class="item-price text-primary">$40.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products2.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Stylish Grey Coat</a>
                        </h3>
                        <div class="item-price text-primary">$35.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products6.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Grey Check Coat</a>
                        </h3>
                        <div class="item-price text-primary">$35.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="accessories" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products19.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Stylish Women Bag</a>
                        </h3>
                        <div class="item-price text-primary">$35.00</div>
                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="../assets/images/selling-products20.jpg" alt="Books" class="product-image">
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
                          <a href="single-product.html">Stylish Gadgets</a>
                        </h3>
                        <div class="item-price text-primary">$30.00</div>
                      </div>
                    </div>
                  </div>
                </div> --}}
                        </div>
                        <nav class="navigation paging-navigation text-center padding-medium" role="navigation">
                            <div class="pagination loop-pagination d-flex justify-content-center">
                                <a href="#" class="pagination-arrow d-flex align-items-center">
                                    <i class="icon icon-arrow-left"></i>
                                </a>
                                <span aria-current="page" class="page-numbers current">1</span>
                                <a class="page-numbers" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a href="#" class="pagination-arrow d-flex align-items-center">
                                    <i class="icon icon-arrow-right"></i>
                                </a>
                            </div>
                        </nav>
                    </div>
                </section>

                <aside class="col-md-3">
                    <div class="sidebar">
                        <div class="widgets widget-menu">
                            <div class="widget-search-bar">
                                <form role="search" method="get" class="d-flex">
                                    <input class="search-field" placeholder="Search" type="text">
                                    <button class="btn btn-dark"><i class="icon icon-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="widgets widget-product-tags">
                            <h5 class="widget-title">Tags</h5>
                            <ul class="product-tags sidebar-list list-unstyled">
                                <li class="tags-item">
                                    <a href="">White</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">Cheap</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">Branded</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">Modern</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">Simple</a>
                                </li>
                            </ul>
                        </div>


                        
                        <div class="widgets widget-product-brands">
                          <h5 class="widget-title">Kategori</h5>
                          <ul class="product-tags sidebar-list list-unstyled">
                            @foreach ($kategori as $data)
                              <li class="tags-item">
                                  <a href="">{{ $data -> Kategori }}</a>
                                </li>
                                @endforeach
                              {{-- <li class="tags-item">
                                  <a href="">Adidas</a>
                              </li>
                              <li class="tags-item">
                                  <a href="">Puma</a>
                              </li>
                              <li class="tags-item">
                                  <a href="">Spike</a>
                              </li> --}}
                          </ul>
                      </div>

                        

                        <div class="widgets widget-price-filter">
                            <h5 class="widget-title">Filter By Price</h5>
                            <ul class="product-tags sidebar-list list-unstyled">
                                <li class="tags-item">
                                    <a href="">Less than $10</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">$10- $20</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">$20- $30</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">$30- $40</a>
                                </li>
                                <li class="tags-item">
                                    <a href="">$40- $50</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </div>

    <hr>

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
