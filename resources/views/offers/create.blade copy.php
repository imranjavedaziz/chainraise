@extends('layouts.app')
@section('title', 'Account Users')
@section('page_name', 'Listings')
@section('page_head')

@endsection
@section('page_content')

    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Offer
                        Create</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Offers</li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Create</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid gap-10 first"
                    id="kt_create_account_stepper" data-kt-stepper="true">
                    <!--begin::Aside-->
                    <div
                        class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px">
                        <!--begin::Wrapper-->
                        <div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
                            <!--begin::Nav-->
                            <div class="stepper-nav">
                                <!--begin::Step 1-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">1</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Basic Info</h3>
                                            <div class="stepper-desc fw-semibold">Setup Your Account Details</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="stepper-item pending" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">2</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Investor Flow</h3>
                                            <div class="stepper-desc fw-semibold">Setup Your Account Settings</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class="stepper-item pending" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">3</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Access</h3>
                                            <div class="stepper-desc fw-semibold">Your Business Related Info</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class="stepper-item pending" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">4</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title"> Display </h3>
                                            <div class="stepper-desc fw-semibold">Set Your Payment Methods</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class="stepper-item mark-completed pending" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">5</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">Completed</h3>
                                            <div class="stepper-desc fw-semibold">Woah, we are here</div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--begin::Aside-->
                    <!--begin::Content-->
                    <div class="card d-flex flex-row-fluid flex-center">
                        <!--begin::Form-->
                        <form class="card-body py-20 w-100 mw-xl-700px px-9 fv-plugins-bootstrap5 fv-plugins-framework"
                            novalidate="novalidate" id="kt_create_account_form">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <div class="pb-10 pb-lg-15"> 
                                        <h2 class="fw-bold text-dark">Basic Information</h2> 
                                    </div>

                                    <div class="mb-10">
                                        <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                                            <div class="col-lg-6 ">
                                                <select name="issuer" aria-label="Select Issuer Account" data-control="select2" 
                                                    data-placeholder="Select Issuer Account *"
                                                    class="form-select form-select-solid form-select-lg" id="issuer_account">
                                                    <option value=""> Select Issuer Account </option>
                                                    <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa   Indonesia - Indonesian</option>
                                                    <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu -   Malay</option>
                                                    <option data-kt-flag="flags/canada.svg" value="ca">Català - Catalan </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="offer_name"
                                                    placeholder="Offer Name *">
                                            </div>
                                        </div>
                                        <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="offer_name"
                                                    placeholder="Short Description (Optional)">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="offer_name"
                                                    placeholder="Filling Type (Optional)">
                                            </div>
                                        </div>
                                        <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="security_type"
                                                    placeholder="Security Type (Optional)">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="offer_symbol"
                                                    placeholder="Offer Symbol *">
                                            </div>
                                        </div>
                                        <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                                            <div class="col-lg-6">
                                                <select name="offer_tags "
                                                    aria-label="Offer Tags (filters assets in marketplace)"
                                                    data-control="select2"
                                                    data-placeholder="Offer Tags (filters assets in marketplace)"
                                                    class="form-select form-select-solid form-select-lg">
                                                    <option value=""> Select Issuer Account </option>
                                                    <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa
                                                        Indonesia - Indonesian</option>
                                                    <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu
                                                        - Malay</option>
                                                    <option data-kt-flag="flags/canada.svg" value="ca">Català -
                                                        Catalan</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" name="offer_size"
                                                    placeholder="Total offering size?">
                                            </div>
                                        </div>
                                        <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                                            <div class="col-lg-6">
                                                <select name="base_currency" data-control="select2"
                                                    class="form-select form-select-solid form-select-lg">
                                                    <option value="USD" selected> USD</option>
                                                    <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa
                                                        Indonesia - Indonesian</option>
                                                    <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu
                                                        - Malay</option>
                                                    <option data-kt-flag="flags/canada.svg" value="ca">Català -
                                                        Catalan</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" name="price_per_share"
                                                    placeholder="Price per share/unit (if applicable)?">
                                            </div>
                                        </div>
                                        <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" name="share_unit"
                                                    placeholder="Share/Unit Label (default: shares)">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" name="total_valuation"
                                                    placeholder="Total Valuation / NAV (if applicable)?">
                                            </div>
                                        </div>
                                        <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                                            <div class="col-lg-6">

                                                <div class="position-relative d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <input class="form-control form-control-solid ps-12"
                                                        placeholder="Commencement Date?" name="commencement_date?" />
                                                    <!--end::Datepicker-->
                                                </div>
                                            </div>
                                            <div class="col-lg-6">

                                                <div class="position-relative d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--end::Icon-->
                                                    <!--begin::Datepicker-->
                                                    <input class="form-control form-control-solid ps-12"
                                                        placeholder="Funding end date?" name="funding_end_date" />
                                                    <!--end::Datepicker-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div data-kt-stepper-element="content" class="pending">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Investor Flow</h2>
                                         
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row fv-plugins-icon-container">
                                        <div class="card card-flush  mb-5 mb-lg-10">

                                            <div class="card-body pt-0">
                                                <!--begin::Custom fields-->
                                                <div class="d-flex flex-column mb-15 fv-row">
                                                    <!--begin::Label-->
                                                    <div class="fs-5 fw-bold form-label mb-3">Investment Steps
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="popover" data-bs-trigger="hover"
                                                            data-bs-html="true"
                                                            data-bs-content="Add custom fields to the billing invoice."
                                                            data-kt-initialized="1"></i>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Table wrapper-->
                                                    <div class="table-responsive">
                                                        <!--begin::Table-->
                                                        <div id="kt_create_new_custom_fields_wrapper"
                                                            class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                            <div class="table-responsive">
                                                                <table id="kt_create_new_custom_fields"
                                                                    class="table align-middle table-row-dashed fw-semibold fs-6 gy-5 dataTable no-footer">
                                                                    <!--begin::Table head-->
                                                                    <thead>
                                                                        <tr
                                                                            class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                                                            <th class="pt-0 sorting_disabled"
                                                                                rowspan="1" colspan="1"
                                                                                style="width: 365.562px;"> </th>
                                                                            
                                                                            <th class="pt-0 text-end sorting_disabled"
                                                                                rowspan="1" colspan="1"
                                                                                style="width: 78.5px;">Remove</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <!--end::Table head-->
                                                                    <!--begin::Table body-->
                                                                    <tbody>

                                                                        <tr class="odd">
                                                                            <td>
                                                                                <input type="text" 
                                                                                class="form-control form-control-solid"
                                                                                name="null-1" value=" Select Account Type ">
                                                                            </td>
                                                                           
                                                                            <td class="text-end">
                                                                                <button type="button"
                                                                                    class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3"
                                                                                    data-kt-action="field_remove">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                                    <span class="svg-icon svg-icon-3">
                                                                                        <svg width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                                fill="currentColor"></path>
                                                                                            <path opacity="0.5"
                                                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                                fill="currentColor"></path>
                                                                                            <path opacity="0.5"
                                                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                                fill="currentColor"></path>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </button>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="odd">
                                                                            <td>
                                                                                <input type="text" 
                                                                                class="form-control form-control-solid"
                                                                                name="null-1" value=" Select Account Type ">
                                                                            </td>
                                                                           
                                                                            <td class="text-end">
                                                                                <button type="button"
                                                                                    class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3"
                                                                                    data-kt-action="field_remove">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                                    <span class="svg-icon svg-icon-3">
                                                                                        <svg width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                                                fill="currentColor"></path>
                                                                                            <path opacity="0.5"
                                                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                                                fill="currentColor"></path>
                                                                                            <path opacity="0.5"
                                                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                                                fill="currentColor"></path>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </button>
                                                                            </td>
                                                                        </tr>

                                                                        
                                                                       
                                                                    </tbody>
                                                                    <!--end::Table body-->
                                                                </table>
                                                            </div>
                                                            <div class="row">
                                                                <div
                                                                    class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end:Table-->
                                                    </div>
                                                    <!--end::Table wrapper-->
                                                    <button type="button" class="btn-sm btn btn-lg btn-light me-3" id="kt_create_new_custom_fields_add">
                                                            Add An Investment Setup
                                                    </button>
                                                    <!--end::Add custom field-->
                                                </div>
                                                <div class="d-flex flex-column mb-15 fv-row">
                                                    <!--begin::Label-->
                                                    <div class="fs-5 fw-bold form-label mb-5">Investment Restrictions
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="popover" data-bs-trigger="hover"
                                                            data-bs-html="true"
                                                            data-bs-content="Add custom fields to the billing invoice."
                                                            data-kt-initialized="1"></i>
                                                    </div>

                                                    <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                                                     
                                                        <div class="col-lg-12">
                                                            <input type="number" class="form-control" name="price_per_share"
                                                                placeholder="Minimum investment (USD)">
                                                        </div>
    
                                                        <div class="col-lg-12">
                                                            <input type="number" class="form-control" name="price_per_share"
                                                                placeholder="Maximum investment (USD)">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="d-flex flex-stack"> 
                                                                <div class="me-5">
                                                                    <label class="required fs-6 fw-semibold">Allow fractional shares</label> 
                                                                </div> 
                                                                <div class="d-flex"> 
                                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone"  name="details_notifications[]"> 
                                                                    </label> 
                                                                </div> 
                                                            </div>
                                                        </div>
    
                                                        <div class="col-lg-12">
                                                            <div class="d-flex flex-stack"> 
                                                                <div class="me-5">
                                                                    <label class="required fs-6 fw-semibold"> Require investing by units </label> 
                                                                </div> 
                                                                <div class="d-flex"> 
                                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications1[]"> 
                                                                    </label> 
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                     
                                                </div>
                                                <div class="d-flex flex-column mb-15 fv-row">
                                                    <!--begin::Label-->
                                                    <div class="fs-5 fw-bold form-label mb-5">Call To Action Buttons
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="popover" data-bs-trigger="hover"
                                                            data-bs-html="true"
                                                            data-bs-content="Add custom fields to the billing invoice."
                                                            data-kt-initialized="1"></i>
                                                    </div>

                                                    <div class="row row-cols-2 row-cols-md-4 g-5 mb-8">
                                                     
                                                        <div class="col-lg-12">
                                                            <input type="number" class="form-control" name="price_per_share"
                                                                placeholder="Review Documents Button Text">
                                                        </div>
    
                                                        <div class="col-lg-12">
                                                            <input type="number" class="form-control" name="price_per_share"
                                                                placeholder="Invest Button Text">
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input type="number" class="form-control" name="price_per_share"
                                                                placeholder=" Contact Us Button Text">
                                                        </div>

                                                       
                                                        <div class="col-lg-12">
                                                            <div class="d-flex flex-stack">  
                                                                <div class="d-flex"> 
                                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone"  name="details_notifications[]">
                                                                        <span class="form-check-label fw-semibold">Send me a notification when clicked</span>
                                                                        
                                                                    </label> 
                                                                </div> 
                                                            </div>
                                                        </div>


                                                        <div class="col-lg-12">
                                                            <div class="d-flex flex-stack">  
                                                                <div class="d-flex"> 
                                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone"  name="details_notifications[]">
                                                                        <span class="form-check-label fw-semibold"> Hide Contact Us Button </span>
                                                                        
                                                                    </label> 
                                                                </div> 
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="d-flex flex-stack">  
                                                                <div class="d-flex"> 
                                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone"  name="details_notifications[]">
                                                                        <span class="form-check-label fw-semibold"> Use  <a href=""> Calendly </a>  meeting scheduling </span>
                                                                        
                                                                    </label> 
                                                                </div> 
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control" name="price_per_share"
                                                                placeholder=" Calendly Event Link *">
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control" name="price_per_share"
                                                                placeholder=" Alternate Notification Button">
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="d-flex flex-stack">  
                                                                <div class="d-flex"> 
                                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone"  name="details_notifications[]">
                                                                        <span class="form-check-label fw-semibold">  Allow User to Send Custom Message </span>
                                                                        
                                                                    </label> 
                                                                </div> 
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <label for="">
                                                                Complete Transaction Buttons / Messages
                                                            </label>
                                                        </div>
                                                        
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control" name="price_per_share"
                                                                placeholder=" Confirm Investment Button Text">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control" name="price_per_share"
                                                                placeholder=" Transaction Confirmation Message">
                                                        </div>


                                                        <div class="col-lg-12">
                                                            <label for="">
                                                                Complete Transaction Buttons / Messages
                                                            </label>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control" name="price_per_share"
                                                                placeholder=" Learn More Button">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control" name="price_per_share"
                                                                placeholder=" Sign In Button">
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <input type="text" class="form-control" name="price_per_share"
                                                                placeholder=" External URL">
                                                        </div>
                                                     
                                                    </div>
                                                     
                                                </div>
 

                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                    </div>

                                </div>
                                <!--end::Wrapper-->
                            </div>
                       
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div data-kt-stepper-element="content" class="pending">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <h2 class="fw-bold text-dark">Access</h2>
                                    </div>

                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        <select name="offer_tags "   aria-label="Offer Visibility"  data-control="select2"
                                        data-placeholder="Offer Visibility"
                                        class="form-select form-select-solid form-select-lg">
                                        <option value=""> Select Issuer Account </option>
                                        <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa
                                            Indonesia - Indonesian</option>
                                        <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu
                                            - Malay</option>
                                        <option data-kt-flag="flags/canada.svg" value="ca">Català -
                                            Catalan</option>
                                        </select>
                                    </div>


                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        <select name="offer_tags "   aria-label="Offer Status"  data-control="select2"
                                        data-placeholder="Offer Status"
                                        class="form-select form-select-solid form-select-lg">
                                        <option value=""> Select Issuer Account </option>
                                        <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa
                                            Indonesia - Indonesian</option>
                                        <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu
                                            - Malay</option>
                                        <option data-kt-flag="flags/canada.svg" value="ca">Català -
                                            Catalan</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center form-label">
                                            <span class="required"> Allow Lists: Only allow these investors </span> 
                                        </label>

                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <select name="offer_tags "   aria-label="Select a list"  data-control="select2"
                                            data-placeholder="Select a list"
                                            class="form-select form-select-solid form-select-lg">
                                            <option value=""> Select Issuer Account </option>
                                            <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa
                                                Indonesia - Indonesian</option>
                                            <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu
                                                - Malay</option>
                                            <option data-kt-flag="flags/canada.svg" value="ca">Català -
                                                Catalan</option>
                                            </select>
                                        </div>
                                       
                                    </div>

                                    <div class="fv-row mb-10 fv-plugins-icon-container">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center form-label">
                                            <span class="required"> Deny Lists: Disallow these investors </span> 
                                        </label>

                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <select name="offer_tags "   aria-label="Select a list"  data-control="select2"
                                            data-placeholder="Select a list"
                                            class="form-select form-select-solid form-select-lg">
                                            <option value=""> Select Issuer Account </option>
                                            <option data-kt-flag="flags/indonesia.svg" value="id">Bahasa
                                                Indonesia - Indonesian</option>
                                            <option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu
                                                - Malay</option>
                                            <option data-kt-flag="flags/canada.svg" value="ca">Català -
                                                Catalan</option>
                                            </select>
                                        </div>
                                       
                                    </div>
                                    <div class="fv-row mb-10 fv-plugins-icon-container"> 
                                        <label class="d-flex align-items-center form-label">
                                            <span class="required"> Invites </span> 
                                        </label>
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold">Send me a notification when clicked</span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="fv-row mb-10 fv-plugins-icon-container"> 
                                        <label class="d-flex align-items-center form-label">
                                            <span class="required"> Accreditation </span> 
                                        </label>
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold"> Allow non-accredited investors </span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="fv-row mb-10 fv-plugins-icon-container"> 
                                        <label class="d-flex align-items-center form-label">
                                            <span class="required"> Editing </span> 
                                        </label>
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold"> Allow issuer to edit this offer </span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div> 
                                    </div>
   
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div data-kt-stepper-element="content" class="pending">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark"> Display </h2>
                                         
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10 fv-plugins-icon-container"> 
                                        <label class="d-flex align-items-center form-label">
                                            <span class="required"> Display Settings </span> 
                                        </label>
                                        <hr> 
                                        <div class="col-lg-12 mb-4">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold"> Enable Question & Answer Forum </span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div> 
                                        <div class="col-lg-12 mb-4">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold"> Show Funding Progress </span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div> 
                                        <div class="col-lg-12 mb-4">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold"> Show Funding End Date Countdown </span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div> 
                                        <div class="col-lg-12 mb-4">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold">Show Blockchain Info </span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div> 
                                        <div class="col-lg-12 mb-4">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold"> Swap Issuer and Offer Name </span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div> 
                                        <div class="col-lg-12 mb-4">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold"> Hide Logo Container </span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div> 
                                        <div class="col-lg-12 mb-4">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold"> Hide Logo in Details </span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div> 
                                        <div class="col-lg-12 mb-4">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold"> Hide Logo in Marketplace </span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div> 
                                        <div class="col-lg-12 mb-4">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold"> Remove Hero Image Mask </span>
                                                        
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fv-row mb-10 fv-plugins-icon-container"> 
                                        <label class="d-flex align-items-center form-label">
                                            <span class="required"> Page Tabs </span> 
                                        </label>
                                        <hr>
                                        <div class="col-lg-12 mb-4">
                                            <input type="text" class="form-control" name="price_per_share" placeholder="Offer Details Tab Name">
                                        </div>
                                        <div class="col-lg-12 mb-4 text-center">
                                            <button class="btn btn-light me-3 btn-sm">  Add Additional Details Tabs  <i class="fa fa-plus"></i> </button>
                                        </div>
                                    </div>

                                    <div class="fv-row mb-10 fv-plugins-icon-container"> 
                                       
                                        <div class="col-lg-12 mb-4">
                                            <input type="text" class="form-control" name="price_per_share" placeholder="Video Tab Name">
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <input type="text" class="form-control" name="price_per_share" placeholder="Documents Tab Name">
                                        </div>

                                        <div class="col-lg-12 mb-4">
                                            <input type="text" class="form-control" name="price_per_share" placeholder="Updates Tab Name">
                                        </div>

                                        <div class="col-lg-12 mb-4">
                                            <input type="text" class="form-control" name="price_per_share" placeholder="Q&A Tab Name">
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <div class="d-flex flex-stack">  
                                                <div class="d-flex"> 
                                                    <label class="form-check form-check-custom form-check-solid"> 
                                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" name="details_notifications[]">
                                                        <span class="form-check-label fw-semibold"> Hide Contact Us Tab </span>
                                                    </label> 
                                                </div> 
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div data-kt-stepper-element="content" class="pending">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-8 pb-lg-10">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Your Are Done!</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">If you need more info, please
                                            <a href="../../demo1/dist/authentication/layouts/corporate/sign-in.html"
                                                class="link-primary fw-bold">Sign In</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="mb-0">
                                        <!--begin::Text-->
                                        <div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as much an
                                            art as it is a science and probably warrants its own post, but for all advise is
                                            with what works for your great &amp; amazing audience.</div>
                                        <!--end::Text-->
                                        <!--begin::Alert-->
                                        <!--begin::Notice-->
                                        <div
                                            class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20"
                                                        height="20" rx="10" fill="currentColor"></rect>
                                                    <rect x="11" y="14" width="7" height="2"
                                                        rx="1" transform="rotate(-90 11 14)" fill="currentColor">
                                                    </rect>
                                                    <rect x="11" y="17" width="2" height="2"
                                                        rx="1" transform="rotate(-90 11 17)" fill="currentColor">
                                                    </rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <!--begin::Content-->
                                                <div class="fw-semibold">
                                                    <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                                                    <div class="fs-6 text-gray-700">To start using great tools, please,
                                                        <a href="../../demo1/dist/utilities/wizards/vertical.html"
                                                            class="fw-bold">Create Team Platform</a>
                                                    </div>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                        <!--end::Alert-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10">
                                <!--begin::Wrapper-->
                                <div class="mr-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="11" width="13"
                                                    height="2" rx="1" fill="currentColor"></rect>
                                                <path
                                                    d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Back
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-lg btn-primary me-3"
                                        data-kt-stepper-action="submit">
                                        <span class="indicator-label">Submit
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                            <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.5" x="18" y="13" width="13"
                                                        height="2" rx="1" transform="rotate(-180 18 13)"
                                                        fill="currentColor"></rect>
                                                    <path
                                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary"
                                        data-kt-stepper-action="next">Continue
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="18" y="13" width="13"
                                                    height="2" rx="1" transform="rotate(-180 18 13)"
                                                    fill="currentColor"></rect>
                                                <path
                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Content container-->
        </div>
    </div>


@endsection
@section('page_js')

    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-account.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>

    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/apps/subscriptions/add/advanced.js') }}"></script>

    <script>
       

        $('#issuer_account').on('change', function() {
          alert( this.value );
        });

    </script>


@endsection
