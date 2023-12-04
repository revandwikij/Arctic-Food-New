@extends('layouting.layout admin.master')

@section('title', 'home')

@section('content')

<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('0fd86bb9b489a43595a4', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('Channel-Pembayaran');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>



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
            </div><!--//row-->
             <div id="grafik">

            </div>
          
        </div><!--//app-card-->
         
    </div><!--//col-->
    <div id="baranglaku" style="height: 400px; width: 900px;"></div>
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
                                        <a href="#">View report</a>
                                    </div><!--//card-header-actions-->
                                </div><!--//col-->
                            </div><!--//row-->
                        </div><!--//app-card-header-->
                        <div class="app-card-body p-3 p-lg-4">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <thead>
                                        <tr>
                                            <th class="meta">Source</th>
                                            <th class="meta stat-cell">Views</th>
                                            <th class="meta stat-cell">Today</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">google.com</a></td>
                                            <td class="stat-cell">110</td>
                                            <td class="stat-cell">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-arrow-up text-success" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                                </svg>
                                                30%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">getbootstrap.com</a></td>
                                            <td class="stat-cell">67</td>
                                            <td class="stat-cell">23%</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">w3schools.com</a></td>
                                            <td class="stat-cell">56</td>
                                            <td class="stat-cell">
                                                <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-arrow-down text-danger" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                                </svg>
                                                20%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">javascript.com </a></td>
                                            <td class="stat-cell">24</td>
                                            <td class="stat-cell">-</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">github.com </a></td>
                                            <td class="stat-cell">17</td>
                                            <td class="stat-cell">15%</td>
                                        </tr>
                                    </tbody>
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

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    Highcharts.chart('baranglaku', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Corn vs wheat estimated production for 2020',
        align: 'left'
    },
    subtitle: {
        text:
            'Source: <a target="_blank" ' +
            'href="https://www.indexmundi.com/agriculture/?commodity=corn">indexmundi</a>',
        align: 'left'
    },
    xAxis: {
        categories: ['USA', 'China', 'Brazil', 'EU', 'India', 'Russia'],
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: '1000 metric tons (MT)'
        }
    },
    tooltip: {
        valueSuffix: ' (1000 MT)'
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Corn',
            data: [406292, 260000, 107000, 68300, 27500, 14500]
        },
        {
            name: 'Wheat',
            data: [51086, 136000, 5500, 141000, 107180, 77000]
        }
    ]
});
</script>

@endsection
