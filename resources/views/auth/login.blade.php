<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <link rel="shortcut icon" href="LOGO.svg" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/signIn.css') }}">

</head>
<body>
    <img class="leaf" src="{{ asset('assets/images/signIn/backgroundleaf.jpg') }}" alt="">



    <div class="container signInForm">
        <div class="mylogo">
        <a href="{{route('home')}}"><img class="logo" src="{{ asset('assets/images/logo.black.png') }}" alt="softlife A&T"></a>
        </div>
        <h5>LogIn into Account</h5>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-row">

                <div class="form-group col-md-10">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail4" placeholder="Email Address" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus >
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                </div>


                <div class="form-group col-md-10">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword4" placeholder="Password"name="password" required autocomplete="current-password">
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

        </form>

    </div>



<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
 <!-- Bootstrap 4.5 JS -->
 <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
 <!-- Popper JS -->
 <script src="{{ asset('assets/js/popper.min.js') }}"></script>
 <!-- Font Awesome -->
 <script src="{{ asset('assets/js/all.min.js') }}"></script>
</body>
</html>
