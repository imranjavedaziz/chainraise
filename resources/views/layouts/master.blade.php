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
  <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
  <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
  <title> Chain Rasied Portal | @yield('title') </title>
  <style>
    .bg-image {
      background-image: url("{{ asset('media/portfolio/background-chainraise.jpg') }}");
    }

    #toastr-container {
      background: rgb(247, 84, 92) !important;
    }
  </style>
  @section('page_head')
  @show

</head>

<body>
  <!-- Header Start -->
  <div class="container-md py-3">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6 col-sm-5 h-mob">
        <a class="navbar-brand" href="{{ route('index') }}">
          <img src="{{asset('media/logo/logo.webp')}}" alt="Chain Rasied Logo" width="190" height="38">
        </a>
      </div>
      <div class="col-lg-5 col-md-4 col-sm-5 d-flex justify-content-center align-items-center h-mob">
        <a href="#" class="pe-4">RAISE CAPITAL</a>
        <a href="#" class="pe-4" data-bs-toggle="modal" data-bs-target="#sign-in-popup">Sign in</a>
        <a href="#" class="pe-4" data-bs-toggle="modal" data-bs-target="#sign-up-popup">Sign up</a>
        <button type="button" class="btn btn-primary">INVEST</button>
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



  @section('content')
  @show
  <div class="modal fade" id="sign-in-popup" tabindex="-1" aria-labelledby="sign-in-popupLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header m-auto pt-4 pb-0 border-0">
          <img src="{{asset('media/logo/logo.webp')}}" alt="Chain Rasied Logo" width="250" height="50">
        </div>
        <div class="modal-body">
          <h5 style="color: #000000; text-align: center;">Sign in to your account</h5>
          <div class="container py-3 px-5 ">
            <div class="row justify-content-around">
              <div class="col-3 border border-dark d-flex align-items-center justify-content-center py-2 ">
                <a href="{{ route('login.facebook') }}">
                  <i class="fab fa-facebook" style="font-size: 25px;"></i>
                </a>
              </div>
              <div class="col-3 border border-dark d-flex align-items-center justify-content-center py-2 ">
                <a href="{{ route('login.google') }}">
                  <i class="fab fa-google" style="font-size: 25px;"></i>
                </a>

              </div>

            </div>
          </div>
          <div class="container py-3 px-5 ">
            <div class="row justify-content-around">
              <div class="col-3 d-flex align-items-center justify-content-center py-2 ">
                --------
              </div>
              <div class="col-5  d-flex align-items-center justify-content-center py-2 ">
                <p style="color: #000000; text-align: center; padding: 0px; margin:0px;">Continue with
                </p>
              </div>
              <div class="col-3 d-flex align-items-center justify-content-center py-2 ">
                --------
                <hr />
              </div>
            </div>
            <div class="d-flex flex-column text-center">
              <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                  <input type="email" class="form-control" id="email1" placeholder="Your email address..." required
                    name="email">
                  @error('email')
                  <span class="text-danger " style="font-size:13px"> {{ $message }} </span>
                  @enderror
                </div>
                <div class="my-3 ">
                  <input type="password" class="form-control user_login_password" id="password1"
                    placeholder="Your password..." required name="password">
                </div>
                <div class="row">

                  <div class="col-5 d-flex align-items-center">
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input show_login_password">
                      <label class="form-check-label" for="exampleCheck1"
                        style="padding: 0px; font-size: 14px; font-weight: 500;"> Show Password
                      </label>
                    </div>
                  </div>
                  <div class="col-7 d-flex align-items-center justify-content-end m-0 p-0">
                    <div class="form-group ">
                      <button type="button" class="btn btn-link" href="#" data-bs-dismiss="modal" data-bs-toggle="modal"
                        data-bs-target="#reset-popup" style="font-size: 14px; font-weight: 500;"> Forgot your
                        password?</button>
                    </div>
                  </div>
                </div>
                <div class="d-grid gap-2 col-12 mt-3 mb-2 mx-auto">
                  <button class="btn btn-primary" type="submit">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer flex-column text-center ">
            <div class="signup-section text-center">Not a member yet? <a href="#" data-bs-dismiss="modal"
                data-bs-toggle="modal" data-bs-target="#sign-up-popup" style="color: #4b1dff;"> Sign
                Up</a>.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sign in Popop End -->
  <!-- Sign up Popop Start -->
  <div class="modal fade" id="sign-up-popup" tabindex="-1" aria-labelledby="sign-up-popupLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header m-auto pt-4 pb-0 border-0">
          <img src="{{asset('media/logo/logo.webp')}}" alt="Chain Rasied Logo" width="250" height="50">
        </div>
        <div class="modal-body">
          <h5 style="color: #000000; text-align: center;">Sign Up</h5>
          <div class="container py-3 px-5 ">
            <div class="row justify-content-around">
              <div class="col-3 border border-dark d-flex align-items-center justify-content-center py-2 ">
                <a href="{{ route('login.facebook') }}">
                  <i class="fab fa-facebook" style="font-size: 25px;"></i>
                </a>
              </div>
              <div class="col-3 border border-dark d-flex align-items-center justify-content-center py-2 ">
                <a href="{{ route('login.google') }}">
                  <i class="fab fa-google" style="font-size: 25px;"></i>
                </a>

              </div>

            </div>
          </div>
          <div class="container py-3 px-5 ">
            <div class="row justify-content-around">
              <div class="col-3 d-flex align-items-center justify-content-center py-2 ">
                --------
              </div>
              <div class="col-5  d-flex align-items-center justify-content-center py-2 ">
                <p style="color: #000000; text-align: center; padding: 0px; margin:0px;">Continue with
                </p>
              </div>
              <div class="col-3 d-flex align-items-center justify-content-center py-2 ">
                --------
                <hr />
              </div>
            </div>
            <div class="d-flex flex-column text-center">
              <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="my-3">
                  <input type="text" class="form-control" id="name" placeholder="Your name..." required name="name">
                  @error('name')
                  <span class="text-danger " style="font-size:13px"> {{ $message }} </span>
                  @enderror
                </div>

                <div class="my-3">
                  <input type="email" class="form-control" id="email1" placeholder="Your email address..." required
                    name="email">
                  @error('email')
                  <span class="text-danger " style="font-size:13px"> {{ $message }} </span>
                  @enderror
                </div>
                <div class="my-3 ">
                  <input type="password" class="form-control user_password" id="password11"
                    placeholder="Your password..." required name="password">
                </div>
                <div class="my-3 ">
                  <input type="password" class="form-control user_password" id="password12"
                    placeholder="Your password..." required name="password_confirmation">
                </div>
                <div class="my-3 ">
                  <select name="user_type" id="" class="form-control">
                      <option value="individual"> Individual  </option>
                      <option value="entity"> Entity  </option>
                  </select>
                </div>
                <div class="row">
                  <div class="col-5 d-flex align-items-center">
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input show_password">
                      <label class="form-check-label" for="exampleCheck1"
                        style="padding: 0px; font-size: 14px; font-weight: 500;"> Show Password
                      </label>
                    </div>
                  </div>
                  <div class="col-7 d-flex align-items-center justify-content-end m-0 p-0"> </div>
                </div>
                <div class="d-grid gap-2 col-12 mt-3 mb-2 mx-auto">
                  <button class="btn btn-primary" type="submit">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer flex-column text-center ">
            <div class="signup-section text-center">Already have account? <a href="#" data-bs-dismiss="modal"
                data-bs-toggle="modal" data-bs-target="#sign-in-popup" style="color: #4b1dff;"> Sign In</a>.</div>
          </div>
        </div>
      </div>
    </div>
  </div>


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
            <label class="form-label text-white" for="form5Example2">The latest offerings and updates, sent
              to your
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

  <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
  <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
  <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
  <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
  <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
  <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
  <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
  <script src="{{ asset('assets/js/custom/utilities/modals/new-target.js') }}"></script>
  <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
  <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
  <script src="{{asset('assets/js/custom/utilities/modals/top-up-wallet.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  @section('page_js')
  @show
</body>
@if(Session::has('expire'))
@php
$message = (session::get('expire'));
@endphp
<script>
  toastr.error('{{$message}}', "Error");
</script>
@php
session()->forget('expire');
session()->forget('success');
@endphp
@endif


<script>
  $(document).ready(function() {
        $('.show_password').change(function() {
          if($(this).is(':checked')) {
            $('.user_password').prop('type', 'text');
          } else {
            $('.user_password').prop('type', 'password');
          }
        });

        $('.show_login_password').change(function() {
            if($(this).is(':checked')) {
              $('.user_login_password').prop('type', 'text');
            } else {
              $('.user_login_password').prop('type', 'password');
            }
          });


      });


</script>

</html>
