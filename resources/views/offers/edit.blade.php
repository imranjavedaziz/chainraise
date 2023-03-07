@extends('layouts.app')
@section('title', 'Offer Edit')
@section('page_name', 'Listings')
@section('page_head')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .section_wrapper {
            cursor: pointer;
        }

        .tiles_box {
            border-radius: 3px;
            padding: 70px;
            background-color: #F5F8FA;
        }

        .error {
            border: 1px solid rgb(248, 119, 119);
        }

        .form-check-input {
            width: 1.3rem !important;
            height: 1.3rem !important;
        }

        .custom_input {
            font-size: 12px !important;
        }

        .investment_step_button_row {
            cursor: pointer;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">OFFER EDIT
                    </h1>
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
                        <li class="breadcrumb-item ">
                            <a class="text-muted" href="{{ route('offers.active.index') }}"> Offers </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Edit</li>
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
            <div id="kt_app_content_container" class="app-container">
                <form action="{{ route('offers.update') }}" enctype="multipart/form-data" method="post"> @csrf
                    <input type="hidden" name="offer_id" value="{{ $offer->id }}">
                    <input type="hidden" name="investment_restrication_id"
                        value="{{ $offer->investmentRestrictions->id }}">
                    <input type="hidden" name="calltoaction_button_id" value="{{ $offer->callToAction->id }}">
                    <input type="hidden" name="calltoaction_button_id" value="{{ $offer->callToAction->id }}">
                    <input type="hidden" name="access_id" value="{{ $offer->access->id }}">
                    <input type="hidden" name="display_id" value="{{ $offer->display->id }}">
                    <input type="hidden" name="contact_id" value="{{ $offer->contactInfo->id }}">

                    <div class="row">
                        @include('offers.particles.left-bar-edit')
                        <div class="col-lg-9">

                            <div class="card-body mb-3">
                                <div class="position-relative">

                                    <div class=" text-white mb-4 "
                                        @if ($offer->getFirstMediaUrl('banner_image', 'thumb') != null) style="padding:5px 20px;background-image:url('{{ $offer->getFirstMediaUrl('banner_image', 'thumb') }}')"
                                @else
                                        style="padding:5px 20px;background-image:url('https://i.stack.imgur.com/FueqW.jpg')" @endif>
                                        <div class="row">
                                            <div class="col-lg-6">

                                                <div class="image-input image-input-outline mt-3"data-kt-image-input="true"
                                                    style="background-image: url('https://www.slntechnologies.com/wp-content/uploads/2017/08/ef3-placeholder-image.jpg')">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-75px h-75px"
                                                        style="background-image: url('https://www.slntechnologies.com/wp-content/uploads/2017/08/ef3-placeholder-image.jpg');background-position:center">
                                                    </div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Label-->
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        aria-label="Upload Logo" data-kt-initialized="1" title="Offer Logo">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="offer_image" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="avatar_remove">
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Cancel-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        aria-label="Cancel avatar" data-kt-initialized="1">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        aria-label="Remove avatar" data-kt-initialized="1">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Remove-->
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="image-input image-input-outline  mt-3"data-kt-image-input="true"
                                                    @if ($offer->getFirstMediaUrl('banner_image', 'thumb') != null) style="background-image:url('{{ $offer->getFirstMediaUrl('banner_image', 'thumb') }}')"
                                            @else
                                                    style="background-image:url('https://i.stack.imgur.com/FueqW.jpg')" @endif>
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-75px h-75px"
                                                        style="background-image: url('https://www.slntechnologies.com/wp-content/uploads/2017/08/ef3-placeholder-image.jpg');background-position:center">
                                                    </div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Label-->
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        aria-label="Upload Hero Image (1200 x 260)" data-kt-initialized="1"
                                                        title="Background Image">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="banner_image"
                                                            accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="avatar_remove">
                                                        <!--end::Inputs-->
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Cancel-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow"
                                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                        aria-label="Cancel avatar" data-kt-initialized="1">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Cancel-->
                                                    <!--begin::Remove-->
                                                    <span
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow"
                                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                        aria-label="Remove avatar" data-kt-initialized="1">
                                                        <i class="bi bi-x fs-2"></i>
                                                    </span>
                                                    <!--end::Remove-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row text-dark">
                                            <div class="col-lg-12">
                                                <h3 class="text-white fs-2qx fw-bold mt-3 text-dark"
                                                    id="issuer_account_label"> {{ $offer->user->name }} </h3>
                                            </div>
                                            <div class="col-lg-12">
                                                <small id="offer_name_label" class="fs-1qx fw-bold"> {{ $offer->name }}
                                                </small>
                                            </div>
                                            <div class="col-lg-12">
                                                <small id="short_description_label" class="fs-1qx fw-bold">
                                                    {{ $offer->short_description }} </small>
                                            </div>

                                            <div class="col-lg-6  mt-3 ">
                                                <div class="fs-5 fw-semibold text-success">
                                                    <span id="currency_wrapper">
                                                        $
                                                    </span>
                                                    <span id="offer_size_label">
                                                        {{ $offer->size }}
                                                    </span>
                                                    <i class="text-dark" id="offer_size_html"> Offer Size </i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <button class="btn btn-sm btn-dark no-radius" data-bs-toggle="modal"
                                                    data-bs-target="#modal_contact_us"> Contact Us
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-12 mb-5 mb-xl-10">
                                    <!--begin::Tables widget 16-->
                                    <div class="card card-flush h-xl-100">
                                        <div class="card-body pt-6">
                                            <!--begin::Nav-->
                                            <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                                                <!--begin::Item-->
                                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                                    <!--begin::Link-->
                                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden  h-50px pt-5 pb-2 active"
                                                        id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                                        href="#kt_stats_widget_16_tab_1" aria-selected="true"
                                                        role="tab" style="width:140px;">
                                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">OFFER
                                                            DETAILS</span>
                                                        <span
                                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                    </a>
                                                    <!--end::Link-->
                                                </li>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                                    <!--begin::Link-->
                                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden  h-50px pt-5 pb-2"
                                                        id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill"
                                                        href="#kt_stats_widget_16_tab_2" aria-selected="false"
                                                        tabindex="-1" role="tab" style="width:140px;">
                                                        <!--begin::Icon-->
                                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 ">
                                                            VIDEO
                                                        </span>
                                                        <!--end::Title-->
                                                        <!--begin::Bullet-->
                                                        <span
                                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                        <!--end::Bullet-->
                                                    </a>
                                                    <!--end::Link-->
                                                </li>
                                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden  h-50px pt-5 pb-2"
                                                        id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill"
                                                        href="#kt_stats_widget_16_tab_3" aria-selected="false"
                                                        tabindex="-1" role="tab" style="width:140px;">
                                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1 no-radius">
                                                            CONTACT US
                                                        </span>
                                                        <span
                                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                        <!--end::Bullet-->
                                                    </a>
                                                    <!--end::Link-->
                                                </li>

                                            </ul>
                                            <!--end::Nav-->
                                            <!--begin::Tab Content-->
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1"
                                                    role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_1">
                                                    <div class="row" id="section_row">
                                                        <div class="col-lg-12 text-center">
                                                            <button class="btn btn-default btn-sm btn-dark w-40 no-radius"
                                                                type="button" data-bs-toggle="modal"
                                                                data-bs-target="#modal_new_sections">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                            <button class="btn btn-default btn-sm btn-dark w-40 no-radius"
                                                            type="button" data-bs-toggle="modal"
                                                            data-bs-target="#modal_feture_video">
                                                            <i class="fa fa-video"></i>
                                                            </button>
                                                            <input type="hidden" name="feature_video_url"
                                                            class="feture_video_url" value="{{  $offer->feature_video }}">
                                                        </div>
                                                        <div class="row mt-8">
                                                            
                                                            @foreach ($offer->offerDetail as $offerDetail)
                                                                @if ($offerDetail->input == 'summary')
                                                                    <input type="hidden" name="summary_id[]"
                                                                        class="form-control"
                                                                        value="{{ $offerDetail->id }}">
                                                                    <div class="col-lg-6 mt-4">
                                                                        <input type="text" name="summary_title[]"
                                                                            class="form-control"
                                                                            value="{{ $offerDetail->heading }}">
                                                                    </div>
                                                                    <div class="col-lg-6 mt-4">
                                                                        <input type="text" name="summary_sub_title[]"
                                                                            class="form-control"
                                                                            value="{{ $offerDetail->sub_heading }}">
                                                                    </div>
                                                                    <div class="col-lg-11 mt-4">
                                                                        <textarea type="text" name="summary_sub_description[]" 
                                                                        class="summernote form-control">{{ $offerDetail->description }}</textarea>
                                                                    </div>
                                                                    <div class="col-lg-1 mt-4">
                                                                        <button type="button"
                                                                            class="no-radius btn btn-sm btn-light-danger remove_filed"
                                                                            data-method="summary"
                                                                            data-id="{{ $offerDetail->id }}">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                    </div>
                                                                @elseif($offerDetail->input == 'text')
                                                                    <div class="col-lg-12 mt-4">
                                                                        <label for=""> Text Fileds </label>
                                                                    </div>
                                                                    <input type="hidden" name="text_id[]"
                                                                        class="form-control"
                                                                        value="{{ $offerDetail->id }}">
                                                                    <div class="col-lg-6 mt-4">
                                                                        <input type="text" name="text_heading[]"
                                                                            class="form-control"
                                                                            value="{{ $offerDetail->heading }}">
                                                                    </div>
                                                                    <div class="col-lg-6 mt-4">
                                                                        <input type="text" name="text_sub_heading[]"
                                                                            class="form-control"
                                                                            value="{{ $offerDetail->sub_heading }}">
                                                                    </div>
                                                                    <div class="col-lg-12 mt-4">
                                                                        <textarea type="text" name="text_description[]" class="summernote form-control">{{ $offerDetail->description }}</textarea>
                                                                    </div>
                                                                @elseif($offerDetail->input == 'tiles')
                                                                        <input type="hidden" name="offer_detail_id_for_tiles" value="{{  $offerDetail->id }}"> 
                                                                        @foreach ($offerDetail->getMedia('offer_tiles') as $tileImage) 
                                                                            <div class="col-lg-4 mt-6 mb-6 tiles_box_warpper"
                                                                                style="">  
                                                                                <div class="tiles_box text-center">    
                                                                                    <img src="{{$tileImage->getUrl() }}"
                                                                                        alt=""
                                                                                        class="mb-5 img img-thumbnail"
                                                                                        style="height: 100px;">
                                                                                    <br>
                                                                                    <input type="file"  class="form-control"  name="tiles_source[{{ $tileImage->id }}]">
                                                                                    <hr>
                                                                                    <button
                                                                                        class="btn badge py-3 px-4 fs-7 badge-light-danger remove_tile"
                                                                                        type="button"
                                                                                        data-id="{{ $tileImage->id }}">
                                                                                        <i class="la la-trash"></i>
                                                                                    </button>
                                                                                </div>

                                                                            </div>
                                                                        @endforeach 
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div class="row mt-8">
                                                            @foreach ($photos as $photos)
                                                                <div class="col-lg-4 p-10">
                                                                    <img src="{{ $photos->original_url }} "
                                                                        class="img img-thumbnail w-100 h-100"
                                                                        alt=""> 
                                                                        <hr>
                                                                        <input type="file"  class="form-control"  
                                                                        title="Change This Image ?"
                                                                        name="photo_old[{{ $photos->id }}]">
                                                                    <button
                                                                        class="mb-10 btn badge py-3 px-4 fs-7 badge-light-danger remove_tile"
                                                                        type="button"
                                                                        data-id="{{ $photos->id }}">
                                                                        <i class="la la-trash"></i>
                                                                    </button>
                                                                    <br>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="kt_stats_widget_16_tab_2" role="tabpanel"
                                                    aria-labelledby="#kt_stats_widget_16_tab_link_2">
                                                    <div class="row">
                                                        <div class="col-lg-12 text-right" style="text-align: right">
                                                            <button class="btn btn-default btn-sm btn-dark w-40"
                                                                data-bs-toggle="modal" type="button"
                                                                data-bs-target="#modal_new_video"> <i
                                                                    class="fa fa-plus"></i> ADD VIDEO </button>
                                                        </div>
                                                    </div>
                                                    <div class="row video_wrapper mt-5">
                                                        
                                                        @foreach ($offer->offerVideos as $video)
                                                            <div class="video_column col-lg-4 mt-4 mb-4">
                                                                <div class="row">
                                                                    <div class="col-lg-12 text-center">
                                                                        <iframe width="250" height="250" src="{{  $video->url }}"></iframe>
                                                                    </div>
                                                                    <div class="col-lg-12 text-center">
                                                                        <p>{{  $video->description }}</p>
                                                                        <input type="hidden" value="{{  $video->source }}" name="source[{{  $video->id }}]" required="">
                                                                        <input type="hidden" value="{{  $video->url }}" name="url[{{  $video->id }}]" required="">
                                                                        <input type="hidden" value="{{  $video->description }}" name="description[{{  $video->id }}]" required="">
                                                                        <input type="hidden" value="{{  $video->visible }}" name="visible[{{  $video->id }}]" required="">
                                                                    </div>
                                                                    <div class="col-lg-12 text-center">
                                                                        <button class="btn btn-sm delete_video" 
                                                                        data-id="{{  $video->id }}"
                                                                         type="button"> 
                                                                            <i class="text-danger fa fa-trash"></i>
                                                                        </button>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                        @endforeach
                                                        
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="kt_stats_widget_16_tab_3" role="tabpanel"
                                                    aria-labelledby="#kt_stats_widget_16_tab_link_3">
                                                    <div class="row">
                                                        <div class="col-lg-12 text-left mt-4" style="text-align: left">
                                                            <div class="row">
                                                                <div class="col-lg-6 mb-4">
                                                                    <span class="bt-label btn-light-info">
                                                                        <i class="fa fa-location"></i>
                                                                    </span>
                                                                    &nbsp;
                                                                    <label class="required fs-6 fw-semibold mb-2"> Address
                                                                    </label>
                                                                    <p id="address_label">
                                                                        {{ $offer->contactInfo->address }} </p>
                                                                </div>
                                                                <div class="col-lg-4 mb-4">
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $offer->contactInfo->address }}"
                                                                        placeholder="Full Address (map and address will be hidden if blank)"
                                                                        name="offer_address" id="offer_address">
                                                                </div>
                                                            </div>


                                                            <div class="row">
                                                                <div class="col-lg-6 mb-4">
                                                                    <span class="bt-label btn-light-info">
                                                                        <i class="fa fa-mobile"></i>
                                                                    </span>
                                                                    &nbsp;
                                                                    <label class="required fs-6 fw-semibold mb-2">
                                                                        Phone
                                                                    </label>
                                                                    <p id="phone_label"> {{ $offer->contactInfo->phone }}
                                                                    </p>
                                                                </div>
                                                                <div class="col-lg-4 mb-4">
                                                                    <input type="text" class="form-control "
                                                                        value="{{ $offer->contactInfo->phone }}"
                                                                        placeholder="Phone # or Contact info"id="offer_phone"
                                                                        name="phone">
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="row mb-3">
                                                                        <div class="col-lg-12">
                                                                            <label class="required fs-6 fw-semibold mb-2">
                                                                                Schedule a Meeting
                                                                            </label>
                                                                            <br>
                                                                            <button
                                                                                class="btn btn-sm btn-dark mt-4 mb-4 meeting_button d-none">
                                                                                Schedule a Meeting </button>
                                                                            <input type="text"
                                                                                class="form-control mt-4 "
                                                                                placeholder="Calendly Event Link"
                                                                                name="email"
                                                                                id="offer_schedule_meeting">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-3 mt-3">
                                                                        <div class="col-lg-12">
                                                                            <label class="required fs-6 fw-semibold mb-2">
                                                                                Contact Us
                                                                            </label>
                                                                            <textarea type="text" class="form-control" placeholder="Type your message here." name="contact_us">{{ $offer->contactInfo->contact_us }}</textarea>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="col-lg-6">

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end::Tab Content-->
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end::Tables widget 16-->
                                </div>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @include('offers.particles.index')
    @include('offers.particles.investment_setup_button')
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

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#issuer_account').on('change', function() {
            var conceptName = $('#issuer_account').find(":selected").text();
            $('#issuer_account_label').html(conceptName);
        });
        $('#offer_name').on('keyup', function() {
            $('#offer_name_label').html(this.value);
        });
        $('#short_description').on('keyup', function() {
            $('#short_description_label').html(this.value);
        });
        $('#offer_size').on('keyup', function() {
            $('#offer_size_label').html(this.value);
        });
        $('#offer_address').on('keyup', function() {
            $('#address_label').html(this.value);
        });
        $('#offer_phone').on('keyup', function() {
            $('#phone_label').html(this.value);
        });

        $('#offer_schedule_meeting').on('keyup', function() {
            $('.meeting_button').removeClass('d-none');
        });
        $('#size_label').on('keyup', function() {
            $('#offer_size_html').html(this.value);
        });

        $('#base_currency').on('change', function() {
            var currency = $(this).val();
            if (currency == 'USD') {
                $('#currency_wrapper').html('$')
            } else {
                $('#currency_wrapper').html(currency)
            }

        });




        var no = 0;
        $('#modal_new_sections').on('click', '.summary_section', function() {
            no++;

            $('#section_row').append(`
                <div class="appended_summary_box row section_` + no +
                `">
                    <div class="col-lg-6 mt-3 mb-4">
                        <input type="text" class="form-control" name="summary_title_new[]" value="Summary" required > 
                    </div>
                    <div class="col-lg-6 mt-3 mb-4">
                        <input type="text" class="form-control" name="summary_sub_title_new[]" placeholder="Sub-title" required > 
                    </div>
                    <div class="col-lg-11 mt-3 mb-4">
                        <textarea  class="form-control" cols="30" rows="10" name="summary_sub_description_new[]" id="textarea_` + no + `" required ></textarea> 
                    </div>
                    <div class="col-lg-1 mt-3 mb-4">
                        <button type="button" class="btn btn-sm btn-danger delete_section" data-id="` + no + `"> <i class='fa fa-times'></i> </button>
                    </div>
                </div>
            `);
            $('#textarea_' + no).summernote();

        });

        $('#modal_new_sections').on('click', '.tiles_section', function() {
            $('#section_row').append(`
                <div class="appended_tiles_box  row section_` + no + `">
                    <div class="col-lg-4 mt-6 mb-6 tiles_box_warpper">
                        <div class="tiles_box">
                            <label class="required"> Tiles Image </label>
                            <input type="file" class="form-control" name="tiles_source_new[]" required> 
                        </div>
                    </div>
                    <div class="col-lg-4 mt-6 mb-6 tiles_box_warpper">
                         <div class="tiles_box">
                            <label class="required"> Tiles Image </label>
                            <input type="file" class="form-control" name="tiles_source_new[]" required> 
                        </div>
                    </div>
                    <div class="col-lg-4 mt-6 mb-6 tiles_box_warpper">
                         <div class="tiles_box">
                            <label class="required"> Tiles Image </label>
                            <input type="file" class="form-control" name="tiles_source_new[]" required> 
                        </div>
                    </div>
                    <div class="col-lg-4 mt-6 mb-6">
                        <button type="button" class="btn btn-sm btn-danger delete_section_tiles" data-id="` + no + `"> <i class='fa fa-times'></i> </button>
                    </div>
                </div>
            `);
        });
        $('#modal_new_sections').on('click', '.text_section', function() {
            no++;
            $('#section_row').append(`
                <div class="appended_text_box no++;row section_` + no +
                `">
                    <div class="col-lg-6 mt-3 mb-4">
                        <input type="text" class="form-control" name="text_title_new[]" value="Title" required > 
                    </div>
                    <div class="col-lg-6 mt-3 mb-4">
                        <input type="text" class="form-control" name="text_sub_title_new[]" placeholder="Sub-title" required > 
                    </div>
                    <div class="col-lg-11 mt-3 mb-4">
                        <textarea class="form-control" cols="30" rows="10" name="text_description_new[]" required id="textarea_` + no + `" ></textarea> 
                    </div>
                    <div class="col-lg-1 mt-3 mb-4">
                        <button type="button" class="btn btn-sm btn-danger delete_section_text" data-id="` + no + `"> <i class='fa fa-times'></i> </button>
                    </div>
                </div>
            `);
            $('#textarea_' + no).summernote();
        });

        $('#modal_new_sections').on('click', '.images_section', function() {
            no++;
            $('#section_row').append(`
                <div class="row  appended_images_box section_` + no + `">
                    <div class="col-lg-11 mt-3 mb-4">
                        <label class="required"> Image </label>
                        <input type="file" class="form-control" name="image_new[]" value="Title"  required> 
                    </div>
                    <div class="col-lg-1 mt-3 mb-4 pt-5">
                        <button type="button" class="btn btn-sm btn-danger delete_section_images" data-id="` + no + `"> <i class='fa fa-times'></i> </button>
                    </div>
                </div>
            `);
            $('#textarea_' + no).summernote();
        });

        $('#modal_new_sections').on('click', '.videos_section', function() {
            $('#section_row').append(`
                    <div class="appended_video_box row section_` + no + `">
                        <div class="col-lg-4 mt-4 mb-4 form-group">
                            <label for="" class="required mb-2"> Video Source </label>
                            <select name="offer_video_source_new[]" class="form-control" required>
                                <option value="youtube">  Youtube </option>
                                <option value="facebook">  Facebook </option>
                                <option value="vimo">  Vimo </option>
                                <option value="zoom">  Zoom Recording </option>
                                <option value="other"> Other (mp4, mpeg, etc.)</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mt-4 mb-4">
                            <label for="" class="required mb-2"> Embed URL </label>
                            <input type="text" name="offer_video_url_new[]" class="form-control" placeholder="Embed URL" required>
                        </div>
                        <div class="col-lg-3 mt-4 mb-4">
                            <label for="" class="required mb-2"> Description </label>
                            <input type="text" name="offer_video_description_new[]" class="form-control" placeholder="Description" required>
                        </div>
                        <div class="col-lg-1 mt-4 mb-4 pt-9">
                             <button class='btn btn-sm btn-square btn-light-danger delete_section_video'  type="button">
                                <i class='la la-trash'></i>
                             </button>
                        </div>
                    </div>
                `);
        });

        $('#modal_new_video').on('click', '#video_save', function(e) {
            e.preventDefault();
            var video_source = $('#video_source').val();
            var embed_url = $('#embed_url').val();
            var description = $('#description').val();
            var access = $('#video_access').val();
            if (video_source == '') {
                $('#embed_url').addClass('error');
            } else {
                $('#embed_url').removeClass('error');
                $('.video_wrapper').append(`
                    <div class="video_column col-lg-4 mt-4 mb-4">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <iframe width="250" height="250" src="` + video_source + `"></iframe>
                            </div>
                            <div class="col-lg-12 text-center">
                                <p>` + description + `</p>
                                <input type="hidden"  value="` + video_source + `" name="src_new[]" required/>
                                <input type="hidden"  value="` + embed_url + `"    name="url_new[]" required/>
                                <input type="hidden"  value="` + description + `"  name="description_new[]" required/>
                                <input type="hidden"  value="` + access + `"       name="access_new[]" required />
                            </div>
                            <div class="col-lg-12 text-center">
                                <button class='btn btn-sm delete_video_wrapper' type="button"> 
                                    <i class='text-danger fa fa-trash'></i>
                                </button>
                            </div>
                        </div> 
                    </div>
                `);
                $('.modalCloseBtn').click();
            }

        });
    </script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });

        $('#section_row').on('click', '.delete_section', function() {
            var id = $(this).data('id');
            $("#section_1").remove();
        });
        $('#submit_offer').click(function() {
            var offer_name = $('#offer_name').val();
            var symbol = $('#symbol').val();
            var min_invesment = $('#min_invesment').val();
            var max_invesment = $('#max_invesment').val();
            if (offer_name == '') {
                toastr.error("Offer Name is Required", "Success");
            }
            if (symbol == '') {
                toastr.error("Symbol is Required", "Success");
            }
            // if(min_invesment == ''){
            //     toastr.error("Min Invesment filed is Required", "Success");
            // }
            // if(max_invesment == ''){
            //     toastr.error("Max Invesment filed is Required", "Success");
            // }  
        });

        $('#investment_steps').on('click', '.investment_step_button_row i', function() {
            $(this).closest('.button_row_wrapper').remove();
        });

        $('#section_row').on('click', '.delete_section', function() {
            $(this).closest('.appended_summary_box').remove();
        });

        $('#section_row').on('click', '.delete_section_tiles', function() {
            $(this).closest('.appended_tiles_box').remove();
        });

        $('#section_row').on('click', '.delete_section_text', function() {
            $(this).closest('.appended_text_box').remove();
        });

        $('#section_row').on('click', '.delete_section_images', function() {
            $(this).closest('.appended_images_box').remove();
        });

        $('#section_row').on('click', '.delete_section_video', function() {
            $(this).closest('.appended_video_box').remove();
        });

        $('.video_wrapper').on('click', '.delete_video_wrapper', function() {
            $(this).closest('.video_column').remove();
        });
    </script>

    <script>
        $('.add_investment_button_section').click(function() {
            var content = $(this).data('content');
            $('.investment_step_button_row').append(`
                <div class="col-lg-12  text-center button_row_wrapper">
                    <div class="overflow-auto pb-1">
                        <div  class="row d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white"> 
                            <span class="col-lg-10 text-left"> ` + content + ` </span>
                            <span class="col-lg-2"> <i class="la la-times"></i>  </span>
                        </div>
                    </div>
                    <input type="hidden" name="investment_setup[]" value="` + content + `">
                </div>
            `);
        });
        $('#security_type').val('{{ $offer->security_type }}');
        $('#base_currency').val('{{ $offer->base_currency }}');
        $('#visiblity').val(@if($offer->access)'{{ $offer->access->visiblity }}'@endif);
        $('#offer_status').val(@if($offer->access)'{{ $offer->access->offer_status }}'@endif);
        $('#offer_status').val(@if ($offer->access)'{{ $offer->access->offer_status }}'@endif );
        $('#offer_status').val(@if ($offer->access)'{{ $offer->access->offer_status }}'@endif );
    </script>

    <script>
        $('.remove_filed').click(function() {
            var id = $(this).data('id');
            var summary = $(this).data('method');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            Swal.fire({
                title: "Are you sure to delete this file?",
                text: "This action can't undo are you sure to delete?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes Delete"
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: "{{ route('offers.delete') }}",
                        method: "POST",
                        data: {
                            id: id,
                        },
                        success: function(result) {
                            if (result.status == true) {
                                toastr.success(result.message, "Success");
                                location.reload();
                            } else {
                                toastr.error(result.message, "Error");
                            }
                        }
                    });

                }
            });

        });
        $('.remove_tile').click(function(){
            var id = $(this).data('id');
            Swal.fire({
                title: "Are you sure to delete this file?",
                text: "This action can't undo are you sure to delete?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes Delete"
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: "{{ route('offers.tile.delete') }}",
                        method: "GET",
                        data: {
                            id: id,
                        },
                        success: function(result) {
                            if (result.status == true) {
                                toastr.success(result.message, "Success");
                                location.reload();
                            } else {
                                toastr.error(result.message, "Error");
                            }
                        }
                    });

                }
            });
        });
        $('.delete_video').click(function(){
            var id = $(this).data('id');
            Swal.fire({
                title: "Are you sure to delete this video?",
                text: "This action can't undo are you sure to delete?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes Delete"
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: "{{ route('offers.video.delete') }}",
                        method: "GET",
                        data: {
                            id: id,
                        },
                        success: function(result) {
                            if (result.status == true) {
                                toastr.success(result.message, "Success");
                                location.reload();
                            } else {
                                toastr.error(result.message, "Error");
                            }
                        }
                    });

                }
            });
        });
        $('.add_feature_video_btn').click(function() {
            var videourl = $('.video_url').val();
            $('.feture_video_url').val(videourl);
        });

        
    </script>


@endsection
