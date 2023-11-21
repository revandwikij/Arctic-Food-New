@extends('layouting.layout admin.master')

@section('title', 'Admin Profile')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Profile</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Admin Profile</h3>
          </div>
          @foreach ($penjual as $p)
          <div class="card-body">
            <div class="mb-3">
              <label for="adminName" class="form-label">Admin Name:</label>
              <input type="text" class="form-control" id="adminName" value="{{ $p->Username }}" readonly>
            </div>
            <div class="mb-3">
              <label for="adminEmail" class="form-label">Email:</label>
              <input type="email" class="form-control" id="adminEmail" value="{{ $p->Email }}" readonly>
            </div>
            <div class="mb-3">
              <label for="adminPhone" class="form-label">Telephone Number:</label>
              <input type="tel" class="form-control" id="adminPhone" value="{{ $p->No_Telp }}" readonly>
            </div>
            <div class="mb-3">
              <label for="shopAddress" class="form-label">Shop Address:</label>
              <textarea class="form-control" id="shopAddress" rows="3" readonly>{{ $p->Alamat }}</textarea>
            </div>
            <div class="mb-3">
                <a href="/add" for="shopAddress" class="form-label">Tambah Akun Admin</a>
              </div>
        </div>

          @endforeach
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

@endsection
