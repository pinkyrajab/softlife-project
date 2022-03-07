@extends('layouts.base')

@section('title')
    Restaurants
@endsection

@section('body')
    <div class="carousel-inner">
        <div class="carousel-item introduction d-block w-100 active">
            <div>
              <p class="intro-text">
                  Get a chance to visit the top most rated restaurants around you
                  <br>
                  Explore | |  Experience | | Enjoy
              </p>
            </div>
        </div>
    </div>
  <br>

  <div class="container-fluid">
      <div class="row">
        <div class="all_rest col-lg-3 col-md-3">
          <ul>
              <a href=""><li>All restaurants</li></a>
              <a href=""><li>African dishes</li></a>
              <a href=""><li>Chinese & japanese cuisines</li></a>
              <a href=""><li>Ethopian dishes</li></a>
              <a href=""><li>Swahili dishes</li></a>
              <a href=""><li>Continental foods</li></a>
          </ul>
        </div>

        <div class="col-lg-7 col-md-7">
          <div class="row">
              <div class="col-lg-6 col-md-6">
                  <img src="{{ asset('assets/images/restaurants/java house.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-6 col-md-6">
                  <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor harum reiciendis est laborum omnis eaque! Atque sunt suscipit enim dolorem velit magnam, animi repellat distinctio. Corporis odit reiciendis quaerat iure!
                      <br><a href=""><button class="details">DETAILS</button></a>
                    </p>
              </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-6">
                <img src="{{ asset('assets/images/restaurants/misono restaurant.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor harum reiciendis est laborum omnis eaque! Atque sunt suscipit enim dolorem velit magnam, animi repellat distinctio. Corporis odit reiciendis quaerat iure!
                    <br><a href=""><button class="details">DETAILS</button></a>
                </p>
            </div>
          </div>

          <div class="row">
              <div class="col-lg-6 col-md-6">
                <img src="{{ asset('assets/images/restaurants/inti-nairobi-1.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-6 col-md-6">
                  <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor harum reiciendis est laborum omnis eaque! Atque sunt suscipit enim dolorem velit magnam, animi repellat distinctio. Corporis odit reiciendis quaerat iure!
                      <br><a href=""><button class="details">DETAILS</button></a>
                  </p>
              </div>
          </div>

          <div class="row">
              <div class="col-lg-6 col-md-6">
                  <img src="{{ asset('assets/images/restaurants/peppertree.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-6 col-md-6">
                  <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor harum reiciendis est laborum omnis eaque! Atque sunt suscipit enim dolorem velit magnam, animi repellat distinctio. Corporis odit reiciendis quaerat iure!
                      <br><a href=""><button class="details">DETAILS</button></a>
                  </p>
              </div>
          </div>

          <div class="row">
              <div class="col-lg-6 col-md-6">
                  <img src="{{ asset('assets/images/restaurants/mercardo-rest.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-6 col-md-6">
                  <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor harum reiciendis est laborum omnis eaque! Atque sunt suscipit enim dolorem velit magnam, animi repellat distinctio. Corporis odit reiciendis quaerat iure!
                      <br><a href=""><button class="details">DETAILS</button></a>
                  </p>
              </div>
          </div>

        </div>

        <div class="col-lg-2 col-md-2">
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
      </div>
  </div>
@endsection
