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

                            {{-- <div class="dropdown">
                                <span style="font">Alamat</span>
                                <button class="btn btn-outline-primary  dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                    Pilih Alamat
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @foreach ($alamat as $a)
                                        <li>
                                            <a class="dropdown-item" href="#" onclick="selectLabel('{{$a->Label}}')">{{ $a->Label }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div> --}}
                            @foreach ($cekcart as $cart)
                                <form action="/beli/{{ $cart->Id_Keranjang }}" method="POST">
                                    @csrf
                                    <span style="font">Alamat</span>
                                    <select name="Id_Alamat" id="">
                                        @if (count($alamat) === 0)
                                            <option value="" disabled>No addresses available</option>
                                        @else
                                            @foreach ($alamat as $a)
                                                <option value="{{ $a->Id_Alamat }}">
                                                    {{ $a->Label }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>

                            @endforeach

@if (count($alamat) === 0)
    <p>No addresses available. Please <a href="/profile">update your profile</a>.</p>
@endif





                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-romove item">Hapus</th>
                                        <th class="cart-description item">Foto Barang</th>
                                        <th class="cart-product-name item">Nama</th>
                                        <th class="cart-product-name item">Berat Barang</th>
                                        <th class="cart-product-name item">Harga Jual</th>
                                        <th class="cart-qty item">Quantity</th>
                                        <th class="cart-sub-total item">Subtotal</th>
                                        <th class="cart-sub-total item"></th>
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
                                            </td>
                                            <td class="cart-product-sub-total"><span class="cart-sub-total-price">
                                                    {{ $data->Sub_Beban }} G
                                            <td class="cart-product-sub-total"><span class="cart-sub-total-price">Rp.
                                                    {{ number_format($data->Harga) }}
                                            <td class="cart-product-sub-total">
                                                {{-- <button class="quantity-button minus-button">-</button> --}}
                                                <span class="cart-sub-total-price quantity">{{ $data->Kuantitas }}</span>
                                                {{-- <button class="quantity-button plus-button">+</button> --}}
                                            </td>
                                            <td class="cart-product-sub-total">
                                                <span class="cart-sub-total-price">Rp.
                                                    {{ number_format($data->Sub_Total) }}
                                                    @php
                                                        $total += $data['Kuantitas'] * $data['Harga'];
                                                    @endphp
                                                </span></td>
                                            {{-- <td>
                                                <input type="checkbox" class="item-checkbox" name="selected_items[]" value=""
                                                    data-price="{{ $data->Sub_Total }} ">
                                            </td>
                                                <input type="hidden" name="selected_items[]"
                                                    value="{{ $data->Id_Detail_Keranjang }}"> --}}
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
                                                            {{-- Total: <span class="inner-left-md"><span
                                                                    id="total-price">0</span></span> --}}
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead><!-- /thead -->
                                            <tbody>
                                                <tr>
                                                    <td>

                                                        <button class="btn btn-upper btn-primary outer-left-xs"
                                                            type="submit">Bayar</button>
                                                        </form>

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
        const checkboxes = document.querySelectorAll('.item-checkbox');

        // Get the total price element
        const totalPriceElement = document.getElementById('total-price');

        // Initialize the total price
        let totalPrice = 0;

        // Function to format a number as IDR
        function formatIDR(number) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
            }).format(number);
        }

        // Update the initial total display
        totalPriceElement.innerText = formatIDR(totalPrice); // Format as IDR

        // Add event listeners to the checkboxes
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const price = parseFloat(checkbox.getAttribute('data-price'));
                if (checkbox.checked) {
                    totalPrice += price;
                } else {
                    totalPrice -= price;
                }
                // Update the total price display
                totalPriceElement.innerText = formatIDR(totalPrice); // Format as IDR
            });
        });
    </script> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
