@extends('layouting.layout login.master')

@section('title', 'Register')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
<!-- Tautkan CSS Font Awesome ke dalam head HTML -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<style>
/* Define the shake animation */
.input-container {
  position: relative;
}

.email-exists {
  animation: shake 0.5s;
  animation-iteration-count: 3;
  border: 1px solid red;
}

.error-message {
  position: absolute;
  top: 70%; /* Position it below the input field */
  left: 3px;
  color: red; /* Change the color to indicate an error */
  font-size: 11px; /* Adjust the font size as needed */
  display: block;
}

/* Define the shake animation */
@keyframes shake {
  0% { transform: translateX(0); }
  20% { transform: translateX(-5px); }
  40% { transform: translateX(5px); }
  60% { transform: translateX(-5px); }
  80% { transform: translateX(5px); }
  100% { transform: translateX(0); }
}

/* Styles for the "Info" icon button */
.info-icon {
  background: none;
  border: none;
  padding: 0;
  font-size: 24px; /* Sesuaikan ukuran ikon sesuai kebutuhan Anda */
  color: #007bff; /* Warna ikon (misalnya, biru) */
  cursor: pointer;
}

.info-icon:focus {
    outline: none; /* Hapus garis tanda fokus jika tombol mendapat fokus */
}

/* Styles for the information container */
.info-container {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); /* Untuk menempatkan di tengah */
  max-width: 400px; /* Sesuaikan lebar maksimal sesuai kebutuhan Anda */
  padding: 20px;
  background-color: #f0f0f0;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

/* Styles for the registration form */
.regis-form {
  position: relative;
}

/* Styles for the info icon in the registration form */
.info-icon-form {
  position: absolute;
  top: 40px;
  right: 90px;
  font-size: 20px;
  color: #007bff;
  cursor: pointer;
}
</style>

<div class="regis-container">
  <form class="regis-form" action="/regis/verif" method="POST">
    @csrf
    <h2>Daftar</h2>

    <!-- Info icon for the registration form -->
    <span id="infoButtonForm" class="info-icon-form">
      <i class="fas fa-info-circle"></i>
    </span>

    <input type="text" placeholder="User" name="username" required>

    <div class="input-container">
      <input type="text" placeholder="Email" name="email" required class="@if(session('alert')) email-exists @endif">
      @if(session('alert'))
          <div class="error-message">Email sudah digunakan</div>
      @endif
    </div>

    <input type="text" placeholder="No. Telepon" name="no_Telp" required>

    <select placeholder="Jenkel" name="jenkel" required>
      <option value="L">L</option>
      <option value="P">P</option>
    </select>

    <input type="password" placeholder="Kata Sandi" name="password" required />

    <input type="submit" value="Daftar" />
    <p>
      Sudah Punya Akun? <a href="/login">Klik Disini</a>
    </p>
  </form>

  <!-- Kotak informasi -->
  <div id="infoContainer" class="info-container">
    <h3>Syarat dan Ketentuan Daftar</h3>
    <ul>
      <li>Harus diisi lengkap</li>
      <li>Username: Nama Lengkap</li>
      <li>Email: contoh@gmail.com</li>
      <li>Password: Minimal 8 karakter</li>
    </ul>
    <button id="closeInfoButton" class="info-icon">
      <i class="fas fa-times"></i>
    </button>
  </div>


<script>
  // JavaScript untuk menampilkan dan menyembunyikan kotak informasi
  const infoButtonForm = document.getElementById('infoButtonForm');
  const infoContainer = document.getElementById('infoContainer');
  const closeInfoButton = document.getElementById('closeInfoButton');

  infoButtonForm.addEventListener('click', () => {
    infoContainer.style.display = 'block';
  });

  closeInfoButton.addEventListener('click', () => {
    infoContainer.style.display = 'none';
  });
</script>
</div>
@endsection
