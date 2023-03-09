@extends('layouts.master')
@section('page_head')
    <style>
        .lernbtn:hover{
            background:#fff!important;
            color:#4b1dff!important;
        }
    </style>
@endsection
@section('title','Home')
@section('content')
    <div class="container-fluid header-sec py-3">
        <div class="row ">
        <div class="col-lg-12 d-flex justify-content-center align-items-center py-4">
            <img src="{{ asset('media/logo/logo-h.jpg')}}" alt="logo" width="80" height="60">
            <h2>Build an <span style="color:#4b1dff">Ambitious</span> Portfolio.</h2>
        </div>
        </div>
    </div>
    <div class="container-fluid bg-image ">
        <div class="container">
        <div class="row">
            @foreach($offers as $offer)
                <div class="col-lg-4 col-md-6 col-sm-12 p-3">
                    <a href="{{ route('offer.details',$offer->slug) }}">
                        <figure class="figure">
                            <img src="{{ $offer->getFirstMediaUrl('banner_image', 'thumb') }}" class="figure-img img-fluid rounded" alt="..." style="">
                        </figure>
                        <div class="row">
                            <div class="col-7">
                            <h3 class="p-0 m-0"> {{ $offer->name }} </h3>
                            </div>
                            <div class="col-5">
                            <h6 class="p-0 m-0 text-end">Offering Type</h6>
                            <h4 class="p-0 m-0 text-end">REG CF</h4>
                            </div>
                        </div>
                        <p class="pb-1 m-0">  {{ $offer->short_description }}  </p>
                        <div class="row">
                            <div class="col-6">
                            <h5 class="p-0 m-0"> @if($offer->base_currency == 'USD') $ @else  {{ $offer->base_currency }} @endif {{ $offer->size }} <span style="font-size: 16px;">Goal</span></h5>
                            </div>
                            <div class="col-6">
                            <h5 class="p-0 m-0 text-end">$0 <span style="font-size: 16px;">Rasied</span></h5>
                            </div>
                        </div>
                    </a>
                    <div class="row">
                        <div class="col-lg-12 mt-3">
                                <a  href="{{ route('offer.details',$offer->slug) }}" target="_blank" class="btn-sm btn btn-primary lernbtn" style="text-transform:uppercase;width:100%;border-radius: 0;background:#4B1DFF;border-color:#4B1DFF"> Learn More </a>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
        </div>
    </div>
    <div class="container-fluid bfs">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 text-center">
            <img src="{{ asset('media/portfolio/restricted-area.png')}}" width="75px" height="75px" class="mb-2" alt="...">
            <h5 class="mt-2">Access Exclusive Opportunities</h5>
            <p>Gain access to never before seen offerings available only on this platform</p>
            </div>
            <div class="col-lg-4 text-center">
            <img src="{{ asset('media/portfolio/analyze.png')}}" width="75px" height="75px" class="mb-2" alt="...">
            <h5 class="mt-2">Done-For-You Due Diligence</h5>
            <p>Our offerings are reviewed and checked for compliance with all pertinent regulatory bodies</p>
            </div>
            <div class="col-lg-4 text-center">
            <img src="{{ asset('media/portfolio/passionate.png')}}" width="75px" height="75px" class="mb-2" alt="...">
            <h5 class="mt-2">Support Your Passions</h5>
            <p>Invest in the things you care about, and turn a profit too</p>
            </div>
        </div>
        </div>
    </div> 
@endsection