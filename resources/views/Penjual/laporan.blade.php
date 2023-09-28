<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan PDF</title>
</head>
<body>
    <h1>Laporan </h1>
    <!-- Isi konten PDF Anda di sini -->
    {{-- <table border="0" style="width: 100%">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Produk</th>
                <th>Harga Barang</th>
                <th>Terjual</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualan as $data)
                <tr>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->produk }}</td>
                    <td>Rp. {{ number_format($data->Harga) }}</td>
                    <td>{{ $data->total_terjual }}</td>
                    <td>Rp. {{ number_format($data->total_terjual * $data->Harga) }}</td>
                </tr>
            @endforeach
            <tr>


                <td colspan="3">Jumlah</td>
                <td>{{ $penjualan->sum('total_terjual') }}</td>
                <td>{{ $penjualan->sum('total_terjual * Harga') }}</td>
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
    </table> --}}

    <div class="container">
        <table border="0" style="width: 100%">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjualan as $data)
                    <td>{{ $data->produk }}</td>
                @endforeach
            </tbody>

    </div>
</body>
</html>
