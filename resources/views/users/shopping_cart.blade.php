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
                        <td class="romove-item"><a href="clean/{{$data->Id_Detail_Keranjang}}" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                        <td class="cart-image">
                            @if ($data->Foto_Barang)
                                <a class="entry-thumbnail" href="/detail/{{$data->Id_Barang}}">
                                    <img style="max-width: 100px; max-height:100px" src="{{ asset('uploads/' . $data->Foto_Barang) }}">
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
                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">Rp. {{number_format( $data->Harga)}}
                          <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{ $data->Kuantitas}}

                        {{-- <td class="cart-product-quantity">
                            <div class="quant-input">
                                    <div class="arrows">
                                      <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                      <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                    </div>
                                    <input type="text" value="{{ $data->Kuantitas }}">
                              </div>
                        </td> --}}
                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">Rp. {{number_format ($data->Sub_Total)}}
                        @php
                            $total += $data['Kuantitas'] * $data['Harga'];
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
                            Total :<span class="inner-left-md"> Rp. {{number_format($total)}}</span>
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


    //

{{-- <section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
          <div>
            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                  class="fas fa-angle-down mt-1"></i></a></p>
          </div>
        </div>

        @foreach ($test as $item)
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                @if ($item->Foto_Barang)
                    <a class="entry-thumbnail" href="/detail/{{$item->Id_Barang}}">
                        <img style="max-width: 100px; max-height:100px" src="{{ url('Foto_barang'). '/'. $item->Foto_Barang }}">
                    </a>
                @endif
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">{{$item->Nama_Barang}}</p>
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fa fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="2" type="number"
                  class="form-control form-control-sm" />

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">$499.00</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                {{-- <a href="#!" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>
                <td class="romove-item"><a href="clean/{{$item->Id_Keranjang}}" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        <div class="card mb-4">
          <div class="card-body p-4 d-flex flex-row">
            <div class="form-outline flex-fill">
              <input type="text" id="form1" class="form-control form-control-lg" placeholder="Discount Code"/>
            </div>
            <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section> --}}
@endsection

