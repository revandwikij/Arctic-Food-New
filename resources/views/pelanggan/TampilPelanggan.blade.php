<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Pelanggan</title>
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">GO UMKM | data pelanggan</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
  {{-- <button type="button" class="btn btn-primary">Tambah data</button> --}}
</nav>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id pelanggan</th>
      <th scope="col">Id alamat</th>
      <th scope="col">Username</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data_pelanggan as $item)
    <tr>
      <th scope="row">{{$item['Id_Pelanggan']}}</th>
      <td>{{$item['Id_Alamat']}}</td>
      <td>{{$item['Username']}}</td>
      <td>{{$item['Jenis_kelamin']}}</td>
      <td>{{$item['Email']}}</td>
      <td>{{$item['Password']}}</td>
      <td>{{$item['No_Telp']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>
