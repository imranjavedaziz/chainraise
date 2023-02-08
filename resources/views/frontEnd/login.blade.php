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
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-3 ">
                <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" style="color:#fff">
                        <label for="" class="mb-1" >
                            Email
                        </label>
                        <input type="email" name="email" required placeholder="Enter you email .." class="form-control"
                        style="border-radius: 0;font-size:13px;padding:8px" />
                        @error('email')
                            <span class="text-danger " style="font-size:13px"> {{ $message }} </span>
                        @enderror
                       
                    </div>

                    <div class="form-group mt-4" style="color:#fff">
                        <label for="" class="mb-1">
                            Password
                        </label>
                        <input type="password" name="password" required placeholder="Enter you password .." class="form-control"
                        style="border-radius: 0;font-size:13px;padding:8px" />
                        @error('password')
                            <span class="text-danger " style="font-size:13px"> {{ $message }} </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn-sm btn btn-primary lernbtn mt-4" 
                    style="padding:5px 5px;text-transform:uppercase;width:100%;border-radius: 0;background:#4B1DFF;border-color:#4B1DFF">
                        Login
                    </button>
                </form>
                <div class="row">
                    <div class="col-lg-6">
                        
                        <a href="{{ route('login.facebook') }}" class="btn-sm btn btn-primary lernbtn mt-4" 
                        style="padding:5px 5px;text-transform:uppercase;width:100%;border-radius:0;
                        background:#ffffff;border-color:#4B1DFF;color:#000">
                           <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('login.google') }}" class="btn-sm btn btn-primary lernbtn mt-4" 
                        style="padding:5px 5px;text-transform:uppercase;width:100%;border-radius:0;
                        background:#ffffff;border-color:#4B1DFF;color:#000">
                           <i class="fab fa-google"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
    <div class="container-fluid bfs">
        <div class="container">
         
        </div>
    </div> 
@endsection