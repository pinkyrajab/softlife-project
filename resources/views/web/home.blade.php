@extends('layouts.base')

@section('title')
    Home
@endsection

@section('body')

    <!-- carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item ad1 d-block w-100 active" data-bs-interval="2800">
                <p>WELCOME TO SOFTLIFE <br>ADVENTURES AND TRAVELLERS
                    <br><a href="#getstarted"><button>GET STARTED</button></a>
                    <marquee class="mycarouselmarquee" direction = "left" scrollamount="22">Where your softlife dreams come true!</marquee>
                </p>
            </div>

            <div class="carousel-item ad2 d-block w-100"data-bs-interval="2200">
                <p>START TO ENJOY UNIQUE PLACES
                    <br><a href="#getstarted"><button>GET STARTED</button></a>
                </p>
            </div>
            <div class="carousel-item ad3 d-block w-100"data-bs-interval="2200">
                <p>FINALLY.... <br>TIME FOR NEW ADVENTURES
                    <br><a href="#getstarted"><button>GET STARTED</button></a>
                </p>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- END CAROUSEL  -->

    <hr>

    <div class="offer">
        <div class="container margin_60">
            <div class="what_we_offer">
                <a id="getstarted"><h4>WHAT WE OFFER</h4></a>
                <div class="row">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-md-6 hotel_jpg">
                            <a href="{{ route('hotels') }}">
                                <img src="{{ asset('assets/images/hotels/hotelhomepage.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-sm-12 col-lg-6 col-md-6">
                            <p class="info visible-lg">
                                Life's too short to stay stressed. Let's give you the giveaway you deserve alone or with
                                your babe. Your staycation is here. Browse some of our hotels and accomodations.
                            <p class="more visible-lg"><a href="{{ route('hotels') }}"><button class="see_more"><span>SEE MORE</span></button></a></p>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <p class="info visible-lg">
                            We love the trails; they are more than fitness play field to us.
                            They are grounds where we become more intimately connected with self and nature.
                            <p>
                                The trails are home. We know you love being out there; we have over a hundred documented trails and scheduled adventure
                                journeys allowing you to choose from wide variety of trail experiences (the vast Rift Valley, dense pristine forests,
                                golden moorlands, and alpine deserts all in one space.
                            </p>
                            <p class="more visible-lg"><a href="{{ route('tours') }}"><button class="see_more"><span>SEE TOURS</span></button></a></p>
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6 adventures_jpg">
                        <a href=""><img src="{{ asset('assets/images/adventures/travel1.jpg') }}" alt="" class="img-fluid"></a>
                        <div class="sm_what_we_offer">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo sit odio quis sequi ipsum unde nobis enim voluptatum recusandae amet quas nesciunt natus nemo laudantium quam architecto, cupiditate culpa omnis?</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-6 restaurant_jpg">
                        <a href=""><img src="{{ asset('assets/images/restaurants/mawimbi-2.jpg') }}" alt="" class="img-fluid "></a>
                        <div class="sm_what_we_offer">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo sit odio quis sequi ipsum unde nobis enim voluptatum recusandae amet quas nesciunt natus nemo laudantium quam architecto, cupiditate culpa omnis?</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <p class="info visible-lg">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, nihil similique. Consequuntur facere explicabo consequatur perferendis recusandae quis non esse rem odio minima, veritatis sapiente cum error distinctio ut! Asperiores.
                            <p class="more visible-lg"><a href="all_restaurants.html"><button class="see_more"><span>SEE MORE</span></button></a></p>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6 col-md-6">
                        <p class="info visible-lg">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium, nihil similique. Consequuntur facere explicabo consequatur perferendis recusandae quis non esse rem odio minima, veritatis sapiente cum error distinctio ut! Asperiores.
                            <p class="more visible-lg"><a href="all_tours.html"><button class="see_more"><span>SEE MORE</span></button></a></p>
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-6 col-md-6 tours_jpg">
                        <a href=""><img src="{{ asset('assets/images/tours/5_medium.jpg') }}" alt="" class="img-fluid"></a>
                        <div class="sm_what_we_offer">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo sit odio quis sequi ipsum unde nobis enim voluptatum recusandae amet quas nesciunt natus nemo laudantium quam architecto, cupiditate culpa omnis?</p>
                        </div>
                    </div>
                </div>

                <p class="become-member">**BECOME A MEMBER OF SOFTLIFE TODAY AND GET A CHANCE TO ENJOY EXCLUSIVE OFFERS**
                <br> <br>
                <a href="{{ route('login') }}">SIGN UP NOW  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                    <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg></a></p>
            </div>
        </div>
    </div>
    <!-- end what we offer part -->

    <h5><strong>LATEST BLOG NEWS</strong></h5>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 balloon_blog">
                <img src="{{ asset('assets/images/blogs/hot_air_ballon_blog.jpg') }}" alt="" class="img-fluid">
                <p><strong>Floating in the MARA</strong> <br> The soft, early morning breeze takes the balloon southwards towards the Tanzanian border, with the typical flight path along the Mara River and its adjoining forest, and over the open pl..
                <a href="blogs.html">See more</a></p>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 sushi_blog">
                <img src="{{ asset('assets/images/blogs/sushi_blog.jpeg') }}" alt="" class="img-fluid">
                <p><strong>The Art of Sushi</strong> <br> There is a lot to be said about sushi. There are also a lot of key components that go into high quality sushi – things like properly seasoned rice and the freshest of fish. Unmistakably, nice ...
                <a href="blogs.html">See more</a></p>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 wild_beast_blog">
                <img src="{{ asset('assets/images/blogs/wild-beast-blog.jpg') }}" alt="" class="img-fluid">
                <p> <strong> <u> The Great Wildebeest Migration in the Maasai Mara 2019</u></strong> <br>
                During the second half of July, huge herds of migrating wildebeest and zebra crossed over from the Serengeti in Tanzania to Mara in Kenya. These massive herds have not
                <a href="blogs.html">See more</a></p>
            </div>
        </div>

        <div class="all_blog-posts">
            <a href="blogs.html"><button>VIEW ALL BLOG POSTS</button></a>
        </div>
    </div>
@endsection
