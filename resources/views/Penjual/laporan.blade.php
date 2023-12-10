<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laporan Penjualan</title>

    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Tambahkan link ke Bootstrap JavaScript dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
         .kop-surat {
            border-bottom: 2px solid #333;
            padding-bottom: 20px;
            margin-bottom: 20px;
            width: 100%; /* Lebarkan garis horizontal */
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .judul {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .info {
            font-size: 16px;
        }

        /* Gaya untuk logo */
        .logo {
            max-width: 100px; /* Sesuaikan ukuran logo */
            height: auto;
            float: right; /* Posisikan logo di sebelah kanan */
        }

        
    </style>
</head>

<body>
    <div class="container kop-surat">
        <div class="judul">Laporan Penjualan Arctic Food</div>
        <div class="info">Alamat: Jl. Marga Asih</div>
        <div class="info">Telepon: 089656088434</div>
        <div class="info">Periode {{$tanggalAwal}} hingga {{$tanggalAkhir}} </div>

       
    </div>

    <div class="container">
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    {{-- <th>Tanggal</th> --}}
                    <th>Produk</th>
                    <th>Harga Barang</th>
                    <th>Terjual</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($penjualan as $data)
                    <tr>
                        {{-- <td>{{ $data->tanggal }}</td> --}}
                        <td>{{ $data->produk }}</td>
                        <td>Rp. {{ number_format($data->Harga) }}</td>
                        <td>{{ $data->total_terjual }}</td>
                        <td>Rp. {{ number_format($data->total_terjual * $data->Harga) }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2">Jumlah</td>
                    <td>{{ $penjualan->sum('total_terjual') }}</td>
                    <td>
                        @php
                            $totalPenjualan = 0;
                            foreach ($penjualan as $data) {
                                $totalPenjualan += $data->total_terjual * $data->Harga;
                            }
                            echo "Rp. " . number_format($totalPenjualan);
                        @endphp
                    </td>
                </tr>
            </tbody>
        </table>

        <div align="right" style="font-weight: 100; margin-top:20px">
            Bandung, <?php echo date('d-m-Y'); ?><br><br><br>
            <p>(......................................)</p>
                {{$nama}}
        </div>
    </div>
</body>

</html>
