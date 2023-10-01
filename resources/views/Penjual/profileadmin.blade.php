@extends('layouting.layout admin.master')

@section('title', 'dashboard')

@section('content')

    @if (session('errors'))
        <div class="alert alert-danger">
            {{ session('errors') }}
        </div>
    @endif

    <section class="py-5">
        <div class="container">
            <div>
                {{-- <a href="/"><button class="btn btn-primary" style="margin-bottom: 20px">KEMBALI</button></a> --}}
            </div>
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="container" style="width: unset">

                    <div class="p-4">
                        <div class="img-circle text-center mb-3">
                            <div style="background-image: url('{{ asset('../assets/css/images/bg-1.jpeg') }}'); width: 100%; height: 30%; opacity: 0.5;"
                                alt="bg"></div>
                            <img src="assets/css/images/arcticlogo.png" alt="Image"
                                style="width: 10%; border-radius: 100%; img{ }" class="shadow">
                        </div>
                        <h4 class="text-center">{{ Auth::user()->username }}</h4>
                    </div>

                        <div class="profile-tab-nav border-right">
                            <div class="nav  nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account"
                                    role="tab" aria-controls="account" aria-selected="true">
                                    <i class="fa fa-home text-center mr-1"></i>
                                    Akun
                                </a>
                                <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab"
                                    aria-controls="password" aria-selected="false">
                                    <i class="fa fa-key text-center mr-1"></i>
                                    Password
                                </a>
                                <a class="nav-link" href="/add">
                                    <i class="fa fa-key text-center mr-1"></i>
                                    Add Account
                                </a>
                            </div>
                        </div>
                </div>


                {{-- <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<form action="/updatepel" method="POST">
							@csrf
							<h3 class="mb-4">AKUN SAYA</h3>
							@foreach ($pelanggan as $p)
							<input type="text" value="{{$p ->Id_Pelanggan}}" name="Id_Pelanggan" hidden>
							<input type="text" value="{{Auth::user() -> id}}" name="user" hidden>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Username</label>
								  	<input type="text" name="username" class="form-control" value="{{ $p->username }}" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Jenis Kelamin</label>
								  	<input type="text" name="jenkel" class="form-control" value="{{ $p->jenkel }}" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="email" name="email" class="form-control" value="{{ $p->email }}" >
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
								  	<label>No. Telepon</label>
								  	<input type="text" name="no_Telp" class="form-control" value="{{ $p->no_Telp }}" >
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
							<!-- Isi form pengeditan informasi akun di sini -->
							<button type="submit" class="btn btn-primary">Simpan</button>
						</form>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<form action="/updatepassword" method="POST">
							@csrf
							<div class="form-group">
								<label for="old_password">Password Lama</label>
								<div class="input-group">
									<input type="password" name="old_password" id="old_password" class="form-control" required>
									<div class="input-group-append">
										<span class="input-group-text">
											<i id="toggle_password" class="fas fa-eye-slash"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="new_password">Password Baru</label>
										<input type="password" name="new_password" id="new_password" class="form-control" required>

									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="confirm_password">Konfirmasi Password Baru</label>
										<input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
									</div>
								</div>
							</div>
							<div>
								<button type="submit" class="btn btn-primary">Perbarui Password</button>
								<button type="button" class="btn btn-light">Kembali</button>
							</div>
						</form>
					</div>
                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                        <h3 class="mb-4">address Settings</h3>
                        <div class="row">

                            <div class="col-md-9 mb-5">
                                <h4 >Alamat yg sudah ada</h4>
                                <select name="" id="">
                                    @foreach ($alamat as $item)
                                    <option value="{{ $item->Id_Alamat }}">{{ $item->Label }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <form action="/alamat" method="GET">
                                @csrf
								<div class="form-group">
                                    <label>Label Alamat</label>
                                    <input type="text" class="form-control" name="Label" placeholder="Contoh : Rumah, Sekolah, Kantor Saya"></input>
                                </div>
								<div class="form-group">
                                    <label>Nama Penerima</label>
                                    <input type="text" class="form-control" name="Nama_Penerima">
                                </div>
								<div class="form-group">
                                    <label>No HP</label>
                                    <input type="text" class="form-control" name="No_Hp">
                                </div>
                                <div class="form-group">
                                    <label>Alamat Lengkap</label>
                                    <textarea type="text" class="form-control" name="Alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Kota</label>
                                    <input type="text" class="form-control" name="Kota">
                                    <select name="Kota" id="Kota">
                                        @foreach ($biaya_ship as $data)
                                        <option value="{{$data['Kota']}}">{{$data['Kota']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kode_Pos</label>
                                    <input type="text" class="form-control" name="Pos">
                                </div>
							    </div>
						        </div>
						    <div>
							    <button class="btn btn-primary" >Tambah</button>
                               </form>
                        </div>
                    </div>
				</div> --}}
            </div>
        </div>
    </section>

@endsection
