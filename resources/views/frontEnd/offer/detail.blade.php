@extends('layouts.master')
@section('page_head')
    <style>
        /* .fixed-div {
            position: fixed;
            overflow: scroll;
            top: 12%;
            right: 10%;
            width: 25%;
            height: 100%;
            margin-bottom: 20%;
        } */

        /* ::-webkit-scrollbar {
            width: 10px;
            //height: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: #555;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        } */
    </style>
@endsection
@section('title', 'Details')
@section('content')
    <div class="container-fluid pt-5 bg-image">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8">
                    <div class="col-lg-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="{{ $offer->feature_video }}"
                                title="YouTube video player" frameborder="0" autoplay muted allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <img src="{{ $offer->getFirstMediaUrl('offer_image', 'thumb') }}" alt="Chain Rasied Logo"
                            width="250" height="auto" class="my-4">
                    </div>
                    <div class="container-fluid">
                        <div class="row  rounded" style=" background: linear-gradient(to right, #3399ff 0%, #333399 100%);">
                            <div class="col-lg-6 d-lg-flex align-items-center">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <h6 class="p-0 m-0"> {{ $offer->user->name }} </h6>
                                    </li>
                                    <li class="ps-4"><i class="bi bi-geo-alt"
                                            style="color: #ffffff; font-size: 14px;"></i>
                                        <span style="color: #ffffff; font-size: 14px;">
                                            {{ $offer->user->userDetail->address }} </span>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-lg-6 d-lg-flex justify-content-end align-items-center">
                                <a style="color: #ffffff;" class="text-center" href="#!" role="button"><i
                                        class="fab fa-facebook-f fa-lg pe-3"></i></a>

                                <!-- Twitter -->
                                <a style="color: #ffffff;" href="#!" role="button"><i
                                        class="fab fa-twitter fa-lg pe-3"></i></a>

                                <!-- Instagram -->
                                <a style="color: #ffffff;" href="#!" role="button"><i
                                        class="fab fa-instagram fa-lg "></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Discussion</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Updates</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Q & A</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active " id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                @foreach ($offer->offerDetail as $offerDetail)
                                    @if ($offerDetail->input == 'summary')
                                        <div class="col-lg-6 mt-4">
                                            <h5>{{ $offerDetail->heading }}</h5>
                                        </div>
                                        <div class="col-lg-6 mt-4">
                                            <h5>{{ $offerDetail->sub_heading }}</h6>
                                        </div>
                                        <div class="col-lg-11 mt-4">
                                            {!! $offerDetail->description !!}
                                        </div>
                                    @elseif($offerDetail->input == 'text')
                                        <div class="col-lg-6 mt-4">
                                            <h6>{{ $offerDetail->heading }}</h6>
                                        </div>
                                        <div class="col-lg-6 mt-4">
                                            <h5>{{ $offerDetail->sub_heading }}</h6>
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            {!! $offerDetail->description !!}
                                        </div>
                                    @elseif($offerDetail->input == 'tiles')
                                        <div class="row">
                                            @if ($offerDetail->offerTiles)
                                                @foreach ($offerDetail->offerTiles as $tiles)
                                                    <div class="col-lg-6 col-md-6  p-3">
                                                        <figure class="figure">
                                                            <img src="{{ asset('files/' . $tiles->path) }}"
                                                                class="img img-thumbnail figure-img img-fluid rounded"
                                                                alt="..." style="width:200px">
                                                        </figure>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    @endif
                                @endforeach


                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <p>
                                    Lorem Ipsum passages, and more recently with desktop publishing software
                                    like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <p>
                                    Lorem Ipsum passages, and more recently with desktop publishing software
                                    like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4   "  >
                    <div class="row ">
                        <div class="col-lg-12">
                            <button type="button" class="btn bg-change d-block">
                                <i class="bi bi-share"></i>
                                &nbsp;Share
                            </button>
                            <img src="{{ $offer->getFirstMediaUrl('offer_image', 'thumb') }}" alt="Chain Raise Logo"
                                width="250" height="auto" class="my-4">
                        </div>
                        <div class="col-lg-12">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <ul class="text-center my-3">
                                <li class="border-bottom py-2">
                                    <h5 class="m-0 p-0"> 0 <span style="font-size: 14px;">Rasied</span></h5>
                                </li>
                                <li class="border-bottom py-2">
                                    <h5 class="m-0 p-0">
                                        @if ($offer->base_currency == 'USD')
                                            $
                                        @else
                                            {{ $offer->base_currency }}
                                        @endif {{ number_format($offer->size) }}
                                        <span style="font-size: 14px;">Goal</span>
                                    </h5>
                                </li>
                                <li class="border-bottom py-2">
                                    <h5 class="m-0 p-0"> 0 <span style="font-size: 14px;">Investors</span></h5>
                                </li>

                            </ul>
                        </div>
                        <form action="{{ route('invest.submit') }}" method="get" id="investForm">
                            @csrf
                            <div class="row ">
                                <div class="col-6">
                                    <div>
                                        <h6 class="m-0 p-0">Investment</h6>
                                        <div class="row">
                                            <div class="col">
                                                <p class="m-0 p-0" style="font-size: 12px;">Minimum</p>
                                            </div>
                                            <div class="col">
                                                <h6 class="m-0 p-0">
                                                    @if ($offer->base_currency == 'USD')
                                                        $
                                                    @else
                                                        {{ $offer->base_currency }}
                                                    @endif
                                                    {{ number_format($offer->investmentRestrictions->min_invesment) }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6"> 
                                        @csrf
                                    <div class="input-group">
                                        <input type="hidden" name="offer_id" value="{{ $offer->id }}"> 
                                        <div class="input-group-text" id="btnGroupAddon">$</div>
                                        <input type="number" class="form-control" name="investment_amount" required
                                        placeholder="{{ number_format($offer->investmentRestrictions->min_invesment) }}" 
                                        min="{{ $offer->investmentRestrictions->min_invesment }}" 
                                        max="{{ $offer->investmentRestrictions->max_invesment }}"
                                        aria-label="Input group example" aria-describedby="btnGroupAddon">
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-grid gap-2 mt-3">
                                    @if (Auth::user())
                                        <button class="btn btn-primary" type="submit"> Invest </button>
                                    @else
                                        <button class="btn btn-primary" type="button">Learn More</button>
                                    @endif
                                </div>
                                <div class="d-grid gap-2 mt-3">
                                    <button class="btn bg-change py-2" type="button">Add to Wishlist</button>
                                </div>
                            </div>
                        </form>



                        <div class="d-grid gap-2 mt-3">
                            <button class="btn bg-change py-2" type="button">Add to Wishlist</button>
                        </div>
                        <div class="col-lg-12">
                            <div class="container p-5">
                                <div class="text-center py-4">
                                    <img src="{{ asset('media/logo/image.PNG') }}" alt="Chain Rasied Logo"
                                        width="250" height="auto" />
                                </div>
                                <div class="row bord">
                                    <div class="col-lg-12 bor p-3 text-center  bord">
                                        <h5 class="m-0 p-0">Investor Rewards</h5>
                                    </div>
                                    <div class="col-lg-12 bord">
                                        <div class="row">
                                            <div class="col p-3">
                                                <p class="m-0 pb-1" style="font-size: 12px;">Invest</p>
                                                <h5 class="m-0 pb-1" style="color: #3399ff;">$5,000</h5>
                                                <p class="m-0 p-0" style="font-size: 12px;">& Recieved</p>
                                            </div>
                                            <div class="col p-3">
                                                <ul style="list-style: disc; color: #ffffff; line-height: normal;">
                                                    <li style=" line-height: normal; font-size: 14px;">Early Access</li>
                                                    <li style=" line-height: normal; font-size: 14px;">Telegram Access
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 bord">
                                        <div class="row">
                                            <div class="col p-3">
                                                <p class="m-0 pb-1" style="font-size: 12px;">Invest</p>
                                                <h5 class="m-0 pb-1" style="color: #3399ff;">$10,000</h5>
                                                <p class="m-0 p-0" style="font-size: 12px;">& Recieved</p>
                                            </div>
                                            <div class="col p-3">
                                                <ul style="list-style: disc; color: #ffffff; line-height: normal;">
                                                    <li style=" line-height: normal; font-size: 14px;">Early Access</li>
                                                    <li style=" line-height: normal; font-size: 14px;">Telegram Access
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 bord">
                                        <div class="row">
                                            <div class="col p-3">
                                                <p class="m-0 pb-1" style="font-size: 12px;">Invest</p>
                                                <h5 class="m-0 pb-1" style="color: #3399ff;">$50,000</h5>
                                                <p class="m-0 p-0" style="font-size: 12px;">& Recieved</p>
                                            </div>
                                            <div class="col p-3">
                                                <ul style="list-style: disc; color: #ffffff; line-height: normal;">
                                                    <li style=" line-height: normal; font-size: 14px;">Early Access</li>
                                                    <li style=" line-height: normal; font-size: 14px;">Telegram Access
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection

@section('page_js')
    <script>
        // Get the footer element
const footer = document.querySelector('footer');

// Get the div element that you want to change
const fixedDiv = document.querySelector('.fixed-div');

// Calculate the distance between the fixedDiv and the footer
const distance = footer.getBoundingClientRect().top - fixedDiv.getBoundingClientRect().top;

// Add an event listener to the window object to detect when the user scrolls
window.addEventListener('scroll', function() {
  // Get the current position of the user
  const scrollPosition = window.scrollY;
  
  // Check if the user has reached the footer area
  if (scrollPosition + window.innerHeight >= document.body.offsetHeight - footer.offsetHeight) {
    // If so, change the fixedDiv's position to static
    fixedDiv.style.position = 'static';
    fixedDiv.style.overflow = 'hidden'; 
  } else {
    // Otherwise, keep the fixedDiv's position as fixed
    fixedDiv.style.position = 'fixed';
    fixedDiv.style.overflow = 'scroll';
  }
});

    </script>
@endsection
