@extends('layouts.app')
@section('title', 'Account Issuer Create')
@section('page_head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<style>
    .toast {
        top: 10px;
        background-color: #323232 !important;
        color: #fff;

    }
</style>
@endsection
@section('content')

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
                        <a href="{{ route('user.index') }}"> Users </a>
                    </li>

                    <li class="breadcrumb-item">
                        Investor Create
                    </li>
                </ul>
            </div>
        </div>
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <span class="card-icon">
                        <i class="flaticon2-user text-primary"></i>
                    </span>
                    <h3 class="card-label"> CONTACT INFORMATION <small> Issuer </small> </h3>
                </div>
                <div class="card-toolbar">
                    <a class="btn btn-primary btn-square font-weight-bold btn-sm" href="{{ route('user.index') }}">
                        <i class="flaticon2-left-arrow" style="font-size: 13px"></i> Back to Investor List
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form class="form" method="post" action="{{ route('user.save') }}" enctype="multipart/form-data"> @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <input type="hidden" name="type" value="issuer">
                            <div class="col-lg-3">
                                <label>Email Address: <span class="text-danger">*</span></label>
                                <input type="hidden" required name="account_type" value="issuer" />
                                <input type="email" class="form-control " placeholder="Email Address*" required name="email" value="{{ old('email') }}" />
                            </div>
                            <div class="col-lg-3">
                                <label>First Name: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="First Name*" required name="first_name" value="{{ old('first_name') }}" />
                            </div>

                            <div class="col-lg-3">
                                <label>Middle Name: <span class="text-danger"></span></label>
                                <input type="text" class="form-control" placeholder="Middle Name" name="middle_name" value="{{ old('middle_name') }}" />
                            </div>

                            <div class="col-lg-3">
                                <label>Last Name: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label>Title:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{ old('title') }}" />

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label>Phone Number: <span class="text-danger">*</span> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="(201) 555-0123" name="phone" value="{{ old('phone') }}" />

                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label>Date of Birth <span class="text-danger">*</span> </label>
                                <div class="input-group" id="">
                                    <input type="date" class="form-control" placeholder="Date of Birth*" required name="dob" value="{{ old('dob') }}">
                                    <div class="input-group-append">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 ">
                                <label for=""> Upload Profile Image </label><br>
                                <div class="text-center image-input image-input-empty image-input-outline" id="kt_image_5" style="background-image: url({{ asset('assets/media/users/blank.png') }})">
                                    <div class="image-input-wrapper"></div>

                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="profile_avatar_remove" />
                                    </label>

                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>

                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <p class="card-label"> CONTACT INFORMATION</p>
                            </div>
                            <div class="col-lg-6">
                                <label>Entity Name <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="entity_name" value="{{ old('entity_name') }}" placeholder="Entity Name*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <p class="card-label"> Address </p>
                            </div>
                            <div class="col-lg-4">
                                <label>Street Address <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="address" value="{{ old('street_address') }}" placeholder="Street Address*" required>
                            </div>

                            <div class="col-lg-4">
                                <label>Suite / Unit <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="suite" value="{{ old('suite') }}" placeholder="Suite / Unit*" required>
                            </div>

                            <div class="col-lg-4">
                                <label>City <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}" placeholder="City*" required>
                            </div>
                        </div>
                        <div class="form-group row">

                            <div class="col-lg-4">
                                <label>State Region<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="state" value="{{ old('state') }}" placeholder="State / Region*" required>
                            </div>



                            <div class="col-lg-4">
                                <label>Zip Code <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="zip_code" id="zip_code" value="{{ old('zip_code') }}" placeholder="City*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>State/Region of Legal Formation<span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="legal_formation" value="{{ old('legal_formation') }}" placeholder="State/Region of Legal Formation*" required>
                            </div>
                            <div class="col-lg-4">
                                <label>Date of Incorporation <span class="text-danger">*</span> </label>
                                <div class="input-group" id="date_of_incorporation">
                                    <input type="date" class="form-control" readonly="readonly" placeholder="Date of Incorporation*" required name="date_incorporation" value="{{ old('date_incorporation') }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-calendar-check-o"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-6 text-right">
                                <div class="checkbox-inline text-right">
                                    <label class="checkbox">
                                        <input type="checkbox" id="set_password">
                                        <span></span> Create a password for this account user </label>
                                </div>
                            </div>
                            <div class="col-lg-3 mt-10 offset-md-4 d-none" id="user_password_field">
                                <input type="password" class="form-control" name="password" placeholder="Enter User Password*">
                            </div>
                            <input type="hidden" name="agree_consent_electronic" value="false">
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <button type="submit" class="btn-square btn btn-primary mr-2">Save Account</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

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
<script src="{{ asset('assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js') }}"></script>

<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('
            user.index ') !!}',
            columns: [{
                    data: function(data) {
                        return data.DT_RowIndex;
                    },
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'actions',
                    name: 'actions'
                }
            ]
        });
    });
</script>


<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#electronic_delivery').click(function() {
        if ($("#electronic_delivery").is(':checked')) {
            toastr.info("Thank you for agreeing to the Consent to Electronic Delivery");
        }
    });

    $('#set_password').click(function() {
        if ($("#set_password").is(':checked')) {
            $('#user_password_field').removeClass(' d-none');
        } else {
            $('#user_password_field').addClass(' d-none');
        }
    });

    var avatar5 = new KTImageInput('kt_image_5');

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "10000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };
    $('#date_of_incorporation').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',
        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                'month')]
        }
    }, function(start, end, label) {
        $('#date_of_incorporation .form-control').val(start.format('MM/DD/YYYY') + ' / ' + end.format(
            'MM/DD/YYYY'));
    });
</script>


@endsection