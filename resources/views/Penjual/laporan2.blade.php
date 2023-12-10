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
        <div class="judul">Laporan Omset Arctic Food</div>
        <div class="info">Alamat: Jl. Marga asih</div>
        <div class="info">Telepon: 089656088434</div>
        <div class="info">Periode {{$bulanawal}} hingga {{$bulanakhir}} </div>

        <div>
            <img class="logo" src="	..assets/css/images/arcticlogo.png" alt="Logo Arctic Food" >
        </div>
    </div>
    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Bulan</th>
                                <th scope="col">Omset</th>
    
                            </tr>
                        </thead>
    
                        <tbody>
    
    
    
                            @foreach ($penjualan as $data)
                                <tr>
                                    <td>{{ date('F', strtotime($data->bulan)) }}</td>
                                    <td>Rp. {{ number_format($data->Total_Harga) }} </td>
                                </tr>
                            @endforeach
    
                            <tr>
                                <td>Jumlah</td>
                                <td>Rp. {{ number_format($penjualan->sum('Total_Harga')) }}</td>
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
            </div>
        </div>
    </div>
</body>

</html>
