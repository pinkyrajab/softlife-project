@extends('layouts.base')

@section('title')
    Hotels
@endsection

@section('body')
    <div class="carousel-inner">
        <div class="carousel-item introduction d-block w-100 active">
            <div>
                <p class="intro-text">
                    Explore | |  Experience | | Enjoy
                </p>
            </div>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="col-lg-3 col-sm-12 col-md-3">
            <h6>Filter by:</h6>
            <h7>Location</h7>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Nairobi
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                <label class="form-check-label" for="flexCheckChecked">
                Mombasa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                <label class="form-check-label" for="flexCheckChecked">
                Naivasha
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                <label class="form-check-label" for="flexCheckChecked">
                Nakuru
                </label>
            </div>

            </div>

            <h7>Facilities</h7>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Swimming pool
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Gym
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Pets Allowed
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                WIFI
                </label>
            </div>
        </div>
    </div>
@endsection
