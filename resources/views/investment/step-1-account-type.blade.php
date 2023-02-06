@extends('layouts.app')
@section('title', 'Dashboard')
@section('page_name', 'Dashboard')
@section('page_head')
    <style>
        .offering_row {
            background-color: #fff;
            padding: 10px 20px;
            box-shadow: 20px 20px 50px grey;
            "

        }

        .offering_row:hover {
            box-shadow: 5px 5px 70px grey;
            "

        }

        .stepper.stepper-links .stepper-nav .stepper-item .stepper-title {
            font-size: 1.1rem !important;
        }

        .cards_section {
            padding: 24px 10px !important;
        }

        .fw-normal {
            font-weight: normal !important;
        }

        .form-check-input {
            width: 1.2em !important;
            height: 1.2em !important;
        }

        input[type="text"] {
            border-radius: 0 !important;
        }

        input[type="number"] {
            border-radius: 0 !important;
        }

        .upload_document:hover {
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
                            <a href="{{ route('dashboard') }}"> Dashboard </a>
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
                        <div class="stepper stepper-links d-flex flex-column pt-8" id="kt_create_account_stepper"
                            data-kt-stepper="true">
                            <!--begin::Nav-->
                            <div class="stepper-nav mb-5">
                                <!--begin::Step 1-->
                                @foreach($top_nav as $nav)
                                    <div class="stepper-item " data-kt-stepper-element="nav">
                                        <h3 class="stepper-title"> {{ $nav->title }} </h3>
                                    </div>
                                @endforeach
                            </div>
                            <!--end::Nav-->
                            <!--begin::Form-->
                            <div class="mx-auto mw-1000px w-100 pt-6 pb-10 fv-plugins-bootstrap5 fv-plugins-framework"  novalidate="novalidate" id="kt_create_account_form">
                                <form action="{{ route('invest.step.two') }}" method="get"  enctype="multipart/form-data">
                                @csrf
                                    <div class="current" data-kt-stepper-element="content">
                                        <div class="w-100">
                                            <div class="pb-10 pb-lg-10">
                                                <h5 class="fw-bold d-flex align-items-center text-dark">
                                                    Select Account Type
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                        title="You will be charged the set amount from your selected payment option"></i>
                                                </h5>
                                                <div class="text-muted fw-semibold fs-7">
                                                    What type of account are you investing as?
                                                </div>
                                            </div>
                                            <div class="mb-10">
            
                                                    <input type="hidden" name="external_account" id="external_account" value="{{ $external_account->external_account_id }}">
                                                    <input type="hidden" name="offer_id"   value="{{ $offer->id }}">
                                                    <input type="hidden" name="investment_amount" id="investment_amount" value="{{ $investment_amount }}">
                                                    
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-5">Account Type</label>  
                                                    <div class="row row-cols-1 row-cols-md-2 g-5">
                                                        <div class="col">
                                                            <input type="radio" class="btn-check" name="account_type"
                                                                value="personal" id="kt_radio_buttons_2_option_1"
                                                                checked="checked" />
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100"
                                                                for="kt_radio_buttons_2_option_1">
                                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin010.svg-->
                                                                <span class="svg-icon svg-icon-3hx svg-icon-primary">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.3"
                                                                            d="M12.5 22C11.9 22 11.5 21.6 11.5 21V3C11.5 2.4 11.9 2 12.5 2C13.1 2 13.5 2.4 13.5 3V21C13.5 21.6 13.1 22 12.5 22Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M17.8 14.7C17.8 15.5 17.6 16.3 17.2 16.9C16.8 17.6 16.2 18.1 15.3 18.4C14.5 18.8 13.5 19 12.4 19C11.1 19 10 18.7 9.10001 18.2C8.50001 17.8 8.00001 17.4 7.60001 16.7C7.20001 16.1 7 15.5 7 14.9C7 14.6 7.09999 14.3 7.29999 14C7.49999 13.8 7.80001 13.6 8.20001 13.6C8.50001 13.6 8.69999 13.7 8.89999 13.9C9.09999 14.1 9.29999 14.4 9.39999 14.7C9.59999 15.1 9.8 15.5 10 15.8C10.2 16.1 10.5 16.3 10.8 16.5C11.2 16.7 11.6 16.8 12.2 16.8C13 16.8 13.7 16.6 14.2 16.2C14.7 15.8 15 15.3 15 14.8C15 14.4 14.9 14 14.6 13.7C14.3 13.4 14 13.2 13.5 13.1C13.1 13 12.5 12.8 11.8 12.6C10.8 12.4 9.99999 12.1 9.39999 11.8C8.69999 11.5 8.19999 11.1 7.79999 10.6C7.39999 10.1 7.20001 9.39998 7.20001 8.59998C7.20001 7.89998 7.39999 7.19998 7.79999 6.59998C8.19999 5.99998 8.80001 5.60005 9.60001 5.30005C10.4 5.00005 11.3 4.80005 12.3 4.80005C13.1 4.80005 13.8 4.89998 14.5 5.09998C15.1 5.29998 15.6 5.60002 16 5.90002C16.4 6.20002 16.7 6.6 16.9 7C17.1 7.4 17.2 7.69998 17.2 8.09998C17.2 8.39998 17.1 8.7 16.9 9C16.7 9.3 16.4 9.40002 16 9.40002C15.7 9.40002 15.4 9.29995 15.3 9.19995C15.2 9.09995 15 8.80002 14.8 8.40002C14.6 7.90002 14.3 7.49995 13.9 7.19995C13.5 6.89995 13 6.80005 12.2 6.80005C11.5 6.80005 10.9 7.00005 10.5 7.30005C10.1 7.60005 9.79999 8.00002 9.79999 8.40002C9.79999 8.70002 9.9 8.89998 10 9.09998C10.1 9.29998 10.4 9.49998 10.6 9.59998C10.8 9.69998 11.1 9.90002 11.4 9.90002C11.7 10 12.1 10.1 12.7 10.3C13.5 10.5 14.2 10.7 14.8 10.9C15.4 11.1 15.9 11.4 16.4 11.7C16.8 12 17.2 12.4 17.4 12.9C17.6 13.4 17.8 14 17.8 14.7Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <span class="d-block fw-semibold text-start">
                                                                    <span class="text-dark fw-bold d-block fs-3"> Personal
                                                                    </span>
                                                                    <span class="text-muted fw-semibold fs-6">
                                                                        Individual investor
                                                                        managing a single
                                                                        account
                                                                    </span>
                                                                </span>
                                                            </label>
                                                            <!--end::Option-->
                                                        </div> 
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <input type="radio" class="btn-check" name="account_type"
                                                                value="business" id="kt_radio_buttons_2_option_2" />
                                                            <label
                                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100"
                                                                for="kt_radio_buttons_2_option_2">
                                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin009.svg-->
                                                                <span class="svg-icon svg-icon-3hx svg-icon-primary">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.3"
                                                                            d="M15.8 11.4H6C5.4 11.4 5 11 5 10.4C5 9.80002 5.4 9.40002 6 9.40002H15.8C16.4 9.40002 16.8 9.80002 16.8 10.4C16.8 11 16.3 11.4 15.8 11.4ZM15.7 13.7999C15.7 13.1999 15.3 12.7999 14.7 12.7999H6C5.4 12.7999 5 13.1999 5 13.7999C5 14.3999 5.4 14.7999 6 14.7999H14.8C15.3 14.7999 15.7 14.2999 15.7 13.7999Z"
                                                                            fill="currentColor" />
                                                                        <path
                                                                            d="M18.8 15.5C18.9 15.7 19 15.9 19.1 16.1C19.2 16.7 18.7 17.2 18.4 17.6C17.9 18.1 17.3 18.4999 16.6 18.7999C15.9 19.0999 15 19.2999 14.1 19.2999C13.4 19.2999 12.7 19.2 12.1 19.1C11.5 19 11 18.7 10.5 18.5C10 18.2 9.60001 17.7999 9.20001 17.2999C8.80001 16.8999 8.49999 16.3999 8.29999 15.7999C8.09999 15.1999 7.80001 14.7 7.70001 14.1C7.60001 13.5 7.5 12.8 7.5 12.2C7.5 11.1 7.7 10.1 8 9.19995C8.3 8.29995 8.79999 7.60002 9.39999 6.90002C9.99999 6.30002 10.7 5.8 11.5 5.5C12.3 5.2 13.2 5 14.1 5C15.2 5 16.2 5.19995 17.1 5.69995C17.8 6.09995 18.7 6.6 18.8 7.5C18.8 7.9 18.6 8.29998 18.3 8.59998C18.2 8.69998 18.1 8.69993 18 8.79993C17.7 8.89993 17.4 8.79995 17.2 8.69995C16.7 8.49995 16.5 7.99995 16 7.69995C15.5 7.39995 14.9 7.19995 14.2 7.19995C13.1 7.19995 12.1 7.6 11.5 8.5C10.9 9.4 10.5 10.6 10.5 12.2C10.5 13.3 10.7 14.2 11 14.9C11.3 15.6 11.7 16.1 12.3 16.5C12.9 16.9 13.5 17 14.2 17C15 17 15.7 16.8 16.2 16.4C16.8 16 17.2 15.2 17.9 15.1C18 15 18.5 15.2 18.8 15.5Z"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <span class="d-block fw-semibold text-start">
                                                                    <span class="text-dark fw-bold d-block fs-3"> Business
                                                                    </span>
                                                                    <span class="text-muted fw-semibold fs-6">
                                                                        Registered Investment
                                                                        Advisors, Financial
                                                                        Advisors, Family
                                                                        Offices, Trusts, IRAs or
                                                                        those investing on
                                                                        behalf of an entity
                                                                    </span>
                                                                </span>
                                                            </label>
                                                            <!--end::Option-->
                                                        </div> 
                                                    </div>
                                                
                                                    <!--end::Row-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 "style="text-align:right">
                                            <button class="btn btn-sm btn-dark no-radius" type="submit"> Next </button>
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
 
@endsection
