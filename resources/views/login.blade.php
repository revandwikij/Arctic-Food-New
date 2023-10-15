@extends('layouting.layout login.master')

@section('title', 'Login')

@section('content')

    <div class="login-container">
      <form class="login-form" action="/login/verif" method="POST">
        {{-- @csrf --}}
        {{ csrf_field() }}
        {{-- {{ csrf_token() }} --}}
        <h2>Login</h2>
        <input type="text" placeholder="Email" name="email" required>
        <input type="password" placeholder="Kata Sandi" name="password" required />
        <input type="submit" value="Login" />
        <p>
          Belum Punya Akun? <a href="/regis">Klik Disini</a>
        </p>
      </form>
    </div>
@endsection
