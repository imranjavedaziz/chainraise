@extends('layouts.app')
@section('title', 'User Detail')
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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Details
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
                        <li class="breadcrumb-item text-muted">
                            <a href="{{ route('user.index') }}" class="text-muted text-hover-primary">Listings</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Details
                        </li>
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
    </div>
    <div id="kt_app_content_container" class="app-container container-xxl mt-lg-8 mb-10">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xxl-8">
            <div class="card-body">
                <!--begin::Details-->
                <div class="d-flex flex-wrap align-items-center justify-content-between flex-sm-nowrap">
                    <!--begin: Pic-->
                    <div class="text-center image-input image-input-outline image-input-empty image-input-circle"
                        data-kt-image-input="true"
                        @if ($user->getFirstMediaUrl('profile_photo', 'thumb')) 
                            @php $photo_path = $user->getFirstMediaUrl('profile_photo', 'thumb')@endphp
                        @else
                            @php $photo_path = "http://127.0.0.1:8000/assets/media/svg/avatars/blank.svg";  @endphp 
                        @endif

                        style="background-image: url('{{ $photo_path }}')">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper" style="background-image: none;"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar"
                            data-kt-initialized="1">
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--begin::Inputs-->
                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                            <input type="hidden" name="avatar_remove" value="1">
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar"
                            data-kt-initialized="1">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar"
                            data-kt-initialized="1">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Pic-->
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column m-lg-8">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <span class="text-gray-900 text-hover-primary fs-2 fw-bold"> {{ $user->name }}
                                        {{ $user->userDetail->last_name }}
                                        - <small class="text-info" > {{ucfirst($user->roles()->pluck('name')->implode(' '))}}</small>
                                    </span>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <span class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                        <!--end::Svg Icon--> {{ $user->phone }}
                                    </span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                            <div class="d-flex flex-row">
                                <div class="bg-body shadow m-lg-3" style="border-radius: 50%">
                                    <div class="p-3 ">
                                        <span class="" data-toggle="tooltip" title=""
                                            data-original-title="Send email">
                                            <span class="svg-icon svg-icon-primary svg-icon-3x"><svg width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M21 18H3C2.4 18 2 17.6 2 17V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V17C22 17.6 21.6 18 21 18Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M11.4 13.5C11.8 13.8 12.3 13.8 12.6 13.5L21.6 6.30005C21.4 6.10005 21.2 6 20.9 6H2.99998C2.69998 6 2.49999 6.10005 2.29999 6.30005L11.4 13.5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="bg-body shadow m-lg-3" style="border-radius: 50%">
                                    <div class="p-3">
                                        <span class="" data-toggle="tooltip" title=""
                                            data-original-title="Send email">
                                            <span class="svg-icon svg-icon-primary svg-icon-3x"><svg width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                                                        fill="currentColor" />
                                                    <rect x="7" y="17" width="6" height="2"
                                                        rx="1" fill="currentColor" />
                                                    <rect x="7" y="12" width="10" height="2"
                                                        rx="1" fill="currentColor" />
                                                    <rect x="7" y="7" width="6" height="2"
                                                        rx="1" fill="currentColor" />
                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="bg-body shadow m-lg-3" style="border-radius: 50%">
                                    <div class="p-3">
                                        <span class="" data-toggle="tooltip" title=""
                                            data-original-title="Send email">
                                            <span class="svg-icon svg-icon-primary svg-icon-3x"><svg width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16.0077 19.2901L12.9293 17.5311C12.3487 17.1993 11.6407 17.1796 11.0426 17.4787L6.89443 19.5528C5.56462 20.2177 4 19.2507 4 17.7639V5C4 3.89543 4.89543 3 6 3H17C18.1046 3 19 3.89543 19 5V17.5536C19 19.0893 17.341 20.052 16.0077 19.2901Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="bg-body shadow m-lg-3" style="border-radius: 50%">
                                    <div class="p-3">
                                        <span class="" data-toggle="tooltip" title=""
                                            data-original-title="Send email">
                                            <span class="svg-icon svg-icon-primary svg-icon-3x"><svg width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                                                        fill="currentColor" />
                                                    <path opacity="0.3"
                                                        d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--begin::Actions-->
                            <div class="d-flex my-4">
                                <div class="my-lg-0 my-1 mx-auto">
                                    <div class="d-flex align-items-center mr-10">
                                        <div class="m-lg-2 text-center">
                                            <div class="fw-bold mb-2 fs-2">0</div>
                                            <span class="badge badge-primary p-4 text-uppercase fw-bold">Total
                                                Investment</span>
                                        </div>
                                        <div class="m-lg-2 text-center mr-6">
                                            <div class="fw-bold mb-2 fs-2">$0.00</div>
                                            <span class="badge badge-danger p-4 text-uppercase fw-bold">Total Funds
                                                Committed</span>
                                        </div>
                                        <div class="text-center m-lg-2">
                                            <div class="fw-bold mb-2 fs-2">$0.00</div>
                                            <span class="badge badge-warning p-4 text-uppercase fw-bold">Total Funds
                                                Contributed</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Title-->

                    </div>
                    <!--end::Info-->

                </div>


                <!--end::Details-->
            </div>
        </div>
        <!--end::Navbar-->


        <div class="flex-lg-row-fluid">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                        href="#kt_accounts_tab">Account</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                        href="#kt_profile_tab">Profile</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_users_tab">Users</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                        href="#kt_accreditation_tab">Accreditation</a>
                </li>
                <!--end:::Tab item-->

                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                        href="#kt_transaction_tab">Transaction</a>
                </li>
                <!--end:::Tab item-->

                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                        href="#kt_documents_tab">Documents</a>
                </li>
                <!--end:::Tab item-->

                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_payment_tab">Payment
                        Method</a>
                </li>
                <!--end:::Tab item-->

                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                        href="#kt_engagement_tab">Engagement</a>
                </li>
            </ul>
            <!--end:::Tabs-->
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">
                <!--begin:::Accounts Tab pane-->
                <div class="tab-pane fade show active" id="kt_accounts_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card card-flush mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-body p-9 pt-4">
                            <form class="form" method="post" action="{{ route('user.account.update') }}"  enctype="multipart/form-data"> @csrf
                                <input type="hidden" name="id" id="" value="{{ $user->id }}">
                                <div class="card-body">
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-12 mb-3">
                                            <h3>
                                                CONTACT INFORMATION
                                            </h3>
                                            @if ($errors->any())
                                <div>


                                    @foreach ($errors->all() as $error)
                                        <div class="fv-plugins-message-container invalid-feedback mb-3 text-center">
                                            <div data-field="email" data-validator="notEmpty"> {{ $error }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <br>
                            @endif
                                        </div>

                                        {{-- <div class="col-lg-3">
                                        <label>Email Address: <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control " placeholder="Email Address*"
                                            required name="email" value="{{ old('email') }}" />
                                        <input type="hidden" required name="account_type" value="investor" />

                                    </div> --}}
                                        <input type="hidden" name="type" value="investor">
                                        <div class="col-lg-3">
                                            <label>First Name: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="First Name*" required
                                                name="first_name" value="{{ $user->name }}" />
                                        </div>

                                        <div class="col-lg-3">
                                            <label>Middle Name: <span class="text-danger"></span></label>
                                            <input type="text" class="form-control" placeholder="Middle Name"
                                                name="middle_name" value="{{ $user->userDetail->middle_name }}" />
                                        </div>

                                        <div class="col-lg-3">
                                            <label>Last Name: <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Last Name"
                                                name="last_name" value="{{ $user->userDetail->last_name }}" />
                                        </div>
                                    </div>
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-3">
                                            <label>Title:</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Title"
                                                    name="title" value="{{ $user->userDetail->title }}" />

                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Phone Number: <span class="text-danger">*</span> </label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="(201) 555-0123"
                                                    name="phone" value="{{ $user->phone }}" />

                                            </div>
                                        </div>


                                        <div class="col-lg-3">
                                            <label>Date of Birth <span class="text-danger">*</span> </label>
                                            <div class="input-group" id="">
                                                <input type="date" class="form-control" placeholder="Date of Birth*"
                                                    required name="dob" value="{{ $user->userDetail->dob }}">

                                            </div>

                                        </div>
                                        <div class="col-lg-3 pt-1 ">
                                          
                                            <div class="image-input image-input-outline image-input-empty"
                                                data-kt-image-input="true"
                                                @if ($user->getFirstMediaUrl('profile_photo', 'thumb')) @php $photo_path = $user->getFirstMediaUrl('profile_photo', 'thumb')@endphp
                                            @else
                                                @php $photo_path = "http://127.0.0.1:8000/assets/media/svg/avatars/blank.svg";  @endphp @endif
                                                style="background-image: url('{{ $photo_path }}')">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: none;"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    aria-label="Change avatar" data-kt-initialized="1">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="avatar_remove" value="1">
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    aria-label="Cancel avatar" data-kt-initialized="1">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    aria-label="Remove avatar" data-kt-initialized="1">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row mb-10">
                                        <div class="col-lg-12 mb-3">
                                            <h3>
                                                Address
                                            </h3>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Address <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="address"
                                                value="{{ $user->userDetail->address }}" placeholder="Street Address*"
                                                required>
                                        </div>

                                        <div class="col-lg-6">
                                            <label> Suit / Unit </label>
                                            <input type="text" class="form-control" name="suit"
                                                value="{{ $user->userDetail->suit }}" placeholder="Suit / Unit">
                                        </div>
                                    </div>




                                    <div class="form-group row mb-10">
                                        <div class="col-lg-4">
                                            <label>City <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="city"
                                                value="{{ $user->userDetail->city }}" placeholder="City*" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <label>State / Region <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="state"
                                                value="{{ $user->userDetail->state }}" placeholder="State / Region*"
                                                required>
                                        </div>

                                        <div class="col-lg-4">
                                            <label>Zip / Postal Code <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="zip" id="zip_code"
                                                value="{{ $user->userDetail->zip }}" placeholder="Zip / Postal Code*"
                                                required>
                                        </div>
                                    </div>

                                    <div
                                        class="notice   bg-light-primary rounded border-primary border border-dashed p-6 text-center mb-12">
                                        <b class="text-black"> Consent to Electronic Delivery </b>
                                        <p class="mt-3">
                                            I consent to the electronic delivery of all communications and materials.
                                        </p>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6 text-left ">
                                            <label class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input h-15px w-15px" type="checkbox"  name="agree_consent_electronic"
                                                    @if ($user->agree_consent_electronic == 1) checked @endif
                                                    id="electronic_delivery_check_box">
                                                <span class="form-check-label fw-semibold"> Wil I agree to the Consent to
                                                    Electronic Delivery</span>
                                            </label>
                                        </div>

                                        {{-- <div class="col-lg-6 text-right">
                                        <div class="checkbox-inline">
                                            <label class="checkbox">
                                                <input type="checkbox" id="set_password">
                                                <span></span>  Create a password for this account user  </label>
                                        </div>
                                    </div> --}}

                                        {{-- <div class="col-lg-6" style="text-align:right">
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input h-15px w-15px" type="checkbox"
                                                id="set_password">
                                            <span class="form-check-label fw-semibold"> Create a password for this
                                                account user </span>
                                        </label>
                                    </div> --}}

                                        {{-- <div class="col-lg-3 mt-10 offset-md-4 d-none" id="user_password_field">
                                        <input type="password" class="password_filed form-control" name="password"
                                            placeholder="Enter User Password*" autocomplete="off">
                                    </div> --}}
                                    </div>

                                    <div class="card-title mt-6">
                                        <h2>Identity Verification</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group row mb-10">
                                            <div class="col-lg-5">
                                                <label>Social Security # <small>(US Investors Only)</small> <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Social Security*"
                                                    required name="social_security"
                                                    @if($user->identityVerification)
                                                        value="{{ $user->identityVerification->social_security }}"
                                                    @endif
                                                    />
                                            </div>
                                        </div>
                                        <div class="form-group row mb-10">
                                            <div class="col-lg-3">
                                                <label>Nationality <span class="text-danger">*</span></label>
                                                <select class="form-select" required data-control="select2"
                                                    name="nationality" data-placeholder="Select an option"
                                                    data-live-search="true">
                                                    <option value="">Select</option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia, Plurinational State of</option>
                                                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="BN">Brunei Darussalam</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CD">Congo, the Democratic Republic of the
                                                    </option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Côte d'Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Curaçao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and McDonald Islands
                                                    </option>
                                                    <option value="VA">Holy See (Vatican City State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran, Islamic Republic of</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, Democratic People's Republic of
                                                    </option>
                                                    <option value="KR">Korea, Republic of</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MK">Macedonia, the former Yugoslav Republic
                                                        of
                                                    </option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia, Federated States of</option>
                                                    <option value="MD">Moldova, Republic of</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestinian Territory, Occupied</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Réunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="BL">Saint Barthélemy</option>
                                                    <option value="SH">Saint Helena, Ascension and Tristan da
                                                        Cunha
                                                    </option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SX">Sint Maarten (Dutch part)</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and the South Sandwich
                                                        Islands
                                                    </option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic</option>
                                                    <option value="TW">Taiwan, Province of China</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic of</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US" selected="selected">United States
                                                    </option>
                                                    <option value="UM">United States Minor Outlying Islands
                                                    </option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela, Bolivarian Republic of
                                                    </option>
                                                    <option value="VN">Viet Nam</option>
                                                    <option value="VG">Virgin Islands, British</option>
                                                    <option value="VI">Virgin Islands, U.S.</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3">
                                                <label>Country of Residence <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="country_residence"
                                                    @if($user->identityVerification)
                                                    value="{{ $user->identityVerification->country_residence }}"
                                                    @endif>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-title mt-6">
                                        <h2>Trust Setting<i class="fas fa-exclamation-circle ms-2 fs-7"
                                                data-bs-toggle="tooltip" aria-label="Specify a target priorty"
                                                data-kt-initialized="1"></i></h2>
                                    </div>
                                    <div class="card-body">

                                        <div class="form-group row">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                                        name="bypass_account_setup"
                                                        @if ($user->trustSetting and $user->trustSetting->bypass_account_setup == 1) checked="checked" @endif>

                                                    <span class="form-check-label fw-semibold">Bypass Account Setup<i
                                                            class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" aria-label="Specify a target priorty"
                                                            data-kt-initialized="1"></i></span>
                                                </label>
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-15px w-15px"
                                                        type="checkbox" name="bypass_kyc_checkup"
                                                        @if ($user->trustSetting and $user->trustSetting->bypass_kyc_checkup == 1) checked="checked" @endif>
                                                    <span class="form-check-label fw-semibold">Bypass KYC Checks</span>
                                                </label>
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                                        name="bypass_accreditation_checks"
                                                        @if ($user->trustSetting and $user->trustSetting->bypass_accreditation_checks == 1) checked="checked" @endif>
                                                    <span class="form-check-label fw-semibold">Bypass Accreditation
                                                        Checks</span>
                                                </label>
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                                        name="bypass_document_restrictions"
                                                        @if ($user->trustSetting and $user->bypass_document_restrictions == 1) checked="checked" @endif>
                                                    <span class="form-check-label fw-semibold">Bypass Document
                                                        Restrictions</span>
                                                </label>

                                            </div>
                                        </div>
                                        <div class="form-group row mt-6">
                                            <div class="d-flex align-items-center">
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                                        name="view_all_invite_offers"
                                                        @if ($user->trustSetting and $user->trustSetting->view_all_invite_offers == true) checked="checked" @endif>
                                                    <span class="form-check-label fw-semibold">View All Invite Only
                                                        Offers</span>
                                                </label>
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                                        name="allow_manual_ach_bank_input"
                                                        @if ($user->trustSetting and $user->trustSetting->allow_manual_ach_bank_input == true) checked="checked" @endif>
                                                    <span class="form-check-label fw-semibold">Allow Manual ACH Bank
                                                        Input<i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" aria-label="Specify a target priorty"
                                                            data-kt-initialized="1"></i></span>
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-body">
                                        <div class="form-group row mb-10">
                                            <div class="col-lg-6">
                                                <label class="fw-semibold">Bypass Restrictions on Specific
                                                    Documents</label>
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Select an Offer">
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="hidden"></label>
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Select a Document">
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label class="fw-semibold">Bypass E-Sign Document Restrictions</label>
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Select an E-Sign Template">
                                                    <option></option>
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="{{ route('user.index') }}"
                                                class="btn-sm btn btn-default mr-2">Cancel</a>
                                            <button type="submit" class="btn-sm btn btn-primary mr-2"> Update Account </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Accounts Tab pane-->

                <!--begin:::Profile Tab pane-->
                <div class="tab-pane fade" id="kt_profile_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <div class="card-header border-0">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <h2>Investment Profile</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <form class="form" method="post" action="#"  enctype="multipart/form-data"> @csrf
                                <div class="card-body">
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-6">
                                            <label>Net Worth <span class="text-danger">*</span></label>
                                            <select class="form-select" required data-control="select2"  data-placeholder="Net Worth*" name="net_worth">
                                                <option></option>

                                                <option @if($user->identity_verification && $user->identity_verification->net_worth == '0-100000' )         selected  @endif value="0-100000">Less than $100,000</option>
                                                <option @if($user->identity_verification && $user->identity_verification->net_worth == '100001-50000' )     selected  @endif value="100001-50000" > $100,001 - $250,000</option>
                                                <option @if($user->identity_verification && $user->identity_verification->net_worth == '250001-500000' )    selected  @endif value="250001-500000"> $250,001 - $500,000</option>
                                                <option @if($user->identity_verification && $user->identity_verification->net_worth == '500001-1000000' )   selected  @endif value="500001-1000000"> $500,001 - $1,000,000</option>
                                                <option @if($user->identity_verification && $user->identity_verification->net_worth == '1000001-5000000' )  selected  @endif value="1000001-5000000"> $1,000,001 - $5,000,000</option>
                                                <option @if($user->identity_verification && $user->identity_verification->net_worth == '5000000' )          selected  @endif value="5000000">more than $5,000,000</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Annual Net Income</label>
                                            <input type="text" class="form-control" name="annual_net_income" @if($user->identity_verification) value="{{ $user->identity_verification->annual_net_income}}" @endif  placeholder="Annual Net Income">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-6">
                                            <label>Highest Education <span class="text-danger">*</span></label>
                                            <select class="form-select" required data-control="select2"  data-placeholder="Highest Education*" name="highest_education" >
                                                <option></option>
                                                <option @if($user->identity_verification && $user->identity_verification->highest_education == 'Less than High School')  selected  @endif  value="Less than High School"  >Less than High School</option>
                                                <option @if($user->identity_verification && $user->identity_verification->highest_education == 'High School Graduate')   selected  @endif  value="High School Graduate" >High School Graduate</option>
                                                <option @if($user->identity_verification && $user->identity_verification->highest_education == 'Some College')           selected  @endif  value="Some College" >Some College</option>
                                                <option @if($user->identity_verification && $user->identity_verification->highest_education == "Associate's Degree")     selected  @endif  value="Associate's Degree">Associate's Degree</option>
                                                <option @if($user->identity_verification && $user->identity_verification->highest_education == "Bachelor's Degree")      selected  @endif  value="Bachelor's Degree">Bachelor's Degree</option>
                                                <option @if($user->identity_verification && $user->identity_verification->highest_education == "Master's Degree")        selected  @endif  value="Master's Degree" >Master's Degree</option>
                                                <option @if($user->identity_verification && $user->identity_verification->highest_education == 'doctorate')              selected  @endif  value="doctorate">Doctorate</option>
                                                <option @if($user->identity_verification && $user->identity_verification->highest_education == 'not set')                selected  @endif  value="not set">(not set)</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Risk Tolerance <span class="text-danger">*</span></label>
                                            <select class="form-select" data-control="select2"  data-placeholder="Risk Tolerance*" name="risk_tolerance">
                                                <option></option>
                                                <option>Conservative</option>
                                                <option>Moderate</option>
                                                <option>Aggresive</option>
                                                <option>(not set)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-6">
                                            <label>Investment Experience <span class="text-danger">*</span></label>
                                            <select class="form-select" data-control="select2"   data-placeholder="Investment Experience*" name="investment_experience" >
                                                <option></option>
                                                <option>None</option>
                                                <option>Limited</option>
                                                <option>Good</option>
                                                <option>Extensive</option>
                                                <option>(not set)</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label>Age <span class="text-danger">*</span></label>
                                            <select class="form-select" data-control="select2" data-placeholder="Age*" name="age">
                                                <option></option>
                                                <option value="29"> Under 30</option>
                                                <option value="30-39">30 - 39</option>
                                                <option value="40-49">40 - 49</option>
                                                <option value="50-59">50 - 59</option>
                                                <option value="60-69">60 - 69</option>
                                                <option value="70-79">70 - 79</option>
                                                <option value="80">Over 79</option>
                                                <option value="">(not set)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-6">
                                            <label>Gender <span class="text-danger">*</span></label>
                                            <select class="form-select" data-control="select2"  data-placeholder="Gender*" name="gender">
                                                <option></option>
                                                <option>Male</option>
                                                <option>Femlae</option>
                                                <option>Other</option>
                                                <option>(not set)</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="{{ route('user.index') }}"
                                                class="btn-sm btn btn-default mr-2">Cancel</a>
                                            <button type="submit" class="btn-sm btn btn-primary mr-2">Update Profile
                                            </button>

                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Profile Tab pane-->

                <!--begin:::Users Tab pane-->
                <div class="tab-pane fade" id="kt_users_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <!--begin::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0 pb-5">
                            <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                        id="kt_customers_table">
                                        <!--begin::Table head-->
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

                                                <th class="" tabindex="0" aria-controls="kt_customers_table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer Name: activate to sort column ascending">Username
                                                </th>
                                                <th class="" tabindex="0" aria-controls="kt_customers_table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Email: activate to sort column ascending">First Name
                                                </th>
                                                <th class="" tabindex="0" aria-controls="kt_customers_table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Company: activate to sort column ascending">Last Name
                                                </th>
                                                <th class="" tabindex="0" aria-controls="kt_customers_table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Payment Method: activate to sort column ascending">Phone #
                                                </th>
                                                <th class="" tabindex="0" aria-controls="kt_customers_table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Created Date: activate to sort column ascending">Is Active
                                                </th>
                                                <th class="" tabindex="0" aria-controls="kt_customers_table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Email: activate to sort column ascending">Is Primary
                                                </th>
                                                <th class="" tabindex="0" aria-controls="kt_customers_table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Email: activate to sort column ascending">Email Verified
                                                </th>
                                                <th class="" tabindex="0" aria-controls="kt_customers_table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Email: activate to sort column ascending">Notifications
                                                </th>
                                                <th class="" tabindex="0" aria-controls="kt_customers_table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Email: activate to sort column ascending">Resend Invite
                                                </th>
                                                <th class="" tabindex="0" aria-controls="kt_customers_table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Email: activate to sort column ascending">Secure Invite
                                                </th>
                                                <th class="" rowspan="1" colspan="1" aria-label="Actions">
                                                    Details / Edit
                                                </th>
                                            </tr>
                                            <!--end::Table row-->
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-semibold text-gray-600">
                                            <tr class="odd">
                                                <td>
                                                    smith@kpmg.com
                                                </td>
                                                <td>
                                                    John
                                                </td>
                                                <td>Doe</td>
                                                <td>
                                                    **** 1486
                                                </td>
                                                <td>
                                                    <label class="form-check form-check-custom form-check-solid me-10">
                                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                                            name="communication[]" value="email" checked="checked">
                                                    </label>
                                                </td>
                                                <td class="">
                                                    <label class="form-check form-check-custom form-check-solid me-10">
                                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                                            name="communication[]" value="email" checked="checked">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="form-check form-check-custom form-check-solid me-10">
                                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                                            name="communication[]" value="email">
                                                        <span class="form-check-label fw-semibold">resend</span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)">Manage</a>
                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm">Create
                                                        Invite
                                                    </button>
                                                </td>
                                                <td>
                                                    <a href="#"><i class="fas fa-pen fs-3"></i></a>
                                                </td>
                                            </tr>

                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--end::Card body-->
                        <div class="card-footer">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="">
                                    <button type="submit" class="btn-sm btn btn-primary mr-2">
                                        Add Existing User
                                    </button>
                                </div>
                                <div class="">
                                    <button type="submit" class="btn-sm btn btn-primary mr-2">
                                        Add New User
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->

                <!--begin:::Accreditation Tab pane-->
                <div class="tab-pane fade" id="kt_accreditation_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">

                        <div class="card-header border-0">
                            <div class="card-title">
                                <h2>Accreditation Status</h2>
                            </div>
                        </div>

                        <div class="card-body pt-0 pb-5">
                            <form class="form">
                                <div class="form-group row">
                                    <div class="col-lg-4 ">
                                        <!--begin::Card-->
                                        <div class="card card-flush card-stretch card-bordered  py-4 h-250px">
                                            <div class="card-header justify-content-center">
                                                <div class="card-title">
                                                    <div>
                                                        <span class="">
                                                            <i class="fas fa-user fs-4x"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2 text-center">
                                                <span class="fs-4">My <b>Individual Income </b>is</span><br>
                                                <span class="fs-4 text-success">Above $200,000</span><br>
                                                <span>(for each of the last 2 years)</span>

                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid justify-content-center">
                                                <input class="form-check-input" type="radio" value=""
                                                    id="flexRadioDefault" />
                                                <label class="form-check-label " for="flexRadioDefault">

                                                </label>
                                            </div>
                                        </div>

                                        <!--end::Card-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!--begin::Card-->
                                        <div class="card card-flush card-bordered  py-4 h-250px">
                                            <div class="card-header justify-content-center">
                                                <div class="card-title">
                                                    <div>
                                                        <span class="">
                                                            <i class="fas fa-user-friends fs-4x"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2 text-center">
                                                <span class="fs-4">My <b>Joint Income</b> with spouse is</span><br>
                                                <span class="fs-4 text-success">Above $300,000</span><br>
                                                <span>(for each of the last 2 years)</span>

                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid justify-content-center">
                                                <input class="form-check-input" type="radio" value=""
                                                    id="flexRadioDefault" />
                                                <label class="form-check-label " for="flexRadioDefault">

                                                </label>
                                            </div>
                                        </div>

                                        <!--end::Card-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!--begin::Card-->
                                        <div class="card card-flush card-bordered  py-4 h-250px">
                                            <div class="card-header justify-content-center">
                                                <div class="card-title">
                                                    <div>
                                                        <span class="">
                                                            <i class="fas fa-building fs-4x"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2 text-center">
                                                <span class="fs-4">My individual <b>Net Worth</b> or joint with spouse
                                                    is</span><br>
                                                <span class="fs-4 text-success">Above $1M</span><br>
                                                <span>(excluding primary residence)</span>

                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid justify-content-center">
                                                <input class="form-check-input" type="radio" value=""
                                                    id="flexRadioDefault" />
                                                <label class="form-check-label " for="flexRadioDefault">

                                                </label>
                                            </div>
                                        </div>

                                        <!--end::Card-->
                                    </div>
                                </div>
                                <div class="form-group row mt-8">
                                    <div class="col-lg-4 ">
                                        <!--begin::Card-->
                                        <div class="card card-flush card-bordered  py-4 h-250px">
                                            <div class="card-header justify-content-center">
                                                <div class="card-title">
                                                    <div>
                                                        <span class="">
                                                            <i class="fas fa-user fs-4x"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2 text-center">
                                                <span class="fs-4">I own <b>Total Investments</b></span><br>
                                                <span class="fs-4 text-success">Above $5M</span><br>
                                                <span>(including jointly with spouse)</span>

                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid justify-content-center">
                                                <input class="form-check-input" type="radio" value=""
                                                    id="flexRadioDefault" />
                                                <label class="form-check-label " for="flexRadioDefault">

                                                </label>
                                            </div>
                                        </div>

                                        <!--end::Card-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!--begin::Card-->
                                        <div class="card card-flush card-bordered  py-4 h-250px">
                                            <div class="card-header justify-content-center">
                                                <div class="card-title">
                                                    <div>
                                                        <span class="">
                                                            <i class="fas fa-user fs-4x"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2 text-center">
                                                <span class="fs-4">I am a licensed individual that holds an active
                                                    Series 7, Series 65,
                                                    or Series 82 registration</span><br>


                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid justify-content-center">
                                                <input class="form-check-input" type="radio" value=""
                                                    id="flexRadioDefault" />
                                                <label class="form-check-label " for="flexRadioDefault">

                                                </label>
                                            </div>
                                        </div>

                                        <!--end::Card-->
                                    </div>
                                    <div class="col-lg-4">
                                        <!--begin::Card-->
                                        <div class="card card-flush card-bordered  py-4 h-250px">
                                            <div class="card-header justify-content-center">
                                                <div class="card-title">
                                                    <div>
                                                        <span class="">
                                                            <i class="fas fa-user fs-4x"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-2 text-center">
                                                <span class="fs-4">I am not an <br> Accredited Investor</span><br>


                                            </div>
                                            <div
                                                class="form-check form-check-custom form-check-solid justify-content-center">
                                                <input class="form-check-input" type="radio" value=""
                                                    checked="checked" id="flexRadioDefault" />
                                                <label class="form-check-label " for="flexRadioDefault">

                                                </label>
                                            </div>
                                        </div>

                                        <!--end::Card-->
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Accreditation Tab pane-->

                <!--begin:::Transaction Tab pane-->
                <div class="tab-pane fade" id="kt_transaction_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <ul class="nav nav-pills me-6 mb-2 mb-sm-0" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-sm btn-light btn-color-muted btn-active-primary me-3 active"
                                        data-bs-toggle="tab" href="#kt_transactions_table_pane" aria-selected="true"
                                        role="tab">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        Transactions
                                        <!--end::Svg Icon-->
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="btn btn-sm btn-light btn-color-muted btn-active-primary"
                                        data-bs-toggle="tab" href="#kt_portfolio_pane" aria-selected="false"
                                        role="tab" tabindex="-1">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                        Portfolio
                                        <!--end::Svg Icon-->
                                    </a>
                                </li>
                            </ul>
                            <div class="card-toolbar">
                                <a href="#kt_add_transaction_pane" data-bs-toggle="tab"
                                    class="btn btn-sm btn-light-primary btn-active-primary" aria-selected="false"
                                    role="tab">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16"
                                                height="2" rx="1" transform="rotate(-90 11.364 20.364)"
                                                fill="currentColor"></rect>
                                            <rect x="4.36396" y="11.364" width="16" height="2"
                                                rx="1" fill="currentColor"></rect>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Add Transaction
                                </a>
                            </div>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="kt_transactions_table_pane">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table align-middle gs-0 gy-4">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bold text-muted bg-light">
                                                    <th class="ps-4 rounded-start">From</th>
                                                    <th class="">To</th>
                                                    <th class="">Amount</th>
                                                    <th class="">Date</th>
                                                    <th class="">KYC</th>
                                                    <th class="">Status</th>
                                                    <th class="">Type</th>
                                                    <th class="">Payment Method</th>
                                                    <th class="">E-Sign</th>
                                                    <th class=""></th>
                                                    <th class="rounded-end"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table container-->
                                </div>
                                <!--add 'show' class to display the content-->
                                <div class="tab-pane fade active" id="kt_portfolio_pane">
                                    <div class="text-center mt-6">
                                        <h3>Your portfolio is currently empty</h3>
                                        <a class="btn btn-sm btn-primary mt-6">
                                            Start Investing Now
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-pane fade active show" id="kt_add_transaction_pane">

                                </div>
                            </div>

                        </div>
                        <!--begin::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Transaction Tab pane-->

                <!--begin:::Documents Tab pane-->
                <div class="tab-pane fade" id="kt_documents_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header pt-8">
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                fill="currentColor"></rect>
                                            <path
                                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-filemanager-table-filter="search"
                                        class="form-control form-control-solid w-250px ps-15"
                                        placeholder="Search Files &amp; Folders">
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                                    <!--begin::Export-->
                                    <div class="me-3">
                                        {{--                                        <label for="" class="form-label">Default input style</label> --}}
                                        <input class="form-control" type="date" placeholder=""
                                            id="kt_datepicker_1" />
                                    </div>

                                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                        data-bs-target="#modal_folder">
                                        <!--begin::Svg Icon | path: icons/duotune/files/fil013.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.2C9.7 3 10.2 3.20001 10.4 3.60001ZM16 12H13V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V12H8C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V14H16C16.6 14 17 13.6 17 13C17 12.4 16.6 12 16 12Z"
                                                    fill="currentColor"></path>
                                                <path opacity="0.3"
                                                    d="M11 14H8C7.4 14 7 13.6 7 13C7 12.4 7.4 12 8 12H11V14ZM16 12H13V14H16C16.6 14 17 13.6 17 13C17 12.4 16.6 12 16 12Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->New Folder
                                    </button>
                                    <!--end::Export-->

                                    <button type="button" id="kt_modal_add_event_cancel" class="btn btn-light me-3">
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                    fill="currentColor"></path>
                                                <path opacity="0.3"
                                                    d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        Sort Folders
                                    </button>

                                    <!--begin::Add customer-->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#modal_sign">
                                        <i class="fas fa-pen"></i>
                                        Request E-Sign
                                    </button>
                                    <!--end::Add customer-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Group actions-->
                                <div class="d-flex justify-content-end align-items-center d-none"
                                    data-kt-filemanager-table-toolbar="selected">
                                    <div class="fw-bold me-5">
                                        <span class="me-2"
                                            data-kt-filemanager-table-select="selected_count"></span>Selected
                                    </div>
                                    <button type="button" class="btn btn-danger"
                                        data-kt-filemanager-table-select="delete_selected">Delete Selected
                                    </button>
                                </div>
                                <!--end::Group actions-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Table header-->

                            <!--end::Table header-->
                            <!--begin::Table-->
                            <div id="kt_file_manager_list_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="table-responsive">
                                    <div class="dataTables_scroll">
                                        <div class="dataTables_scrollHead"
                                            style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                            <div class="dataTables_scrollHeadInner"
                                                style="box-sizing: content-box; width: 1194.5px; padding-right: 5px;">
                                                <table data-kt-filemanager-table="folders"
                                                    class="table align-middle fs-6 gy-5"
                                                    style="margin-left: 0px; width: 1194.5px;">
                                                    <thead>
                                                        <!--begin::Table row-->
                                                        <tr
                                                            class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                            <th class="w-10px pe-2 sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 29.8906px;">
                                                                <div
                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        data-kt-check="true"
                                                                        data-kt-check-target="#kt_file_manager_list .form-check-input"
                                                                        value="1">
                                                                </div>
                                                            </th>
                                                            <th class="min-w-250px sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 527.734px;">Name
                                                            </th>
                                                            <th class="min-w-10px sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 119.234px;">Size
                                                            </th>
                                                            <th class="min-w-125px sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 317.969px;">Last Modified
                                                            </th>
                                                            <th class="w-125px sorting_disabled" rowspan="1"
                                                                colspan="1" style="width: 124.922px;"></th>
                                                        </tr>
                                                        <!--end::Table row-->
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="dataTables_scrollBody table"
                                            style="position: relative; overflow: auto; max-height: 700px; width: 100%;">
                                            <table id="kt_file_manager_list" data-kt-filemanager-table="folders"
                                                class="table align-middle fs-6 gy-5" style="width: 100%;">
                                                <thead>
                                                    <!--begin::Table row-->
                                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"
                                                        style="height: 0px;">
                                                        <th class="w-10px pe-2 sorting_disabled" rowspan="1"
                                                            colspan="1"
                                                            style="width: 29.8906px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                            <div class="dataTables_sizing"
                                                                style="height: 0px; overflow: hidden;">
                                                                <div
                                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        data-kt-check="true"
                                                                        data-kt-check-target="#kt_file_manager_list .form-check-input"
                                                                        value="1">
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th class="min-w-250px sorting_disabled" rowspan="1"
                                                            colspan="1"
                                                            style="width: 527.734px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                            <div class="dataTables_sizing"
                                                                style="height: 0px; overflow: hidden;">Name
                                                            </div>
                                                        </th>
                                                        <th class="min-w-10px sorting_disabled" rowspan="1"
                                                            colspan="1"
                                                            style="width: 119.234px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                            <div class="dataTables_sizing"
                                                                style="height: 0px; overflow: hidden;">Size
                                                            </div>
                                                        </th>
                                                        <th class="min-w-125px sorting_disabled" rowspan="1"
                                                            colspan="1"
                                                            style="width: 317.969px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                            <div class="dataTables_sizing"
                                                                style="height: 0px; overflow: hidden;">Last Modified
                                                            </div>
                                                        </th>
                                                        <th class="w-125px sorting_disabled" rowspan="1"
                                                            colspan="1"
                                                            style="width: 124.922px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;">
                                                            <div class="dataTables_sizing"
                                                                style="height: 0px; overflow: hidden;"></div>
                                                        </th>
                                                    </tr>
                                                    <!--end::Table row-->
                                                </thead>
                                                <!--begin::Table head-->

                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody class="fw-semibold text-gray-600">

                                                    <tr class="odd">
                                                        <!--begin::Checkbox-->
                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1">
                                                            </div>
                                                        </td>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Name=-->
                                                        <td data-order="account">
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                                <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.3"
                                                                            d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z"
                                                                            fill="currentColor"></path>
                                                                        <path
                                                                            d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <a href="../../demo1/dist/apps/file-manager/files/.html"
                                                                    class="text-gray-800 text-hover-primary">account</a>
                                                            </div>
                                                        </td>
                                                        <!--end::Name=-->
                                                        <!--begin::Size-->
                                                        <td>-</td>
                                                        <!--end::Size-->
                                                        <!--begin::Last modified-->
                                                        <td data-order="Invalid date">-</td>
                                                        <!--end::Last modified-->
                                                        <!--begin::Actions-->
                                                        <td class="text-end"
                                                            data-kt-filemanager-table="action_dropdown">
                                                            <div class="d-flex justify-content-end">
                                                                <!--begin::Share link-->
                                                                <div class="ms-2"
                                                                    data-kt-filemanger-table="copy_link">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                                        data-kt-menu-trigger="click"
                                                                        data-kt-menu-placement="bottom-end">
                                                                        <!--begin::Svg Icon | path: icons/duotune/coding/cod007.svg-->
                                                                        <span class="svg-icon svg-icon-5 m-0">
                                                                            <svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path opacity="0.3"
                                                                                    d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </button>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                                        data-kt-menu="true">
                                                                        <!--begin::Card-->
                                                                        <div class="card card-flush">
                                                                            <div class="card-body p-5">
                                                                                <!--begin::Loader-->
                                                                                <div class="d-flex"
                                                                                    data-kt-filemanger-table="copy_link_generator">
                                                                                    <!--begin::Spinner-->
                                                                                    <div class="me-5"
                                                                                        data-kt-indicator="on">
                                                                                        <span class="indicator-progress">
                                                                                            <span
                                                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                                        </span>
                                                                                    </div>
                                                                                    <!--end::Spinner-->
                                                                                    <!--begin::Label-->
                                                                                    <div class="fs-6 text-dark">Generating
                                                                                        Share Link...
                                                                                    </div>
                                                                                    <!--end::Label-->
                                                                                </div>
                                                                                <!--end::Loader-->
                                                                                <!--begin::Link-->
                                                                                <div class="d-flex flex-column text-start d-none"
                                                                                    data-kt-filemanger-table="copy_link_result">
                                                                                    <div class="d-flex mb-3">
                                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
                                                                                        <span
                                                                                            class="svg-icon svg-icon-2 svg-icon-success me-3">
                                                                                            <svg width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z"
                                                                                                    fill="currentColor">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <!--end::Svg Icon-->
                                                                                        <div class="fs-6 text-dark">Share
                                                                                            Link Generated
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        class="form-control form-control-sm"
                                                                                        value="https://path/to/file/or/folder/">
                                                                                    <div
                                                                                        class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                                        Read only.
                                                                                        <a href="../../demo1/dist/apps/file-manager/settings/.html"
                                                                                            class="ms-2">Change
                                                                                            permissions</a>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Link-->
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Card-->
                                                                    </div>
                                                                    <!--end::Menu-->
                                                                    <!--end::Share link-->
                                                                </div>
                                                                <!--begin::More-->
                                                                <div class="ms-2">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                                        data-kt-menu-trigger="click"
                                                                        data-kt-menu-placement="bottom-end">
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                                                                        <span class="svg-icon svg-icon-5 m-0">
                                                                            <svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <rect x="10" y="10"
                                                                                    width="4" height="4"
                                                                                    rx="2" fill="currentColor">
                                                                                </rect>
                                                                                <rect x="17" y="10"
                                                                                    width="4" height="4"
                                                                                    rx="2" fill="currentColor">
                                                                                </rect>
                                                                                <rect x="3" y="10"
                                                                                    width="4" height="4"
                                                                                    rx="2" fill="currentColor">
                                                                                </rect>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </button>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                                        data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="../../demo1/dist/apps/file-manager/files.html"
                                                                                class="menu-link px-3">View</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3"
                                                                                data-kt-filemanager-table="rename">Rename</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#"
                                                                                class="menu-link px-3">Download
                                                                                Folder</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3"
                                                                                data-kt-filemanager-table-filter="move_row"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#kt_modal_move_to_folder">Move
                                                                                to folder</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#"
                                                                                class="menu-link text-danger px-3"
                                                                                data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
                                                                    <!--end::More-->
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!--end::Actions-->
                                                    </tr>
                                                    <tr class="even">
                                                        <!--begin::Checkbox-->
                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1">
                                                            </div>
                                                        </td>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Name=-->
                                                        <td data-order="apps">
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                                <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.3"
                                                                            d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z"
                                                                            fill="currentColor"></path>
                                                                        <path
                                                                            d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <a href="../../demo1/dist/apps/file-manager/files/.html"
                                                                    class="text-gray-800 text-hover-primary">apps</a>
                                                            </div>
                                                        </td>
                                                        <!--end::Name=-->
                                                        <!--begin::Size-->
                                                        <td>-</td>
                                                        <!--end::Size-->
                                                        <!--begin::Last modified-->
                                                        <td data-order="Invalid date">-</td>
                                                        <!--end::Last modified-->
                                                        <!--begin::Actions-->
                                                        <td class="text-end"
                                                            data-kt-filemanager-table="action_dropdown">
                                                            <div class="d-flex justify-content-end">
                                                                <!--begin::Share link-->
                                                                <div class="ms-2"
                                                                    data-kt-filemanger-table="copy_link">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                                        data-kt-menu-trigger="click"
                                                                        data-kt-menu-placement="bottom-end">
                                                                        <!--begin::Svg Icon | path: icons/duotune/coding/cod007.svg-->
                                                                        <span class="svg-icon svg-icon-5 m-0">
                                                                            <svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path opacity="0.3"
                                                                                    d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </button>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                                        data-kt-menu="true">
                                                                        <!--begin::Card-->
                                                                        <div class="card card-flush">
                                                                            <div class="card-body p-5">
                                                                                <!--begin::Loader-->
                                                                                <div class="d-flex"
                                                                                    data-kt-filemanger-table="copy_link_generator">
                                                                                    <!--begin::Spinner-->
                                                                                    <div class="me-5"
                                                                                        data-kt-indicator="on">
                                                                                        <span class="indicator-progress">
                                                                                            <span
                                                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                                        </span>
                                                                                    </div>
                                                                                    <!--end::Spinner-->
                                                                                    <!--begin::Label-->
                                                                                    <div class="fs-6 text-dark">Generating
                                                                                        Share Link...
                                                                                    </div>
                                                                                    <!--end::Label-->
                                                                                </div>
                                                                                <!--end::Loader-->
                                                                                <!--begin::Link-->
                                                                                <div class="d-flex flex-column text-start d-none"
                                                                                    data-kt-filemanger-table="copy_link_result">
                                                                                    <div class="d-flex mb-3">
                                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
                                                                                        <span
                                                                                            class="svg-icon svg-icon-2 svg-icon-success me-3">
                                                                                            <svg width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z"
                                                                                                    fill="currentColor">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <!--end::Svg Icon-->
                                                                                        <div class="fs-6 text-dark">Share
                                                                                            Link Generated
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        class="form-control form-control-sm"
                                                                                        value="https://path/to/file/or/folder/">
                                                                                    <div
                                                                                        class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                                        Read only.
                                                                                        <a href="../../demo1/dist/apps/file-manager/settings/.html"
                                                                                            class="ms-2">Change
                                                                                            permissions</a>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Link-->
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Card-->
                                                                    </div>
                                                                    <!--end::Menu-->
                                                                    <!--end::Share link-->
                                                                </div>
                                                                <!--begin::More-->
                                                                <div class="ms-2">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                                        data-kt-menu-trigger="click"
                                                                        data-kt-menu-placement="bottom-end">
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                                                                        <span class="svg-icon svg-icon-5 m-0">
                                                                            <svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <rect x="10" y="10"
                                                                                    width="4" height="4"
                                                                                    rx="2" fill="currentColor">
                                                                                </rect>
                                                                                <rect x="17" y="10"
                                                                                    width="4" height="4"
                                                                                    rx="2" fill="currentColor">
                                                                                </rect>
                                                                                <rect x="3" y="10"
                                                                                    width="4" height="4"
                                                                                    rx="2" fill="currentColor">
                                                                                </rect>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </button>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                                        data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="../../demo1/dist/apps/file-manager/files.html"
                                                                                class="menu-link px-3">View</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3"
                                                                                data-kt-filemanager-table="rename">Rename</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#"
                                                                                class="menu-link px-3">Download
                                                                                Folder</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3"
                                                                                data-kt-filemanager-table-filter="move_row"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#kt_modal_move_to_folder">Move
                                                                                to folder</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#"
                                                                                class="menu-link text-danger px-3"
                                                                                data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
                                                                    <!--end::More-->
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!--end::Actions-->
                                                    </tr>
                                                    <tr class="odd">
                                                        <!--begin::Checkbox-->
                                                        <td>
                                                            <div
                                                                class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="1">
                                                            </div>
                                                        </td>
                                                        <!--end::Checkbox-->
                                                        <!--begin::Name=-->
                                                        <td data-order="widgets">
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
                                                                <span class="svg-icon svg-icon-2x svg-icon-primary me-4">
                                                                    <svg width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.3"
                                                                            d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z"
                                                                            fill="currentColor"></path>
                                                                        <path
                                                                            d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <a href="../../demo1/dist/apps/file-manager/files/.html"
                                                                    class="text-gray-800 text-hover-primary">widgets</a>
                                                            </div>
                                                        </td>
                                                        <!--end::Name=-->
                                                        <!--begin::Size-->
                                                        <td>-</td>
                                                        <!--end::Size-->
                                                        <!--begin::Last modified-->
                                                        <td data-order="Invalid date">-</td>
                                                        <!--end::Last modified-->
                                                        <!--begin::Actions-->
                                                        <td class="text-end"
                                                            data-kt-filemanager-table="action_dropdown">
                                                            <div class="d-flex justify-content-end">
                                                                <!--begin::Share link-->
                                                                <div class="ms-2"
                                                                    data-kt-filemanger-table="copy_link">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                                                        data-kt-menu-trigger="click"
                                                                        data-kt-menu-placement="bottom-end">
                                                                        <!--begin::Svg Icon | path: icons/duotune/coding/cod007.svg-->
                                                                        <span class="svg-icon svg-icon-5 m-0">
                                                                            <svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path opacity="0.3"
                                                                                    d="M18.4 5.59998C18.7766 5.9772 18.9881 6.48846 18.9881 7.02148C18.9881 7.55451 18.7766 8.06577 18.4 8.44299L14.843 12C14.466 12.377 13.9547 12.5887 13.4215 12.5887C12.8883 12.5887 12.377 12.377 12 12C11.623 11.623 11.4112 11.1117 11.4112 10.5785C11.4112 10.0453 11.623 9.53399 12 9.15698L15.553 5.604C15.9302 5.22741 16.4415 5.01587 16.9745 5.01587C17.5075 5.01587 18.0188 5.22741 18.396 5.604L18.4 5.59998ZM20.528 3.47205C20.0614 3.00535 19.5074 2.63503 18.8977 2.38245C18.288 2.12987 17.6344 1.99988 16.9745 1.99988C16.3145 1.99988 15.661 2.12987 15.0513 2.38245C14.4416 2.63503 13.8876 3.00535 13.421 3.47205L9.86801 7.02502C9.40136 7.49168 9.03118 8.04568 8.77863 8.6554C8.52608 9.26511 8.39609 9.91855 8.39609 10.5785C8.39609 11.2384 8.52608 11.8919 8.77863 12.5016C9.03118 13.1113 9.40136 13.6653 9.86801 14.132C10.3347 14.5986 10.8886 14.9688 11.4984 15.2213C12.1081 15.4739 12.7616 15.6039 13.4215 15.6039C14.0815 15.6039 14.7349 15.4739 15.3446 15.2213C15.9543 14.9688 16.5084 14.5986 16.975 14.132L20.528 10.579C20.9947 10.1124 21.3649 9.55844 21.6175 8.94873C21.8701 8.33902 22.0001 7.68547 22.0001 7.02551C22.0001 6.36555 21.8701 5.71201 21.6175 5.10229C21.3649 4.49258 20.9947 3.93867 20.528 3.47205Z"
                                                                                    fill="currentColor"></path>
                                                                                <path
                                                                                    d="M14.132 9.86804C13.6421 9.37931 13.0561 8.99749 12.411 8.74695L12 9.15698C11.6234 9.53421 11.4119 10.0455 11.4119 10.5785C11.4119 11.1115 11.6234 11.6228 12 12C12.3766 12.3772 12.5881 12.8885 12.5881 13.4215C12.5881 13.9545 12.3766 14.4658 12 14.843L8.44699 18.396C8.06999 18.773 7.55868 18.9849 7.02551 18.9849C6.49235 18.9849 5.98101 18.773 5.604 18.396C5.227 18.019 5.0152 17.5077 5.0152 16.9745C5.0152 16.4413 5.227 15.93 5.604 15.553L8.74701 12.411C8.28705 11.233 8.28705 9.92498 8.74701 8.74695C8.10159 8.99737 7.5152 9.37919 7.02499 9.86804L3.47198 13.421C2.52954 14.3635 2.00009 15.6417 2.00009 16.9745C2.00009 18.3073 2.52957 19.5855 3.47202 20.528C4.41446 21.4704 5.69269 21.9999 7.02551 21.9999C8.35833 21.9999 9.63656 21.4704 10.579 20.528L14.132 16.975C14.5987 16.5084 14.9689 15.9544 15.2215 15.3447C15.4741 14.735 15.6041 14.0815 15.6041 13.4215C15.6041 12.7615 15.4741 12.108 15.2215 11.4983C14.9689 10.8886 14.5987 10.3347 14.132 9.86804Z"
                                                                                    fill="currentColor"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </button>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px"
                                                                        data-kt-menu="true">
                                                                        <!--begin::Card-->
                                                                        <div class="card card-flush">
                                                                            <div class="card-body p-5">
                                                                                <!--begin::Loader-->
                                                                                <div class="d-flex"
                                                                                    data-kt-filemanger-table="copy_link_generator">
                                                                                    <!--begin::Spinner-->
                                                                                    <div class="me-5"
                                                                                        data-kt-indicator="on">
                                                                                        <span class="indicator-progress">
                                                                                            <span
                                                                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                                        </span>
                                                                                    </div>
                                                                                    <!--end::Spinner-->
                                                                                    <!--begin::Label-->
                                                                                    <div class="fs-6 text-dark">Generating
                                                                                        Share Link...
                                                                                    </div>
                                                                                    <!--end::Label-->
                                                                                </div>
                                                                                <!--end::Loader-->
                                                                                <!--begin::Link-->
                                                                                <div class="d-flex flex-column text-start d-none"
                                                                                    data-kt-filemanger-table="copy_link_result">
                                                                                    <div class="d-flex mb-3">
                                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
                                                                                        <span
                                                                                            class="svg-icon svg-icon-2 svg-icon-success me-3">
                                                                                            <svg width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z"
                                                                                                    fill="currentColor">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </span>
                                                                                        <!--end::Svg Icon-->
                                                                                        <div class="fs-6 text-dark">Share
                                                                                            Link Generated
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="text"
                                                                                        class="form-control form-control-sm"
                                                                                        value="https://path/to/file/or/folder/">
                                                                                    <div
                                                                                        class="text-muted fw-normal mt-2 fs-8 px-3">
                                                                                        Read only.
                                                                                        <a href="../../demo1/dist/apps/file-manager/settings/.html"
                                                                                            class="ms-2">Change
                                                                                            permissions</a>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Link-->
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Card-->
                                                                    </div>
                                                                    <!--end::Menu-->
                                                                    <!--end::Share link-->
                                                                </div>
                                                                <!--begin::More-->
                                                                <div class="ms-2">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                                                        data-kt-menu-trigger="click"
                                                                        data-kt-menu-placement="bottom-end">
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
                                                                        <span class="svg-icon svg-icon-5 m-0">
                                                                            <svg width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <rect x="10" y="10"
                                                                                    width="4" height="4"
                                                                                    rx="2" fill="currentColor">
                                                                                </rect>
                                                                                <rect x="17" y="10"
                                                                                    width="4" height="4"
                                                                                    rx="2" fill="currentColor">
                                                                                </rect>
                                                                                <rect x="3" y="10"
                                                                                    width="4" height="4"
                                                                                    rx="2" fill="currentColor">
                                                                                </rect>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </button>
                                                                    <!--begin::Menu-->
                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                                                        data-kt-menu="true">
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="../../demo1/dist/apps/file-manager/files.html"
                                                                                class="menu-link px-3">View</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3"
                                                                                data-kt-filemanager-table="rename">Rename</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#"
                                                                                class="menu-link px-3">Download
                                                                                Folder</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#" class="menu-link px-3"
                                                                                data-kt-filemanager-table-filter="move_row"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#kt_modal_move_to_folder">Move
                                                                                to folder</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                        <!--begin::Menu item-->
                                                                        <div class="menu-item px-3">
                                                                            <a href="#"
                                                                                class="menu-link text-danger px-3"
                                                                                data-kt-filemanager-table-filter="delete_row">Delete</a>
                                                                        </div>
                                                                        <!--end::Menu item-->
                                                                    </div>
                                                                    <!--end::Menu-->
                                                                    <!--end::More-->
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <!--end::Actions-->
                                                    </tr>

                                                </tbody>
                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                    </div>
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
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Documents Tab pane-->

                <!--begin:::Documents Tab pane-->
                <div class="tab-pane fade" id="kt_payment_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header pt-8">
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <div class="text-center">
                                <h4>There are no payment methods</h4>
                            </div>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Documents Tab pane-->

                <!--begin:::Engagement Tab pane-->
                <div class="tab-pane fade" id="kt_engagement_tab" role="tabpanel">

                    <div class="col-lg-3 ">
                        <div
                            class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-200px mb-5 mb-xl-10"
                            style="background-color: #F1416C;background-image:url({{asset('assets/media/patterns/vector-1.png')}})">
                            <!--begin::Header-->
                            <div class="card-header pt-5">
                                <!--begin::Title-->
                                <div class="card-title d-flex flex-column">
                                    <!--begin::Amount-->
                                    <span class="fs-6 fw-bold text-white me-2 lh-1 ls-n2">Techware Labs</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Techware Labs</span>
                                    <!--end::Subtitle-->
                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Card body-->
                            <div class="card-body d-flex flex-row align-items-end pt-0">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column align-items-center flex-column mt-3 w-100">

                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">191</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Engagements</span>
                                </div>
                                <div class="d-flex flex-column align-items-center flex-column mt-3 w-100">

                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">0</span>
                                    <!--end::Amount-->
                                    <!--begin::Subtitle-->
                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Notes</span>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Card body-->
                        </div>
                    </div>
                    <div class="card">
                        <!--begin::Card head-->
                        <div class="card-header card-header-stretch">                            <!--begin::Title-->
                            <div class="card-title d-flex align-items-center">
                                Filter by
                                <div class="m-lg-4 me-6 my-1">
                                    <select id="kt_filter_year" name="year" data-control="select2"
                                            data-hide-search="true" class="form-select form-select-solid">
                                        <option value="All" selected="selected">All Engagement</option>
                                        <option value="documents">Documents</option>
                                        <option value="email">Email</option>
                                        <option value="notes">Notes</option>
                                        <option value="viewed">Viewed</option>
                                        <option value="clicked">Clicked</option>
                                        <option value="watched">Watched</option>
                                        <option value="invested">Invested</option>
                                    </select>
                                </div>
                                <div class="me-4 my-1">
                                    <select id="kt_filter_orders" name="orders" data-control="select2"
                                            data-hide-search="true" data-dropdown-css-class="w-250px"
                                            class="form-select form-select-solid">
                                        <option value="All" selected="selected">All Offers</option>
                                        <option value="">Techware Labs (Techware Labs)</option>
                                    </select>
                                </div>
                                <div class="">
                                    <a class="btn btn-primary">
                                        Export
                                    </a>
                                </div>

                            </div>
                            <!--end::Title-->
                        </div>
                        <!--end::Card head-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tab panel-->
                                <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active"
                                     role="tabpanel" aria-labelledby="kt_activity_today_tab">
                                    <!--begin::Timeline-->
                                    <div class="timeline">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                                <div class="symbol-label bg-light">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                                        <i class="fas fa-folder"></i>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="d-flex flex-row mt-4 pe-3">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2 me-5">
                                                        Viewed Form C/A and Token Grant, Page 2
                                                        <span class="text-muted"> for 4 minutes</span>

                                                    </div>
                                                    <div><span class="badge badge-light-primary">5 Days Ago</span></div>
                                                    <!--end::Title-->

                                                </div>
                                                <!--end::Timeline heading-->

                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <i class="fas fa-eye"></i>
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n2">
                                                <!--begin::Timeline heading-->
                                                <div class="d-flex flex-row mt-4 pe-3">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2 me-5">
                                                        Viewed Techware Labs Techware Labs
                                                        <span class="text-muted"> for 8 seconds</span>

                                                    </div>
                                                    <div><span class="badge badge-light-primary">5 Days Ago</span></div>
                                                    <!--end::Title-->
                                                </div>
                                                    <!--end::Title-->
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line w-40px"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                                <div class="symbol-label bg-light">
                                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
                                                    <i class="fas fa-hand-pointer"></i>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="mb-5 pe-3">
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-row mt-4 pe-3">
                                                        <!--begin::Title-->
                                                        <div class="fs-5 fw-semibold mb-2 me-5">
                                                            Clicked Learn More on Offerings
                                                        </div>
                                                        <div><span class="badge badge-light-primary">5 Days Ago</span></div>
                                                        <!--end::Title-->
                                                    </div>

                                                </div>

                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->

                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Tab panel-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                </div>
                <!--end:::Engagement Tab pane-->
            </div>
            <!--end:::Tab content-->
        </div>

    </div>

@endsection
@section('page_js')

    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script></script>


    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#users-table").on("click", ".edit-user", function(e) {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var email = $(this).data('email');
            var status = $(this).data('status');
            $('#user-id').val(id);
            $('#user-name').val(name);
            $('#user-email').val(email);
            $('#user-status').val(status);
        });

        function deleteUser(id) {
            Swal.fire({
                title: "Are you sure to delete ?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                customClass: {
                    confirmButton: "btn-danger"
                }
            }).then(function(result) {
                if (result.value) {
                    var url = '{{ route('user.delete') }}';
                    $.ajax({
                        url: url,
                        method: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            if (response.status == true) {
                                toastr.success(response.message, "success");
                                location.reload();
                            } else {
                                toastr.error(response.message, "error");
                            }


                        }
                    });
                }
            });
        }
    </script>


@endsection
