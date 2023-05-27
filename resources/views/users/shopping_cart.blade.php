@extends('layouting.home.master')

@section('title', 'Cart')

@section('content')
<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->

    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="/ ">Dasboard</a></li>
                    <li class='active'>Keranjang</li>
                </ul>
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row ">
                <div class="shopping-cart">
                    <div class="shopping-cart-table ">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="cart-romove item">Hapus</th>
                        <th class="cart-description item">Foto Barang</th>
                        <th class="cart-product-name item">Nama</th>
                        {{-- <th class="cart-edit item">Edit</th> --}}
                        <th class="cart-qty item">Quantity</th>
                        <th class="cart-sub-total item">Subtotal</th>
                        <th class="cart-total last-item">Total</th>
                    </tr>
                </thead><!-- /thead -->

                <tbody>
                    @foreach ($barang as $b)
                    <tr>
                        <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                        <td class="cart-image">
                            @if ($b->Foto_Barang)
                                <a class="entry-thumbnail" href="detail.html">
                                    <img style="max-width: 100px; max-height:100px" src="{{ url('Foto_barang'). '/'. $b->Foto_Barang }}">
                                </a>
                            @endif
                            {{-- <a class="entry-thumbnail" href="detail.html">
                                <img src="{{ $b->Foto_Barang }}" alt="">
                            </a> --}}
                        </td>
                        <td class="cart-product-name-info">
                            <h4 class='cart-product-description'><a href="detail.html">{{ $b->Nama_Barang }}</a></h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="rating rateit-small"></div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="reviews">
                                        (06 Reviews)
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </td>
                        <td class="cart-product-quantity">
                            <div class="quant-input">
                                    <div class="arrows">
                                      <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                      <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                    </div>
                                    <input type="text" value="1">
                              </div>
                        </td>
                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{ $b->Harga }}</span></td>
                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">{{ $b->Harga }}</span></td>
                    </tr>
                    @endforeach
                </tbody><!-- /tbody -->

                <tfoot>
                    <tr>
                        <td colspan="7">

                            <!-- /.shopping-cart-btn -->
                        </td>
                    </tr>
                </tfoot>
            </table><!-- /table -->
        </div>
    </div><!-- /.shopping-cart-table -->


    <div class=" col-sm-12 fixed-bottom cart-shopping-total ">
        <table class="table">
            <div class="shopping-cart-btn">
                <span class="">
                    <a href="/  " class="btn btn-upper btn-primary outer-left-xs">Kembali Belanja</a>
                    {{-- <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs"> CHECKOUT</a> --}}
                </span>
            </div>
            <thead>
                <tr>
                    <th>
                        <div class="cart-sub-total  ">
                            Subtotal<span class="inner-left-md">Rp. 90.000</span>
                        </div>
                        <div class="cart-grand-total ">
                            Total<span class="inner-left-md">Rp. 90.000</span>
                        </div>
                    </th>
                </tr>
            </thead><!-- /thead -->
            <tbody>
                    <tr>
                        <td>
                            <div class="cart-checkout-btn pull-right">
                                <button type="submit" class="btn btn-primary checkout-btn" ><a href="/bayar">PEMBAYARAN</a></button>
                                <span class="">Have Fun!!</span>
                            </div>
                        </td>
                    </tr>
            </tbody><!-- /tbody -->
        </table><!-- /table -->
    </div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
            </div> <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->

    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection

