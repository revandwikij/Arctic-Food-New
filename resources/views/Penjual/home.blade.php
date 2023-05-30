<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/tes.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-flutter'></i>
            <span class="logo_name">GoUMKM</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="/admin">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link-name">Beranda</span>
                </a>
                <ul class="sub-menu">
                    <li><a class="link-name" href="/admin">Beranda</a></li>
                </ul>
                <ul class="sub-menu blank">
                    <li><a class="link-name" href="#">Transaksi</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-folder'></i>
                        <span class="link-name">File Master</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">File Master</a></li>
                    <li><a href="/Barang">Barang</a></li>
                    <li><a href="/users">Pelanggan</a></li>
                    
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bx-transfer' ></i>
                        <span class="link-name">Transaksi</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">Transaksi</a></li>
                    <li><a href="/">Pesanan</a></li>
                </ul>
            </li>
            <li>
                <div class="icon-link">
                    <a href="#">
                        <i class='bx bxs-report' ></i>
                        <span class="link-name">Laporan</span>
                    </a>
                    <i class='bx bx-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">Laporan</a></li>
                    <li><a href="#">Laporan Penjualan </a></li>
                    <li><a href="#">Laporan Stok</a></li>
                </ul>
            </li>
            
            <li>
                <a href="#">
                    <i class='bx bx-hard-hat' ></i>
                    <span class="link-name">Tentang</span>
                </a>
                <ul class="sub-menu">
                    <li><a class="link-name" href="#">Tentang</a></li>
                </ul>
            </li>
        <li>
        <div class="profile-details">
            {{-- <div class="profile-content">
                <img src="/gaya/img/gambar.png" alt="profile">
            </div> --}}
            <div class="name-job">
                <div class="profile-name">Revan Dwiki</div>
                <div class="name-job">Penjual</div>
            </div>
            <a href="/Log-Out"><i class='bx bx-log-out' href="/Log-Out"></i></a>
            </div>
        </li>
    </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' id="btn"></i>
            <span class="text"></span>
        </div>
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box3"></div>
        <div class="box4"></div>

        <div class="kotak1">
            <div class="container mb-4">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id Barang</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Id Kategori</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col" >Keterangan Barang</th>
                                        <th scope="col" >Harga</th>
                                        
                                    </tr> 
                                </thead>
                               
                                <tbody>
                                   
                              
                                <tr>
                                        
                                       
            
                                </tr>
                               
                                </tbody>
                              {{-- <a href ="/Tambah" class="btn btn-primary mb-5">Tambah Produk</a> --}}
                              </table>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>

        <div class="kotak3">
            <div class="container mb-4">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id Barang</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Id Kategori</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col" >Keterangan Barang</th>
                                        <th scope="col" >Harga</th>
                                        
                                    </tr> 
                                </thead>
                               
                                <tbody>
                                   
                              
                                <tr>
                                        
                                       
            
                                </tr>
                               
                                </tbody>
                              {{-- <a href ="/Tambah" class="btn btn-primary mb-5">Tambah Produk</a> --}}
                              </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

<script>
    let arrow = document.querySelectorAll(".arrow")
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e)=>{
            console.log(e);
        let arrowParent = e.target.parentElement.parentElement;
        arrowParent.classList.toggle("showMenu");
        });
    }
        
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("close");
    });
</script>
</body>
</html>