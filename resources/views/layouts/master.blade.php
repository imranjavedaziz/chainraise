<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('media/logo/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/style.css') }}">
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> 
    <title> Chain Rasied Portal | @yield('title') </title>
    <style>
        .bg-image {
            background-image: url("{{ asset('media/portfolio/background-chainraise.jpg') }}");
        }

        #toastr-container {
            background: rgb(247, 84, 92) !important;
        }

        @import url(https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic);


        .outer-container {
            font-family: "Roboto";
            font-size: 0.8rem;

        }

        .outer-container {
            padding: 60px;
        }

        .step-content {
            padding: 40px 0;
        }

        .profile_madal {
            background: #000000;
            color: #ffffff;
            font-size: 13px;


        }

        .profile_madal input[type="text"] {
            border-radius: 0;
            font-size: 13px;
            background-color: #1a1919;
            color: #ffffff;
            border-color: #000;
        }

        .wrapper {
            border: 1px solid #cccccc;
            border-radius: 3px;
            background-color: #1a1919;
            padding: 20px;

        }

        .profile-complete-content {
            background: #000000;
            border: 1px solid #ffffff;
            border-radius: 3px;
        }

        .no-radius {
            border-radius: 0 !important;
        }

        .account_type_wrapper {
            border: 1px solid #fff;
            padding: 30px 70px;
            min-height: 200px;
            justify-content: center;
            text-align: center;
            border-radius: 3px;
            box-shadow: 2px 1px 6px 1px #ffffff
        }

        .type-label {
            font-size: 15px;
        }

        .buttons {
            margin-top: 10px;
        }

        .buttons button {
            background: #fff;
            border: none;
        }
        label.error {
            color: red!important;
            font-size: 15px;
            font-style: italic;
            margin-top:6px;
        }
        label.success {
            color:#196e37;
            font-size: 15px;
            font-style: italic;
            margin-top:6px;
        }
        
    </style>
    @section('page_head')
    @show

</head>

<body>
    <!-- Header Start -->
    <div class="container-md py-3">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 col-sm-5 h-mob">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('media/logo/logo.webp') }}" alt="Chain Rasied Logo" width="190"
                        height="38">
                </a>
            </div>
            <div class="col-lg-8 col-md-4 col-sm-5 d-flex justify-content-center align-items-center h-mob">
                @if (Auth::user())
                    <a href="/" class="pe-4">Offering</a>
                    <a href="#" class="pe-4">Portfolio</a>
                    <a href="{{ route('user.account') }}" target="_blank" class="pe-4">My Account</a>
                    <a href="#" class="pe-4">My Documents</a>
                    <a href="#" class="pe-4">RAISE CAPITAL</a>
                    <a class="pe-4" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                        Sign Out
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                @endif
                @if (!Auth::user())
                    <a href="#" class="pe-4" data-bs-toggle="modal" data-bs-target="#sign-in-popup">Sign in</a>
                    <a href="#" class="pe-4" data-bs-toggle="modal" data-bs-target="#sign-up-popup">Sign up</a>
                    <button type="button" class="btn btn-primary">INVEST</button>
                @endif

            </div>
            <div class="col-lg-1 col-md-2 col-sm-2 d-flex justify-content-center align-items-center h-mob">
                <!-- Facebook -->
                <a style="color: #000000;" href="#!" role="button"><i
                        class="fab fa-facebook-f fa-lg pe-3"></i></a>

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
                    <img src="{{ asset('media/logo/logo.webp') }}" alt="Chain Rasied Logo" width="250"
                        height="50">
                </div>
                <div class="modal-body">
                    <h5 style="color: #000000; text-align: center;">Sign in to your account</h5>
                    <div class="container py-3 px-5 ">
                        <div class="row justify-content-around">
                            <div
                                class="col-3 border border-dark d-flex align-items-center justify-content-center py-2 ">
                                <a href="{{ route('login.facebook') }}">
                                    <i class="fab fa-facebook" style="font-size: 25px;"></i>
                                </a>
                            </div>
                            <div
                                class="col-3 border border-dark d-flex align-items-center justify-content-center py-2 ">
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
                            <label class="error error_message"></label>
                            <label class="success success_message"></label>
                            
                            <form id="loginForm">
                                <div class="my-3">
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Your email address..." name="email">
                                    @error('email')
                                        <span class="text-danger " style="font-size:13px"> {{ $message }} </span>
                                    @enderror
                                </div>
                                <div class="my-3 ">
                                    <input type="password" class="form-control user_login_password" id="password"
                                        placeholder="Your password..." name="password">
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
                                            <button type="button" class="btn btn-link" href="#"
                                                data-bs-dismiss="modal" data-bs-toggle="modal"
                                                data-bs-target="#reset-popup"
                                                style="font-size: 14px; font-weight: 500;"> Forgot your
                                                password?</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 col-12 mt-3 mb-2 mx-auto">
                                    <button class="btn btn-primary submit_button" type="submit">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer flex-column text-center ">
                        <div class="signup-section text-center">Not a member yet? <a href="#"
                                data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#sign-up-popup"
                                style="color: #4b1dff;"> Sign
                                Up</a>.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign in Popop End -->
    <!-- Sign up Popop Start -->
    <div class="modal fade" id="sign-up-popup" tabindex="-1" aria-labelledby="sign-up-popupLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header m-auto pt-4 pb-0 border-0">
                    <img src="{{ asset('media/logo/logo.webp') }}" alt="Chain Rasied Logo" width="250"
                        height="50">
                </div>
                <div class="modal-body">
                    <h5 style="color: #000000; text-align: center;">Sign Up</h5>
                    <div class="container py-3 px-5 ">
                        <div class="row justify-content-around">
                            <div   class="col-3 border border-dark d-flex align-items-center justify-content-center py-2 ">
                                <a href="{{ route('login.facebook') }}">
                                    <i class="fab fa-facebook" style="font-size: 25px;"></i>
                                </a>
                            </div>
                            <div
                                class="col-3 border border-dark d-flex align-items-center justify-content-center py-2 ">
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
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Your name..." required name="name">
                                    @error('name')
                                        <span class="text-danger " style="font-size:13px"> {{ $message }} </span>
                                    @enderror
                                </div>

                                <div class="my-3">
                                    <input type="email" class="form-control" id="email1"
                                        placeholder="Your email address..." required name="email">
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
                                        <option value="individual"> Individual </option>
                                        <option value="entity"> Entity </option>
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
                                    <div class="col-12 d-flex align-items-center">
                                        <div class="form-group form-check">
                                            <input type="checkbox" name="terms"
                                                class="form-check-input  " required>
                                            <a href="{{ route('privacy.policy') }}" class="form-check-label" target="_blank"
                                                style="padding: 0px; font-size: 14px; font-weight: 500;"> Agree terms &
                                                privacy policy
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 col-12 mt-3 mb-2 mx-auto">
                                    <button class="btn btn-primary" type="submit">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer flex-column text-center ">
                        <div class="signup-section text-center">Already have account? <a href="#"
                                data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#sign-in-popup"
                                style="color: #4b1dff;"> Sign In</a>.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Complete Profile Modal --->
    <div class="modal fade" id="profile-complete" tabindex="-1" aria-labelledby="profile-complete"
        aria-hidden="true">
        <div class="modal-dialog modal-xl ">
            <div class="modal-content profile-complete-content">
                <div class="modal-header m-auto pt-4 pb-0 border-0">
                    <img src="{{ asset('media/logo/logo.webp') }}" alt="Chain Rasied Logo" width="250"
                        height="50">

                </div>
                <div class="modal-body profile_madal">
                    <div class="container" style="padding:10px 50px">
                        <form action="" id="update_profile" enctype="multipart/form-data">
                            <div class="row message">
                                <div class="col-lg-12">
                                    <p class="text-center">
                                        Please share some basic information to continue.
                                    </p>
                                </div>
                            </div>
                            <div class="row account_type_wrapper_row" style="padding:50px;border-radius:3px">
                                <div class="col-lg-6 ">
                                    <div class="account_type_wrapper">
                                        <h6>
                                            Individual
                                        </h6>
                                        <p>
                                            Individual or Joint investor managing a single account
                                        </p>
                                        <p>
                                            <input type="radio" name="account_type" class="account_type"
                                                value="individual">
                                        </p>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="account_type_wrapper">
                                        <h6>
                                            Entity
                                        </h6>

                                        <p>
                                            Registered Investment Advisors, Financial Advisors, Family Offices, Trusts,
                                            IRAs or those investing on behalf of an entity
                                        </p>
                                        <p>
                                            <input type="radio" name="account_type" class="account_type"
                                                value="entity">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row row_individual d-none" style="padding:50px">
                                <div class="col-lg-12">
                                    <h3 class="type-label">
                                        -
                                    </h3>
                                    <p class="f">
                                        Not the right account type? Click here to go back.
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <label for=""> Personal Information</label>
                                    <div class="form-group row">
                                        <div class="  col-lg-6">
                                            <input type="text" class="form-control" name="first_name"
                                                id="" placeholder="First Name">
                                        </div>
                                        <div class="  col-lg-6">
                                            <input type="text" class="form-control" name="last_name"
                                                id="" placeholder="Last Name">
                                        </div>
                                        <div class="col-lg-12 mt-6 text-center"
                                            style="margin-top:30px;margin-bottom:10px">
                                            <div class="wrapper">
                                                <p> Consent to Electronic Delivery </p>
                                                <p>
                                                    I consent to the electronic delivery of all communications and
                                                    materials.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="  col-lg-12 text-center">
                                            <input type="checkbox" class="" name="electronic_delivery"
                                                id="">
                                            I agree to the Consent to Electronic Delivery
                                        </div>
                                    </div>
                                    <div class="form-group row   show_when_type_entity">
                                        <div class="col-lg-12">
                                            <label for=""> ENTITY INFORMATION </label>
                                        </div>
                                        <div class="  col-lg-12">
                                            <input type="text" class="form-control" name="entity_name"
                                                id="" placeholder="Entity Name">
                                        </div>
                                    </div>

                                    <div class="form-group row text-center buttons">
                                        <div class="col-lg-12">
                                            <button type="button"
                                                class="btn btn-sm no-radius btn-info goto-account_type"> Back </button>
                                            <button type="button"
                                                class="btn btn-sm no-radius btn-info goto-accreditation"> Next
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row row_accreditation text-center d-none" style="padding:50px">
                                <div class="col-lg-12">
                                    <strong>
                                        ACCREDITATION STATUS
                                    </strong>
                                    <br><br>
                                </div>
                                @foreach ($accreditations as $accreditation)
                                    <div class="col-lg-4 mb-10">
                                        <!--begin::Card-->
                                        <div class="py-4 h-250px"
                                            style="margin-bottom:10px;color:#ffffff;background:#000;border:1px solid #fff;border-radius:3px;font-size:13px!important;min-height:250px">
                                            <div class="card-header justify-content-center">
                                                <div class="card-title">
                                                    <div>
                                                        <span class="">
                                                            <i class="{{ $accreditation->icon }} fs-3x"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2 text-center">
                                                <span class="fs-6"> {{ $accreditation->title }} </span><br>
                                                <span class="fs-6 text-success">
                                                    @if ($accreditation->amount != null)
                                                        Above ${{ number_format($accreditation->amount) }}
                                                    @endif
                                                </span><br>
                                                <span> {{ $accreditation->years }} </span>
                                            </div>
                                            <div class=" ">
                                                <input class="form-check-input" type="radio"
                                                    value="{{ $accreditation->id }}" name="accreditation" required />
                                                <label class="form-check-label"></label>
                                            </div>
                                        </div>

                                        <!--end::Card-->
                                    </div>
                                @endforeach
                                <div class="form-group row text-center buttons">
                                    <div class="col-lg-12">
                                        <button type="button"
                                            class="btn btn-sm no-radius btn-info backto_account_type"> Back </button>
                                        <button type="submit" class="btn btn-sm no-radius btn-info goto-final"> Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row row_final text-center d-none" style="padding:50px">
                                <div class="col-lg-12">
                                    <strong>
                                        Great! You're all set.
                                    </strong>
                                    <br><br>
                                    <a href="/" class="btn btn-sm btn-primary no-radius">
                                        ACCESS PORTAL
                                    </a>
                                </div>

                            </div>
                        </form>
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
                            <a href="{{  route('index') }}" class="text-white">Offerings</a>
                        </li>
                        <li>
                            <a href="{{  route('investors') }}" class="text-white">Investors</a>
                        </li>
                        <li>
                            <a href="{{  route('businesses') }}" class="text-white">Businesses</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4 cc">Company</h5>

                    <ul class="list-unstyled">
                        
                        <li>
                            <a href="{{ asset('assets/documents/terms-of-Use-ChainRaise.pdf') }}" download="Terms-of-Use-ChainRaise.pdf" class="text-white">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="{{ route('privacy.policy') }}" class="text-white">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4 cc">Customer Service</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="{{  route('contact')  }}" class="text-white">Contact</a>
                        </li>
                        <li>
                            <a href="{{  route('faq')  }}" class="text-white">FAQ</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5 class="text-uppercase mb-4 cc">Sign up to our newsletter</h5>

                    <div class="form-outline form-white mb-4">
                        <input type="email" id="form5Example2" class="form-control" />
                        <label class="form-label text-white" for="form5Example2">The latest offerings and updates,
                            sent
                            to your
                            inbox weekly.</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
                </div>
                <!--Grid column-->
            </div>
            <div class="text-center m-0 py-3">
                <p class="m-0 py-3">© 2022 ChainRaise Technologies. All rights reserved. <p>
            </div>
            <div class="row pt-5">
                <div class="col-lg-12 col-md-6 mb-4 mb-lg-0">
                    <div class="ast-builder-html-element"><p>This website, which we refer to as the “Site,” is used by two different companies:</p>
                        <p>ChainRaise Portal LLC and ChainRaise Fund LLC.</p>
                        <p>ChainRaise Fund LLC offers investments under Rule 506(c) issued by the Securities and Exchange Commission (SEC). These investments are offered to accredited investors only.</p>
                        <p>ChainRaise Portal LLC is a “funding portal” as defined in section 3(a)(80) of the Securities Exchange Act of 1934. Here, you can review investment opportunities of companies offering securities under section 4(a)(6) of the Securities Act of 1933, also known as Regulation Crowdfunding or Reg CF. These investments are offered to everyone, not just to accredited investors.</p>
                        <p>By using this Site, you are subject to our Terms of Use and our Privacy Policy. Please read these carefully before using the Site.</p>
                        <p>Although our website offers investors the opportunity to invest in a variety of companies, we do not make recommendations regarding the appropriateness of a particular investment opportunity for any particular investor. We are not investment advisers. Investors must make their own investment decisions, either alone or with their personal advisors.</p>
                        <p>You should view all of the investment opportunities on our website as risky. You should consider investing only if you can afford to lose your entire investment.</p>
                        <p>We provide financial projections for some of the investment opportunities listed on the Site. All such financial projections are only estimates based on current conditions and current assumptions. The actual result of any investment is likely to be different than the original projection, often by a large amount.</p>
                        <p>Neither the Securities and Exchange Commission nor any state agency has reviewed the investment opportunities listed on the Site.</p>
                        <p>Thank you for using the Site. If you have questions, please contact us at&nbsp;<a href="mailto:info@chainraise.io">info@chainraise.io</a></p>
                        </div>

                     
                </div>
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
      
        
        <!-- Copyright -->
    </footer>



    
<script>
    $(document).ready(function() {
        $('.show_password').change(function() {
            if ($(this).is(':checked')) {
                $('.user_password').prop('type', 'text');
            } else {
                $('.user_password').prop('type', 'password');
            }
        });

        $('.show_login_password').change(function() {
            if ($(this).is(':checked')) {
                $('.user_login_password').prop('type', 'text');
            } else {
                $('.user_login_password').prop('type', 'password');
            }
        });

        $('.account_type').click(function() {
            $('.account_type_wrapper_row').hide('slow');
            $('.row_individual').removeClass('d-none');
            if ($(this).val() == 'individual') {
                $('.type-label').html('Individual')
                $('.show_when_type_entity').addClass('d-none');
            } else {
                $('.type-label').html('Entity')
                $('.show_when_type_entity').removeClass('d-none');
            }
        });

        $('.goto-account_type').click(function() {
            $('.account_type_wrapper_row').show('slow');
            $('.row_individual').addClass('d-none');
        });

        $('.goto-accreditation').click(function() {
            $('.row_individual').addClass('d-none');
            $('.row_accreditation').removeClass('d-none');
        });

        $('.backto_account_type').click(function() {
            $('.row_individual').removeClass('d-none');
            $('.row_accreditation').addClass('d-none');
        });


        $('.goto-final').click(function(event) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#update_profile').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ route('user.basic.details.update') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status == true) {
                            $('.row_accreditation').addClass('d-none')
                            $('.row_final').removeClass('d-none');
                            toastr.success(response.message, "Success");
                        } else {
                            toastr.error(response.message, "Error");
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });



        });




    });


    $(document).ready(function() {
        $('#loginForm').validate({
            rules: {
                password: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                password: {
                    required: "Please enter your password",
                    minlength: "Username must be at least 3 characters long"
                },
                email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                }
            },
            submitHandler: function(form) {
                var formData = $('#loginForm').serialize();
                $('.submit_button').prop('disabled',true);
                $('.submit_button').text('Loading ...');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "{{  route('login') }}",  
                    data: formData,
                    success: function(response) {  
                      
                        $('.success_message').text('Login Success Page Reloading  ....'); 
                        setTimeout(function() {
                            location.reload();
                        }, 2000); 
                    },
                    error: function(xhr, status, error) {
                         
                        var errorMessage = JSON.parse(xhr.responseText);   
                        $('.error_message').text(errorMessage.message);
                        setTimeout(function() {
                        $('.submit_button').prop('disabled', false);
                        }, 100);
                       // $('.submit_button').prop('disabled ',false); 

                        $('.submit_button').text('Sign In'); 
                    } 
                });
            }
        });
    });
</script>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    @section('page_js')
    @show
</body>


@if (Session::has('expire'))
    @php
        $message = session::get('expire');
    @endphp
    <script>
        toastr.error('{{ $message }}', "Error");
    </script>
    @php
        session()->forget('expire');
        session()->forget('success');
    @endphp
@endif


@if (Auth::user())
    @if (Auth::user()->profile_status == 0)
        <script>
            $(window).on('load', function() {
                $('#profile-complete').modal('show');
            });
        </script>
    @endif
@endif

</html>
