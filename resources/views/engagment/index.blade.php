@extends('layouts.app')
@section('title', 'Engagments')
@section('page_name', 'Engagments')
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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"> Engagments </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Engagments</li>
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

                <div class="row ">
                    <!--begin::Col-->

                        <!--begin::Card widget 20-->
                        <div class="col-lg-3 card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5 pb-5" style="border-radius:4px;background-color: #bd4d69;">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">13</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <hr>
                                    <span class="text-white  pt-1  fs-6 text-light" > Total Unique People </span>
                                    <!--end::Subtitle-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5 pb-5" style="border-radius:4px;background-color: #42413c">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">3.19 Days</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <hr>
                                    <span class="text-white   pt-1 fw-bold fs-6 "> Total Time Viewing Offers </span>
                                    <!--end::Subtitle-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5 pb-5" style="border-radius:4px;background-color: #15c2c2">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">1.87% <small class="text-dark"> Investors </small> </span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <hr>
                                    <span class="text-white opacity-75 pt-1 fw-bold fs-6 text-dark"> Total Conversion </span>
                                    <!--end::Subtitle-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10">
                            <!--begin::Header-->
                            <div class="card-header pt-5 pb-5" style="border-radius:4px;background-color: #15c2c2; ">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">50,0000 <small class="text-dark"> USD </small> </span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <hr>
                                    <span class="text-white opacity-75 pt-1 fw-bold fs-6 text-dark"> Total Amount Raised  </span>
                                    <!--end::Subtitle-->
                                </div>
                            </div>
                        </div>


                </div>
                <div class="row">

                    @foreach ($offers as $offer)
                        <div class="col-xl-4 col-lg-4">
                            <div class="card card-xl-stretch mb-xl-8">
                                <div class="card-body p-0">
                                    <div class="px-9 pt-7 card-rounded h-275px w-100"
                                        @if ($offer->getFirstMediaUrl('offer_image', 'thumb') != null)
                                            style="background-image: url('{{ $offer->getFirstMediaUrl('offer_image', 'thumb') }}');background-size:100%"
                                        @else
                                            style="background-image: url('')"
                                        @endif
                                        >
                                        <div class="d-flex text-center flex-column text-white pt-8">
                                        <span class="fs-2x pt-1">
                                            <small class="badge-light-dark fs-1x"
                                                style="font-size:20px;padding:8px;border-radius:6px;"> {{ $offer->name }}
                                            </small>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1"
                                        style="margin-top: -100px">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-6">
                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#"   class="fs-5 text-gray-800 text-hover-primary fw-bold">Total Raised</a>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-bold">  $0 </div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <div class="d-flex align-items-center mb-6">
                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">
                                                       Investors
                                                    </a>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-bold"> 0  </div>

                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--end::Content container-->
    </div>
    </div>


@endsection
@section('page_js')

    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

@endsection
