@extends('layouting.home.master')

@section('title', 'Profile')

@section('content')
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- @foreach ($pelanggan as $p) --}}
    <section class="py-5 my-5">
		<div class="container">
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="assets/css/images/rep.jpg" alt="Image" class="shadow">
						</div>
						<h4 class="text-center">{{ Auth::user()->username }}</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i>
							Akun
                        <a class="nav-link" id="address-tab" data-toggle="pill" href="#address" role="tab" aria-controls="address" aria-selected="false">
                            <i class="fa fa-address-book text-center mr-1"></i>
                            Alamat
                        </a>
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i>
							Password
						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i>
							Security
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">AKUN SAYA</h3>
                        @foreach ($pelanggan as $p)
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Username</label>
								  	<input type="text" class="form-control" value="{{ Auth::user()->username }}" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Jenis Kelamin</label>
								  	<input type="text" class="form-control" value="{{ $p->jenkel }}" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>No. Telepon</label>
								  	<input type="text" class="form-control" value="{{ $p->no_Telp }}" readonly>
								</div>
							</div>
							<div class="col-md-6">

							</div>
							<div class="col-md-6">

							</div>
							<div class="col-md-12">
								<div class="form-group">
								  	<label>Bio</label>
									<textarea class="form-control" rows="4">Gaboleh vnbcjueqiev </textarea>
								</div>
							</div>
						</div>
                        @endforeach
						<div>
							<a href="/"><button class="btn btn-primary">KEMBALI</button></a>
							{{-- <button class="btn btn-light">Cancel</button> --}}
						</div>
						<div>
							<a href="/logout"><button class="btn btn-primary">LOGOUT</button></a>
							{{-- <button class="btn btn-light">Cancel</button> --}}
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Security Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Login</label>
								  	<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Two-factor auth</label>
								  	<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="recovery">
										<label class="form-check-label" for="recovery">
										Recovery
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                        <h3 class="mb-4">address Settings</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/alamat" method="GET">
                                @csrf
								<div class="form-group">
                                    <label>Label Alamat</label>
                                    <input type="text" class="form-control" name="Label" placeholder="Contoh : Rumah, Sekolah, Kantor Saya"></input>
                                </div>
								<div class="form-group">
                                    <label>Nama Penerima</label>
                                    <input type="text" class="form-control" name="Nama_Penerima"></input>
                                </div>
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <textarea type="text" class="form-control" name="Alamat"></textarea>
                                </div>
								<div class="form-group">
                                    <label>Nomor Handphone</label>
                                    <input type="text" class="form-control" name="No_Hp"></input>
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" class="form-control" name="Kota"></input>
                                </div>
                                <div class="form-group">
                                    <label>Kode_Pos</label>
                                    <input type="text" class="form-control" name="Pos"></input>
                                </div>
							    </div>
						        </div>
						    <div>
							    <button class="btn btn-primary" >Tambah</button>
                               </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
    {{-- @endforeach --}}


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection
