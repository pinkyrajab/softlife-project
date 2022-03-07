@extends('layouts.base')

@section('title')
    Register
@endsection

@section('body')
    {{-- <img class="leaf" src="{{ asset('assets/images/signIn/backgroundleaf.jpg') }}" alt=""> --}}
    <div class="col-md-6" style="margin-left: 25%">
        <div class="mylogo">
            <a href="{{route('home')}}"><img class="logo" src="{{ asset('assets/images/logo.black.png') }}" alt="softlife A&T"></a>
        </div>

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-10">
                    <label for="inputUsername">Username</label>
                    <input type="name" class="form-control" id="username" placeholder="Name" name="name" autocomplete="name" value="{{ old('name') }}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-md-10">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name='email' autocomplete="name" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group col-md-10">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" autocomplete="new-password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group col-md-10">
                    <label for="inputPassword4">Confirm Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" name="password_confirmation" >
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
             </div>

            {{-- <div class="form-row">
                <div class="form-group col-md-10">
                    <label for="Radio" class="col-md-2">Gender</label>
                    <div class="form-check col-md-4">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault3">
                            Other
                        </label>
                    </div>
              </div>
             </div> --}}

           <div class="form-row">
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        I have agreed to all the <a href="javascript:void()">terms and conditions</a>
                    </label>
                    </div>
                </div>
                <div class="signInBtn">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <p class="logIn">Already have an account? <a href="{{ route('login') }}">logIn</a></p>
                </div>
           </div>
        </form>
    </div>
@endsection


