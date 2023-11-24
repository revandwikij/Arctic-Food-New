@extends('layouting.layout login.master')

@section('title', 'Forgor Password')

@section('content')

<Style>
    body {
        background: #d3d3d3
    }

    .main {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form {
        background: #fff;
        padding: 50px 30px;
    }
</Style>

<body>
    <div class="main">
        <div class="form">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session()->has('status'))
                <div class ="alert alert-success">
                    {{ session()->get('status') }}
                </div>
            @endif

            <h2>Forgot Your Password ?</h2>
            <p>please enter your email to password reset request</p>
            <form method="POST" action="/send">
                @csrf

                <div class="block">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button>
                        {{ __('Email Password Reset Link') }}
                    </x-button>
                </div>
            </form>
            <br>
            <a href="/index"> <button class="btn btn-danger profile-button">Kembali</button></a>
        </div>
    </div>
@endsection
