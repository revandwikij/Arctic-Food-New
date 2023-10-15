@extends('layouting.layout login.master')

@section('title', 'Tambah Admin')

@section('content')
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: Poppins, sans-serif;
  }
  .addmin-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  .addmin-form {
    max-width: 400px;
    padding: 20px;
    border-radius: 10px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  }
  .addmin-form h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 3px;
  }
  .addmin-form input[type="text"],
  .addmin-form input[type="password"] {
    width: 95%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
  }

  .addmin-form select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2)
  }

  .addmin-form input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border: none;
    border-radius: 5px;
    background-color: #2323a0;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .addmin-form input[type="submit"]:hover {
    background-color: #111;
  }
  .addmin-form p {
    text-align: center;
    margin-top: 20px;
  }
  .addmin-form a {
    color: #3180ff;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  .addmin-form a:hover {
    color: #111;
  }

</style>
    <div class="addmin-container">
      <form class="addmin-form" action="/tambahadmin" method="POST">
        @csrf
        <h2>Tambah Akun Admin</h2>

        <input type="text" placeholder="Username" name="username" required>

        <input type="text" placeholder="Email" name="email" required>

        <input type="password" placeholder="Password" name="password" required>

        <input type="text" name="level" value="admin">

        <input type="submit" value="Tambah Admin" />
        
      </form>
    </div>
@endsection
