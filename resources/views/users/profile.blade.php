@extends('layouting.home.master')

@section('title', 'Profile')

@section('content')
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- @foreach ($pelanggan as $p) --}}
    <section class="py-5">
		<div class="container">
			<div>
				<a href="/"><button class="btn btn-primary" style="margin-bottom: 20px">BACK</button></a>
			</div>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="assets/css/images/defprof.png" alt="Image" style="width: 10px; height: 10px;" class="shadow">
						</div>
						<h4 class="text-center">{{ Auth::user()->username }}</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i>
							Account
                        <a class="nav-link" id="address-tab" data-toggle="pill" href="#address" role="tab" aria-controls="address" aria-selected="false">
                            <i class="fa fa-address-book text-center mr-1"></i>
                            Address
                        </a>
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i>
							Password
						</a>
						<a class="nav-link" href="/logout">
							{{-- <i>
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
									<path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 192 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128zM160
									96c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 32C43 32 0 75 0 128L0 384c0 53 43 96 96 96l64 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l64 0z"/></svg>
							</i> --}}
							<i class="fa fa-sign-out text-center mr-1"></i>
							Logout
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<form action="/updatepel" method="POST">
							@csrf
							<h3 class="mb-4">MY ACCOUNT</h3>
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
								  	<label>Gender</label>
								  	<input type="text" name="jenkel" class="form-control" value="{{ $p->jenkel }}" readonly >
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
								  	<label>Phone Number</label>
								  	<input type="text" name="no_Telp" class="form-control" value="{{ $p->no_Telp }}" >
								</div>
							</div>
							<div class="col-md-6">

							</div>
							<div class="col-md-6">

							</div>
							{{-- <div class="col-md-12">
								<div class="form-group">
								  	<label>Bio</label>
									<textarea class="form-control" rows="4">Gaboleh vnbcjueqiev </textarea>
								</div>
							</div> --}}
						</div>
                        @endforeach
							<!-- Isi form pengeditan informasi akun di sini -->
							<button type="submit" class="btn btn-primary">Save</button>
						</form>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">PASSWORD SETTING</h3>
						<form action="/updatepassword" method="POST">
							@csrf
							<div class="form-group">
								<label for="old_password">Old Password</label>
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
										<label for="new_password">New Password</label>
										<input type="password" name="new_password" id="new_password" class="form-control" required>

									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="confirm_password">Confirm New Password</label>
										<input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
									</div>
								</div>
							</div>
							<div>
								<button type="submit" class="btn btn-primary">Update Password</button>
								<button type="button" class="btn btn-light"><a href="/profile">Refresh</a></button>
							</div>
						</form>
					</div>
                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                        <h3 class="mb-4">ADDRESS SETTING</h3>
                        <div class="row">

                            <div class="col-md-9 mb-5">
                                <h4 >Existing Password</h4>
                                <form action="/alamat/delete" method="post">
                                    @csrf
                                    @method('delete')
                                    <select name="address_id" id="address_id">
                                        @foreach ($alamat as $item)
                                            <option value="{{ $item->Id_Alamat }}">{{ $item->Label }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit">Delete Address</button>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form action="/alamat" method="GET">
                                @csrf
								<div class="form-group">
                                    <label>Address Label</label>
                                    <input type="text" class="form-control" name="Label" placeholder="Contoh : Rumah, Sekolah, Kantor Saya"></input>
                                </div>
								<div class="form-group">
                                    <label>Recipient's Name</label>
                                    <input type="text" class="form-control" name="Nama_Penerima">
                                </div>
								<div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="No_Hp">
                                </div>
                                <div class="form-group">
                                    <label>Detail Address</label>
                                    <textarea type="text" class="form-control" name="Alamat"></textarea>
                                </div>
                                <div class="form-group">
                                    {{-- <label>Kota</label>
                                    <input type="text" class="form-control" name="Kota"> --}}
                                    <select name="Kota" id="Kota">
                                        @foreach ($biaya_ship as $data)
                                        <option value="{{$data['Kota']}}">{{$data['Kota']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="text" class="form-control" name="Pos">
                                </div>
							    </div>
						        </div>
						    <div>
							    <button class="btn btn-primary" >Add</button>
                               </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
    {{-- @endforeach --}}

	<script>
		 var togglePassword = document.getElementById("toggle_password");
    var oldPasswordInput = document.getElementById("old_password");

    togglePassword.addEventListener("click", function () {
        if (oldPasswordInput.type === "password") {
            oldPasswordInput.type = "text";
            togglePassword.classList.remove("fa-eye-slash");
            togglePassword.classList.add("fa-eye");
        } else {
            oldPasswordInput.type = "password";
            togglePassword.classList.remove("fa-eye");
            togglePassword.classList.add("fa-eye-slash");
        }
    });
	</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@endsection
