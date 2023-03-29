@extends('layouts.app')
@section('title', 'Account Users')
@section('page_name','Individual Investor')
@section('page_head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                        Individual Investor
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                          <a href="{{ route('user.index')}}"> Listings </a>
                    </li>

                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>

                    <li class="breadcrumb-item text-muted">Individual Investor</li>




                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->


            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Individual Investor</span>
                            </h3>
                        </div>
                    </div>

                    <form class="form row" method="post" action="{{ route('user.save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row mb-10">
                                <div class="col-lg-3">
                                    <label>Email Address: <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control " placeholder="Email Address*" required  name="email" value="{{ old('email')}}"/>
                                    <input type="hidden"  required  name="account_type" value="investor"/>

                                </div>
                                <input type="hidden" name="type" value="investor">
                                <div class="col-lg-3">
                                    <label>First Name: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="First Name*" required  name="first_name" value="{{ old('first_name')}}"/>
                                </div>

                                <div class="col-lg-3">
                                    <label>Middle Name: <span class="text-danger"></span></label>
                                    <input type="text" class="form-control" placeholder="Middle Name" name="middle_name"value="{{ old('middle_name')}}"/>
                                </div>

                                <div class="col-lg-3">
                                    <label>Last Name: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name')}}"/>
                                </div>
                            </div>
                            <div class="form-group row mb-10">
                                <div class="col-lg-6">
                                    <label>Entity Type: <span class="text-danger">*</span></label>
                                    <select name="user_type" id="" class="form-control">
                                        <option value="individual"> Individual  </option>
                                        <option value="entity"> Entity  </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-10">
                                <div class="col-lg-2">
                                    <label>Title:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Title"  name="title" value="{{ old('title')}}"/>

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <label>Phone Number: <span class="text-danger">*</span> </label>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <select class="form-control cc" name="cc" data-control="select2">
                                                @include('user.partials.cc')
                                            </select>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="-000-000-0000"  name="phone" 
                                            id="phone_number" 
                                            value="{{ old('phone')}}"/> 
                                        </div>
                                    </div> 
                                </div>

                                <div class="col-lg-3">
                                    <label>Date of Birth <span class="text-danger">*</span> </label> 
                                    <input type="date" class="form-control"  placeholder="Date of Birth*" required name="dob" value="{{ old('dob')}}">
                                </div>
                                <div class="col-lg-2 "> 
                                    <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url('{{asset('assets/media/svg/avatars/blank.svg')}}')">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: none;"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-kt-initialized="1">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="photo" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="avatar_remove" value="1">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-kt-initialized="1">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-kt-initialized="1">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>


                                </div>
                            </div>
                            <div class="form-group row mb-10">
                                <div class="col-lg-6">
                                    <label>Address <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" name="address"  value="{{ old('address')}}"
                                        placeholder="Street Address*" required>
                                </div>

                                <div class="col-lg-6">
                                    <label> Suit / Unit </label>
                                    <input type="text" class="form-control" name="suit" value="{{ old('suit')}}"   placeholder="Suit / Unit" >
                                </div>
                            </div>

                            <div class="form-group row mb-10">
                                <div class="col-lg-4">
                                    <label>City <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" name="city" value="{{ old('city')}}"
                                        placeholder="City*" required>
                                </div>

                                <div class="col-lg-4">
                                    <label>State / Region <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" name="state" value="{{ old('state')}}"
                                        placeholder="State / Region*" required>
                                </div>

                                <div class="col-lg-4">
                                    <label>Zip / Postal Code <span class="text-danger">*</span> </label>
                                    <input type="text" class="form-control" name="zip_code" id="zip_code" value="{{ old('zip_code')}}"
                                        placeholder="Zip / Postal Code*" required>
                                </div>
                            </div>

                            <div class="notice   bg-light-primary rounded border-primary border border-dashed p-6 text-center mb-12">

                                <b class="text-black"> Consent to Electronic Delivery </b>
                                <p class="mt-3">
                                    I consent to the electronic delivery of all communications and materials.
                                </p>
                            </div>


                            <div class="row">
                                <div class="col-lg-6 text-left ">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input type="hidden" name="agree_consent_electronic" value="false">
                                        <input class="form-check-input h-15px w-15px" type="checkbox" value="true" name="agree_consent_electronic" id="electronic_delivery_check_box">
                                        <span class="form-check-label fw-semibold"> Wil I agree to the Consent to Electronic Delivery</span>
                                    </label>
                                </div>

                                {{-- <div class="col-lg-6 text-right">
                                    <div class="checkbox-inline">
                                        <label class="checkbox">
                                            <input type="checkbox" id="set_password">
                                            <span></span>  Create a password for this account user  </label>
                                    </div>
                                </div> --}}

                                <div class="col-lg-6" style="text-align:right">
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input h-15px w-15px" type="checkbox"  id="set_password">
                                        <span class="form-check-label fw-semibold">   Create a password for this account user </span>
                                    </label>
                                </div>

                                <div class="col-lg-3 mt-10 offset-md-4 d-none" id="user_password_field">
                                    <input type="password" class="password_filed form-control" name="password" placeholder="Enter User Password*" autocomplete="off"  >
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a  href="{{ route('user.index')}}" class="btn-sm btn btn-default mr-2">Cancel</a>
                                    <button type="submit" class="btn-sm btn btn-primary mr-2">Save Account</button>

                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!--end::Content container-->
    </div>
</div>

@endsection
@section('page_js')

    <script>
        $('#electronic_delivery_check_box').click(function() {
            if ($("#electronic_delivery_check_box").is(':checked')) {
                toastr.info("Thank you for agreeing to the Consent to Electronic Delivery");
            }
        });
        $('#set_password').click(function() {
            if ($("#set_password").is(':checked')) {
               $('#user_password_field').removeClass(' d-none');
               $('.password_filed').val('');
               $('.password_filed').prop('required',true);
            }else{
                $('#user_password_field').addClass(' d-none');
                $('.password_filed').prop('required',false);
            }
        });

        Inputmask({
            "mask" : "-999-999-9999"
        }).mask("#phone_number");


    </script>

@endsection
