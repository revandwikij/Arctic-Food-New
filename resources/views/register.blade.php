@extends('layouting.layout login.master')

@section('title', 'Register')

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

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

</style>



    <div class="regis-container">
      <form class="regis-form" action="/regis/verif" method="POST">
        @csrf
        <h2>Daftar</h2>

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
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
          const emailInput = document.querySelector('input[name="email"]');
          
          // Check if the email input has the email-exists class
          if (emailInput.classList.contains('email-exists')) {
              // Add a timeout to remove the class after 3 seconds (adjust as needed)
              setTimeout(function () {
                  emailInput.classList.remove('email-exists');
              }, 3000); // 3000 milliseconds = 3 seconds
          }
      });
  </script>
  
@endsection
