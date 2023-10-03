@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

    @if (session('errors'))
        <div class="alert alert-danger">
            {{ session('errors') }}
        </div>
    @endif

	<style>
        .profile-card {
            max-width: 600px; /* Ukuran kartu profil */
            margin: 0 auto;
        }
        .profile-img-container {
    width: 150px; /* Ukuran lingkaran */
    height: 150px; /* Ukuran lingkaran */
    border-radius: 50%; /* Membuat foto menjadi lingkaran */
    overflow: hidden; /* Memastikan foto tidak meluber */
    margin: 0 auto; /* Pusatkan foto */
    position: relative; /* Untuk mengatur posisi foto dalam container */
    top: -225px; /* Sesuaikan dengan setengah tinggi container */
    z-index: 1; /* Tempatkan di atas latar belakang */
}
        .profile-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .background-img {
            width: 100%;
            padding-top: 56.25%; /* 16:9 aspect ratio */
            background-size: cover;
            background-position: center;
            margin-bottom: 15px;
        }
        /* Lebar input 100% */
        .w-100 {
            width: 100%;
        }
	</style>

<div class="container mt-5">
	<div class="profile-card card">
		<!-- Background Profil 16:9 -->
		<div class="background-img" style="background-image: url('../assets/css/images/Lbellfood.png');"></div>
		<div class="card-body">
			<!-- Foto Profil 1:1 -->
			<div class="profile-img-container">
				<img class="profile-img" src="../assets/css/images/arcticlogo.png" alt="Foto Profil">
			</div>
			<h5 class="card-title">Nama Toko</h5>
			<div class="row">
				<!-- Input NIB -->
				<div class="col-md-6">
					<div class="form-group">
						<label for="nib">NIB</label>
						<input type="text" class="form-control w-100" id="nib" placeholder="Masukkan NIB">
					</div>
				</div>
				<!-- Input Username -->
				<div class="col-md-6">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control w-100" id="username" placeholder="Masukkan Username">
					</div>
				</div>
				<!-- Input Email -->
				<div class="col-md-6">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control w-100" id="email" placeholder="Masukkan Email">
					</div>
				</div>
				<!-- Input Kota -->
				<div class="col-md-6">
					<div class="form-group">
						<label for="kota">Kota</label>
						<input type="text" class="form-control w-100" id="kota" placeholder="Masukkan Kota">
					</div>
				</div>
				<!-- Input Phone Number -->
				<div class="col-md-6">
					<div class="form-group">
						<label for="phone">Phone Number</label>
						<input type="text" class="form-control w-100" id="phone" placeholder="Masukkan Phone Number">
					</div>
				</div>
				<!-- Input Text Area untuk Bio -->
				<div class="col-md-12">
					<div class="form-group">
						<label for="bio">Bio</label>
						<textarea class="form-control w-100" id="bio" rows="3" placeholder="Tulis bio Anda di sini"></textarea>
					</div>
				</div>
			</div>
			<button class="btn btn-primary">Simpan</button>
		</div>
	</div>
</div>


@endsection
