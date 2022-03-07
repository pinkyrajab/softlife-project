@extends('layouts.base')

@section('title')
    Tours
@endsection

@section('body')
    <!-- start introduction   -->
    <div class="carousel-inner">
        <div class="carousel-item introduction d-block w-100 active">
            <div>
                <p class="intro-text">
                    Get a chance to visit the top most rated restaurants around you
                    <br>
                    <br>
                    Explore | |  Experience | | Enjoy
                </p>
            </div>
        </div>
    </div>
    <!-- end introduction -->

    <div class="container">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
@endsection
