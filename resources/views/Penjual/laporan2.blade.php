<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laporan PDF</title>

    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Tambahkan link ke Bootstrap JavaScript dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="mt-4">Laporan Omset Arctic Food</h2>

        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th scope="col">Bulan</th>
                    <th scope="col">Omset</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($penjualan as $data)
                    <tr>
                        <td>{{ $data->tanggal }} </td>
                        <td>Rp. {{ number_format($data->total_harga) }} </td>
                    </tr>
                @endforeach

                <tr>


                    <td>Jumlah</td>
                    <td>{{ $penjualan->sum('Total_Harga') }}</td>
                    {{-- <td>{{ $penjualan->sum('total_terjual * Harga') }}</td> --}}
                    {{-- <td>
                        @php
                            $totalPenjualan = 0;
                            foreach ($penjualan as $data) {
                                $totalPenjualan += $data->total_terjual * $data->Harga;
                            }
                            echo "Rp. " . number_format($totalPenjualan);
                        @endphp
                    </td> --}}

                </tr>

            </tbody>
        </table>

    </div>
</body>

</html>
