@extends('layouting.home.master')

@section('title', 'Cart')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                                    <div class="arrow plus gradient">
                                        <span class="ir plus-button"><i class="icon fa fa-sort-asc"></i></span>
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
                            {{-- <div class="cart-checkout-btn pull-right">
                                <button type="submit" class="btn btn-primary checkout-btn" ><a href="/beli">PEMBAYARAN</a></button>
                                <span class="">Have Fun!!</span>
                            </div> --}}
                            <button type="button" class="btn btn-primary launch" data-toggle="modal" data-target="#staticBackdrop">
                                <i class="fa fa-rocket"></i> Pay Now
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="text-right">
                                                <i class="fa fa-close close" data-dismiss="modal"></i>
                                            </div>
                                            <div class="tabs mt-3">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="true">
                                                            <img src="../assets/images/cod.jpg" width="80">
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false">
                                                            <img src="../assets/images/gopay.png" width="80">
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-contents" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab">
                                                        <div class="mt-4 mx-4">
                                                            <div class="price-info"> <!-- Informasi Ongkos Pengiriman dan Total Pembayaran -->
                                                                <p>Ongkos Pengiriman: $10.00</p>
                                                                <p>Total Pembayaran: $100.00</p>
                                                            </div>
                                                            <div class="text-center">
                                                                <h5>Cash On Delivery</h5>
                                                            </div>
                                                            <div class="form mt-3">
                                                                <div class="inputbox">
                                                                    <input type="text" name="name" min="1" max="999" class="form-controls" required="required">
                                                                    <span>Nama Lengkap</span>
                                                                    <!-- <i class="fa fa-eye"></i> -->
                                                                </div>
                                                                <div class="inputbox">
                                                                    <select class="form-select" required>
                                                                        <option value="" disabled selected>Select Address</option>
                                                                        <option value="address1">Address 1</option>
                                                                        <option value="address2">Address 2</option>
                                                                        <option value="address3">Address 3</option>
                                                                    </select>
                                                                </div>
                                                                <div class="d-flex flex-row">
                                                                    <!-- <div class="inputbox">
                                                                        <input type="text" name="name" min="1" max="999" class="form-controls" required="required">
                                                                        <span>Expiration Date</span>
                                                                    </div>
                                                                    <div class="inputbox">
                                                                        <input type="text" name="name" min="1" max="999" class="form-controls" required="required">
                                                                        <span>CVV</span>
                                                                    </div> -->
                                                                </div>
                                                                <div class="px-5 pay">
                                                                    <button class="btn btn-success btn-block">Bayar Sekarang</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                                                        <div class="px-5 mt-5">
                                                            <div class="price-info"> <!-- Informasi Ongkos Pengiriman dan Total Pembayaran -->
                                                                <p>Ongkos Pengiriman: $10.00</p>
                                                                <p>Total Pembayaran: $100.00</p>
                                                            </div>
                                                            <div class="text-center">
                                                                <h5>Gopay</h5>
                                                            </div>
                                                            <div class="inputbox">
                                                                <input type="text" name="name" class="form-controls" required="required">
                                                                <span>No Gojek</span>
                                                            </div>
                                                            <div class="pay px-5">
                                                                <button class="btn btn-primary btn-block">Bayar Sekarang</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
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

    <script>
        const plusButton = document.querySelector('.plus-button');
const minusButton = document.querySelector('.minus-button');
const quantityInput = document.querySelector('.quantity-input');

function formatCurrency(amount) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(amount);
    }

// Inisialisasi jumlah awal
let quantity = parseInt(quantityInput.value);

// Tambahkan event listener untuk tombol plus
plusButton.addEventListener('click', () => {
    quantity++;
    quantityInput.value = quantity;
    updateSubtotal();
});

// Tambahkan event listener untuk tombol minus
minusButton.addEventListener('click', () => {
    if (quantity > 1) {
        quantity--;
        quantityInput.value = quantity;
        updateSubtotal();
    }
});

// Fungsi untuk menghitung ulang subtotal
function updateSubtotal() {
    const price = parseInt('{{ $data->Harga }}'); // Ambil harga dari PHP
    const subtotal = quantity * price;
    document.querySelector('.cart-sub-total-price').textContent = formatCurrency(subtotal) // Tampilkan subtotal
}

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection

