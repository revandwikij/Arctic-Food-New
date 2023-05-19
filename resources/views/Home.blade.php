@extends('layouting.home.master')

@section('title', 'Home')

@section('content')
<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->


              <!-- Coba Coba -->
              {{-- <div class="container">
                <a href="" type="" class="" data-toggle="modal" data-target="#loginModal">
                  Login
                </a>
              </div>

              <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-title text-center">
                        <h4>Login</h4>
                      </div>
                      <div class="d-flex flex-column text-center">
                        <form action="" method="">
                          <div class="form-group">
                            <input type="email" class="form-control" id="email1"placeholder="Your email address...">
                          </div>
                          <div class="form-group">
                            <input type="password" class="form-control" id="password1" placeholder="Your password...">
                          </div>
                          <button type="button" class="btn btn-info btn-block btn-round">Login</button>
                        </form>

                        <div class="text-center text-muted delimiter">or use a social network</div>
                        <div class="d-flex justify-content-center social-buttons">
                          <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="fab fa-twitter"></i>
                          </button>
                          <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="fab fa-facebook"></i>
                          </button>
                          <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <i class="fab fa-linkedin"></i>
                          </button>
                        </di>
                      </div>
                    </div>
                  </div>
                    <div class="modal-footer d-flex justify-content-center">
                      <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
                    </div>
                </div>
              </div> --}}

            </div>
              <!-- /.list-unstyled -->
            </div>
            <!-- /.cnt-cart -->
            <div class="clearfix"></div>
          </div>
          <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.header-top -->
      <!-- ============================================== TOP MENU : END ============================================== -->
      <div class="main-header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
              <!-- ============================================================= LOGO ============================================================= -->
              <div class="logo">
                <a href="/">
                  <img src="assets/images/Go-logo.png" alt="logo" width="300px" />
                </a>
              </div>
              <!-- /.logo -->
              <!-- ============================================================= LOGO : END ============================================================= -->
            </div>
            <!-- /.logo-holder -->

            <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
              <!-- /.contact-row -->
              <!-- ============================================================= SEARCH AREA ============================================================= -->
              <div class="search-area">
                <form>
                  <div class="control-group">
                    <ul class="categories-filter animate-dropdown">
                      <li class="dropdown">
                        <a
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                          href="category.html"
                          >Kategori <b class="caret"></b
                        ></a>
                        <ul class="dropdown-menu" role="menu">
                          <li class="menu-header"></li>
                          <li role="presentation">
                            <a
                              role="menuitem"
                              tabindex="-1"
                              href="category.html"
                              >- Fashion </a
                            >
                          </li>
                          <li role="presentation">
                            <a
                              role="menuitem"
                              tabindex="-1"
                              href="category.html"
                              >- Kuliner </a
                            >
                          {{-- </li>
                          <li role="presentation">
                            <a
                              role="menuitem"
                              tabindex="-1"
                              href="category.html"
                              >- </a
                            >
                          </li>
                          <li role="presentation">
                            <a role="menuitem"tabindex="-1"href="category.html">- </a>
                          </li> --}}
                        </ul>
                      </li>
                    </ul>
                    <input class="search-field" placeholder="Cari disini..." />
                    <a class="search-button" href="#"></a>
                  </div>
                </form>
              </div>
              <!-- /.search-area -->
              <!-- ============================================================= SEARCH AREA : END ============================================================= -->
            </div>
            <!-- /.top-search-holder -->

            <div
              class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row">
              <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

              <div class="dropdown dropdown-cart">
                <a
                  href="#"
                  class="dropdown-toggle lnk-cart"
                  data-toggle="dropdown">
                  <div class="items-cart-inner">
                    <div class="basket">
                      <div class="basket-item-count">
                        <span class="count">2</span>
                      </div>
                      <div class="total-price-basket">

                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <div class="cart-item product-summary">
                      <div class="row">
                        <div class="col-xs-4">
                          <div class="image">
                            <a href="detail.html"
                              ><img src="assets/images/products/p4.jpg" alt=""
                            /></a>
                          </div>
                        </div>
                        <div class="col-xs-7">
                          <h3 class="name">
                            <a href="index8a95.html?page-detail"
                              >Simple Product</a
                            >
                          </h3>
                          <div class="price">$600.00</div>
                        </div>
                        <div class="col-xs-1 action">
                          <a href="#"><i class="fa fa-trash"></i></a>
                        </div>
                      </div>
                    </div>
                    <!-- /.cart-item -->
                    <div class="clearfix"></div>
                    <hr />
                    <div class="clearfix cart-total">
                      <div class="pull-right">
                        <span class="text">Sub Total :</span
                        ><span class="price">$600.00</span>
                      </div>
                      <div class="clearfix"></div>
                      <a
                        href="checkout.html"
                        class="btn btn-upper btn-primary btn-block m-t-20"
                        >Checkout</a
                      >
                    </div>
                    <!-- /.cart-total-->
                  </li>
                </ul>
                <!-- /.dropdown-menu-->
              </div>
              <!-- /.dropdown-cart -->

              <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
            </div>
            <!-- /.top-cart-row -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.main-header -->

      <!-- ============================================== NAVBAR ============================================== -->
      <div class="header-nav animate-dropdown">
        <div class="container">
          <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
              <button
                data-target="#mc-horizontal-menu-collapse"
                data-toggle="collapse"
                class="navbar-toggle collapsed"
                type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span> <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="nav-bg-class">
              <div
                class="navbar-collapse collapse"
                id="mc-horizontal-menu-collapse">
                <div class="nav-outer">
                  <ul class="nav navbar-nav">
                    <li class="active dropdown">
                      <a href="/">Home</a>
                    </li>
                    <li class="dropdown">
                      <a
                        href="#"
                        class="dropdown-toggle"
                        data-hover="dropdown"
                        data-toggle="dropdown"
                        >Pages</a>
                      <ul class="dropdown-menu pages">
                        <li>
                          <div class="yamm-content">
                            <div class="row">
                              <div class="col-xs-12 col-menu">
                                <ul class="links">
                                  <li><a href="/">Home</a></li>
                                  {{-- <li><a href="category.html">Category</a></li> --}}
                                  {{-- <li><a href="shopping-cart.html">Shopping Cart Summary</a></li> --}}
                                  <li><a href="checkout.html">Checkout</a></li>
                                  <li><a href="contact.html">Contact</a></li>
                                  <li><a href="/login"><b>Sign In</b></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown navbar-right special-menu">
                      <a href="#">Get 30% off on selected items</a>
                    </li>
                  </ul>
                  <!-- /.navbar-nav -->
                  <div class="clearfix"></div>
                </div>
                <!-- /.nav-outer -->
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.nav-bg-class -->
          </div>
          <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->
      </div>
      <!-- /.header-nav -->
      <!-- ============================================== NAVBAR : END ============================================== -->
    </header>

    <!-- ============================================== HEADER : END ============================================== -->
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
              <h3 class="section-title">Penawaran Menarik</h3>
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
          <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
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
            <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
              <div class="more-info-tab clearfix">
                <h3 class="new-product-title pull-left">Produk Baru</h3>
                <ul
                  class="nav nav-tabs nav-tab-line pull-right"
                  id="new-products-1">
                  <li class="active">
                    <a
                      data-transition-type="backSlide"
                      href="#all"
                      data-toggle="tab"
                      >Semua</a
                    >
                  </li>
                  <li>
                    <a
                      data-transition-type="backSlide"
                      href="#smartphone"
                      data-toggle="tab"
                      >Baju</a
                    >
                  </li>
                  {{-- <li>
                    <a
                      data-transition-type="backSlide"
                      href="#laptop"
                      data-toggle="tab"
                      >Electronics</a
                    > --}}
                  </li>
                  <li>
                    <a
                      data-transition-type="backSlide"
                      href="#apple"
                      data-toggle="tab"
                      >Sepatu</a
                    >
                  </li>
                </ul>
                <!-- /.nav-tabs -->
              </div>
              <div class="tab-content outer-top-xs">
                <div class="tab-pane in active" id="all">
                  <div class="product-slider">
                    <div
                      class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p1.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p1_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag new"><span>new</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button
                                      data-toggle="tooltip"
                                      class="btn btn-primary icon"
                                      type="button"
                                      title="Add Cart">
                                      <i class="fa fa-shopping-cart"></i>
                                    </button>
                                    <button
                                      class="btn btn-primary cart-btn"
                                      type="button">
                                      Add to cart
                                    </button>
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      data-toggle="tooltip"
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      data-toggle="tooltip"
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p4.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p4_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p3.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p3_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag sale"><span>sale</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p2.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p2_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p6.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p6_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag hot"><span>hot</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p5.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p5_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag new"><span>new</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                  </div>
                  <!-- /.product-slider -->
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="smartphone">
                  <div class="product-slider">
                    <div
                      class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p7.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p7_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag sale"><span>sale</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p8.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p8_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag new"><span>new</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p9.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p9_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag sale"><span>sale</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p10.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p10_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag new"><span>new</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p11.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p11_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag hot"><span>hot</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p12.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p12_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag hot"><span>hot</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                  </div>
                  <!-- /.product-slider -->
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="laptop">
                  <div class="product-slider">
                    <div
                      class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p15.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p15_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag new"><span>new</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p2.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p2_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag new"><span>new</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p8.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p8_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag sale"><span>sale</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="image">
                              <a href="detail.html">
                                <img
                                  src="assets/images/products/p14.jpg"
                                  alt="" />
                                <img
                                  src="assets/images/products/p14_hover.jpg"
                                  alt=""
                                  class="hover-image" />
                              </a>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p12.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p12_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag hot"><span>hot</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p9.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p9_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag sale"><span>sale</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Apple Iphone 5s 32GB</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                  </div>
                  <!-- /.product-slider -->
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="apple">
                  <div class="product-slider">
                    <div
                      class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p13.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p13_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag sale"><span>sale</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p11.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p11_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag hot"><span>hot</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p4.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p4_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag sale"><span>sale</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p1.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p1_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag new"><span>new</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p10.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p10_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag new"><span>new</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Floral Print Buttoned</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->

                      <div class="item item-carousel">
                        <div class="products">
                          <div class="product">
                            <div class="product-image">
                              <div class="image">
                                <a href="detail.html">
                                  <img
                                    src="assets/images/products/p6.jpg"
                                    alt="" />
                                  <img
                                    src="assets/images/products/p6_hover.jpg"
                                    alt=""
                                    class="hover-image" />
                                </a>
                              </div>
                              <!-- /.image -->

                              <div class="tag hot"><span>hot</span></div>
                            </div>
                            <!-- /.product-image -->

                            <div class="product-info text-left">
                              <h3 class="name">
                                <a href="detail.html">Samsung Galaxy S4</a>
                              </h3>
                              <div class="rating rateit-small"></div>
                              <div class="description"></div>
                              <div class="product-price">
                                <span class="price"> $450.99 </span>
                                <span class="price-before-discount">$ 800</span>
                              </div>
                              <!-- /.product-price -->
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                              <div class="action">
                                <ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
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
                                  </li>
                                  <li class="lnk wishlist">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Wishlist">
                                      <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a
                                      class="add-to-cart"
                                      href="detail.html"
                                      title="Compare">
                                      <i
                                        class="fa fa-signal"
                                        aria-hidden="true"></i>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                              <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                          </div>
                          <!-- /.product -->
                        </div>
                        <!-- /.products -->
                      </div>
                      <!-- /.item -->
                    </div>
                    <!-- /.home-owl-carousel -->
                  </div>
                  <!-- /.product-slider -->
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
            <!-- /.scroll-tabs -->
            <!-- ============================================== SCROLL TABS : END ============================================== -->
            <!-- ============================================== WIDE PRODUCTS ============================================== -->
            <div class="wide-banners outer-bottom-xs">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img
                        class="img-responsive"
                        src="assets/images/banners/home-banner1.jpg"
                        alt="" />
                    </div>
                  </div>
                  <!-- /.wide-banner -->
                </div>

                <div class="col-md-4 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img
                        class="img-responsive"
                        src="assets/images/banners/home-banner3.jpg"
                        alt="" />
                    </div>
                  </div>
                  <!-- /.wide-banner -->
                </div>

                <!-- /.col -->
                <div class="col-md-4 col-sm-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img
                        class="img-responsive"
                        src="assets/images/banners/home-banner2.jpg"
                        alt="" />
                    </div>
                  </div>
                  <!-- /.wide-banner -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.wide-banners -->

            <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
            <!-- ============================================== FEATURED PRODUCTS ============================================== -->
            <section class="section featured-product">
              <div class="row">
                {{-- <div class="col-lg-3">
                  <h3 class="section-title">Electronics & Digital</h3>
                  <ul class="sub-cat">
                    <li><a href="#">Computers</a></li>
                    <li><a href="#">Air Condtion</a></li>
                    <li><a href="#">Mobile Phones</a></li>
                    <li><a href="#">Camera</a></li>
                    <li><a href="#">Television</a></li>
                    <li><a href="#">Sound & Speakers</a></li>
                    <li><a href="#">Games & Audio Music</a></li>
                    <li><a href="#">Digital Watches</a></li>
                    <li><a href="#">Washing Machines</a></li>
                    <li><a href="#">Office Electronics</a></li>
                  </ul>
                </div> --}}
                <div class="col-lg-9">
                  <div
                    class="owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs">
                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="detail.html">
                                <img
                                  src="assets/images/products/p13.jpg"
                                  alt="" />
                                <img
                                  src="assets/images/products/p13_hover.jpg"
                                  alt=""
                                  class="hover-image" />
                              </a>
                            </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="detail.html">Floral Print Buttoned</a>
                            </h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price">
                              <span class="price"> $450.99 </span>
                              <span class="price-before-discount">$ 800</span>
                            </div>
                            <!-- /.product-price -->
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
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
                                </li>
                                <li class="lnk wishlist">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                  </a>
                                </li>
                                <li class="lnk">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Compare">
                                    <i
                                      class="fa fa-signal"
                                      aria-hidden="true"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->
                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="detail.html">
                                <img
                                  src="assets/images/products/p15.jpg"
                                  alt="" />
                                <img
                                  src="assets/images/products/p15_hover.jpg"
                                  alt=""
                                  class="hover-image" />
                              </a>
                            </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="detail.html">Floral Print Buttoned</a>
                            </h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price">
                              <span class="price"> $450.99 </span>
                              <span class="price-before-discount">$ 800</span>
                            </div>
                            <!-- /.product-price -->
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
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
                                </li>
                                <li class="lnk wishlist">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                  </a>
                                </li>
                                <li class="lnk">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Compare">
                                    <i
                                      class="fa fa-signal"
                                      aria-hidden="true"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->
                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="detail.html">
                                <img
                                  src="assets/images/products/p10.jpg"
                                  alt="" />
                                <img
                                  src="assets/images/products/p10_hover.jpg"
                                  alt=""
                                  class="hover-image" />
                              </a>
                            </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="detail.html">Floral Print Buttoned</a>
                            </h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price">
                              <span class="price"> $450.99 </span>
                              <span class="price-before-discount">$ 800</span>
                            </div>
                            <!-- /.product-price -->
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
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
                                </li>
                                <li class="lnk wishlist">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                  </a>
                                </li>
                                <li class="lnk">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Compare">
                                    <i
                                      class="fa fa-signal"
                                      aria-hidden="true"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->
                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="detail.html">
                                <img
                                  src="assets/images/products/p11.jpg"
                                  alt="" />
                                <img
                                  src="assets/images/products/p11_hover.jpg"
                                  alt=""
                                  class="hover-image" />
                              </a>
                            </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="detail.html">Floral Print Buttoned</a>
                            </h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price">
                              <span class="price"> $450.99 </span>
                              <span class="price-before-discount">$ 800</span>
                            </div>
                            <!-- /.product-price -->
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
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
                                </li>
                                <li class="lnk wishlist">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                  </a>
                                </li>
                                <li class="lnk">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Compare">
                                    <i
                                      class="fa fa-signal"
                                      aria-hidden="true"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->
                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="detail.html">
                                <img
                                  src="assets/images/products/p8.jpg"
                                  alt="" />
                                <img
                                  src="assets/images/products/p8_hover.jpg"
                                  alt=""
                                  class="hover-image" />
                              </a>
                            </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="detail.html">Floral Print Buttoned</a>
                            </h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price">
                              <span class="price"> $450.99 </span>
                              <span class="price-before-discount">$ 800</span>
                            </div>
                            <!-- /.product-price -->
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
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
                                </li>
                                <li class="lnk wishlist">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                  </a>
                                </li>
                                <li class="lnk">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Compare">
                                    <i
                                      class="fa fa-signal"
                                      aria-hidden="true"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->
                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->

                    <div class="item item-carousel">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="detail.html">
                                <img
                                  src="assets/images/products/p7.jpg"
                                  alt="" />
                                <img
                                  src="assets/images/products/p7_hover.jpg"
                                  alt=""
                                  class="hover-image" />
                              </a>
                            </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                          </div>
                          <!-- /.product-image -->

                          <div class="product-info text-left">
                            <h3 class="name">
                              <a href="detail.html">Floral Print Buttoned</a>
                            </h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price">
                              <span class="price"> $450.99 </span>
                              <span class="price-before-discount">$ 800</span>
                            </div>
                            <!-- /.product-price -->
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
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
                                </li>
                                <li class="lnk wishlist">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                  </a>
                                </li>
                                <li class="lnk">
                                  <a
                                    class="add-to-cart"
                                    href="detail.html"
                                    title="Compare">
                                    <i
                                      class="fa fa-signal"
                                      aria-hidden="true"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
                            <!-- /.action -->
                          </div>
                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->
                      </div>
                      <!-- /.products -->
                    </div>
                    <!-- /.item -->
                  </div>
                </div>
              </div>
              <!-- /.home-owl-carousel -->
            </section>
            <!-- /.section -->
            <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
            <!-- ============================================== WIDE PRODUCTS ============================================== -->
            <div class="wide-banners outer-bottom-xs">
              <div class="row">
                <div class="col-md-8">
                  <div class="wide-banner1 cnt-strip">
                    <div class="image">
                      <img
                        class="img-responsive"
                        src="assets/images/banners/home-banner.jpg"
                        alt="" />
                    </div>
                    <div class="strip strip-text">
                      <div class="strip-inner">
                        <h2 class="text-right">
                          Amazing Sunglasses<br />
                          <span class="shopping-needs"
                            >Get 40% off on selected items</span
                          >
                        </h2>
                      </div>
                    </div>
                    <div class="new-label">
                      <div class="text">NEW</div>
                    </div>
                    <!-- /.new-label -->
                  </div>
                  <!-- /.wide-banner -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <div class="wide-banner cnt-strip">
                    <div class="image">
                      <img
                        class="img-responsive"
                        src="assets/images/banners/home-banner4.jpg"
                        alt="" />
                    </div>

                    <!-- /.new-label -->
                  </div>
                  <!-- /.wide-banner -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.wide-banners -->
            <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

            <!-- /.sidebar-widget -->
            <!-- ============================================== BEST SELLER : END ============================================== -->

            <!-- ============================================== BLOG SLIDER ============================================== -->
            <section class="section latest-blog outer-bottom-vs">
              <h3 class="section-title">Berita Terbaru</h3>
              <div class="blog-slider-container outer-top-xs">
                <div class="owl-carousel blog-slider custom-carousel">
                  <div class="item">
                    <div class="blog-post">
                      <div class="blog-post-image">
                        <div class="image">
                          <a href="blog.html"
                            ><img
                              src="assets/images/blog-post/blog_big_01.jpg"
                              alt=""
                          /></a>
                        </div>
                      </div>
                      <!-- /.blog-post-image -->

                      <div class="blog-post-info text-left">
                        <h3 class="name">
                          <a href="#"
                            >Voluptatem accusantium doloremque laudantium</a
                          >
                        </h3>
                        <span class="info"
                          >By Jone Doe &nbsp;|&nbsp; 21 March 2016
                        </span>
                        <p class="text">
                          Sed quia non numquam eius modi tempora incidunt ut
                          labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                      </div>
                      <!-- /.blog-post-info -->
                    </div>
                    <!-- /.blog-post -->
                  </div>
                  <!-- /.item -->

                  <div class="item">
                    <div class="blog-post">
                      <div class="blog-post-image">
                        <div class="image">
                          <a href="blog.html"
                            ><img
                              src="assets/images/blog-post/blog_big_02.jpg"
                              alt=""
                          /></a>
                        </div>
                      </div>
                      <!-- /.blog-post-image -->

                      <div class="blog-post-info text-left">
                        <h3 class="name">
                          <a href="#"
                            >Dolorem eum fugiat quo voluptas nulla pariatur</a
                          >
                        </h3>
                        <span class="info"
                          >By Saraha Smith &nbsp;|&nbsp; 21 March 2016
                        </span>
                        <p class="text">
                          Sed quia non numquam eius modi tempora incidunt ut
                          labore et dolore magnam aliquam quaerat voluptatem.
                        </p>
                      </div>
                      <!-- /.blog-post-info -->
                    </div>
                    <!-- /.blog-post -->
                  </div>
                  <!-- /.item -->

                  <!-- /.item -->

                  <div class="item">
                    <div class="blog-post">
                      <div class="blog-post-image">
                        <div class="image">
                          <a href="blog.html"
                            ><img
                              src="assets/images/blog-post/blog_big_03.jpg"
                              alt=""
                          /></a>
                        </div>
                      </div>
                      <!-- /.blog-post-image -->

                      <div class="blog-post-info text-left">
                        <h3 class="name">
                          <a href="#"
                            >Dolorem eum fugiat quo voluptas nulla pariatur</a
                          >
                        </h3>
                        <span class="info"
                          >By Saraha Smith &nbsp;|&nbsp; 21 March 2016
                        </span>
                        <p class="text">
                          Sed ut perspiciatis unde omnis iste natus error sit
                          voluptatem accusantium
                        </p>
                      </div>
                      <!-- /.blog-post-info -->
                    </div>
                    <!-- /.blog-post -->
                  </div>
                  <!-- /.item -->

                  <div class="item">
                    <div class="blog-post">
                      <div class="blog-post-image">
                        <div class="image">
                          <a href="blog.html"
                            ><img
                              src="assets/images/blog-post/blog_big_01.jpg"
                              alt=""
                          /></a>
                        </div>
                      </div>
                      <!-- /.blog-post-image -->

                      <div class="blog-post-info text-left">
                        <h3 class="name">
                          <a href="#"
                            >Dolorem eum fugiat quo voluptas nulla pariatur</a
                          >
                        </h3>
                        <span class="info"
                          >By Saraha Smith &nbsp;|&nbsp; 21 March 2016
                        </span>
                        <p class="text">
                          Sed ut perspiciatis unde omnis iste natus error sit
                          voluptatem accusantium
                        </p>
                      </div>
                      <!-- /.blog-post-info -->
                    </div>
                    <!-- /.blog-post -->
                  </div>
                  <!-- /.item -->

                  <div class="item">
                    <div class="blog-post">
                      <div class="blog-post-image">
                        <div class="image">
                          <a href="blog.html"
                            ><img
                              src="assets/images/blog-post/blog_big_02.jpg"
                              alt=""
                          /></a>
                        </div>
                      </div>
                      <!-- /.blog-post-image -->

                      <div class="blog-post-info text-left">
                        <h3 class="name">
                          <a href="#"
                            >Dolorem eum fugiat quo voluptas nulla pariatur</a
                          >
                        </h3>
                        <span class="info"
                          >By Saraha Smith &nbsp;|&nbsp; 21 March 2017
                        </span>
                        <p class="text">
                          Sed ut perspiciatis unde omnis iste natus error sit
                          voluptatem accusantium
                        </p>
                      </div>
                      <!-- /.blog-post-info -->
                    </div>
                    <!-- /.blog-post -->
                  </div>
                  <!-- /.item -->
                </div>
                <!-- /.owl-carousel -->
              </div>
              <!-- /.blog-slider-container -->
            </section>
            <!-- /.section -->
            <!-- ============================================== BLOG SLIDER : END ============================================== -->

            <!-- ============================================== FEATURED PRODUCTS ============================================== -->
            <section class="section new-arriavls">
              <h3 class="section-title">Produk Unggulan</h3>
              <div
                class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image">
                          <a href="detail.html">
                            <img src="assets/images/products/p10.jpg" alt="" />
                            <img
                              src="assets/images/products/p10_hover.jpg"
                              alt=""
                              class="hover-image" />
                          </a>
                        </div>
                        <!-- /.image -->

                        <div class="tag new"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->

                      <div class="product-info text-left">
                        <h3 class="name">
                          <a href="detail.html">Floral Print Buttoned</a>
                        </h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price">
                          <span class="price"> $450.99 </span>
                          <span class="price-before-discount">$ 800</span>
                        </div>
                        <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
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
                            </li>
                            <li class="lnk wishlist">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Wishlist">
                                <i class="icon fa fa-heart"></i>
                              </a>
                            </li>
                            <li class="lnk">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Compare">
                                <i class="fa fa-signal" aria-hidden="true"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                    </div>
                    <!-- /.product -->
                  </div>
                  <!-- /.products -->
                </div>
                <!-- /.item -->

                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image">
                          <a href="detail.html">
                            <img src="assets/images/products/p2.jpg" alt="" />
                            <img
                              src="assets/images/products/p2_hover.jpg"
                              alt=""
                              class="hover-image" />
                          </a>
                        </div>
                        <!-- /.image -->

                        <div class="tag new"><span>new</span></div>
                      </div>
                      <!-- /.product-image -->

                      <div class="product-info text-left">
                        <h3 class="name">
                          <a href="detail.html">Floral Print Buttoned</a>
                        </h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price">
                          <span class="price"> $450.99 </span>
                          <span class="price-before-discount">$ 800</span>
                        </div>
                        <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
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
                            </li>
                            <li class="lnk wishlist">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Wishlist">
                                <i class="icon fa fa-heart"></i>
                              </a>
                            </li>
                            <li class="lnk">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Compare">
                                <i class="fa fa-signal" aria-hidden="true"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                    </div>
                    <!-- /.product -->
                  </div>
                  <!-- /.products -->
                </div>
                <!-- /.item -->

                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image">
                          <a href="detail.html">
                            <img src="assets/images/products/p3.jpg" alt="" />
                            <img
                              src="assets/images/products/p3_hover.jpg"
                              alt=""
                              class="hover-image" />
                          </a>
                        </div>
                        <!-- /.image -->

                        <div class="tag hot"><span>hot</span></div>
                      </div>
                      <!-- /.product-image -->

                      <div class="product-info text-left">
                        <h3 class="name">
                          <a href="detail.html">Floral Print Buttoned</a>
                        </h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price">
                          <span class="price"> $450.99 </span>
                          <span class="price-before-discount">$ 800</span>
                        </div>
                        <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
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
                            </li>
                            <li class="lnk wishlist">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Wishlist">
                                <i class="icon fa fa-heart"></i>
                              </a>
                            </li>
                            <li class="lnk">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Compare">
                                <i class="fa fa-signal" aria-hidden="true"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                    </div>
                    <!-- /.product -->
                  </div>
                  <!-- /.products -->
                </div>
                <!-- /.item -->

                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image">
                          <a href="detail.html">
                            <img src="assets/images/products/p1.jpg" alt="" />
                            <img
                              src="assets/images/products/p1_hover.jpg"
                              alt=""
                              class="hover-image" />
                          </a>
                        </div>
                        <!-- /.image -->

                        <div class="tag hot"><span>hot</span></div>
                      </div>
                      <!-- /.product-image -->

                      <div class="product-info text-left">
                        <h3 class="name">
                          <a href="detail.html">Floral Print Buttoned</a>
                        </h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price">
                          <span class="price"> $450.99 </span>
                          <span class="price-before-discount">$ 800</span>
                        </div>
                        <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
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
                            </li>
                            <li class="lnk wishlist">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Wishlist">
                                <i class="icon fa fa-heart"></i>
                              </a>
                            </li>
                            <li class="lnk">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Compare">
                                <i class="fa fa-signal" aria-hidden="true"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                    </div>
                    <!-- /.product -->
                  </div>
                  <!-- /.products -->
                </div>
                <!-- /.item -->

                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image">
                          <a href="detail.html">
                            <img src="assets/images/products/p7.jpg" alt="" />
                            <img
                              src="assets/images/products/p7_hover.jpg"
                              alt=""
                              class="hover-image" />
                          </a>
                        </div>
                        <!-- /.image -->

                        <div class="tag sale"><span>sale</span></div>
                      </div>
                      <!-- /.product-image -->

                      <div class="product-info text-left">
                        <h3 class="name">
                          <a href="detail.html">Floral Print Buttoned</a>
                        </h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price">
                          <span class="price"> $450.99 </span>
                          <span class="price-before-discount">$ 800</span>
                        </div>
                        <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
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
                            </li>
                            <li class="lnk wishlist">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Wishlist">
                                <i class="icon fa fa-heart"></i>
                              </a>
                            </li>
                            <li class="lnk">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Compare">
                                <i class="fa fa-signal" aria-hidden="true"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                    </div>
                    <!-- /.product -->
                  </div>
                  <!-- /.products -->
                </div>
                <!-- /.item -->

                <div class="item item-carousel">
                  <div class="products">
                    <div class="product">
                      <div class="product-image">
                        <div class="image">
                          <a href="detail.html">
                            <img src="assets/images/products/p9.jpg" alt="" />
                            <img
                              src="assets/images/products/p9_hover.jpg"
                              alt=""
                              class="hover-image" />
                          </a>
                        </div>
                        <!-- /.image -->

                        <div class="tag sale"><span>sale</span></div>
                      </div>
                      <!-- /.product-image -->

                      <div class="product-info text-left">
                        <h3 class="name">
                          <a href="detail.html">Floral Print Buttoned</a>
                        </h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>
                        <div class="product-price">
                          <span class="price"> $450.99 </span>
                          <span class="price-before-discount">$ 800</span>
                        </div>
                        <!-- /.product-price -->
                      </div>
                      <!-- /.product-info -->
                      <div class="cart clearfix animate-effect">
                        <div class="action">
                          <ul class="list-unstyled">
                            <li class="add-cart-button btn-group">
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
                            </li>
                            <li class="lnk wishlist">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Wishlist">
                                <i class="icon fa fa-heart"></i>
                              </a>
                            </li>
                            <li class="lnk">
                              <a
                                class="add-to-cart"
                                href="detail.html"
                                title="Compare">
                                <i class="fa fa-signal" aria-hidden="true"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <!-- /.action -->
                      </div>
                      <!-- /.cart -->
                    </div>
                    <!-- /.product -->
                  </div>
                  <!-- /.products -->
                </div>
                <!-- /.item -->
              </div>
              <!-- /.home-owl-carousel -->
            </section>
            <!-- /.section -->
            <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
          </div>
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

    <!-- ============================================================= FOOTER ============================================================= -->

                <div class="module-body">
                  <ul class="toggle-footer" style"">
                    <li class="media">
                      <div class="pull-left">
                        <span class="icon fa-stack fa-lg">
                          <i
                            class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                        </span>
                      </div>
                      <div class="media-body">
                        <p>ThemesGround, 789 Main rd, Anytown, CA 12345 USA</p>
                      </div>
                    </li>
                    <li class="media">
                      <div class="pull-left">
                        <span class="icon fa-stack fa-lg">
                          <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                        </span>
                      </div>
                      <div class="media-body">
                        <p>+ (888) 123-4567 / + (888) 456-7890</p>
                      </div>
                    </li>
                    <li class="media">
                      <div class="pull-left">
                        <span class="icon fa-stack fa-lg">
                          <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                      </div>
                      <div class="media-body">
                        <span><a href="#">marazzo@themesground.com</a></span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /.module-body -->
            </div>
            <!-- /.col -->

            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="module-heading">
                <h4 class="module-title">Customer Service</h4>
              </div>
              <!-- /.module-heading -->

              <div class="module-body">
                <ul class="list-unstyled">
                  <li class="first">
                    <a href="#" title="Contact us">My Account</a>
                  </li>
                  <li><a href="#" title="About us">Order History</a></li>
                  <li><a href="#" title="faq">FAQ</a></li>
                  <li><a href="#" title="Popular Searches">Specials</a></li>
                  <li class="last">
                    <a href="#" title="Where is my order?">Help Center</a>
                  </li>
                </ul>
              </div>
              <!-- /.module-body -->
            </div>
            <!-- /.col -->

            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="module-heading">
                <h4 class="module-title">Corporation</h4>
              </div>
              <!-- /.module-heading -->

              <div class="module-body">
                <ul class="list-unstyled">
                  <li class="first">
                    <a title="Your Account" href="#">About us</a>
                  </li>
                  <li><a title="Information" href="#">Customer Service</a></li>
                  <li><a title="Addresses" href="#">Company</a></li>
                  <li><a title="Addresses" href="#">Investor Relations</a></li>
                  <li class="last">
                    <a title="Orders History" href="#">Advanced Search</a>
                  </li>
                </ul>
              </div>
              <!-- /.module-body -->
            </div>
            <!-- /.col -->

            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="module-heading">
                <h4 class="module-title">Why Choose Us</h4>
              </div>
              <!-- /.module-heading -->

              <div class="module-body">
                <ul class="list-unstyled">
                  <li class="first">
                    <a href="#" title="About us">Shopping Guide</a>
                  </li>
                  <li><a href="#" title="Blog">Blog</a></li>
                  <li><a href="#" title="Company">Company</a></li>
                  <li>
                    <a href="#" title="Investor Relations"
                      >Investor Relations</a
                    >
                  </li>
                  <li class="last">
                    <a href="contact-us.html" title="Suppliers">Contact Us</a>
                  </li>
                </ul>
              </div>
              <!-- /.module-body -->
            </div>
          </div>
        </div>
      </div>
      <div class="copyright-bar">
        <div class="container">
          <div class="col-xs-12 col-sm-4 no-padding social">
            <ul class="link">
              <li class="fb pull-left">
                <a target="_blank" rel="nofollow" href="#" title="Facebook"></a>
              </li>
              <li class="tw pull-left">
                <a target="_blank" rel="nofollow" href="#" title="Twitter"></a>
              </li>
              <li class="googleplus pull-left">
                <a
                  target="_blank"
                  rel="nofollow"
                  href="#"
                  title="GooglePlus"></a>
              </li>
              <li class="rss pull-left">
                <a target="_blank" rel="nofollow" href="#" title="RSS"></a>
              </li>
              <li class="pintrest pull-left">
                <a
                  target="_blank"
                  rel="nofollow"
                  href="#"
                  title="PInterest"></a>
              </li>
              <li class="linkedin pull-left">
                <a target="_blank" rel="nofollow" href="#" title="Linkedin"></a>
              </li>
              <li class="youtube pull-left">
                <a target="_blank" rel="nofollow" href="#" title="Youtube"></a>
              </li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 no-padding copyright">
            <a target="_blank" href="https://www.templateshub.net"
              >Templates Hub</a
            >
          </div>
          <div class="col-xs-12 col-sm-4 no-padding">
            <div class="clearfix payment-methods">
              <ul>
                <li><img src="assets/images/payments/1.png" alt="" /></li>
                <li><img src="assets/images/payments/2.png" alt="" /></li>
                <li><img src="assets/images/payments/3.png" alt="" /></li>
                <li><img src="assets/images/payments/4.png" alt="" /></li>
                <li><img src="assets/images/payments/5.png" alt="" /></li>
              </ul>
            </div>
            <!-- /.payment-methods -->
          </div>
        </div>
      </div>
    </footer>
    <!-- ============================================================= FOOTER : END============================================================= -->

    <!-- For demo purposes – can be removed on production -->

    <!-- For demo purposes – can be removed on production : End -->


  </body>
@endsection
