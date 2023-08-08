@extends('layouting.layout login.master')

@section('title', 'Register')

@section('content')
    <div class="regis-container">
      <form class="regis-form" action="/regis/verif" method="POST">
        @csrf
        <h2>Daftar</h2>

        <input type="text" placeholder="User" name="username" required>

        <input type="text" placeholder="Email" name="email" required>

        <input type="text" placeholder="No. Telepon" name="no_telp" required>

        <select class="input--style-5" id="exampleInputEmail1" name="jenkel" required>
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
@endsection
