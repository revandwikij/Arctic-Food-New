<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laporan PDF</title>
    <style>
        /* CSS untuk kop surat */
        .kop-surat {
            border-bottom: 2px solid #333;
            padding-bottom: 20px;
            text-align: center;
            margin-bottom: 30px;
        }

        .judul-laporan {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .info-laporan {
            font-size: 18px;
        }

        .tanda-tangan {
            position: absolute;
            bottom: 50px;
            right: 50px;
            border-top: 1px solid #333;
            padding-top: 10px;
            text-align: right;
            width: 40%;
        }

        .tanda-tangan img {
            max-width: 100px;
            margin-top: 10px;
        }
    </style>

    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Tambahkan link ke Bootstrap JavaScript dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Kop Surat -->
    <div class="kop-surat">
        <div class="judul-laporan">Laporan Penjualan Arctic Food</div>
        <div class="info-laporan">
            <p>Bulan : [Isi bulan]</p>
            <p>Tahun: [Isi tahun]</p>
        </div>
        <img src="link_ke_logo_anda.png" alt="Logo Perusahaan" width="150">
    </div>

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
                <tr>
                    <td>Produk</td>
                    <td colspan="4">:</td>
                </tr>
                @foreach ($penjualan as $data)
                    <tr>
                        {{-- <td>{{ $data->tanggal }}</td> --}}
                        <td>{{ $data->produk }}</td>
                        <td>Rp. {{ number_format($data->Harga_Barang) }}</td>
                        <td>{{ $data->total_terjual }}</td>
                        <td>Rp. {{ number_format($data->total_terjual * $data->Harga) }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">Jumlah</td>
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
    </div>

    <div class="tanda-tangan">
        <div>Nama Penjual</div>
        <img src="link_ke_tanda_tangan.png" alt="Tanda Tangan Penjual">
    </div>
</body>

</html>
