<div class="preloader-wrapper">
    <div class="preloader">
    </div>
</div>

<div class="search-popup">
    <div class="search-popup-container">

        <form role="search" method="get" class="search-form" action="">
            <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value=""
                name="s" />
            <button type="submit" class="search-submit"><a href="#"><i class="icon icon-search"></i></a></button>
        </form>

        <h5 class="cat-list-title">Browse Categories</h5>

        <ul class="cat-list">
            <li class="cat-list-item">
                <a href="/shop" title="Men Jackets">Men Jackets</a>
            </li>
            <li class="cat-list-item">
                <a href="/shop" title="Fashion">Fashion</a>
            </li>
            <li class="cat-list-item">
                <a href="/shop" title="Casual Wears">Casual Wears</a>
            </li>
            <li class="cat-list-item">
                <a href="/shop" title="Women">Women</a>
            </li>
            <li class="cat-list-item">
                <a href="/shop" title="Trending">Trending</a>
            </li>
            <li class="cat-list-item">
                <a href="/shop" title="Hoodie">Hoodie</a>
            </li>
            <li class="cat-list-item">
                <a href="/shop" title="Kids">Kids</a>
            </li>
        </ul>
    </div>
</div>
<header id="header">
    <div id="header-wrap">
        <nav class="secondary-nav border-bottom">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-4 header-contact">
                        <p>Let's talk! <strong><a href="https://wa.me/6281546904824?text=Hai%20saya%20ingin%20bertanya%20dengan%20Arctic%20Food">+62 815 4690 4824</a></strong>
                        </p>
                    </div>
                    <div class="col-md-4 shipping-purchase text-center">
                        <p>Keep It Cool</p>
                    </div>
                    <div class="col-md-4 col-sm-12 user-items">
                        <ul class="d-flex justify-content-end list-unstyled">
                            <li>
                                <a href="/cart">
                                    <i class="icon icon-shopping-cart"></i>
                                </a>
                            </li>
                            <li class="user-items search-item pe-3">
                                <a href="#" class="search-button">
                                    <i class="icon icon-search"></i>
                                </a>
                            </li>
                            <li>
                                @auth
                                    <a href="{{ route('profile') }}">
                                        <i class="icon icon-user"></i>
                                    </a>
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                @endauth
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <nav class="primary-nav padding-small">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-2 col-md-2">
                        <div class="main-logo">
                            <a href="/">
                                <img style="width: 100px" src="../assets/css/images/arcticlogo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <div class="navbar">

                            <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                                <ul class="menu-list">

                                    <li class="menu-item has-sub">
                                        <a href="/" class="item-anchor active d-flex align-item-center"
                                            data-effect="Home">Home</a>
                                        {{-- <ul class="submenu">
                        <li><a href="index.html" class="item-anchor active">Home</a></li>

                      </ul> --}}
                                    </li>



                                    <li class="menu-item has-sub">
                                        <a href="/shop" class="item-anchor d-flex align-item-center"
                                            data-effect="Shop">Shop
                                            <i class="icon icon-chevron-down"></i>
                                        </a>

                                        <ul class="submenu">
                                            <li><a href="/shop" class="item-anchor">Shop</a></li>
                                            <li><a href="/shop" class="item-anchor">Transaction</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="about" class="item-anchor" data-effect="About">About</a>
                                    </li>

                                    </li>

                                    <li><a href="contact" class="item-anchor" data-effect="Contact">Contact</a></li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</header>
