@extends('layouting.home.master')

@section('title', 'Detail-Produk')

@section('content')
<br>
<br>

    <div class = "card-wrapper">
        <div class = "card">
          <!-- card left -->
          <div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase">
                <img src = "" alt = "image">
                <img src = "" alt = "image">
                <img src = "" alt = "image">
                <img src = "" alt = "image">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                  <img src = "repan.jpg" alt = "image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "2">
                  <img src = "padil.jpg" alt = "image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "3">
                  <img src = "repan2.jpg" alt = "image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "4">
                  <img src = "repan2.jpg" alt = "image">
                </a>
              </div>
            </div>
          </div>
          <!-- card right -->
          <div class = "product-content">
            <h2 class = "product-title">Nama Barang ($)</h2>
            <a href = "#" class = "product-link">Jadiin Stok : ($stok)</a>
            <div class = "product-rating">
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star-half-alt"></i>
              <span>4.7(21)</span>
            </div>

            <div class = "product-price">
              <p class = "new-price">Harga Barang: <span>Rp. 45.000 ($)</span></p>
            </div>

            <div class = "product-detail">
              <h2>Deskripsi Barang: </h2>
              <p>(desk produk)Bismilah Projek jadi dan amannnnnnnnnnnnnnnnnnnnnnnnnn</p>
              <p>(desk produk)aminnnnnnnnnnnnnnnnnnnnn</p>
              <ul>
                <li>Kategori : <span>($Kategori)</span></li>
                <!-- <li>Available: <span>in stock</span></li>
                <li>Category: <span>Shoes</span></li>
                <li>Shipping Area: <span>All over the world</span></li>
                <li>Shipping Fee: <span>Free</span></li> -->
              </ul>
            </div>

            <div class = "purchase-info">
              <input type = "number" min = "0" value = "1">
              <button type = "button" class = "btn">
                Tambah keranjang trigger <i class = "fas fa-shopping-cart"></i>
              </button>
              <!-- <button type = "button" class = "btn">Compare</button> -->
            </div>
<!--
            <div class = "social-links">
              <p>Share At: </p>
              <a href = "#">
                <i class = "fab fa-facebook-f"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-twitter"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-instagram"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-whatsapp"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-pinterest"></i>
              </a>
            </div>
          </div>
        </div>
      </div> -->
@endsection
