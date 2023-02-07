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
                        
                        <li class="breadcrumb-item text-muted">
                           <a href="{{ route('dashboard') }}">  Dashboard </a> 
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item">
                            <li class="breadcrumb-item text-muted">Make Investment</li>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container">
        
                <div class="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-10">
                        <div class="card-body mb-3">
                            <div class="position-relative">
                                @if($offer->getFirstMediaUrl('banner_image', 'thumb') != null )
                                @php
                                    $banner  = $offer->getFirstMediaUrl('banner_image', 'thumb')
                                @endphp 
                                @else
                                    @php
                                        $banner  = 'https://i.stack.imgur.com/FueqW.jpg'
                                    @endphp
                                @endif 

                                <div class=" text-white mb-4"
                                    style="padding-top:35px;min-height:200px;
                                    background-image:url('{{$banner}}');
                                    padding:5px 20px;background-size:cover">
                                    <div class="row text-white ">
                                        <div class="col-lg-12 pt-20">
                                            <h3 class="text-white fs-2qx fw-bold  text-white"
                                                id="issuer_account_label"> {{ $offer->name }}   </h3>
                                        </div>
                                        <div class="col-lg-12">
                                            <strong id="short_description_label" class="fs-1qx fw-bold">  
                                                {{ $offer->short_description }} 
                                            </strong>
                                        </div>
                                        <div class="col-lg-6  mt-3 " style="font-weight: bold">
                                            <div class="fs-5 fw-semibold text-success">
                                                <span id="currency_wrapper">
                                                    {{ $offer->base_currency }} 
                                                </span>
                                                <span id="offer_size_label">
                                                    {{ $offer->size }}
                                                </span>
                                                <i class="text-dark" id="offer_size_html"> {{ $offer->size_label }} </i>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-right" style="text-align: right"> 
                                            <a href="#" class="btn btn-dark btn-sm no-radius er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                               Invest
                                            </a>
                                          

                                            {{-- <a  href="{{ route('invest.make') }}" 
                                            class="btn btn-sm btn-light-primary btn-square no-radius btn-dark" 
                                            style="border-radius:0;">
                                               Invest
                                            </a> --}}
                                            
                                           
                                        </div>
                                    </div>
        
                                </div>
                            </div>
        
                        </div>
                    </div>
                    <div class="col-lg-1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-10">
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8"
                            role="tablist">
                            <!--begin:::Tab item-->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                    href="#kt_customer_view_overview_tab" aria-selected="true"
                                    role="tab">Overview</a>
                            </li>
                            
                            
        
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!--begin:::Tab pane-->
                            <div class="tab-pane fade active show" id="kt_customer_view_overview_tab"
                                role="tabpanel">
                                <!--begin::Card-->
                                <div class="card pt-4 mb-6 mb-xl-9">
                                    
                                    <div class="card-body pt-0 pb-5">
                                        <!--begin::Table-->
                                        <div id="kt_table_customers_payment_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
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
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
        
        
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-1">
                    </div>
                </div>
              
            </div>
        </div>
        
    </div>
    <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span> 
                    </div> 
                </div> 
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <div class="mb-10">
                        <form action="{{ route('invest.submit') }}" method="get" id="investForm">
                            @csrf
                            <input type="hidden" name="offer_id" value="{{ $offer->id }}"> 
                            <h4 class="fs-5 fw-semibold text-gray-800"> Enter Amount to Invest </h4>
                            <div class="d-flex hide_on_submit">
                                <input id="kt_share_earn_link_input" type="number" class="form-control form-control-solid me-3 flex-grow-1 investment_amount" name="investment_amount" required placeholder="Enter Amount Min $ {{ $offer->investmentRestrictions->min_invesment}}">
                                <button  type="submit" class="btn-dark no-radius btn btn-light fw-bold flex-shrink-0 submit_btn" > Submit </button>
                               
                            </div>

                            <div class="show_on_submit d-none" style="text-align: center">
                                <img src="https://i.gifer.com/origin/b4/b4d657e7ef262b88eb5f7ac021edda87.gif" alt="" class="img img-thumbnail" style="width:100px">
                            </div>
                            <label for="" class="text-danger text-">
                               $ {{ $offer->investmentRestrictions->min_invesment}} minimum  -> $ {{ $offer->investmentRestrictions->max_invesment}} maximum
                            </label>
                        </form>
                        <!--end::Title-->
                    </div>
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>


   

@endsection
@section('page_js')
    <script>
            $('.submit_btn').click(function(e){
                e.preventDefault();
                if($('.investment_amount').val() == ''){
                    toastr.error("Please Enter Amount", "Error");
                    return false;
                }
                if($('.investment_amount').val() < {{ $offer->investmentRestrictions->min_invesment}}){
                    toastr.error("Enter Atlest minimum amount", "Error");
                }else if($('.investment_amount').val() > {{ $offer->investmentRestrictions->max_invesment}}){
                    toastr.error("Amount is greater then max amount", "Error");
                }else{
                    $( "#investForm" )[0].submit();   
                    $('.hide_on_submit').addClass('d-none');
                    $('.show_on_submit').removeClass('d-none');
                    
                }
              

            });
        
    </script>
@endsection
