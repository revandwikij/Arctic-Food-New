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
                        <div class="container d-flex justify-content-left align-items-left">

                            <div class="dropdown">
                                <span style="font">Alamat</span>
                                <button class="btn btn-outline-primary  dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                    Pilih Alamat
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @foreach ($alamat as $a)
                                        <li><a class="dropdown-item" href="#" onclick="selectLabel('{{$a->Label}}')">{{ $a->Label }}</a></li>
                                    @endforeach
                                </ul>
                            </div>


                        </div>
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
                                        $total = 0;
                                    @endphp
                                    @foreach ($test as $data)
                                        <tr>
                                            <td class="romove-item"><a href="clean/{{ $data->Id_Detail_Keranjang }}"
                                                    title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="cart-image">
                                                @if ($data->Foto_Barang)
                                                    <a class="entry-thumbnail" href="/detail/{{ $data->Id_Barang }}">
                                                        <img style="max-width: 100px; max-height:100px"
                                                            src="{{ asset('uploads/' . $data->Foto_Barang) }}">
                                                    </a>
                                                @endif
                                            </td>
                                            <td class="cart-product-name-info">
                                                <h4 class='cart-product-description'><a
                                                        href="/detail/{{ $data->Id_Barang }}">{{ $data->Nama_Barang }}</a>
                                                </h4>
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
                                            <td class="cart-product-sub-total"><span class="cart-sub-total-price">Rp.
                                                    {{ number_format($data->Harga) }}
                                            <td class="cart-product-sub-total">
                                                <button class="quantity-button minus-button">-</button>
                                                <span class="cart-sub-total-price quantity">{{ $data->Kuantitas }}</span>
                                                <button class="quantity-button plus-button">+</button>
                                            </td>
                                            <td class="cart-product-sub-total"><span class="cart-sub-total-price">Rp.
                                                    {{ number_format($data->Sub_Total) }}
                                                    @php
                                                        $total += $data['Kuantitas'] * $data['Harga'];
                                                    @endphp
                                                </span></td>
                                            {{-- <td class="cart-product-sub-total">
                            <span class="cart-sub-total-price">Rp. {{ number_format($data->Harga) }}</span>
                        </td>
                        <td class="cart-product-sub-total">
                            <button class="quantity-button minus-button">-</button>
                            <span class="cart-sub-total-price quantity">{{ $data->Kuantitas }}</span>
                            <button class="quantity-button plus-button">+</button>
                            <div class="subtotal">Subtotal: Rp. {{ number_format($data->Kuantitas * $data->Harga) }}</div>
                        </td>
                        <td class="cart-product-sub-total">
                            <span class="cart-sub-total-price">Rp. {{ number_format($data->Sub_Total) }}</span>
                        </td> --}}
                                        </tr>
                                    @endforeach
                                    <div class=" col-sm-12 fixed-bottom cart-shopping-total ">
                                        <table class="table float-end">
                                            <div class="shopping-cart-btn">
                                                <span class="">
                                                    <a href="/ "
                                                        class="btn btn-upper btn-primary outer-left-xs">Kembali Belanja</a>
                                                </span>
                                            </div>
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="cart-grand-total ">
                                                            Total :<span class="inner-left-md"> Rp.
                                                                {{ number_format($total) }}</span>
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
                                                        @foreach ($cekcart as $cart)
                                                            <a href="/beli/{{ $cart->Id_Keranjang }} "
                                                                class="btn btn-upper btn-primary outer-left-xs">Bayar</a>
                                                        @endforeach

                                                    </td>
                                                </tr>
                                            </tbody><!-- /tbody -->
                                        </table><!-- /table -->
                                    </div><!-- /.cart-shopping-total -->
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



                </div><!-- /.shopping-cart -->
            </div> <!-- /.row -->
        </div><!-- /.body-content -->
    </div>




    {{-- <script>
        const plusButton = document.querySelector('.plus-button');
        const minusButton = document.querySelector('.minus-button');

        function formatCurrency(amount) {
            return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(amount);
        }

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

        function updateSubtotal() {
            const subtotalElement = parseInt('{{ $data->Harga }}'); // Ambil harga dari PHP
            const subtotal = quantity * subtotalElement;
            document.querySelector('.cart-sub-total-price').textContent = formatCurrency(subtotal) // Tampilkan subtotal
        };

</script> --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const plusButtons = document.querySelectorAll(".plus-button");
            const minusButtons = document.querySelectorAll(".minus-button");

            plusButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    const quantitySpan = this.parentNode.querySelector(".quantity");
                    const price = parseFloat(this.parentNode.querySelector(".cart-sub-total-price")
                        .textContent.replace("Rp. ", "").replace(".", "").replace(",", "."));

                    let currentQuantity = parseInt(quantitySpan.textContent);
                    currentQuantity++;
                    quantitySpan.textContent = currentQuantity;

                    updateSubtotal(this.parentNode, currentQuantity, price);
                });
            });

            minusButtons.forEach(function(button) {
                button.addEventListener("click", function() {
                    const quantitySpan = this.parentNode.querySelector(".quantity");
                    const price = parseFloat(this.parentNode.querySelector(".cart-sub-total-price")
                        .textContent.replace("Rp. ", "").replace(".", "").replace(",", "."));

                    let currentQuantity = parseInt(quantitySpan.textContent);
                    if (currentQuantity > 1) {
                        currentQuantity--;
                        quantitySpan.textContent = currentQuantity;
                        updateSubtotal(this.parentNode, currentQuantity, price);
                    }
                });
            });

            function updateSubtotal(container, quantity, price) {
                // const quantityElement = container.querySelector(".quantity");
                // const subtotalElement = container.querySelector(".subtotal");
                const subtotalElement = parseInt('{{ $data->Harga }}');
                const subtotal = quantity * subtotalElement;

                // quantityElement.textContent = quantity;
                subtotalElement.textContent = `Subtotal: Rp. ${subtotal.toLocaleString("id-ID")}`;
            }
        });

        function selectLabel(label) {
        // Set the selected label in the <span> element
        document.getElementById('selectedLabel').textContent = label;
    }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
