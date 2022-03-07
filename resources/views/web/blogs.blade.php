<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Softlife A&T</title>

    <link rel="shortcut icon" href="LOGO.svg" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets('assets/styles.css)">

</head>
<body>

<!-- topbar -->
<div class="container" id="topbar">
    <div class="row">
        <div class="col-12">
            <ul id="top_links">
                <li><a href="http://">sign in    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
                  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg></a></li>
                <li><a href="http://"> wishlist <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- end topbar -->

<hr class="divider">

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img class="logo" src="images/logo.black.png" alt="softlife A&T"></a>
         
          <button class="navbar-toggler visible-xs" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
           <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
           <ul class="navbar-nav visible-xs ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/"><h7>HOME</h7></a>
                  </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('restaurants') }}"><h7>RESTAURANTS</h7></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('hotels') }}"> <h7>HOTELS</a></h7>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('adventures') }}"><h7> ADVENTURES</a></h7>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{route('tours')}}"><h7> TOURS</a></h7>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('about') }}"><h7>ABOUT US</a></h7>
              </li>
              <li class="nav-item ">
                <a class="nav-link active" href="#contact"><h7> CONTACT US</a></h7>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>

<!-- end navbar -->


<footer class="revealed">
    <div class="container end">
      <div class="row">
  
        <div class="col-sm-12 col-lg-4 ">
          <div id="contact">
          <ul class="help">
            <li><h3>Need help?</h3> </li>
            <li>contact us @ </li>
            <li><a href="tel:+254759899033"> Call us : +254759899033</a></li>
            <li> <a href="mailto: arajab9039@stu.kemu.ac.ke" >email :arajab9039@stu.kemu.ac.ke</a></li>
          </ul>
        </div>
        </div>
        <div class="col-sm-12 col-lg-4 ">
          <ul class="about">
            <li><h3>About</h3></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
             <li><a href="#">Terms and condition</a></li>
        </ul>
        </div>
  
        <div class="col-sm-12 col-lg-4 ">
          <ul class="discover">
              <li><h3>Discover</h3></li>
              <li><a href="#">Community blog</a></li>
              <li><a href="#">Reviews</a></li>
              <li><a href="#">Wishlist</a></li>
               <li><a href="#">Gallery</a></li>
          </ul>
      </div>
      </div>
    </div>
     <hr>
    
     <div class="icons">
       <div class="container">
         <div class="row">
           <span class="icon_colour">
            <a href="" class="icon-white"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg></a>
  
            <a href="" class="icon-white"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg></a>
  
            <a href="" class="icon-white"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
              <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg></a>
          </span>
        </div>
       </div>
     </div>
  
     
  
     <p class="copyright"> &copy;All rights reserved | | Developed by Amina Rajab from KENYA METHODIST UNIVERSITY  
       <br>
       PROJECT
     </p>
     
  </footer>
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