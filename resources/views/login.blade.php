@extends('layouting.layout login.master')

@section('title', 'Login')

@section('content')

<style>
  /* Styles for the notification container */
  /* .notification {
      position: fixed;
      top: 20px;
      right: 20px;
      padding: 10px 20px;
      background-color: #80d0f5;
      color: #fff;
      border-radius: 5px;
      animation: slideIn 0.3s ease-in-out;
      display: none;
  } */

  .error-message {
        margin-top: 10px;
        padding: 10px;
        background-color: #ff6b6b;
        color: #fff;
        border-radius: 5px;
        opacity: 1;
        transition: opacity 1s; /* Adjust the transition duration as needed */
    }

    /* Hide the error message */
    .error-message.hidden {
        opacity: 0;
    }
  /* Animation keyframes for the slide-in effect */
    /* @keyframes slideIn {
        0% {
            right: -300px;
        }
        100% {
            right: 20px;
        }
        
    } */
</style>
    
<div class="login-container">
  <form class="login-form" action="/login/verif" method="POST">
      @csrf
      <h2>Login</h2>
      <input type="text" placeholder="Email" name="email" required>
      <input type="password" placeholder="Kata Sandi" name="password" required />
      <input type="submit" value="Login" />
      <p>
          Belum Punya Akun? <a href="/regis">Klik Disini</a>
      </p>
      
      @if(session('loginError'))
      <div class="error-message">
          {{ session('loginError') }}
      </div>
      @endif
  </form>
</div>

<script>
  // Check if there is an error message
  const errorMessage = document.querySelector('.error-message');
  if (errorMessage) {
      // Hide the error message after 3 seconds (adjust the time as needed)
      setTimeout(() => {
          errorMessage.classList.add('hidden');
      }, 1000);
  }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

   


