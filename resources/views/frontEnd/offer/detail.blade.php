@extends('layouts.master')
@section('page_head')
@endsection
@section('title','Details')
@section('content')
<div class="container-fluid pt-5 bg-image">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                 
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item"  src="{{ $offer->feature_video }}"
                        title="YouTube video player" frameborder="0" autoplay muted allowfullscreen></iframe>
                </div>
                
            </div>
            <div class="col-lg-4 px-5">
                <button type="button" class="btn bg-change d-block"> <i class="bi bi-share"></i>
                    &nbsp;Share</button>
                <img src="{{ $offer->getFirstMediaUrl('offer_image', 'thumb') }}" alt="Chain Rasied Logo" width="250" height="auto"  class="my-4">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"   aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
                <ul class="text-center my-3">
                    <li class="border-bottom py-2">
                        <h5 class="m-0 p-0"> 0 <span style="font-size: 14px;">Rasied</span></h5>
                    </li>
                    <li class="border-bottom py-2">
                        <h5 class="m-0 p-0">@if($offer->base_currency == 'USD') $ @else  {{ $offer->base_currency }} @endif {{ number_format($offer->size) }} <span style="font-size: 14px;">Goal</span></h5>
                    </li>
                    <li class="border-bottom py-2">
                        <h5 class="m-0 p-0"> 0 <span style="font-size: 14px;">Investors</span></h5>
                    </li>
                   
                </ul>
                <div class="row">
                    <div class="col-6">
                        <div>
                            <h6 class="m-0 p-0">Investment</h6>
                            <div class="row">
                                <div class="col">
                                    <p class="m-0 p-0" style="font-size: 12px;">Minimum</p>
                                </div>
                                <div class="col">
                                    <h6 class="m-0 p-0">@if($offer->base_currency == 'USD') $ @else  {{ $offer->base_currency }} @endif {{ number_format($offer->investmentRestrictions->min_invesment) }} </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                            <div class="input-group-text" id="btnGroupAddon">$</div>
                            <input type="number" class="form-control" placeholder="0"
                            aria-label="Input group example" aria-describedby="btnGroupAddon">
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 mt-3">
                    @if(Auth::user())
                        <a class="btn btn-primary" href="#"> Invest </a>
                    @else
                        <button class="btn btn-primary" type="button">Learn More</button>
                    @endif
                </div>
                <div class="d-grid gap-2 mt-3">
                    <button class="btn bg-change py-2" type="button">Add to Wishlist</button>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid header-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <img src="{{ $offer->getFirstMediaUrl('offer_image', 'thumb') }}" alt="Chain Rasied Logo" width="250" height="auto"
                    class="my-4">
                <div class="container-fluid">
                    <div class="row  rounded"
                        style=" background: linear-gradient(to right, #3399ff 0%, #333399 100%);">
                        <div class="col-lg-6 d-lg-flex align-items-center">
                            <ul class="d-flex align-items-center">
                                <li>
                                    <h6 class="p-0 m-0"> {{ $offer->user->name }} </h6>
                                </li>
                                <li class="ps-4"><i class="bi bi-geo-alt" style="color: #ffffff; font-size: 14px;"></i> 
                                    <span style="color: #ffffff; font-size: 14px;">  {{ $offer->user->userDetail->address }} </span></li>
                            </ul>

                        </div>
                        <div class="col-lg-6 d-lg-flex justify-content-end align-items-center">
                            <a style="color: #ffffff;" class="text-center" href="#!" role="button"><i  class="fab fa-facebook-f fa-lg pe-3"></i></a>

                            <!-- Twitter -->
                            <a style="color: #ffffff;" href="#!" role="button"><i   class="fab fa-twitter fa-lg pe-3"></i></a>

                            <!-- Instagram -->
                            <a style="color: #ffffff;" href="#!" role="button"><i  class="fab fa-instagram fa-lg "></i></a>
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
                                @if($offerDetail->input == 'summary')
                                
                                    <div class="col-lg-6 mt-4">
                                    <h5>{{ $offerDetail->heading}}</h5>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <h5>{{ $offerDetail->sub_heading}}</h6> 
                                    </div>
                                    <div class="col-lg-11 mt-4">
                                        {!!$offerDetail->description !!}
                                    </div> 
                                @elseif($offerDetail->input == 'text') 
                                        <div class="col-lg-6 mt-4">
                                            <h6>{{ $offerDetail->heading}}</h6> 
                                        </div>
                                        <div class="col-lg-6 mt-4">
                                            <h5>{{ $offerDetail->sub_heading}}</h6> 
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            {!!$offerDetail->description !!}
                                        </div>
                                @elseif($offerDetail->input == 'tiles')
                                        <div class="row">
                                            @if($offerDetail->offerTiles)
                                                @foreach($offerDetail->offerTiles as $tiles) 
                                                    <div class="col-lg-6 col-md-6  p-3"> 
                                                        <figure class="figure">
                                                            <img src="{{ asset('files/'.$tiles->path) }}" class="img img-thumbnail figure-img img-fluid rounded" alt="..." style="width:200px">
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
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h2>Reason to Invest</h2>
                        </div>
                        <div class="col-12">
                            <h2 style="color: #3399ff;" class="ps-4 py-3">01</h2>
                        </div>
                        <div class="col-12">
                            <h2 style="color: #3399ff;" class="ps-4 py-3">02</h2>
                        </div>
                        <div class="col-12">
                            <h2 style="color: #3399ff;" class="ps-4 py-3">03</h2>
                        </div>
                        <div class="col-12">
                            <h2 style="color: #3399ff;" class="ps-4 py-3">04</h2>
                        </div>


                    </div>
                </div> --}}
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h2>Recent Company Highlights</h2>
                        </div>
                        <div class="col-12 p-3">
                            <img src="{{ asset('media/portfolio/images.PNG')}}" alt="Chain Rasied Logo" width="100%" />
                            <p class="p-3">ChainRaise Technologies, a subsidiary of ChainRasied LLC (the parent
                                company) is able
                                to create Security Takens Using blockchain technology.Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially
                                unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software
                                like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h2>Market Lanscape</h2>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-12 py-5">
                            <h2>Plans For the Future</h2>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div class="col-lg-4">
                <div class="container p-5">
                    <div class="text-center py-4">
                        <img src="{{ asset('media/logo/image.PNG')}}" alt="Chain Rasied Logo" width="250" height="auto" />
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
                                        <li style=" line-height: normal; font-size: 14px;">Telegram Access </li>
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
                                        <li style=" line-height: normal; font-size: 14px;">Telegram Access </li>
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
                                        <li style=" line-height: normal; font-size: 14px;">Telegram Access </li>
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
@endsection