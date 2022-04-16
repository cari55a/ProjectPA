<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      html, body {
          background-image:url(asset/img/colorgram.jpg);
          background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
font-family:sans-serif;
color: #ffffff;
      }
    </style>
    <title>TRUE BEAUTY SHOP</title>
  </head>
  <body>

     <div class="container py-4"> 
         <h1 Class="text-center"><b>COLORGRAM MAKE UP</b> </h1>
         <h1 Class="text-center"></h1>
  </div>
 <form method="POST" action="{{ route('login') }}">
 @csrf
       <div class="container">  
        <label for="email" class="col-md-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
         <div class="col-md-4">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
 @error('email')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
</div>
<div class="container">
 <label for="password" class="col-md-12 col-form-label text-md-left">{{ __('Password') }}</label>
 <div class="col-md-4">
 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
 @error('password')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
<div class="container">
<div class="col-md-12 offset-md-12">
 <div class="form-check">
 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ?'checked' : '' }}>
 <label class="form-check-label" for="remember">
 {{ __('Remember Me') }}
 </label>
 </div>
 </div>
 </div>
<div class="container">
 <div class="col-md-12 offset-md-12">
 <button type="submit" class="btn btn-primary">
 {{ __('Login') }}
 </button>
@if (Route::has('password.request'))
 <a class="btn btn-link" href="{{ route('password.request') }}">
  <button type="submit" class="btn btn-warning">
 {{ __('Forgot Your Password?') }}
</button>
 </a>
 @endif
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 <!-- Bootstrap core JavaScript-->
 <script src="{{ asset('asset/vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
 <!-- Core plugin JavaScript-->
 <script src="{{ asset('asset/vendor/jqueryeasing/jquery.easing.min.js')}}"></script>
 <!-- Custom scripts for all pages-->
 <script src="{{ asset('asset/js/sb-admin-2.min.js')}}"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>