@extends('layouting.layout admin.master')

@section('title', 'home')

@section('content')

<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Anda Adalah Admin !</h1>

            <div class="row g-4 mb-4">
                <div class="col-6 col-lg-4">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Penghasilan Bulan Ini ({{ now()->format('F Y') }})</h4>
                            <div class="stats-figure">Rp. {{ number_format($totalTransaksiBulanIni) }}</div>
                            <div class="stats-meta text-success">
                                {{-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                </svg> 20% --}}
                            </div>
                        </div><!--//app-card-body-->
                        {{-- <a class="app-card-link-mask" href="#"></a> --}}
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-6 col-lg-4">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Barang</h4>
                            <div class="stats-figure">{{ $barang }}</div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="/barang"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-6 col-lg-4">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Users</h4>
                            <div class="stats-figure">{{ $pelanggan }}</div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="/users"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div id="grafik">

                </div>
                 <div id="baranglaku">

             </div>
            </div><!--//row-->

        </div><!--//app-card-->
    </div><!--//col-->
                {{-- Jadi Ulasan Terbaru --}}
                <div class="col-12 col-lg-6" style="margin-left: 35px;">
                    <div class="app-card app-card-stats-table h-100 shadow-sm">
                        <div class="app-card-header p-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h4 class="app-card-title">Ulasan Terbaru</h4>
                                </div><!--//col-->
                                <div class="col-auto">
                                    <div class="card-header-action">
                                        <a href="/daftarulasan">Lihat Semua</a>
                                    </div><!--//card-header-actions-->
                                </div><!--//col-->
                            </div><!--//row-->
                        </div><!--//app-card-header-->
                        <div class="app-card-body p-3 p-lg-4">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    @foreach($ulasan as $u)
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="card card-white post">
                                                    <div class="post-heading">

                                                        <div class="float-left meta">
                                                            <div class="title h5">
                                                                <h4>{{$u->username }}</h4>
                                                                <h5>{{$u->Nama_Barang}}</h5>

                                                            </div>
                                                            <h6 class="text-muted time">{{$u->formatted_created_at}}</h6>
                                                        </div>
                                                    </div>


                                                    <div class="post-description">
                                                        <p>{{$u->Ulasan}}</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    @endforeach
                                </table>
                            </div><!--//table-responsive-->
                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div><!--//col-->
            </div><!--//row-->
        </div><!--//container-fluid-->
    </div><!--//app-content-->

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
    var pendapatan = <?php echo json_encode($Total_Harga)?>;
    var bulan = <?php echo json_encode($bulan)?>;
    Highcharts.chart('grafik', {
        title: {
            text: 'Grafik Pendapatan Perbulan'
        },
        xAxis: {
            categories: bulan
        },
        yAxis: {
            title: {
                text: 'Nominal Pendapatan Bulanan'
            }
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [
            {
                name: 'Nominal Pendapatan',
                data: pendapatan
            }
        ]
    });
</script>

<script type="text/javascript">
 Highcharts.chart('baranglaku', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Barang Terlaku'
        },
        xAxis: {
            categories: {!! json_encode($barangTerlaku->pluck('Nama_Barang')) !!},
            crosshair: true,
            accessibility: {
                description: 'Nama Barang'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Kuantitas'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y} units</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
            {
                name: 'Terlaku',
                data: {!! json_encode($barangTerlaku->pluck('terlaku')->map(function($value) { return (int)$value; })) !!}
            },
            {
                name: 'Sisa Stok',
                data: {!! json_encode($barangTidakLaku->pluck('Stok')->map(function($value) { return (int)$value; })) !!}
            }
        ]
    });

</script>
@endsection
