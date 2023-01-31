@extends('layouts.app')
@section('title', 'Account Users')
@section('page_head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('page_content')
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <div class="row mb-6">
                <div class="col-lg-12">
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Profile
                        </li>
                    </ul>
                </div>
            </div>
            <form method="post" enctype="multipart/form-data" id="updateSettingForm" action="" >
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-custom card-stretch gutter-b">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="card-label">Account Settings</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 text-left mb-4">
                                        <div class="image-input image-input-outline mt-2" id="kt_image_5">
                                            <div class="image-input-wrapper"
                                                style="background-image: url(https://www.mecgale.com/wp-content/uploads/2020/09/alak-sarkar-1.jpg);width: 250px; height: 167px; max-width: 100%;">
                                            </div>
                                            <label
                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                data-action="change" data-toggle="tooltip" title=""
                                                data-original-title="Upload Banner">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" name="profile_photo" accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="profile_avatar_remove" value="0">
                                            </label>
                                            <span
                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                data-action="cancel" data-toggle="tooltip" title=""
                                                data-original-title="Remove Banner">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label for=""> Name </label>
                                                <input type="text" class="form-control" placeholder="Name"
                                                    value="{{ $user->name }}" name="user_name" required id="name">
                                            </div>

                                            <div class="form-group col-lg-12">
                                                <label for=""> Email </label>
                                                <input type="email" class="form-control" value="{{ $user->email }}"
                                                    name="user_email" id="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="form-group col-lg-12">
                                                <label for=""> Password </label>
                                                <input type="password" class="form-control" placeholder="Password"
                                                    name="password" id="password">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label for=""> Re-enter Password </label>
                                                <input type="password" class="form-control" placeholder="Re-enter password"
                                                    name="password_confirmation" id="confirm_password">
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success btn-square"> Update</button>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

            </form>


        </div>
        <!--end::Container-->

    </div>


@endsection
@section('page_js')
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        var avatar5 = new KTImageInput('kt_image_5');
    </script>


@endsection
