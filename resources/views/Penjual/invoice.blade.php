<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Invoice</title>

    <!-- Favicon -->
    {{-- <link rel="icon" href="../assets/css/images/arcticlogo.png" type="image/x-icon" /> --}}

    <!-- Invoice styling -->
    <style>
        body {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            text-align: center;
            color: #777;
        }

        body h1 {
            font-weight: 300;
            margin-bottom: 0px;
            padding-bottom: 0px;
            color: #000;
        }

        body h3 {
            font-weight: 300;
            margin-top: 10px;
            margin-bottom: 20px;
            font-style: italic;
            color: #555;
        }

        body a {
            color: #06f;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        /* Product Card Styling */
        .product-card {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
            border-radius: 8px;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .product-card table {
            width: 100%;
        }

        .product-card td {
            padding: 10px;
        }

        /* End Product Card Styling */

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
    </style>
</head>

<body>
@foreach ($pesanan as $item )


<div class="invoice-box">
    <table>
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                          <p>Arctic Food</p>
                        </td>

                        <td>
                            Invoice #{{ $item->Id_Pesanan }}<br />
                            Created:{{ $item->Tgl_Pesanan }}<br />
                            Due: February 1, 2023
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            {{-- Sparksuite, Inc.<br />
                            12345 Sunny Road<br />
                            Sunnyville, TX 12345 --}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        @foreach ( $databar as $barang )


        <!-- Product Card -->
        <tr class="product-card">
            <td colspan="2">
                <table style="width: 100%;">
                    <tr>
                        {{-- <td style="width: 13%; vertical-align: middle;">
                            <img src="../assets/css/images/rep.jpg" alt="Product Image" style="width: 55px; height: 55px" />
                        </td> --}}
                        <td style="text-align: left; vertical-align: left;">
                            <strong>{{ $barang->Nama_Barang }}</strong><br />
                            {{ $barang->Kuantitas }} x {{ $barang->Harga }}
                        </td>
                        <td style="text-align: middle; vertical-align: right;">
                            <strong>{{ $barang->Sub_Total}}</strong>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- End Product Card -->
        @endforeach

        <tr class="heading">
            <td>Metode Pembayaran</td>
            <td>Kredit</td>
        </tr>

        <tr class="details">
            <td></td>
        </tr>

        <tr class="heading">
            <td>Rincian Pembayaran</td>
            <td>Price</td>
        </tr>

        <tr class="item">
            <td>Harga Barang</td>
            <td>{{ $item->Total}}</td>
        </tr>

        <tr class="item">
            <td>Total Ongkos Kirim</td>
            <td>{{ $item->Total_Shipping }}</td>
        </tr>



        <tr class="total">
            <td></td>
            <td>Total: {{ $item->Total_Harga }}</td>
        </tr>

        <tr>
            <td>Kode Shipping :
                {{ $item->Id_Shipping}}
            <td>
        </tr>

        <tr>
            <td>More Info :
            <a href="https://youtu.be/VuNIsY6JdUw?si=NQdl6pTX39aQdRlN">arctic food</a>
        </td>
        </tr>

    </table>

    Thank You For Hatur Nuhun
</div>
@endforeach
</body>
</html>
