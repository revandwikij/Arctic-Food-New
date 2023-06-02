@extends('layouting.home.master')

@section('title', 'Home')

@section('content')
<body class="cnt-home">
    <div class="body-content outer-top-vs" id="top-banner-and-menu">
      <div class="container">
        <div class="row">
          <!-- ============================================== SIDEBAR ============================================== -->
          <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
            <!-- ================================== TOP NAVIGATION ================================== -->
            <div class="side-menu animate-dropdown outer-bottom-xs">
              {{-- <div class="head">
                <i class="icon fa fa-align-justify fa-fw"></i> Categories
              </div>
              <nav class="yamm megamenu-horizontal">
                <ul class="nav">
                  <li class="dropdown menu-item">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                      ><i class="" aria-hidden="true"></i
                      >Fashion</a
                    >

                    <!-- /.dropdown-menu -->
                  </li>
                  <!-- /.menu-item -->

                  <li class="dropdown menu-item">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                      ><i class="" aria-hidden="true"></i
                      >Kuliner</a
                    >
                  </li>
                  <!-- /.menu-item -->

                  <!-- /.menu-item -->
                </ul>
                <!-- /.nav -->
              </nav> --}}
              <!-- /.megamenu-horizontal -->
            </div>
            <!-- /.side-menu -->
            <!-- ================================== TOP NAVIGATION : END ================================== -->

            <!-- ============================================== HOT DEALS ============================================== -->
            <div class="sidebar-widget hot-deals outer-bottom-xs">

              <div
                class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                <div class="item">
                  <div class="products">
                    <div class="hot-deal-wrapper">
                      <div class="image">
                        <a href="#">
                          <img src="assets/images/gamis.png" alt="" />
                        </a>
                      </div>
                      <div class="sale-offer-tag">
                        <span
                          >49%<br />
                          off</span
                        >
                      </div>
                      <div class="timing-wrapper">
                        <div class="box-wrapper">
                          <div class="date box">
                            <span class="key">120</span>
                            <span class="value">DAYS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="hour box">
                            <span class="key">20</span>
                            <span class="value">HRS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="minutes box">
                            <span class="key">36</span>
                            <span class="value">MINS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="seconds box">
                            <span class="key">60</span>
                            <span class="value">SEC</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                      <h3 class="name">
                        <a href="detail.html">Floral Print Buttoned</a>
                      </h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price">
                        <span class="price"> $600.00 </span>
                        <span class="price-before-discount">$800.00</span>
                      </div>
                      <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <div class="add-cart-button btn-group">
                          <button
                            class="btn btn-primary icon"
                            data-toggle="dropdown"
                            type="button">
                            <i class="fa fa-shopping-cart"></i>
                          </button>
                          <button
                            class="btn btn-primary cart-btn"
                            type="button">
                            Tambah keranjang
                          </button>
                        </div>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                </div>
                <div class="item">
                  <div class="products">
                    <div class="hot-deal-wrapper">
                      <div class="image">
                        <a href="#">
                          <img src="assets/images/hot-deals/p14.jpg" alt="" />
                          <img
                            src="assets/images/hot-deals/p14_hover.jpg"
                            alt=""
                            class="hover-image" />
                        </a>
                      </div>
                      <div class="sale-offer-tag">
                        <span
                          >35%<br />
                          off</span
                        >
                      </div>
                      <div class="timing-wrapper">
                        <div class="box-wrapper">
                          <div class="date box">
                            <span class="key">120</span>
                            <span class="value">Days</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="hour box">
                            <span class="key">20</span>
                            <span class="value">HRS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="minutes box">
                            <span class="key">36</span>
                            <span class="value">MINS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="seconds box">
                            <span class="key">60</span>
                            <span class="value">SEC</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                      <h3 class="name">
                        <a href="detail.html">Floral Print Buttoned</a>
                      </h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price">
                        <span class="price"> $600.00 </span>
                        <span class="price-before-discount">$800.00</span>
                      </div>
                      <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <div class="add-cart-button btn-group">
                          <button
                            class="btn btn-primary icon"
                            data-toggle="dropdown"
                            type="button">
                            <i class="fa fa-shopping-cart"></i>
                          </button>
                          <button
                            class="btn btn-primary cart-btn"
                            type="button">
                            Add to cart
                          </button>
                        </div>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                </div>
                <div class="item">
                  <div class="products">
                    <div class="hot-deal-wrapper">
                      <div class="image">
                        <a href="#">
                          <img src="assets/images/hot-deals/p15.jpg" alt="" />
                          <img
                            src="assets/images/hot-deals/p15_hover.jpg"
                            alt=""
                            class="hover-image" />
                        </a>
                      </div>
                      <div class="sale-offer-tag">
                        <span
                          >35%<br />
                          off</span
                        >
                      </div>
                      <div class="timing-wrapper">
                        <div class="box-wrapper">
                          <div class="date box">
                            <span class="key">120</span>
                            <span class="value">Days</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="hour box">
                            <span class="key">20</span>
                            <span class="value">HRS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="minutes box">
                            <span class="key">36</span>
                            <span class="value">MINS</span>
                          </div>
                        </div>
                        <div class="box-wrapper">
                          <div class="seconds box">
                            <span class="key">60</span>
                            <span class="value">SEC</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.hot-deal-wrapper -->

                    <div class="product-info text-left m-t-20">
                      <h3 class="name">
                        <a href="detail.html">Floral Print Buttoned</a>
                      </h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price">
                        <span class="price"> $600.00 </span>
                        <span class="price-before-discount">$800.00</span>
                      </div>
                      <!-- /.product-price -->
                    </div>
                    <!-- /.product-info -->

                    <div class="cart clearfix animate-effect">
                      <div class="action">
                        <div class="add-cart-button btn-group">
                          <button
                            class="btn btn-primary icon"
                            data-toggle="dropdown"
                            type="button">
                            <i class="fa fa-shopping-cart"></i>
                          </button>
                          <button
                            class="btn btn-primary cart-btn"
                            type="button">
                            Add to cart
                          </button>
                        </div>
                      </div>
                      <!-- /.action -->
                    </div>
                    <!-- /.cart -->
                  </div>
                </div>
              </div>
              <!-- /.sidebar-widget -->
            </div>
            <!-- ============================================== HOT DEALS: END ============================================== -->

            <!-- ============================================== SPECIAL OFFER ============================================== -->
            {{-- @foreach ($barang as $b) --}}

            <div class="sidebar-widget outer-bottom-small">
              <h3 class="section-title">Penawaran Khusus</h3>
              <div class="sidebar-widget-body outer-top-xs">
                <div
                  class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                  <div class="item">
                    <div class="products special-product">
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                {{-- <div class="image">
                                @if ($b->Foto_Barang)
                                    <a href="detail.html">
                                        <a class="entry-thumbnail" href="detail.html">
                                            <img  src="{{ url('Foto_barang'). '/'. $b->Foto_Barang }}">
                                        </a>
                                    </a>
                                @endif
                                </div> --}}
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p9.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p11.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="products special-product">
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p15.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p13.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p12.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="products special-product">
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p1.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p3.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p7.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.sidebar-widget-body -->
            </div>

            {{-- @endforeach --}}

            <!-- /.sidebar-widget -->
            <!-- ============================================== SPECIAL OFFER : END ============================================== -->
            <!-- ============================================== PRODUCT TAGS ============================================== -->
            <div class="sidebar-widget product-tag">
              <h3 class="section-title">Produk Tag</h3>
              <div class="sidebar-widget-body outer-top-xs">
                <div class="tag-list">
                  <a class="item" title="Phone" href="category.html">Phone</a>
                  <a class="item active" title="Vest" href="category.html"
                    >Vest</a
                  >
                  <a class="item" title="Smartphone" href="category.html"
                    >Smartphone</a
                  >
                  <a class="item" title="Furniture" href="category.html"
                    >Furniture</a
                  >
                  <a class="item" title="T-shirt" href="category.html"
                    >T-shirt</a
                  >
                  <a class="item" title="Sweatpants" href="category.html"
                    >Sweatpants</a
                  >
                  <a class="item" title="Sneaker" href="category.html"
                    >Sneaker</a
                  >
                  <a class="item" title="Toys" href="category.html">Toys</a>
                  <a class="item" title="Rose" href="category.html">Rose</a>
                </div>
                <!-- /.tag-list -->
              </div>
              <!-- /.sidebar-widget-body -->
            </div>
            <!-- /.sidebar-widget -->
            <!-- ============================================== PRODUCT TAGS : END ============================================== -->
            <!-- ============================================== SPECIAL DEALS ============================================== -->

            <div class="sidebar-widget outer-bottom-small">
              <h3 class="section-title">Penawaran Spesial</h3>
              <div class="sidebar-widget-body outer-top-xs">
                <div
                  class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                  <div class="item">
                    <div class="products special-product">
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p8.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p5.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p6.jpg"
                                      alt="image" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="products special-product">
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p8.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p7.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p6.jpg"
                                      alt="" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="products special-product">
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p5.jpg"
                                      alt="images" />
                                    <div class="zoom-overlay"></div>
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p4.jpg"
                                      alt="" />
                                    <div class="zoom-overlay"></div>
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                      <div class="product">
                        <div class="product-micro">
                          <div class="row product-micro-row">
                            <div class="col col-xs-5">
                              <div class="product-image">
                                <div class="image">
                                  <a href="#">
                                    <img
                                      src="assets/images/products/p13.jpg"
                                      alt="image" />
                                  </a>
                                </div>
                                <!-- /.image -->
                              </div>
                              <!-- /.product-image -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-xs-7">
                              <div class="product-info">
                                <h3 class="name">
                                  <a href="#">Floral Print Shirt</a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="product-price">
                                  <span class="price"> $450.99 </span>
                                </div>
                                <!-- /.product-price -->
                              </div>
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.product-micro-row -->
                        </div>
                        <!-- /.product-micro -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.sidebar-widget-body -->
            </div>
            <!-- /.sidebar-widget -->
            <!-- ============================================== SPECIAL DEALS : END ============================================== -->
            <!-- /.sidebar-widget -->
            <!-- ============================================== NEWSLETTER: END ============================================== -->

            <!-- ============================================== Testimonials============================================== -->
            <div class="sidebar-widget outer-top-vs">
              <div id="advertisement" class="advertisement">
                <div class="item">
                  <div class="avatar">
                    <img
                      src="assets/css/images/rep.jpg"
                      alt="Image" />
                  </div>
                  <div class="testimonials">
                    <em>"</em> zài ālābóyǔ zhōng ， zhègecí láiyuányú sobaroyasbiru zhègecí ，yìsīshìchíyǒu。érjiù éryán ， nàixīn shìzài miànduì yíqiè bùxǐhuan hé tǎoyàn de shìqing shí bìmiǎn gèzhǒng kùnnan 、 bēishāng huò kèzhì.<em>"</em>
                  </div>
                  <div class="clients_author">
                    Revan D. J. <span>UMKM Company</span>
                  </div>
                  <!-- /.container-fluid -->
                </div>
                <!-- /.item -->

                <div class="item">
                  <div class="avatar">
                    <img
                      src="assets/images/testimonials/member3.png"
                      alt="Image" />
                  </div>
                  <div class="testimonials">
                    <em>"</em>Vtae sodales aliq uam morbi non sem lacus port
                    mollis. Nunc condime tum metus eud molest sed consectetuer.
                    Sed quia non numquam eius modi tempora incidunt ut labore et
                    dolore magnam aliquam quaerat.<em>"</em>
                  </div>
                  <div class="clients_author">
                    Stephen Doe <span>Xperia Designs</span>
                  </div>
                </div>
                <!-- /.item -->

                <div class="item">
                  <div class="avatar">
                    <img
                      src="assets/images/testimonials/member2.png"
                      alt="Image" />
                  </div>
                  <div class="testimonials">
                    <em>"</em>Vtae sodales aliq uam morbi non sem lacus port
                    mollis. Nunc condime tum metus eud molest sed consectetuer.
                    Sed quia non numquam eius modi tempora incidunt ut labore et
                    dolore magnam aliquam quaerat.<em>"</em>
                  </div>
                  <div class="clients_author">
                    Saraha Smith <span>Datsun &amp; Co</span>
                  </div>
                  <!-- /.container-fluid -->
                </div>
                <!-- /.item -->
              </div>
              <!-- /.owl-carousel -->
            </div>

            <!-- ============================================== Testimonials: END ============================================== -->
          </div>
          <!-- /.sidemenu-holder -->
          <!-- ============================================== SIDEBAR : END ============================================== -->

          <!-- ============================================== CONTENT ============================================== -->
          {{-- <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
            <!-- ========================================== SECTION – HERO ========================================= -->
            <div class="center">


            <div id="hero">
              <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                <div
                  class="item"
                  style="background-image: url(assets/images/sliders/01.jpg)">
                  <div class="container-fluid">
                    <div class="caption bg-color vertical-center text-left">
                      <div class="slider-header fadeInDown-1">Top Brands</div>
                      <div class="big-text fadeInDown-1">New Collections</div>
                      <div class="excerpt fadeInDown-2 hidden-xs">
                        <span
                          >Lorem ipsum dolor sit amet, consectetur adipisicing
                          elit.</span
                        >
                      </div>
                      <div class="button-holder fadeInDown-3">
                        <a
                          href="index6c11.html?page=single-product"
                          class="btn-lg btn btn-uppercase btn-primary shop-now-button"
                          >Shop Now</a
                        >
                      </div>
                    </div>
                    <!-- /.caption -->
                  </div>
                  <!-- /.container-fluid -->
                </div>
                <!-- /.item -->

                <div
                  class="item"
                  style="background-image: url(assets/images/sliders/02.jpg)">
                  <div class="container-fluid">
                    <div class="caption bg-color vertical-center text-left">
                      <div class="slider-header fadeInDown-1">Spring 2018</div>
                      <div class="big-text fadeInDown-1">Women Fashion</div>
                      <div class="excerpt fadeInDown-2 hidden-xs">
                        <span
                          >Nemo enim ipsam voluptatem quia voluptas sit
                          aspernatur aut odit aut fugit</span
                        >
                      </div>
                      <div class="button-holder fadeInDown-3">
                        <a
                          href="index6c11.html?page=single-product"
                          class="btn-lg btn btn-uppercase btn-primary shop-now-button"
                          >Shop Now</a
                        >
                      </div>
                    </div>
                    <!-- /.caption -->
                  </div>
                  <!-- /.container-fluid -->
                </div>
                <!-- /.item -->
              </div>
              <!-- /.owl-carousel -->
            </div>

            <!-- ========================================= SECTION – HERO : END ========================================= -->

            <!-- ============================================== SCROLL TABS ============================================== -->
           
           
            
            
             <!-- /.scroll-tabs -->

            <!-- ============================================== SCROLL TABS : END ============================================== -->

          
            <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
          </div> --}}
          @foreach($barang as $b)
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              @if ($b->Foto_Barang)
              <img style="max-width: 100px; max-height:100px" src="{{ url('Foto_barang'). '/'. $b->Foto_Barang }}">
              @endif
             
              <div class="card-body">
                <h5 class="card-title">{{$b->Nama_Barang}}</h5>
                <p class="card-text">
                  <strong>Stok :</strong>{{$b->Stok}}
                  <br>
                  <strong>Harga :</strong>Rp.{{number_format($b->Harga)}}
                </p>
               <a href="/detail/{{$b->Id_Barang}}" class="btn btn-primary">Pesan</a>
              </div>
            </div>
          </div>
        @endforeach
          <!-- /.homebanner-holder -->
          <!-- ============================================== CONTENT : END ============================================== -->
        </div>
        <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider">
          <div class="logo-slider-inner">
            <div
              id="brand-slider"
              class="owl-carousel brand-slider custom-carousel owl-theme">
              <div class="item m-t-15">
                <a href="#" class="image">
                  <img
                    data-echo="assets/images/brands/brand1.png"
                    src="assets/images/blank.gif"
                    alt="" />
                </a>
              </div>
              <!--/.item-->

              <div class="item m-t-10">
                <a href="#" class="image">
                  <img
                    data-echo="assets/images/brands/brand2.png"
                    src="assets/images/blank.gif"
                    alt="" />
                </a>
              </div>
              <!--/.item-->

              <div class="item">
                <a href="#" class="image">
                  <img
                    data-echo="assets/images/brands/brand3.png"
                    src="assets/images/blank.gif"
                    alt="" />
                </a>
              </div>
              <!--/.item-->

              <div class="item">
                <a href="#" class="image">
                  <img
                    data-echo="assets/images/brands/brand4.png"
                    src="assets/images/blank.gif"
                    alt="" />
                </a>
              </div>
              <!--/.item-->

              <div class="item">
                <a href="#" class="image">
                  <img
                    data-echo="assets/images/brands/brand5.png"
                    src="assets/images/blank.gif"
                    alt="" />
                </a>
              </div>
              <!--/.item-->

              <div class="item">
                <a href="#" class="image">
                  <img
                    data-echo="assets/images/brands/brand6.png"
                    src="assets/images/blank.gif"
                    alt="" />
                </a>
              </div>
              <!--/.item-->

              <div class="item">
                <a href="#" class="image">
                  <img
                    data-echo="assets/images/brands/brand2.png"
                    src="assets/images/blank.gif"
                    alt="" />
                </a>
              </div>
              <!--/.item-->

              <div class="item">
                <a href="#" class="image">
                  <img
                    data-echo="assets/images/brands/brand4.png"
                    src="assets/images/blank.gif"
                    alt="" />
                </a>
              </div>
              <!--/.item-->

              <div class="item">
                <a href="#" class="image">
                  <img
                    data-echo="assets/images/brands/brand1.png"
                    src="assets/images/blank.gif"
                    alt="" />
                </a>
              </div>
              <!--/.item-->

              <div class="item">
                <a href="#" class="image">
                  <img
                    data-echo="assets/images/brands/brand5.png"
                    src="assets/images/blank.gif"
                    alt="" />
                </a>
              </div>
              <!--/.item-->
            </div>
            <!-- /.owl-carousel #logo-slider -->
          </div>
          <!-- /.logo-slider-inner -->
        </div>
        <!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /#top-banner-and-menu -->

    <!-- ============================================== INFO BOXES ============================================== -->
    <div class="row our-features-box">
      <div class="container">
        <ul>
          <li>
            <div class="feature-box">
              <div class="icon-truck"></div>
              <div class="content-blocks">1 Hari Proses</div>
            </div>
          </li>
          <li>
            <div class="feature-box">
              <div class="icon-support"></div>
              <div class="content-blocks">Hub +62 896 5608 8434</div>
            </div>
          </li>
          <li>
            <div class="feature-box">
              <div class="icon-money"></div>
              <div class="content-blocks">Uang Kembali</div>
            </div>
          </li>

        </ul>
      </div>
    </div>
    <!-- /.info-boxes -->
    <!-- ============================================== INFO BOXES : END ============================================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>

@endsection
