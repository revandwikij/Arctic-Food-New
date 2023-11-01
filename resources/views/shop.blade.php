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
                            <li data-tab-target="#all" class="tab" active>All</li>
                            @foreach ($kategoris as $item)
                                <li data-tab-target="#{{ $item->Kategori }}" class="tab">{{ $item->Kategori }}</li>
                            @endforeach
                        </ul>

                        {{-- @foreach ($kategoris as $kategori)
                        <div id="{{ $kategori->Kategori }}" class="barang-container" style="display: none;">
                            @foreach ($barang as $data)
                                @if ($data->Kategori === $kategori->Kategori)
                                <div class="product-item col-lg-4 col-md-6 col-sm-6 barang-item">
                                    <div class="image-holder">
                                        @if ($data->Foto_Barang)
                                            <img src="{{ asset('uploads/' . $data->Foto_Barang) }}"
                                                alt="{{ $data->Nama_Barang }}" class="product-image">
                                        @endif
                                    </div>
                                    <div class="cart-concern">
                                        <div class="cart-button d-flex justify-content-between align-items-center">
                                            <button type="button" class="btn-wrap cart-link d-flex align-items-center">add
                                                to cart <i class="icon icon-arrow-io"></i>
                                            </button>
                                            <button type="button" class="view-btn tooltip d-flex">
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
                                @endif
                            @endforeach
                        </div>
                    @endforeach --}}
                    @foreach ($barang as $data)
                    <div id="barang-list">
                        <div class="barang-container">
                                <div class="product-item col-lg-4 col-md-6 col-sm-6 barang-item">
                                    <div class="image-holder">
                                        @if ($data->Foto_Barang)
                                            <img src="{{ asset('uploads/' . $data->Foto_Barang) }}"
                                                alt="{{ $data->Nama_Barang }}" class="product-image">
                                        @endif
                                    </div>
                                    <div class="cart-concern">
                                        <div class="cart-button d-flex justify-content-between align-items-center">
                                            <a href="/single/{{ $data->Id_Barang }}" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i></button>



                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <h3 class="product-title">
                                            <a href="/single/{{$data->Id_Barang}}">{{ $data->Nama_Barang }}</a>
                                        </h3>
                                        <div class="item-price text-primary">{{ $data->Harga }}</div>
                                    </div>
                                </div>
                            </div>
                    </div>
                            @endforeach


                        {{-- @foreach ($barang as $item)
                            <div class="barang-item">
                                <!-- Tampilkan informasi barang di sini -->
                                <h3>{{ $item->nama }}</h3>
                                <p>{{ $item->deskripsi }}</p>
                            </div>
                            @endforeach --}}
                        {{-- <div class="tab-content">
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
                        </div> --}}
                        {{-- <nav class="navigation paging-navigation text-center padding-medium" role="navigation">
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
                        </nav> --}}
                    </div>

                </section>

                <aside class="col-md-3">
                    <div class="sidebar">
                        <div class="widgets widget-menu">
                            <div class="widget-search-bar">
                                <form action="/shop/search" role="search" method="get" class="d-flex">
                                    <input class="search-field" placeholder="Search" name="cari" type="text">
                                    <button type="submit" class="btn btn-dark"><i class="icon icon-search"></i></button>
                                </form>
                            </div>
                        </div>
                        {{-- <div class="widgets widget-product-tags">
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
                        </div> --}}



                        <div class="widgets widget-product-brands">
                            <form action="/shop/result" method="GET">
                                {{ csrf_field() }}
                               <h5> <label for="kategori" class="widget-title">Pilih Kategori:</label></h5>
                                <select name="kategori" id="kategori">
                                    @foreach($kategoris as $kategori)
                                    <option value="{{$kategori->Id_Kategori}}">{{$kategori->Kategori}}</option>
                                     @endforeach
                                 </select>
                                <button type="submit">Filter</button>
                            </form>
                            {{-- <h5 class="widget-title">Kategori</h5>
                            <select id="kategori-filter">
                                <option value="">Semua Kategori</option>

                                    <option value="{{ $kategori->Id_Kategori }}">{{ $kategori->Kategori }}</option>

                            </select> --}}
                        </div>



                        <div class="widgets widget-price-filter">
                            <h5 class="widget-title">Filter By Price</h5>
                            <form method="GET" action="/shop/price/">
                                <label for="min_harga">Harga Minimum:</label>
                               Rp.<input type="text" name="min_harga" id="min_harga">

                                <label for="max_harga">Harga Maksimum:</label>
                              Rp.<input type="text" name="max_harga" id="max_harga">

                                <button type="submit">Filter</button>
                            </form>
                            {{-- <ul class="product-tags sidebar-list list-unstyled">
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
                            </ul> --}}
                        </div>


                    </div>
                </aside>

            </div>
        </div>
    </div>
    {{ $barang->links() }}
    <hr>

    <section id="brand-collection" class="padding-medium bg-light-grey">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between">
                <img src="../assets/css/images/Lfiesta.png" alt="phone" class="brand-image">
                <img src="../assets/css/images/Lsogood.png" alt="phone" class="brand-image">
                <img src="../assets/css/images/Lkanzler.png" alt="phone" class="brand-image">
                <img src="../assets/css/images/Lbellfood.png" alt="phone" class="brand-image">
                <img src="../assets/css/images/Lsunny.png" alt="phone" class="brand-image">
            </div>
        </div>
    </section>

    <section id="instagram" class="padding-large">
        {{-- <div class="container">
            <div class="section-header">
                <h2 class="section-title">Follow our instagram</h2>
            </div>
            <p>Our official Instagram account <a href="#">@ultras</a> or <a href="#">#ultras_clothing</a>
            </p>
            <div class="row d-flex flex-wrap justify-content-between">
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <img src="../assets/css/images/rep.jpg" alt="instagram" class="insta-image">
                    <figure class="zoom-effect">
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
        </div> --}}
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

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
    // Tambahkan event listener untuk perubahan pada dropdown
    $('#kategori-filter').on('change', function () {
        var selectedKategori = $(this).val();

        // Kirim permintaan AJAX untuk memfilter barang berdasarkan kategori
        $.ajax({
            type: 'GET',
            url: '/filter-barang/' + selectedKategori,
            success: function (data) {
                // Perbarui tampilan dengan data barang hasil filter
                $('#barang-list').html(data);
            }
        });
    });
});
</script> --}}
    {{-- <script>
        $(".widgets widget-product-brands li").on('click', function ()
        {
            $(".widgets widget-product-brands li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');

            $(".widgets widget-product-brands").isotope({
                filter: selector,
            });
        });
    </script> --}}

{{--
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.tab');
    const barangContainers = document.querySelectorAll('.barang-container');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove 'active' class from all tabs and hide all product containers
            tabs.forEach(t => t.classList.remove('active'));
            barangContainers.forEach(container => container.style.display = 'none');

            // Add 'active' class to the clicked tab and display the corresponding products
            tab.classList.add('active');
            const target = document.querySelector(tab.dataset.tabTarget);
            if (target) {
                target.style.display = 'block';
            }
        });
    });
});
    </script> --}}
@endsection
