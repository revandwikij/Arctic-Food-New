@extends('layouting.layout login.master')

@section('title', 'Login')

@section('content')
<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Login</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="login/verif">
                    @csrf
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="name">Email</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Password</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="password" name="password">
                            </div>
                        </div>
                    </div>
                        <button class="btn btn--radius-2 btn--red" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

