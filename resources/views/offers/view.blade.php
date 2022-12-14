@extends('layouts.app')
@section('title', 'View Offer')
@section('page_name', 'Listings')
@section('page_head') 
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .section_wrapper{
        cursor:pointer;
    }
    .tiles_box{
        border-radius: 3px;
        padding:70px;
        background-color: #F5F8FA;
    }
    .error{
        border:1px solid rgb(248, 119, 119);
    }
    .form-check-input{
        width: 1.3rem!important;
        height: 1.3rem!important;
    }
    .custom_input{
        font-size:12px!important;
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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Offer View</h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                                <a href="{{ route('offers.index') }}" class="text-muted text-hover-primary">  Offers </a>  
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">View</li> 
                    </ul>
                    <!--end::Breadcrumb-->
                </div> 
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div id="kt_app_content_container" class="app-container">
                <form action="{{ route('offers.update') }}" enctype="multipart/form-data" method="post"> @csrf
                    <input type="hidden" name="id" value="{{ $offer->id }}">
                <div class="row"> 
                   @include('offers.particles.left-bar-view')
                    <div class="col-lg-9">
                        <div class="card-body mb-3">
                            <div class="position-relative">
                                <div class="overlay overlay-show">
                                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px"
                                    @if ($offer->getFirstMediaUrl('banner_image', 'thumb') != null)
                                        style="background-image:url('{{ $offer->getFirstMediaUrl('banner_image', 'thumb') }}')"
                                    @else
                                        style="background-image:url('https://i.stack.imgur.com/FueqW.jpg')"
                                    @endif
                                    ></div>
                                </div> 
                                <div class="position-absolute text-white mb-4 ms-10 bottom-0"> 
                                    <div class="row">
                                        <div class="col-lg-3" > 
                                            <div class="image-input image-input-outline mt-3"data-kt-image-input="true"
                                                @if ($offer->getFirstMediaUrl('offer_image', 'thumb') != null) 
                                                        style="background-image:url('{{ $offer->getFirstMediaUrl('offer_image', 'thumb') }}')"
                                                @else
                                                        style="background-image: url('https://www.slntechnologies.com/wp-content/uploads/2017/08/ef3-placeholder-image.jpg')"
                                                @endif
                                                > 
                                                <div class="image-input-wrapper w-75px h-75px" 
                                                @if ($offer->getFirstMediaUrl('offer_image', 'thumb') != null) 
                                                style="background-image:url('{{ $offer->getFirstMediaUrl('offer_image', 'thumb') }}')"
                                                @else
                                                        style="background-image: url('https://www.slntechnologies.com/wp-content/uploads/2017/08/ef3-placeholder-image.jpg')"
                                                @endif
                                                ></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Upload Logo" data-kt-initialized="1">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="offer_image" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="avatar_remove">
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-kt-initialized="1">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-kt-initialized="1">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                        </div>
                                        <div class="col-lg-3" >
                                            <div class="image-input image-input-outline  mt-3"data-kt-image-input="true"
                                                @if ($offer->getFirstMediaUrl('banner_image', 'thumb') != null)
                                                    style="background-image:url('{{ $offer->getFirstMediaUrl('banner_image', 'thumb') }}')"
                                                @else
                                                    style="background-image: url('https://www.slntechnologies.com/wp-content/uploads/2017/08/ef3-placeholder-image.jpg');background-position:center"
                                                @endif>
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-75px h-75px" 
                                                @if ($offer->getFirstMediaUrl('banner_image', 'thumb') != null) 
                                                    style="background-image:url('{{ $offer->getFirstMediaUrl('banner_image', 'thumb') }}')"
                                                @else
                                                    style="background-image: url('https://www.slntechnologies.com/wp-content/uploads/2017/08/ef3-placeholder-image.jpg');background-position:center"
                                                @endif></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Upload Hero Image (1200 x 260)" data-kt-initialized="1">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="banner_image" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="avatar_remove">
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-kt-initialized="1">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-15px h-15px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-kt-initialized="1">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                        </div>
                                         
                                    </div>
                                    <div class="row text-dark" >
                                        <div class="col-lg-12">
                                            <h3 class="text-white fs-2qx fw-bold mt-3 text-dark" id="issuer_account_label"> {{ ucfirst($offer->user->name) }} </h3>
                                        </div>
                                        <div class="col-lg-12">
                                            <small id="offer_name_label" class="fs-1qx fw-bold"> {{ $offer->name }}   </small>
                                       </div>
                                        <div class="col-lg-12">
                                             <small id="short_description_label" class="fs-1qx fw-bold">  {{ $offer->short_description }}   </small>
                                        </div>
                                       <div class="col-lg-6  mt-3 ">
                                            <div class="fs-5 fw-semibold text-success">
                                                ({{ $offer->base_currency }}) <span id="offer_size_label">
                                                {{ $offer->size }} 
                                                  </span> 
                                                  <i class="text-dark">  Offer Size </i>
                                            </div> 
                                       </div> 
                                       <div class="col-lg-6">
                                        <button class="btn btn-sm btn-dark"   data-bs-toggle="modal" data-bs-target="#modal_contact_us">   Contact Us
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
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden  h-50px pt-5 pb-2 active" id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab" style="width:140px;">
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">OFFER DETAILS</span> 
                                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                                <!--begin::Link-->
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden  h-50px pt-5 pb-2" id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2" aria-selected="false" tabindex="-1" role="tab"  style="width:140px;">
                                                    <!--begin::Icon-->
                                                   
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> 
                                                        VIDEO
                                                    </span>
                                                    <!--end::Title-->
                                                    <!--begin::Bullet-->
                                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation"> 
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden  h-50px pt-5 pb-2" id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3" aria-selected="false" tabindex="-1" role="tab"  style="width:140px;"> 
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> 
                                                        CONTACT US
                                                    </span> 
                                                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                    <!--end::Bullet-->
                                                </a>
                                                <!--end::Link-->
                                            </li>
                                            
                                        </ul>
                                        <!--end::Nav-->
                                        <!--begin::Tab Content-->
                                        <div class="tab-content">
                                            <!--begin::Tap pane-->
                                            <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_1">
                                               <div class="row" id="section_row">
                                                    <div class="col-lg-12 text-center">
                                                        <button class="btn btn-default btn-sm btn-dark w-40" type="button" data-bs-toggle="modal" data-bs-target="#modal_new_sections">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div> 
                                               </div>
                                            </div> 
                                            <div class="tab-pane fade" id="kt_stats_widget_16_tab_2" role="tabpanel" aria-labelledby="#kt_stats_widget_16_tab_link_2">
                                                <div class="row">
                                                    <div class="col-lg-12 text-right" style="text-align: right">
                                                       <button class="btn btn-default btn-sm btn-dark w-40" data-bs-toggle="modal" type="button" data-bs-target="#modal_new_video"> <i class="fa fa-plus"></i> ADD VIDEO </button>
                                                    </div>
                                               </div>
                                               <div class="row video_wrapper mt-5">
                                               </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_stats_widget_16_tab_3" role="tabpanel"  aria-labelledby="#kt_stats_widget_16_tab_link_3">
                                                <div class="row">
                                                    <div class="col-lg-12 text-left mt-4" style="text-align: left">
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-4">
                                                               <span class="bt-label btn-light-info">
                                                                    <i class="fa fa-location"></i> 
                                                               </span>
                                                               &nbsp;
                                                               <label class="required fs-6 fw-semibold mb-2">   Address  </label> 
                                                                <p id="address_label"> &nbsp; </p>
                                                            </div>
                                                            <div class="col-lg-4 mb-4">
                                                                <input type="text" class="form-control" placeholder="Full Address (map and address will be hidden if blank)" name="" id="offer_address" >
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
                                                                <input type="text" class="form-control " placeholder="Phone # or Contact info"id="offer_phone" >
                                                            </div>
                                                            <div class="col-lg-1 mb-4">
                                                                <button class="btn btn-sm btn-dark" type="button"> UPDATE </button>
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
                                                                        <button class="btn btn-sm btn-dark mt-4 mb-4 meeting_button d-none"> Schedule a Meeting </button>
                                                                        <input type="text" class="form-control mt-4 " placeholder="Calendly Event Link" name="email" id="offer_schedule_meeting" >
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3 mt-3" >
                                                                    <div class="col-lg-12">
                                                                        <label class="required fs-6 fw-semibold mb-2"> 
                                                                            Contact Us
                                                                        </label>
                                                                        <textarea type="text" class="form-control " placeholder="Type your message here." ></textarea>
                                                                    </div>
                                                                    <div class="col-lg-12 mt-4 mb-4" style="text-align: right">
                                                                       <button class="btn btn-sm btn-dark" type="button">Submit</button>
                                                                    </div>
                                                                    <div class="col-lg-12" style="text-align: right">
                                                                      <input type="text" name=""class="form-control " placeholder="Addtl. Contact Emails (comma delimited list)">
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
        var no = 0;
        $('#modal_new_sections').on('click','.summary_section',function(){
            no++;
        
            $('#section_row').append(`
                <div class="row section_`+no+`">
                <div class="col-lg-6 mt-3 mb-4">
                    <input type="text" class="form-control" name="title[]" value="Summary" > 
                </div>
                <div class="col-lg-6 mt-3 mb-4">
                    <input type="text" class="form-control" name="title[]" placeholder="Sub-title" > 
                </div>
                <div class="col-lg-11 mt-3 mb-4">
                    <textarea  class="form-control" cols="30" rows="10" name="offer_description[]" id="textarea_`+no+`" ></textarea> 
                </div>
                <div class="col-lg-1 mt-3 mb-4">
                    <button class="btn btn-sm btn-danger delete_section" data-id="`+no+`"> <i class='fa fa-times'></i> </button>
                </div>
                </div>
            `);
            $('#textarea_'+no).summernote();
        
        });
        
        $('#modal_new_sections').on('click','.tiles_section',function(){
            $('#section_row').append(`
                <div class="row section_`+no+`">
                    <div class="col-lg-4 mt-6 mb-6 tiles_box_warpper">
                        <div class="tiles_box">
                            <input type="file" class="form-control" name="title[]"> 
                        </div>
                    </div>
                    <div class="col-lg-4 mt-6 mb-6 tiles_box_warpper">
                         <div class="tiles_box">
                            <input type="file" class="form-control" name="title[]"> 
                        </div>
                    </div>
                    <div class="col-lg-4 mt-6 mb-6 tiles_box_warpper">
                         <div class="tiles_box">
                            <input type="file" class="form-control" name="title[]"> 
                        </div>
                    </div>
                    <div class="col-lg-4 mt-6 mb-6">
                        <button class="btn btn-sm btn-danger delete_section" data-id="`+no+`"> <i class='fa fa-times'></i> </button>
                    </div>
                </div>
            `);
        });



        $('#modal_new_sections').on('click','.text_section',function(){
            no++;
            $('#section_row').append(`
                <div class="no++;row section_`+no+`">
                    <div class="col-lg-6 mt-3 mb-4">
                        <input type="text" class="form-control" name="title[]" value="Title" > 
                    </div>
                    <div class="col-lg-6 mt-3 mb-4">
                        <input type="text" class="form-control" name="title[]" placeholder="Sub-title" > 
                    </div>
                    <div class="col-lg-11 mt-3 mb-4">
                        <textarea  class="form-control" cols="30" rows="10" name="offer_description[]" id="textarea_`+no+`" ></textarea> 
                    </div>
                    <div class="col-lg-1 mt-3 mb-4">
                        <button class="btn btn-sm btn-danger delete_section" data-id="`+no+`"> <i class='fa fa-times'></i> </button>
                    </div>
                </div>
            `);
            $('#textarea_'+no).summernote();
        });

        $('#modal_new_sections').on('click','.images_section',function(){
            no++;
            $('#section_row').append(`
                <div class="row section_`+no+`">
                    <div class="col-lg-11 mt-3 mb-4">
                        <input type="file" class="form-control" name="title[]" value="Title" > 
                    </div>
                    <div class="col-lg-1 mt-3 mb-4">
                        <button class="btn btn-sm btn-danger delete_section" data-id="`+no+`"> <i class='fa fa-times'></i> </button>
                    </div>
                </div>
            `);
            $('#textarea_'+no).summernote();
        });
        $('#modal_new_video').on('click','#video_save',function(e){
            e.preventDefault();
            var video_source =  $('#embed_url').val();
            var description =  $('#description').val();
            if(video_source == ''){
                $('#embed_url').addClass('error');
            }else{
                $('#embed_url').removeClass('error');
                $('.video_wrapper').append(`
                    <div class="col-lg-4 mt-4 mb-4">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <iframe width="250" height="250" src="`+video_source+`"></iframe>
                            </div>
                            <div class="col-lg-12 text-center">
                                <p>`+description+`</p>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button class='btn btn-sm '> <i class='text-danger fa fa-trash'></i> </button>
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
    
    $('#section_row').on('click','.delete_section',function(){
        var id = $(this).data('id');
        $("#section_1").remove(); 
    });
    </script>


@endsection
