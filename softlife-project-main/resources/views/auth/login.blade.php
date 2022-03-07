@extends('layouts.base')

@section('title')
    Login
@endsection

@section('body')
    {{-- <img class="leaf" src="{{ asset('assets/images/signIn/backgroundleaf.jpg') }}" alt=""> --}}
    <div class="col-md-6" style="margin-left: 25%">
        <div class="mylogo">
            <a href="{{route('home')}}"><img class="logo" src="{{ asset('assets/images/logo.black.png') }}" alt="softlife A&T"></a>
        </div>
        <h5>Login to your account</h5>

        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
        @endif

        @if (session('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-10">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email Address" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group col-md-10">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        placeholder="Password"name="password" autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-row">
                        <div class="signInBtn">
                            <button type="submit" class="btn btn-primary"> {{ __('Login') }}</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <p class="logIn">Dont have an account? <a href="{{route('register')}}">Register here</a></p>
                        </div>
                </div>
            </div>
        </form>
    </div>
@endsection

