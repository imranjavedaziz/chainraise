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
        .stepper.stepper-links .stepper-nav .stepper-item .stepper-title{
            font-size: 1.1rem !important;
        }
       
        .cards_section{
            padding:24px 10px!important;
        }
        .fw-normal{
            font-weight: normal!important;
        }
        .form-check-input{
            width: 1.2em!important;
            height: 1.2em!important;
        }
        input[type="text"]{
            border-radius: 0!important;
        }
        input[type="number"]{
            border-radius: 0!important;
        }
		.upload_document:hover{
			cursor: pointer;
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
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item">
                            <li class="breadcrumb-item text-muted"> Account Type </li>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item">
                            <li class="breadcrumb-item text-muted"> Verify Identity </li>
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
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card" style="box-shadow: 16px 12px 75px -5px rgba(110,98,98,0.58);">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Stepper-->
                        <div class="stepper stepper-links d-flex flex-column pt-8" id="kt_create_account_stepper" data-kt-stepper="true">
                            <!--begin::Nav-->
                            <div class="stepper-nav mb-5">
                                <!--begin::Step 1-->
                                @foreach($top_nav as $nav)
                                    <div class="stepper-item " data-kt-stepper-element="nav">
                                        <h3 class="stepper-title"> {{ $nav->title }} </h3>
                                    </div>
                                @endforeach
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                            <!--begin::Form-->
                            <div class="mx-auto mw-1000px w-100 pt-6 pb-10 fv-plugins-bootstrap5 fv-plugins-framework" id="">
                                <form action="{{ route('invest.step.three') }}" method="get" enctype="multipart/form-data">
                                    @csrf
                                    <div class="current"data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <input type="hidden" name="type" value="investor" />
                                            <input type="hidden" name="external_account" value="{{ $external_account }}" />
                                            <input type="hidden" name="investment_amount" value="{{ $investment_amount }}" />
                                            <input type="hidden" name="offer_id" value="{{ $offer->id }}" />
                                            <h5 class="fw-bold d-flex align-items-center text-dark">
                                                VERIFY IDENTITY
                                            </h5>
                                            <div class="text-muted fw-semibold fs-7">
                                                ChainRaise has implemented this verification step to stay legally compliant with
                                                KYC/AML (Know Your Customer/Anti-Money Laundering) regulations. This is an
                                                additional measure to ensure against accepting fraudulent contributions. All
                                                investors must complete the KYC/AML form before making any investments through
                                                ChainRaise.
                                            </div> 
                                            <div class="row text-left" data-kt-modal-top-up-wallet-option="dollar">
                                                <div class="card-body cards_section">
                                                    <div class="form-group row mb-5">
                                                        <h5 class="d-flex align-items-center text-dark fw-normal mb-4">
                                                            CONTACT INFORMATION
                                                        </h5> 
                                                        <div class="row">
                                                            <div class="col-lg-12" style="text-align:left;">
                                                                <div class="row mb-4 text-left">
                                                                    <div class="col-lg-4">
                                                                        <label>First Name:
                                                                            <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="First Name*" required=""
                                                                            name="first_name" value="{{ $user->name }}" />
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <label>Middle Name:
                                                                            <span class="text-danger"></span></label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Middle Name" name="middle_name"
                                                                            value="{{ $user->userDetail->middle_name }}" />
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <label>Last Name:
                                                                            <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Last Name" name="last_name"
                                                                            value="{{ $user->userDetail->last_name }}" />
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <label>Title:</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Title" name="title"
                                                                                value="{{ $user->userDetail->title }}" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <label>Phone Number:
                                                                            <span class="text-danger">*</span>
                                                                        </label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="(201) 555-0123" name="phone"
                                                                                value="{{ $user->phone }}" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <label>Date of Birth
                                                                            <span class="text-danger">*</span>
                                                                        </label>
                                                                        <div class="input-group" id="">
                                                                            <input type="date" class="form-control"
                                                                                placeholder="Date of Birth*" required=""
                                                                                name="dob"
                                                                                value="{{ $user->userDetail->dob }}" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group row mb-5" style="text-align: left">
                                                        <div class="col-lg-12 mb-1">
                                                            <h5 class="d-flex align-items-center text-dark fw-normal mb-4">
                                                                ADDRESS
                                                            </h5>
                                                        </div> 
                                                        <div class="col-lg-6">
                                                            <label>Address
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" name="address"
                                                                value="Ad dolorem anim exce"
                                                                placeholder="{{ $user->userDetail->address }}"
                                                                required="" />
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <label> Suit / Unit </label>
                                                            <input type="text" class="form-control" name="suit"
                                                                value="{{ $user->userDetail->suit }}"
                                                                placeholder="Suit / Unit" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group row mb-10">
                                                        <div class="col-lg-4">
                                                            <label>City <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" name="city"
                                                                value="{{ $user->userDetail->city }}" placeholder="City*"
                                                                required="" />
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <label>State / Region
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" name="state"
                                                                value="{{ $user->userDetail->state }}"
                                                                placeholder="State / Region*" required="" />
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <label>Zip / Postal Code
                                                                <span class="text-danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" name="zip"
                                                                id="zip_code" value="{{ $user->userDetail->zip }}"
                                                                required="" />
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="notice bg-light-primary rounded border-primary border border-dashed p-6 text-center mb-12">

                                                        <b class="text-black"> Consent to Electronic Delivery </b>
                                                        <p class="mt-3">
                                                            I consent to the electronic delivery of all communications and
                                                            materials.
                                                        </p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="d-flex">
                                                                <label class="form-check form-check-custom ">
                                                                    <input
                                                                        class="electronic_delivery form-check-input h-13px w-13px"
                                                                        type="checkbox" name="allow_referrals">
                                                                </label>
                                                                <span class="text-dark">
                                                                    &nbsp;&nbsp; I agree to the Consent to Electronic Delivery
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h5 class="d-flex align-items-center text-dark fw-normal mb-4 mt-8">
                                                        IDENTITY VERIFICATION
                                                    </h5>

                                                    <div class="row" style="text-align: left">
                                                        <div class="form-group mb-5 col-lg-6">
                                                            <label> Primary Contact SSN #
                                                                <small>(US Investors Only)</small>
                                                                <span class="text-danger">*</span></label>
                                                            <input type="" class="form-control"
                                                                placeholder="Primary Contact Social Security" required=""
                                                                name="primary_contact_social_security"
                                                                @if ($user->identityVerification) value="{{ $user->identityVerification->primary_contact_social_security }}" @endif />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-10">
                                                        <div class="col-lg-4">
                                                            <label>Nationality <span class="text-danger">*</span></label>
                                                            <select name="nationality" class="form-control nationality ">
                                                                @include('investment.country')
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label>Country of Residence
                                                                <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control"
                                                                name="country_residence"
                                                                @if ($user->identityVerification) value="{{ $user->identityVerification->country_residence }}" @endif />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label>Identification Type
                                                                <span class="text-danger">*</span></label>
                                                            <select name="document_type" class="form-control document_type">
                                                                <option value="passport"> Passport </option>
                                                                <option value="identificationCard"> Identification Card
                                                                </option>
                                                                <option value="license"> License </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="text-align: left">
                                                        <div class="col-lg-12">
                                                            <div
                                                                class="notice   bg-light-dark rounded border-dark border border-dashed p-6 text-center mb-12 change_photo_wrapper">
                                                                <div
                                                                    class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column change_photo_wrapper">
                                                                    File Name
                                                                    <button type="button"
                                                                        class="update_profile_photo btn btn-sm btn-dark-primary btn-square mb-1">
                                                                        <i class="fa fa-upload"></i>
                                                                        Upload Document
                                                                    </button>
                                                                    <input type="file" name="documents"
                                                                        class="new_profile_photo  d-none change_photo"
                                                                        data-type="project_logo">
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row" style="text-align: left">
                                                        <div class="col-lg-12 text-center">
                                                            <svg class="spinner d-none" width="24" height="24"
                                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <style>
                                                                    .spinner_qM83 {
                                                                        animation: spinner_8HQG 1.05s infinite
                                                                    }

                                                                    .spinner_oXPr {
                                                                        animation-delay: .1s
                                                                    }

                                                                    .spinner_ZTLf {
                                                                        animation-delay: .2s
                                                                    }

                                                                    @keyframes spinner_8HQG {

                                                                        0%,
                                                                        57.14% {
                                                                            animation-timing-function: cubic-bezier(0.33, .66, .66, 1);
                                                                            transform: translate(0)
                                                                        }

                                                                        28.57% {
                                                                            animation-timing-function: cubic-bezier(0.33, 0, .66, .33);
                                                                            transform: translateY(-6px)
                                                                        }

                                                                        100% {
                                                                            transform: translate(0)
                                                                        }
                                                                    }
                                                                </style>
                                                                <circle class="spinner_qM83" cx="4" cy="12"
                                                                    r="3" />
                                                                <circle class="spinner_qM83 spinner_oXPr" cx="12"
                                                                    cy="12" r="3" />
                                                                <circle class="spinner_qM83 spinner_ZTLf" cx="20"
                                                                    cy="12" r="3" />
                                                            </svg>
                                                            <button  class="btn btn-sm btn-dark no-radius check_kyc" type="button"> Check KYC   </button>
                                                            <button  class="btn btn-sm btn-dark no-radius d-none submit_for_step_3"    type="submit"> Submit   </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                </form> 
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Stepper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
        </div>
        
    </div>


   

@endsection
@section('page_js')
    <script>
        $('body').on('click','.check_kyc',function(event){
                event.preventDefault();
                $('.spinner').removeClass('d-none');
                $('.check_kyc').addClass('d-none');
                $.ajax({
                    url: "{{ route('invest.check.kyc') }}",
                    method: 'GET', 
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        if (response.status) {
                            $('.spinner').addClass('d-none');
                            if (response.status == 400) {
                                jQuery.each(response.data.errors, function(index, item) {
                                    console.log(item);
                                    toastr.error(item, "Error");
                                });
                                $('.check_kyc').removeClass('d-none');
                                // toastr.error(response.data.title, "Error");
                            }
                            if (response.status == 409) {
                                toastr.error(response.data.title, "Error");
                                $('.kyc_submit_button').removeClass('d-none');
                                $('.check_kyc').removeClass('d-none');
                                

                            }
                            if (response.status == 200) {
                                $('.check_kyc').addClass('d-none');
                                //$('.submit_for_step_3').removeClass('d-none'); 
                                toastr.success('Verification Completed', "Success");
                                setTimeout(function() { 
                                   $('.submit_for_step_3').click()
                                }, 2000);

                            }
                            if (response.status == false) {
                                toastr.error(response.message, "Error");
                                $('.check_kyc').removeClass('d-none');
                                $('.submit_for_step_3').addClass('d-none');
                            }
                        }
                     
                      
                    },
                    error:function(error){
                        console.log(error);
                        toastr.error('Internal Server Error While Checking KYC', "Error");
                    }

                });
        });
        
    </script>
@endsection
