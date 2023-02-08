<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="icon" type="image/x-icon" href="{{ asset('media/logo/favicon.ico')}}">
  <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">
  
  <title> Chain Rasied Portal | @yield('title') </title>
    <style>
        .bg-image {
            background-image: url("{{ asset('media/portfolio/background-chainraise.jpg') }}");
        }
    </style>
  @section('page_head')
  @show 
  
</head>

<body>
  <!-- Header Start -->

  <div class="container-md py-3">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-6 col-sm-5 h-mob">
        <a class="navbar-brand" href="{{ route('index') }}">
          <img src="{{asset('media/logo/logo.webp')}}" alt="Chain Rasied Logo" width="190" height="38">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-5 d-flex justify-content-center align-items-center h-mob">
        <a href="#" class="pe-4">RAISE CAPITAL</a>
        <button type="button" class="btn btn-primary">INVEST</button>
        &nbsp;&nbsp;
        <a href="{{ route('login.social') }}" class="btn btn-info">
          Login
        </a>
      </div>
      <div class="col-lg-1 col-md-2 col-sm-2 d-flex justify-content-center align-items-center h-mob">
        <!-- Facebook -->
        <a style="color: #000000;" href="#!" role="button"><i class="fab fa-facebook-f fa-lg pe-3"></i></a>
        <!-- Twitter -->
        <a style="color: #000000;" href="#!" role="button"><i class="fab fa-twitter fa-lg pe-3"></i></a>
        <!-- Instagram -->
        <a style="color: #000000;" href="#!" role="button"><i class="fab fa-instagram fa-lg pe-3"></i></a>
      </div>
    </div>
  </div>
  <!-- Header End -->
  <!-- Heading Start -->
  
  @section('content')
  @show

  <footer class="text-center text-lg-start  pt-4 header-sec">
    <!-- Grid container -->
    <div class="container border-top border-white bor-remove">
      <!--Grid row-->
      <div class="row pt-5">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4 cc">Explore</h5>

          <ul class="list-unstyled mb-4">
            <li>
              <a href="#!" class="text-white">Offerings</a>
            </li>
            <li>
              <a href="#!" class="text-white">Organizations</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4 cc">Company</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white">Who we are</a>
            </li>
            <li>
              <a href="#!" class="text-white">Terms & Conditions</a>
            </li>
            <li>
              <a href="#!" class="text-white">Privacy Policy</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4 cc">Customer Service</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!" class="text-white">Contact</a>
            </li>
            <li>
              <a href="#!" class="text-white">FAQ</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <h5 class="text-uppercase mb-4 cc">Sign up to our newsletter</h5>

          <div class="form-outline form-white mb-4">
            <input type="email" id="form5Example2" class="form-control" />
            <label class="form-label text-white" for="form5Example2">The latest offerings and updates, sent to your
              inbox weekly.</label>
          </div>

          <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center m-0 py-3">
      <p class="m-0 py-3">© 2022 ChainRaise Technologies. All rights reserved.
      <p>
    </div>
    <!-- Copyright -->
  </footer>





  <!--Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    
@section('page_js')
@show
</body>

</html>