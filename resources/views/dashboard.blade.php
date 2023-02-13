@extends('layouts.app')
@section('title', 'Dashboard')
@section('page_name', 'Dashboard')
@section('page_head')
    <style>
        .offering_row{
            background-color: #fff;
            padding:10px 20px;
            box-shadow: 20px 20px 50px grey;"
        }
        .offering_row:hover{
            box-shadow: 5px 5px 70px grey;"
        }
    </style>
@endsection
@section('page_content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard
                    </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Dashboard</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            @hasrole('admin|issuer')
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <!--begin::Row-->
                    <div class="row ">
                        <!--begin::Col-->
                         
                            <!--begin::Card widget 20-->
                            <div class="col-lg-4 card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"  >
                                <!--begin::Header-->
                                <div class="card-header pt-5 pb-5" style="border-radius:4px;background-color: #bd4d69;background-image:url('assets/media/patterns/vector-1.png')">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">13</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <hr>
                                        <span class="text-white opacity-75 pt-1 fw-bold fs-6 text-dark"> ACTIVE ACCOUNTS </span>
                                        <!--end::Subtitle-->
                                    </div> 
                                </div> 
                            </div>

                            <div class="col-lg-4 card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"  >
                                <!--begin::Header-->
                                <div class="card-header pt-5 pb-5" style="border-radius:4px;background-color: #42413c;background-image:url('assets/media/patterns/vector-1.png')">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">10</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <hr>
                                        <span class="text-white opacity-75 pt-1 fw-bold fs-6 "> NUMBER OF INVESTOR </span>
                                        <!--end::Subtitle-->
                                    </div> 
                                </div> 
                            </div>
                            <div class="col-lg-4 card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"  >
                                <!--begin::Header-->
                                <div class="card-header pt-5 pb-5" style="border-radius:4px;background-color: #15c2c2;background-image:url('assets/media/patterns/vector-1.png')">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">50,0000 <small class="text-dark"> USD </small> </span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <hr>
                                        <span class="text-white opacity-75 pt-1 fw-bold fs-6 text-dark"> TOTAL AMOUNT RAISED  </span>
                                        <!--end::Subtitle-->
                                    </div> 
                                </div> 
                            </div>

    
                    </div>
                     
                     
                     
                </div>
            @endhasrole
            @hasrole('investor')
                    <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                  
                    
                   

                    
                        @foreach($offers as $offer)
                            <div class="row mb-15">
                                <div class="col-lg-12 offering_row" >
                                        <div class="row">
                                            @if($offer->getFirstMediaUrl('banner_image', 'thumb') != null )
                                                @php
                                                    $banner  = $offer->getFirstMediaUrl('banner_image', 'thumb')
                                                @endphp 
                                            @else
                                                @php
                                                      $banner  = 'https://i.stack.imgur.com/FueqW.jpg'
                                                @endphp
                                            @endif 
                                            <div class="col-lg-8" style="border-radius:3px;min-height:170px;max-height:170px;background-position: 100%; 
                                            background-image: url('{{ $banner }}')">
                                            </div>
                                            <div class="col-lg-4" style="background-color:#fff;min-height:150px;max-height:150px;">
                                                <div class="card-header pt-2">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Icon-->
                                                        <div class="symbol symbol-circle me-5">
                                                            
                                                        </div>
                                                        <!--end::Icon-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <h2 class="mb-1">  {{ $offer->name }} </h2>
                                                            <div class="fw-normal ">
                                                                <a href="#" class="text-dark">
                                                                    {{ $offer->short_description }}
                                                                </a>
                                                            </div>

                                                            <div class="text-dark fw-bold mt-3">
                                                                <span class="text-success"> {{ $offer->base_currency }} {{ $offer->size }} </span> {{ $offer->size_label }}
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 text-center">
                                                                    <a href="{{ route('invest.detail',$offer->id) }}" class="btn btn-sm btn-dark mt-4 no-radius" style="width:100%"> Learn More </a>
                                                                </div> 
                                                            </div> 
                                                        </div>
                                                        
                                                        <!--end::Title-->
                                                    </div>
                                                </div>
                                                <div class="card-body pb-0">
                                                    <!--begin::Navs-->
                                                    <div class="d-flex overflow-auto h-55px">
                                                        
                                                    </div>
                                                    <!--begin::Navs-->
                                                </div>
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        @endforeach
                    </div>
            @endhasrole
            <!--end::Content container-->

        </div>
        <!--end::Content-->
    </div>


   

@endsection
@section('page_js')


    @if(Session::has('success'))
        @php 
            $message = (session::get('success'));
        @endphp 
        <script> 
            toastr.success('{{$message}}', "Success");
        </script>
      
    @endif


    @if(Session::has('error'))
        @php 
            $message = (session::get('error'));
        @endphp 
        <script> 
            toastr.error('{{$message}}', "Error");
        </script>
        
    @endif

   
@endsection
