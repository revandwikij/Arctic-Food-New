@extends('layouting.layout login.master')

@section('title', 'Register')

@section('content')
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/regis/verif">
                        @csrf
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="username" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Phone Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="no_telp" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <div class="input-group">
                                    <select class="input--style-5" id="exampleInputEmail1" name="jenkel" required>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" required>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                            {{-- <p>Sudah Punya Akun Klik<a href="/coba">Disini</a></p> --}}
                            <a href="/coba" class="btn btn--radius-2 btn--red" type="submit">Sudah Punya Akun?</a>
                        </div>
                        <div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

