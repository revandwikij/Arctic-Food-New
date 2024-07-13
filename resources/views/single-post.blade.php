@extends('layouting.home.master')

@section('title', 'Home')

@section('content')

    <section class="site-banner padding-small bg-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="item">
                            <a href="/">Home /</a>
                        </span>
                        <span class="item">Single post</span>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @foreach ($barang as $data)
        <div class="main-content d-flex flex-wrap padding-large justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="feature-image text-center">
                            @if ($data->Foto_Barang)
                                <img style="width: 388.26px; height: 388.26px; margin-bottom: 20px;"
                                    src="{{ asset('uploads/' . $data->Foto_Barang) }}">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1 class="page-title" style="font-size: 24px; word-break:break-word; margin-bottom: 20px;">
                            {{ $data->Nama_Barang }}</h1>
                        <div class="post-content">
                            <table class="table">
                                <tbody style="font-weight: 500; font-size: 20px; line-height: 24px;">
                                    <tr>
                                        <td style="color: rgb(8, 177, 255); font-size: 24px; font-weight: 700px;">
                                            Rp. {{ number_format($data->Harga) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="stok" style="font-size: 14px; font-weight: 400; color: #333;"> Tersedia {{ $data->Stok }} stok barang</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding-top: 50px;">
                                            <strong style="font-weight: bold; color: black;">Pesan Sekarang!</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <form action="/keranjang/{{ $data->Id_Barang }}" method="POST">
                                                @csrf
                                                <div class="input-group" style="display: flex; align-items: center; gap: 10px;">
                                                    <input type="number" name="jumlah_pesan" class="form-control" min="1" style="width: 100px; height: 40px; font-size: 15px; line-height: 1.2; padding: 5px; margin-top: 5%; align-items:center;">
                                                    @if ($data->Stok == 0)
                                                        <button type="submit" class="btn btn-primary" disabled style="height: 40px; font-size: 15px; display: inline-flex; align-items: center;">Masukan Keranjang</button>
                                                    @else
                                                        <button type="submit" class="btn btn-primary" style="height: 40px; font-size: 15px; display: inline-flex; align-items: center;">Masukan Keranjang</button>
                                                    @endif
                                                </div>

                                                <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px; gap: 20px;">
                                                    <div style="display: flex; align-items: center;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16" style="margin-right: 8px">
                                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                                          </svg>
                                                          <span style="font-size: 13px;">Waktu Proses Maks 1 Jam Kerja</span>
                                                    </div>
                                                    <div style="display: flex; align-items: center;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16"  style="margin-right: 5px;">
                                                            <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                                                          </svg>
                                                          <span style="font-size: 13px;">Pengiriman Cepat</span>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>                                                                                                                                                                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="description-section" style="background-color: #f0f0f0; padding: 50px;">
            <hr>
            <div class="spesifikasi">
                <p style="font-size: 16px; color: black; font-weight: 500;">Spesifikasi</p>
                <table style="width: 100%; color: black; font-size: 14px;">
                    <tr>
                        <td style="color: #666; font-weight: 300;">Merek</td>
                        <td style="font-weight: 300;">:</td>
                        <td style="font-weight: 300; color: black;">{{ $data->Brand }}</td>
                    </tr>
                    <tr>
                        <td style="width: 1%; color: #666; font-weight: 300;">Kategori</td>
                        <td style="width: 1%; font-weight: 300;">:</td>
                        <td style="width: 75%; font-weight: 300; color: black;">{{ $data->Kategori }}</td>
                    </tr>
                    <tr>
                        <td style="color: #666; font-weight: 300;">Berat</td>
                        <td style="font-weight: 300;">:</td>
                        <td style="font-weight: 300; color: black;">{{ $data->Berat }}</td>
                    </tr>
                </table>
            </div>
            <div class="keterangan">
                <p style="font-size: 16px; color: black; font-weight: 500;">Keterangan Barang</p>
                <p style="color: black; font-size: 14px; font-weight: 300;">{{ $data->Keterangan_Barang }}</p>
            </div>
            <hr>
        </div>
        
    @endforeach

    <section class="post-comment padding-large bg-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="comments-wrap">
                        <h3>Ulasan</h3>
                        @foreach ($ulasan as $u)
                            <div class="container">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="card card-white post">
                                            <div class="post-heading">
                                                <div class="float-left meta">
                                                    <div class="title h5">
                                                        <h4>{{ $u->username }}</h4>
                                                    </div>
                                                    <h6 class="text-muted time">{{ $u->formatted_created_at }}</h6>
                                                </div>
                                            </div>
                                            <div class="post-description">
                                                <p>{{ $u->Ulasan }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <a href="/review/{{ $data->Id_Barang }}">Lihat semua</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="shipping-information" style="padding: 10px;">
        <hr>
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center justify-content-between">
                <div class="col-md-3 col-sm-6" style="padding: 5px;">
                    <div class="icon-box" style="text-align: center;">
                        <i class="icon icon-truck" style="font-size: 24px;"></i>
                        <h4 class="block-title" style="font-size: 14px; margin-top: 10px;">
                            <strong>Free shipping</strong> Over $200
                        </h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" style="padding: 5px;">
                    <div class="icon-box" style="text-align: center;">
                        <i class="icon icon-return" style="font-size: 24px;"></i>
                        <h4 class="block-title" style="font-size: 14px; margin-top: 10px;">
                            <strong>Money back</strong> Return within 7 days
                        </h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" style="padding: 5px;">
                    <div class="icon-box" style="text-align: center;">
                        <i class="icon icon-tags1" style="font-size: 24px;"></i>
                        <h4 class="block-title" style="font-size: 14px; margin-top: 10px;">
                            <strong>Buy 4 get 5th</strong> 50% off
                        </h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" style="padding: 5px;">
                    <div class="icon-box" style="text-align: center;">
                        <i class="icon icon-help_outline" style="font-size: 24px;"></i>
                        <h4 class="block-title" style="font-size: 14px; margin-top: 10px;">
                            <strong>Any questions?</strong> experts are ready
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>    

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const stok = parseInt(document.getElementById("stok").textContent);
            const jumlahPesanInput = document.querySelector('input[name="jumlah_pesan"]');
            const submitButton = document.querySelector('button[type="submit"]');

            jumlahPesanInput.addEventListener("input", function() {
                const jumlahPesan = parseInt(jumlahPesanInput.value);
                if (jumlahPesan > stok) {
                    submitButton.disabled = true;
                    alert("Jumlah pesanan melebihi stok yang tersedia!");
                } else {
                    submitButton.disabled = false;
                }
            });
        });
    </script>

@endsection
