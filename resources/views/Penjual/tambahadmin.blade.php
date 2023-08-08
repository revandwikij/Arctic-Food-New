@extends('layouting.layout login.master')

@section('title', 'Register')

@section('content')
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Tambah Akun</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="/tambahadmin">
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
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Role</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="level" name="level" value="penjual" readonly>
                                </div>
                            </div>
                        </div>
                        <div>

                            <button onclick="return confirm('Beres?')" class="btn btn--radius-2 btn--red" type="submit">tambah</button>
                            <a href="/login" class="btn btn--radius-2 btn--red" type="submit">Sudah Punya Akun?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

