@extends('layouts.app')
@section('title', 'Create Offer')
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
                        <li class="breadcrumb-item ">
                            <a class="text-muted" href="#"> Offers </a>
                        </li>
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
            <div id="kt_app_content_container" class="app-container">
                <form action="{{ route('offers.save') }}" enctype="multipart/form-data" method="post" id="create_offer_form"> @csrf

                    <div class="row">
                        @include('offers.particles.left-bar')
                        <div class="col-lg-9">

                            <div class="card-body mb-3">
                                <div class="position-relative">

                                    <div class=" text-white mb-4 "
                                        style="background-image:url('https://i.stack.imgur.com/FueqW.jpg');padding:5px 20px">
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
                                                    id="issuer_account_label"> Account Name </h3>
                                            </div>
                                            <div class="col-lg-12">
                                                <small id="offer_name_label" class="fs-1qx fw-bold"> Offer Name </small>
                                            </div>
                                            <div class="col-lg-12">
                                                <small id="short_description_label" class="fs-1qx fw-bold"> &nbsp;
                                                </small>
                                            </div>

                                            <div class="col-lg-6  mt-3 ">
                                                <div class="fs-5 fw-semibold text-success">
                                                    <span id="currency_wrapper">
                                                        $
                                                    </span>
                                                    <span id="offer_size_label">
                                                        10000000
                                                    </span>
                                                    <i class="text-dark" id="offer_size_html"> Offer Size </i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <button class="btn btn-sm btn-dark no-radius" type="button" data-bs-toggle="modal"
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
                                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
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
                                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
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
                                                                class="feture_video_url">
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
                                                                    <p id="address_label"> &nbsp; </p>
                                                                </div>
                                                                <div class="col-lg-4 mb-4">
                                                                    <input type="text" class="form-control"
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

                                                                    <p id="phone_label"> &nbsp; </p>
                                                                </div>
                                                                <div class="col-lg-4 mb-4">
                                                                    <input type="text" class="form-control "
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
                                                                            <textarea type="text" class="form-control " placeholder="Type your message here." name="contact_us"></textarea>
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
                        <input type="text" class="form-control" name="summary_title[]" value="Summary" required >
                    </div>
                    <div class="col-lg-6 mt-3 mb-4">
                        <input type="text" class="form-control" name="summary_sub_title[]" placeholder="Sub-title" required >
                    </div>
                    <div class="col-lg-11 mt-3 mb-4">
                        <textarea  class="form-control" cols="30" rows="10" name="summary_sub_description[]" id="textarea_` + no + `" required ></textarea>
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
                    <div class="col-lg-1 mt-6 mb-6 tiles_box_warpper">
                    </div>
                    <div class="col-lg-3 mt-6 mb-6 tiles_box_warpper">
                        <div class="tiles_box">
                            <label class="required"> Tiles Image </label>
                            <input type="file" class="form-control" name="tiles_source[]" required>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-6 mb-6 tiles_box_warpper">
                         <div class="tiles_box">
                            <label class="required"> Tiles Image </label>
                            <input type="file" class="form-control" name="tiles_source[]" required>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-6 mb-6 tiles_box_warpper">
                         <div class="tiles_box">
                            <label class="required"> Tiles Image </label>
                            <input type="file" class="form-control" name="tiles_source[]" required>
                        </div>
                    </div>
                    <div class="col-lg-1 mt-6 mb-6 ">
                        <button type="button" class="btn btn-sm btn-danger delete_section_tiles" data-id="` + no + `"> <i class='fa fa-times'></i> </button>
                    </div>
                </div>
            `);
        });
        $('#modal_new_sections').on('click', '.text_section', function() {
            no++;
            $('#section_row').append(`
                <div class="mt-4 appended_text_box row section_` + no +
                `">
                    <div class="col-lg-6 mt-3 mb-4">
                        <input type="text" class="form-control" name="text_title[]" value="Title" required >
                    </div>
                    <div class="col-lg-6 mt-3 mb-4">
                        <input type="text" class="form-control" name="text_sub_title[]" placeholder="Sub-title" required >
                    </div>
                    <div class="col-lg-11 mt-3 mb-4">
                        <textarea  class="form-control" cols="30" rows="10" name="text_description[]" required id="textarea_` + no + `" ></textarea>
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
                        <input type="file" class="form-control" name="image[]" value="Title"  required>
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
                            <select name="offer_video_source[]" class="form-control" required>
                                <option value="youtube">  Youtube </option>
                                <option value="facebook">  Facebook </option>
                                <option value="vimo">  Vimo </option>
                                <option value="zoom">  Zoom Recording </option>
                                <option value="other"> Other (mp4, mpeg, etc.)</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mt-4 mb-4">
                            <label for="" class="required mb-2"> Embed URL </label>
                            <input type="text" name="offer_video_url[]" class="form-control" placeholder="Embed URL" required>
                        </div>
                        <div class="col-lg-3 mt-4 mb-4">
                            <label for="" class="required mb-2"> Description </label>
                            <input type="text" name="offer_video_description[]" class="form-control" placeholder="Description" required>
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
                                <input type="hidden"  value="` + video_source + `" name="src[]" required/>
                                <input type="hidden"  value="` + embed_url + `"    name="url[]" required/>
                                <input type="hidden"  value="` + description + `"  name="description[]" required/>
                                <input type="hidden"  value="` + access + `"       name="access[]" required />
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
           if(content == 'Income Verification (Reg CF)'){
                $('.investment_step_button_row').append(`
                    <div class="col-lg-12  text-center button_row_wrapper">
                        <div class="overflow-auto pb-1">
                            <div  class="row d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white">
                                <span class="col-lg-10 text-left"> ` + content + ` </span>
                                <span class="col-lg-2"> <i class="la la-times"></i>  </span>
                            </div>
                        </div>
                        <small class="text-left" style="text-align:left">
                            <label class="required"> Educational Materials </label>
                            <input type="" name="url_educational_materials[]" value="https://www.google.com" class="mt-3 form-control no-radius" style="height:33px;font-size:13px" required>
                            <label class="required"> Issuer Form C </label>
                            <input type="" name="url_issuer_form_c[]" value="https://www.google.com" class="mt-3 form-control no-radius" style="height:33px;font-size:13px" required>
                        </small>
                        <input type="hidden" name="investment_setups[]" value="` + content + `">
                    </div>
                `);
           }else if(content == 'E-Sign Document'){
                $('.investment_step_button_row').append(`
                    <div class="col-lg-12  text-center button_row_wrapper">
                        <div class="overflow-auto pb-1">
                            <div  class="row d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white">
                                <span class="col-lg-10 text-left"> ` + content + ` </span>
                                <span class="col-lg-2"> <i class="la la-times"></i>  </span>
                            </div>
                        </div>
                        <small class="text-left" style="text-align:left">
                            <label class="required"> Select Template </label>
                            <select class="form-control" name="e_sign_template" style="height:42px;font-size:13px">
                                    @foreach($templates as $template)
                                        <option value="{{ $template['template_id']  }}"> {{  $template['template_name'] }} </option>
                                    @endforeach
                            </select>
                        </small>
                        <input type="hidden" name="investment_setups[]" value="` + content + `">
                    </div>
                `);
           }else if(content == 'Payment Method'){
                $('.investment_step_button_row').append(`
                    <div class="col-lg-12  text-center button_row_wrapper">
                        <div class="overflow-auto pb-1">
                            <div  class="row d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white">
                                <span class="col-lg-10 text-left"> ` + content + ` </span>
                                <span class="col-lg-2"> <i class="la la-times"></i>  </span>
                            </div>
                        </div>
                        <br/>
                        <div id="kt_job_1_1" class="collapse show fs-6 ms-1">
                            <div class="mb-4">
                                <div class="d-flex align-items-center ps-10 mb-n1">
                                    <!--begin::Bullet-->
                                    <span class="bullet me-3"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-600 fw-semibold fs-6">
                                        <input type="checkbox" name="investment_setups_payment_method[]" value="ach" checked />    ACH
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center ps-10 mb-n1">
                                    <!--begin::Bullet-->
                                    <span class="bullet me-3"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-600 fw-semibold fs-6">
                                        <input type="checkbox" name="investment_setups_payment_method[]" value="wired"   /> Wired
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex align-items-center ps-10 mb-n1">
                                    <!--begin::Bullet-->
                                    <span class="bullet me-3"></span>
                                    <!--end::Bullet-->
                                    <!--begin::Label-->
                                    <div class="text-gray-600 fw-semibold fs-6">
                                        <input type="checkbox" name="investment_setups_payment_method[]" value="credit-debit-card"   /> Credit/Debit Card
                                    </div>
                                </div>
                            </div>
						</div>
                        <input type="hidden" name="investment_setups[]" value="` + content + `">
                    </div>
                `);
           }else{
                $('.investment_step_button_row').append(`
                    <div class="col-lg-12  text-center button_row_wrapper">
                        <div class="overflow-auto pb-1">
                            <div  class="row d-flex align-items-center border border-dashed border-gray-300 rounded p-3 bg-white">
                                <span class="col-lg-10 text-left"> ` + content + ` </span>
                                <span class="col-lg-2"> <i class="la la-times"></i>  </span>
                            </div>
                        </div>
                        <input type="hidden" name="investment_setups[]" value="` + content + `">
                    </div>
                `);
           }


        });
    </script>
    <script>
        $('.add_feature_video_btn').click(function() {
            var videourl = $('.video_url').val();
            $('.feture_video_url').val(videourl);
        });
    </script>

    <script>
        
        $('#issuer_account').on('change', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var id =  $(this).val();
            $.ajax({
                    url: "{{ route('offers.check.custodial') }}",
                    method: 'POST',
                    data:{
                        id:id
                    },
                    success: function(result) {
                        if(result.status == false){
                            toastr.error(result.message, "Error");
                            $('#submit_offer').prop('disabled',true);
                            $("#create_offer_form input").prop("disabled", true);
                            $("#create_offer_form select").prop("disabled", true);
                            $("#issuer_account").prop("disabled", false);
                        }else{
                            $("#create_offer_form input").prop("disabled", false);
                            $("#create_offer_form select").prop("disabled", false);
                            $('#submit_offer').prop('disabled',false);
                        }
                    }
            });

        });
        
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('body').on('change','#issuer_account',function(event){
                    event.preventDefault(); 
                    $.ajax({
                        url: "{{ route('invest.step.six.e.template') }}",
                        method: 'GET', 
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success:function(response)
                        {
                            if(response.status == true){
                                $('select[name="template"]').html('');
                                    jQuery.each(response.data.data, function(index, item) {
                                        $('select[name="templates"]').append(` <option value="`+item.template_id+`"> `+item.template_name+` </option>`);
                                    });
                            }
                        },
                        
                    });
                });

            });
    </script> 
    <script>
       
        $(document).ready(function() {
            $('#offer_name').on('keyup', function() {
                var str = $('#offer_name').val();
                str = str.toLowerCase();
                var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
                var to   = "aaaaeeeeiiiioooouuuunc------";
                for (var i=0, l=from.length ; i<l ; i++) {
                    str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
                }
                str = str.replace(/[^a-z0-9 -]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-+|-+$/g, ''); 
                 $('#offer_slug').val(str);
            });
        });
    </script>

@endsection
