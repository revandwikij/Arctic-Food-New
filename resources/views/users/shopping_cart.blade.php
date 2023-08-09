@extends('layouting.home.master')

@section('title', 'Cart')

@section('content')
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
                        <th class="cart-product-name item">Harga Jual</th>
                        <th class="cart-qty item">Quantity</th>
                        <th class="cart-sub-total item">Subtotal</th>
                    </tr>
                </thead><!-- /thead -->

                <tbody>
                    @php
                    $total = 0 ;
                    @endphp
                    @foreach ($test as $data)
                    <tr>
                        <td class="romove-item"><a href="clean/{{$data->Id_Keranjang}}" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                        <td class="cart-image">
                            @if ($data->Foto_Barang)
                                <a class="entry-thumbnail" href="/detail/{{$data->Id_Barang}}">
                                    <img style="max-width: 100px; max-height:100px" src="{{ url('Foto_barang'). '/'. $data->Foto_Barang }}">
                                </a>
                            @endif
                        </td>
                        <td class="cart-product-name-info">
                            <h4 class='cart-product-description'><a href="/detail/{{$data->Id_Barang}}">{{ $data->Nama_Barang }}</a></h4>
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
                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{ $data->Harga}}  

                        <td class="cart-product-quantity">
                            <div class="quant-input">
                                    <div class="arrows">
                                      <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                      <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                    </div>
                                    <input type="text" value="{{ $data->Kuantitas }}">
                              </div>
                        </td>
                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{ $data->Sub_Total}}
                        @php
                            $total += $data['Jumlah'] * $data['Harga'];
                        @endphp
                        </span></td>
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
                     
                </span>
            </div>
            <thead>
                <tr>
                    <th>
                        <div class="cart-grand-total ">
                            Total :<span class="inner-left-md"> Rp. {{$total}}</span>
                        </div>
                    </th>
                </tr>
            </thead><!-- /thead -->
            <tbody>
                    <tr>
                        <td>
                            <div class="cart-checkout-btn pull-right">
                                <button type="submit" class="btn btn-primary checkout-btn" ><a href="/beli">PEMBAYARAN</a></button>
                                <span class="">Have Fun!!</span>
                            </div>
                        </td>
                    </tr>
            </tbody><!-- /tbody -->
        </table><!-- /table -->
    </div><!-- /.cart-shopping-total -->
</div><!-- /.shopping-cart -->
            </div> <!-- /.row -->
    </div><!-- /.body-content -->
    </div>


  

@endsection

