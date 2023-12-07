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
                            <form action="/beli/{{ $cekcart }}" method="post">
                                @csrf
                                @if (count($alamat) === 0)
                                    No addresses available klik di <a href="/profile#alamat">sini </a>
                                @else
                                    <span style="font">Alamat</span>
                                    <select name="Id_Alamat">
                                        @foreach ($alamat as $a)
                                            <option value="{{ $a->Id_Alamat }}">
                                                {{ $a->Label }}
                                            </option>
                                        @endforeach
                                @endif
                                </select>
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
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <div class=" col-sm-12 fixed-bottom cart-shopping-total ">
                                        <table class="table float-end">
                                            <div class="shopping-cart-btn">
                                                <span class="">
                                                    <a href="/ "
                                                        class="btn btn-upper btn-primary outer-left-xs">Kembali
                                                        Belanja</a>
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
                                                        @if (count($alamat) === 0)
                                                            <button class="btn btn-upper btn-primary outer-left-xs"
                                                                type="submit" disabled>Bayar</button>
                                                        @else
                                                            <button class="btn btn-upper btn-primary outer-left-xs"
                                                                type="submit">Bayar</button>
                                                        @endif
                                                        </form>
                                                    </td>
                                                </tr>
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
