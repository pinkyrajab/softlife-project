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
        <h5>RESET YOUR PASSWORD</h5>
        <h6>Please enter your email address and we will send you a password link.</h6>

        <form>
            <div class="form-row">
                
                <div class="form-group col-md-10">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email Address" required>
                </div>
             </div>
                
           <div class="form-row">
            <div class="signInBtn">
            <button type="submit" class="btn btn-primary">Send reset link</button>

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