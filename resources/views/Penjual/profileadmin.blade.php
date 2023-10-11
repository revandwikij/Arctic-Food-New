@extends('layouting.layout admin.master')

@section('title', 'Dashboard')

@section('content')

@if (session('errors'))
    <div class="alert alert-danger">
        {{ session('errors') }}
    </div>
@endif

<style>
    .profile-card {
        max-width: 600px;
        margin: 0 auto;
    }
    .profile-card .card-body {
        position: relative;
        padding-top: 0;
    }
    .profile-img-container {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        margin: 0 auto;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }
    .profile-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .w-100 {
        width: 100%;
    }
    .profile-background {
        background-image: url('../assets/css/images/Lbellfood.png');
        background-size: cover;
        background-position: center;
        height: 150px;
        margin-bottom: 15px;
    }
</style>

<div class="container mt-5">
    @if ($admin)
        @foreach ($admin as $ad)
        <div class="profile-card card">
            <div class="profile-background"></div>
            <div class="profile-img-container">
                <img class="profile-img" src="../assets/css/images/arcticlogo.png" alt="Foto Profil">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="username">Nama Admin</label>
                            <input type="text" class="form-control w-100" id="username" value="{{ $ad->username }}" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="nib">NIB</label>
                            <input type="text" class="form-control w-100" id="nib" value="cwqacqwcwq" readonly>
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control w-100" id="email" value="{{ $admin->email }}">
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control w-100" id="kota" value="evwe">
                        </div>
                    </div>
                    <div class="col-md-6 mt-2">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control w-100" id="phone" value="evwveve">
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea class="form-control w-100" id="bio" rows="3" style="height: 100px;">vwevwevew</textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-3">Simpan</button>
            </div>
        </div>
        @endforeach
    @else
        <div class="alert alert-warning">
            No admin data found.
        </div>
    @endif
</div>

@endsection
