@extends('layouts.app')
@section('title', 'User Detail')
@section('page_name', 'Listings')
@section('page_head')
    <style></style>
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

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
                        @if ($user->getFirstMediaUrl('profile_photo', 'thumb')) @php $photo_path = $user->getFirstMediaUrl('profile_photo', 'thumb')@endphp
                        @else
                            @php $photo_path = "http://127.0.0.1:8000/assets/media/svg/avatars/blank.svg";  @endphp @endif
                        style="background-image: url('{{ $photo_path }}')">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper" style="background-image: none;"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->

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
                                    <span class="text-gray-900 text-hover-primary fs-2 fw-bold"> {{ $user->name }} |
                                        {{ $user->email }}
                                        @if ($user->userDetail)
                                            {{ $user->userDetail->last_name }}
                                        @endif
                                        - <small class="text-info">
                                            {{ ucfirst($user->roles()->pluck('name')->implode(' ')) }}</small>
                                    </span>
                                </div>
                                <!--end::Name-->
                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <span class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                        <!--end::Svg Icon--> {{ $user->phone }} <br> {{ $user->user_type }}
                                    </span>
                                </div>

                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                    <span class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                        <button type="button" class="btn btn-sm btn-dark no-radius update_aml_status"
                                            data-id="{{ $user->id }}">
                                            KYC / AML Check @if ($user->check_kyc == true)
                                                Enabled
                                            @else
                                                Disabled
                                            @endif
                                        </button>
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
                                            <div class="fw-bold mb-2 fs-2"></div>

                                        </div>
                                        <div class="m-lg-2 text-center mr-6">
                                            <div class="fw-bold mb-2 fs-2"></div>

                                        </div>
                                        <div class="text-center m-lg-2">
                                            <div class="fw-bold mb-2 fs-2"></div>

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
                            <form class="form" method="post" action="{{ route('user.issuer.account.update') }}"
                                enctype="multipart/form-data"> @csrf
                                <input type="hidden" name="id" id="" value="{{ $user->id }}">
                                <div class="card-body">
                                    <div class="form-group row mb-10">
                                        <input type="hidden" name="type" value="investor">
                                        <div class="col-lg-12 mb-3">
                                            <h3>
                                                CONTACT INFORMATION
                                            </h3>
                                            @if ($errors->any())
                                                <div>
                                                    @foreach ($errors->all() as $error)
                                                        <div
                                                            class="fv-plugins-message-container invalid-feedback mb-3 text-center">
                                                            <div data-field="email" data-validator="notEmpty">
                                                                {{ $error }}
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <br>
                                            @endif
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="row mb-10">
                                                    <div class="col-lg-4">
                                                        <label>First Name: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="First Name*" required name="first_name"
                                                            value="{{ $user->name }}" />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Middle Name: <span class="text-danger"></span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Middle Name" name="middle_name"
                                                            @if ($user->userDetail) value="{{ $user->userDetail->middle_name }}" @endif />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Last Name: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Last Name" name="last_name"
                                                            @if ($user->userDetail) value="{{ $user->userDetail->last_name }}" @endif />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <label>Title:</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Title" name="title"
                                                                @if ($user->userDetail) value="{{ $user->userDetail->title }}" @endif />

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 row">
                                                        <label>Phone Number: <span class="text-danger">*</span> </label>
                                                        <div class="col-lg-4">
                                                            <select class="form-control cc" name="cc"
                                                                data-control="select2">
                                                                @include('user.partials.cc')
                                                            </select>

                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="phone"
                                                                    id="phone_number" value="{{ $user->phone }}" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>Date of Birth <span class="text-danger">*</span> </label>
                                                        <div class="input-group" id="">
                                                            <input type="date" class="form-control"
                                                                placeholder="Date of Birth*" required name="dob"
                                                                @if ($user->userDetail) value="{{ $user->userDetail->dob }}" @endif>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 pt-6">
                                                <div class="image-input image-input-outline image-input-empty"
                                                    data-kt-image-input="true"
                                                    @if ($user->getFirstMediaUrl('profile_photo', 'thumb')) @php $photo_path = $user->getFirstMediaUrl('profile_photo', 'thumb')@endphp
                                                @else
                                                @php $photo_path = "http://127.0.0.1:8000/assets/media/svg/avatars/blank.svg";  @endphp @endif
                                                    style="background-image: url('{{ $photo_path }}')">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-150px h-150px"
                                                        style="background-image: none;"></div>
                                                    <!--end::Preview existing avatar-->
                                                    <!--begin::Label-->
                                                    <label
                                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                        aria-label="Change avatar" data-kt-initialized="1">
                                                        <i class="bi bi-pencil-fill fs-7"></i>
                                                        <!--begin::Inputs-->
                                                        <input type="file" name="profile_avatar"
                                                            accept=".png, .jpg, .jpeg">
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
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-12 mb-5">
                                            <label>User Type: <span class="text-danger">*</span> </label>
                                            <select class="form-control user_type" data-control="select2"
                                                name="user_type">
                                                <option value="individual"
                                                    @if ($user->user_type == 'individual') selected @endif> Individual </option>
                                                <option value="entity" @if ($user->user_type == 'entity') selected @endif>
                                                    Entity </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-10">
                                        @if ($user->hasRole('issuer'))
                                            <div class="col-lg-12 mb-3">
                                                <h3>
                                                    COMPANY INFORMATION
                                                </h3>
                                            </div>
                                            {{-- Issuer Details --}}
                                            <div class="col-lg-6 mb-10">
                                                <label>Entity Name <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="entity_name"
                                                    placeholder="Entity Name"
                                                    @if ($user->userDetail) value="{{ $user->userDetail->entity_name }}" @endif
                                                    required>
                                            </div>

                                            <div class="col-lg-6 mb-10">
                                                <label>Ein <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="ein"
                                                    id="ein_number" placeholder="Ein"
                                                    @if ($user->userDetail) value="{{ $user->userDetail->ein }}" @endif
                                                    required>
                                            </div>

                                            <div class="col-lg-6 mb-10">
                                                <label>Naics <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="naics" id="naics"
                                                    placeholder="Naics"
                                                    @if ($user->userDetail) value="{{ $user->userDetail->naics }}" @endif
                                                    required>
                                            </div>


                                            <div class="col-lg-6 mb-10">
                                                <label>Naics Description <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="naics_description"
                                                    id="naics_description" placeholder="Naics Description"
                                                    @if ($user->userDetail) value="{{ $user->userDetail->naics_description }}" @endif
                                                    required>
                                            </div>



                                            <div class="col-lg-6 mb-10">
                                                <label>Website <span class="text-danger">*</span> </label>
                                                <input type="url" class="form-control" name="website"
                                                    id="website_address" placeholder="Website Address"
                                                    @if ($user->userDetail) value="{{ $user->userDetail->website }}" @endif
                                                    required>
                                            </div>


                                            <div class="clear-fix"></div>
                                        @endif
                                        <div class="col-lg-12 mb-3">
                                            <h6>
                                                Address
                                            </h6>
                                        </div>


                                        {{-- End Issuer Details --}}


                                        <div class="col-lg-6">
                                            <label>Address <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="address"
                                                @if ($user->userDetail) value="{{ $user->userDetail->address }}" @endif
                                                placeholder="Street Address*" required>
                                        </div>

                                        <div class="col-lg-6">
                                            <label> Suit / Unit </label>
                                            <input type="text" class="form-control" name="suit"
                                                @if ($user->userDetail) value="{{ $user->userDetail->suit }}" @endif
                                                placeholder="Suit / Unit">
                                        </div>
                                    </div>  
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-4">
                                            <label>City <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="city"
                                                @if ($user->userDetail) value="{{ $user->userDetail->city }}" @endif
                                                placeholder="City*" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <label>State / Region <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="state"
                                                @if ($user->userDetail) value="{{ $user->userDetail->state }}" @endif
                                                placeholder="State / Region*" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <label>Zip / Postal Code <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="zip" id="zip_code"
                                                @if ($user->userDetail) value="{{ $user->userDetail->zip }}" @endif
                                                placeholder="Zip / Postal Code*" required>
                                        </div>
                                    </div> 
                                    @if ($user->hasRole('issuer'))
                                        <div class="form-group row mb-10">
                                            <div class="col-lg-6">
                                                <label>State/Region of Legal Formation <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="legal_formation"
                                                    placeholder="State/Region of Legal Formation*"
                                                    @if ($user->userDetail) value="{{ $user->userDetail->legal_formation }}" @endif
                                                    required>
                                            </div>

                                            <div class="col-lg-6">
                                                <label>Date of Incorporation <span class="text-danger">*</span> </label>
                                                <input type="date" class="form-control" name="date_incorporation"
                                                    placeholder="Date of Incorporation*"
                                                    @if ($user->userDetail) value="{{ $user->userDetail->date_incorporation }}" @endif
                                                    required>
                                            </div>
                                        </div>
                                    @endif 
                                    
                                    <div class="row">
                                        @if ($user->hasRole('investor'))
                                            <div class="col-lg-12 text-center ">
                                                <label class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                                        name="agree_consent_electronic"
                                                        @if ($user->agree_consent_electronic == 1) checked @endif
                                                        id="electronic_delivery_check_box">
                                                    <span class="form-check-label fw-semibold"> Wil I agree to the Consent
                                                        to
                                                        Electronic Delivery</span>
                                                </label>
                                            </div>
                                        @endif 
                                    </div> 
                                    <div class="card-title mt-6 mb-3">
                                        <h2>Identity Verification</h2>
                                    </div>
                                    <div class="row">
                                        @if ($user->hasRole('issuer'))
                                            <div class="form-group mb-10 col-lg-4">
                                                <label>
                                                    Primary Contact Social Security # <small>(US Investors Only)</small>
                                                    <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <input  class="form-control"
                                                    placeholder="Primary Contact Social Security"   
                                                    name="primary_contact_social_security" 
                                                    @if ($user->identityVerification && $user->identityVerification->primary_contact_social_security != null)
                                                    type="password"
                                                    value="999-99-9999" readonly
                                                    @else
                                                    required
                                                    type="text"
                                                    @endif  
                                                    id="primary_contact_social_security"   />
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary  no-radius" id="show_ssn_field"
                                                            type="button">x</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-10 col-lg-4">
                                                <label> Tax Entity Type <span class="text-danger">*</span> </label>
                                                <select class="form-select tax_entity_type" required
                                                    data-control="select2" name="tax_entity_type"
                                                    data-placeholder="Select an option" data-live-search="true">
                                                    <option value="IRA">IRA</option>
                                                    <option value="Trust">Trust</option>
                                                    <option value="Corporation">Corporation</option>
                                                    <option value="LLC">LLC</option>
                                                    <option value="Partnership">Partnership</option>
                                                    <option value="Non-Profit">Non-Profit</option>
                                                    <option value="Foregin Corporation">Foregin Corporation</option>
                                                    <option value="Custodial">Custodial</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-10 col-lg-4">
                                                <label> Tax Identification # <span class="text-danger">*</span> </label>
                                                <input type="number" class="form-control"
                                                    placeholder="Tax Identification" required name="tax_identification"
                                                    @if ($user->identityVerification) value="{{ $user->identityVerification->tax_identification }}" @endif />
                                            </div>
                                        @else
                                            <div class="form-group mb-10 col-lg-6">
                                                <label> Social Security # <small>(US Investors Only)</small>
                                                <div class="input-group">
                                                    <input  class="form-control"
                                                        placeholder="Primary Contact Social Security"   
                                                        name="primary_contact_social_security" 
                                                        @if ($user->identityVerification && $user->identityVerification->primary_contact_social_security != null)
                                                        type="password"
                                                        value="999-99-9999" readonly
                                                        @else
                                                        required
                                                        type="text"
                                                        @endif  
                                                        id="primary_contact_social_security"   />
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary  no-radius"
                                                            id="show_ssn_field" type="button" title="Add/Update SSN">x</button>
                                                    </div>
                                                </div>  
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="form-group mb-10 col-lg-12 text-right kyc_buttons">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <strong>
                                                            KYC STATUS :
                                                            <span class="text-success kyc_level_wrapper">
                                                                @if ($user->kyc)
                                                                    {{ ucfirst($user->kyc->kyc_level) }}
                                                                @endif
                                                            </span>
                                                        </strong>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <strong>
                                                            DOCUMENT STATUS :
                                                            <span class="text-success kyc_doc_wrapper">
                                                                @if ($user->kyc)
                                                                    {{ ucfirst($user->kyc->doc_status) }}
                                                                @endif
                                                            </span>
                                                        </strong>
                                                    </div>

                                                    <div class="col-lg-6 ">
                                                        <div class="row">
                                                            <div class="col-lg-6 check_kyc_wrapper text-center">
                                                                @if ($user->user_type == 'individual')
                                                                    @if ($user->fortress_id == null)
                                                                        <button type="button" style="width: 100%"
                                                                            class="btn btn-sm no-radius -square btn-dark check_kyc"
                                                                            data-id="{{ $user->id }}">
                                                                            Check User KYC
                                                                        </button>
                                                                        <img src="https://i.gifer.com/origin/b4/b4d657e7ef262b88eb5f7ac021edda87.gif"
                                                                            class="img img-thumbnail d-none loader_img"
                                                                            style="width: 40px;" alt="">
                                                                    @else
                                                                        <button type="button" style="width: 50%"
                                                                            id="check_kyc_leavel"
                                                                            class="btn btn-sm no-radius btn-square btn-dark re_run_kyc"
                                                                            data-id="{{ $user->id }}">
                                                                            Re Run KYC
                                                                        </button>
                                                                        <img src="https://i.gifer.com/origin/b4/b4d657e7ef262b88eb5f7ac021edda87.gif"
                                                                            class="img img-thumbnail d-none loader_img_for_re_run_kyc"
                                                                            style="width: 40px;" alt="">
                                                                        @if ($user->kyc)
                                                                            @if ($user->kyc->doc_status == null or $user->kyc->doc_status == 'Not Uploaded')
                                                                                <button type="button" style="width: 100%"
                                                                                    id="check_kyc_leavel"
                                                                                    class="btn btn-sm no-radius -square btn-dark update_document mt-4"
                                                                                    data-id="{{ $user->id }}">
                                                                                    Upload Documents
                                                                                </button>
                                                                                <img src="https://i.gifer.com/origin/b4/b4d657e7ef262b88eb5f7ac021edda87.gif"
                                                                                    class="img img-thumbnail d-none loader_img_for_update_document"
                                                                                    style="width: 40px;" alt="">
                                                                            @endif
                                                                        @endif

                                                                    @endif
                                                                @else
                                                                    @if ($user->identity_container_id == null || $user->business_id == null  )
                                                                        <button type="button" style="width: 100%"
                                                                            class="btn btn-sm no-radius -square btn-dark check_kyc"
                                                                            data-id="{{ $user->id }}">
                                                                            Check User KYC Entity
                                                                        </button>
                                                                        <img src="https://i.gifer.com/origin/b4/b4d657e7ef262b88eb5f7ac021edda87.gif"
                                                                            class="img img-thumbnail d-none loader_img"
                                                                            style="width: 40px;" alt="">
                                                                    @else
                                                                        <button type="button" style="width: 100%"
                                                                            id="check_kyc_leavel"
                                                                            class="btn btn-sm no-radius -square btn-dark re_run_kyc"
                                                                            data-id="{{ $user->id }}">
                                                                            Re Run KYC
                                                                        </button>
                                                                        <img src="https://i.gifer.com/origin/b4/b4d657e7ef262b88eb5f7ac021edda87.gif"
                                                                            class="img img-thumbnail d-none loader_img_for_re_run_kyc"
                                                                            style="width: 40px;" alt="">
                                                                    @endif
                                                                    @if ($user->kyc)
                                                                        @if ($user->kyc->doc_status == null or $user->kyc->doc_status == 'Not Uploaded')
                                                                            <button type="button" style="width: 100%"
                                                                                id="check_kyc_leavel"
                                                                                class="btn btn-sm no-radius -square btn-dark update_document mt-4"
                                                                                data-id="{{ $user->id }}">
                                                                                Upload Documents
                                                                            </button>
                                                                            <img src="https://i.gifer.com/origin/b4/b4d657e7ef262b88eb5f7ac021edda87.gif"
                                                                                class="img img-thumbnail d-none loader_img_for_update_document"
                                                                                style="width: 40px;" alt="">
                                                                        @endif
                                                                    @endif
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div> 
                                    <div class="form-group row mb-10">
                                        <div class="col-lg-3">
                                            <label>Nationality <span class="text-danger">*</span></label>
                                            <select class="form-select nationality" required data-control="select2"
                                                name="nationality" data-placeholder="Select an option"
                                                data-live-search="true">
                                                @include('user.country')
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>Country of Residence <span class="text-danger">*</span></label>
                                            <select class="form-select country_residence" required data-control="select2"
                                                name="country_residence" data-placeholder="Select an option"
                                                data-live-search="true">
                                                @include('user.country')
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <label class="fw-semibold"> Document Type</label>
                                            <select class="form-select doc_type" data-control="select2"
                                                data-placeholder="Select Document Type" required name="doc_type">
                                                @if ($user->hasRole('issuer'))
                                                    <option value="other">Other</option>
                                                    <option value="proofOfAddress">Proof Of Address</option>
                                                    <option value="proofOfCompanyFormation"> Proof Of Company Formation
                                                    </option>
                                                @else
                                                    <option value="license">License</option>
                                                    <option value="identificationCard"> Identification Card </option>
                                                    <option value="passport"> Passport </option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="notice   bg-light-dark rounded border-dark border border-dashed p-6 text-center mb-12 change_photo_wrapper">
                                            <div  class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column change_photo_wrapper">
                                                <div class="col-lg-12 mb-5">
                                                    <a href="{{ $user->getFirstMediaUrl('kyc_document_collection', 'thumb') }}"
                                                        download title="Download Document File">
                                                        <i class="la la-download"></i>
                                                    </a>
                                                </div>
                                                <button type="button"
                                                    class="kyc_document_upload_btn btn btn-sm btn-dark-primary btn-square mb-1">
                                                    <i class="fa fa-upload"></i>
                                                    Upload Document
                                                </button>
                                                <input type="file" name="kyc_document"
                                                    class="new_profile_photo  d-none change_photo"
                                                    data-type="project_logo">
                                            </div>

                                        </div>

                                    </div> 
                                    @if($user->hasRole('investor'))
                                        <div class="card-body bg-danger"
                                            style=" color:#fff!important;border-radius:5px;font-size:15px;  ">
                                            <div class="card-title mt-6 mb-3">
                                                <h2>Important Note </h2>
                                            </div>
                                            <div class="form-group row">
                                                <div class="d-flex align-items-center mb-3">
                                                    <label class="form-check form-check-custom form-check-solid me-10">
                                                        <input class="form-check-input h-15px w-15px" type="checkbox"
                                                            required name="e_sign_agreement"
                                                            @if ($user->trustSetting and $user->trustSetting->e_sign_agreement == 1) checked="checked" @endif>
                                                        <span class="form-check-label fw-semibold" style="color:#ffffff">
                                                            I have read the <a
                                                                href="https://fortresstrustcompany.com/disclosures-e-sign
                                                                "
                                                                target="_blank"> E-Sign Agreement </a> and understand I
                                                            will not receive documents in the mail.
                                                        </span>
                                                    </label>
                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <label class="form-check form-check-custom form-check-solid me-10">
                                                        <input class="form-check-input h-15px w-15px" type="checkbox"
                                                            required name="disclosures"
                                                            @if ($user->trustSetting and $user->trustSetting->disclosures == 1) checked="checked" @endif>
                                                        <span class="form-check-label fw-semibold" style="color:#ffffff">
                                                            I have read and agree to the following: </span>
                                                    </label>

                                                </div>
                                                <div class="d-flex align-items-center mt-4">
                                                    <ul>
                                                        <li>
                                                            <a href="" target="_blank"> <b>“Chainraise” Terms of
                                                                    Service and Privacy Policy</b> </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://fortresstrustcompany.com/disclosures-consumer"
                                                                target="_blank"> <b>Fortress Trust Consumer Disclosures</b>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://fortress.xyz/terms-of-use" target="_blank">
                                                                <b> Fortress Trust Privacy Policy and Terms and Conditions
                                                                </b> </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ asset('assets/documents/forme-fortress-fevocable-trust.docx') }}"
                                                                download="Forme-Fortress-Revocable-Trust.docx"> <b>Fortress
                                                                    Trust Account Agreement</b> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="align-items-center mt-4">
                                                    <p>
                                                        <b>
                                                            USA Patriot Act Disclosure - The below disclosure should be
                                                            displayed before CIP information is collected. In our case, name
                                                            and phone number.
                                                        </b>
                                                    </p>
                                                    <p>
                                                        <b>
                                                            "IMPORTANT INFORMATION ABOUT PROCEDURES FOR OPENING A NEW
                                                            ACCOUNT: To help the government fight the funding of terrorism
                                                            and money laundering activities, federal law requires all
                                                            financial institutions to obtain, verify, and record information
                                                            that identifies each person who opens an Account. What this
                                                            means for you: When you open an Account, we will ask for your
                                                            name, address, date of birth, and other information that will
                                                            allow us to identify you. We may also ask to see a copy of your
                                                            driver's license or other identifying documents."
                                                        </b>
                                                    </p>
                                                </div>

                                            </div>

                                        </div>
                                    @endif
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
                                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                                        name="bypass_kyc_checkup"
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
                                            <button type="submit" class="btn-sm btn btn-primary mr-2 no-radius btn-dark">
                                                Update Account </button>
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
                            <form class="form" method="post" action="{{ route('user.invesment.update') }}"
                                enctype="multipart/form-data"> @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <input type="hidden" name="type"
                                    value="{{ $user->roles()->pluck('name')->implode(' ') }}">
                                @if ($user->hasRole('investor'))
                                    <div class="card-body">
                                        <div class="form-group row mb-10">
                                            <div class="col-lg-6">
                                                <label>Net Worth <span class="text-danger">*</span></label>
                                                <select class="form-select" required data-control="select2"
                                                    data-placeholder="Net Worth*" name="net_worth">
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->net_worth == '0-100000') selected @endif
                                                        value="0-100000">Less than $100,000</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->net_worth == '100001-50000') selected @endif
                                                        value="100001-50000"> $100,001 - $250,000</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->net_worth == '250001-500000') selected @endif
                                                        value="250001-500000"> $250,001 - $500,000</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->net_worth == '500001-1000000') selected @endif
                                                        value="500001-1000000"> $500,001 - $1,000,000</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->net_worth == '1000001-5000000') selected @endif
                                                        value="1000001-5000000"> $1,000,001 - $5,000,000</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->net_worth == '5000000') selected @endif
                                                        value="5000000">more than $5,000,000</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Annual Net Income</label>
                                                <input type="text" class="form-control" name="annual_net_income"
                                                    @if ($user->invesmentProfie && $user->invesmentProfie->annual_net_income) value="{{ $user->invesmentProfie->annual_net_income }}" @endif
                                                    placeholder="Annual Net Income">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-10">
                                            <div class="col-lg-6">
                                                <label>Highest Education <span class="text-danger">*</span></label>
                                                <select class="form-select" required data-control="select2"
                                                    data-placeholder="Highest Education*" name="highest_education">
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->highest_education == 'Less than High School') selected @endif
                                                        value="Less than High School">Less than High School</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->highest_education == 'High School Graduate') selected @endif
                                                        value="High School Graduate">High School Graduate</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->highest_education == 'Some College') selected @endif
                                                        value="Some College">Some College</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->highest_education == "Associate's Degree") selected @endif
                                                        value="Associate's Degree">Associate's Degree</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->highest_education == "Bachelor's Degree") selected @endif
                                                        value="Bachelor's Degree">Bachelor's Degree</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->highest_education == "Master's Degree") selected @endif
                                                        value="Master's Degree">Master's Degree</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->highest_education == 'doctorate') selected @endif
                                                        value="doctorate">Doctorate</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->highest_education == 'not set') selected @endif
                                                        value="not set">(not set)</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Risk Tolerance <span class="text-danger">*</span></label>
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Risk Tolerance*" name="risk_tolerance">
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->risk_tolerance == 'conservative') selected @endif
                                                        value="conservative">Conservative</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->risk_tolerance == 'moderate') selected @endif
                                                        value="moderate">Moderate</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->risk_tolerance == 'agresive') selected @endif
                                                        value="agresive">Aggresive</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->risk_tolerance == '(not set)') selected @endif
                                                        value="(not set)">(not set)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-10">
                                            <div class="col-lg-6">
                                                <label>Investment Experience <span class="text-danger">*</span></label>
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Investment Experience*"
                                                    name="investment_experience">
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->investment_experience == 'none') selected @endif
                                                        value="none">
                                                        None</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->investment_experience == 'limited') selected @endif
                                                        value="limited">Limited</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->investment_experience == 'good') selected @endif
                                                        value="good">
                                                        Good</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->investment_experience == 'extensive') selected @endif
                                                        value="extensive">Extensive</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->investment_experience == 'not set') selected @endif
                                                        value="not set">(not set)</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Age <span class="text-danger">*</span></label>
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Age*" name="age">
                                                    <option></option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->age == '29') selected @endif
                                                        value="29">
                                                        Under 30</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->age == '30-39') selected @endif
                                                        value="30-39">
                                                        30 - 39</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->age == '40-49') selected @endif
                                                        value="40-49">
                                                        40 - 49</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->age == '50-59') selected @endif
                                                        value="50-59">
                                                        50 - 59</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->age == '60-69') selected @endif
                                                        value="60-69">
                                                        60 - 69</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->age == '70-79') selected @endif
                                                        value="70-79">
                                                        70 - 79</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->age == '80') selected @endif
                                                        value="80">
                                                        Over 79</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->age == 'not set') selected @endif
                                                        value="">
                                                        (not set)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-10">
                                            <div class="col-lg-6">
                                                <label>Gender <span class="text-danger">*</span></label>
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Gender*" name="gender">
                                                    <option></option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->gender == 'male') selected @endif
                                                        value="male">
                                                        Male</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->gender == 'female') selected @endif
                                                        value="female">
                                                        Female</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->gender == 'other') selected @endif
                                                        value="other">
                                                        Other</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->gender == 'not set') selected @endif
                                                        value="not set">(not set)</option>
                                                </select>
                                            </div>

                                          
                                        </div>

                                    </div>
                                @endif
                                
                                {{-- Issuer Details  --}}
                                @if ($user->hasRole('issuer'))
                                    <div class="card-body">
                                        <div class="form-group row mb-10">
                                            <div class="col-lg-6">
                                                <label>Assets Under Managment </label>
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Assets Under Managment"
                                                    name="assets_under_management">
                                                    <option value="" disabled selected> Assets Under Managment
                                                    </option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->assets_under_management == '0-50000000') selected @endif
                                                        value="0-50000000"> Less than $50,000,000 </option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->assets_under_management == '50000001-100000000') selected @endif
                                                        value="50000001-100000000"> $50,000,001 - $100,000,000 </option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->assets_under_management == '250000001-500000000') selected @endif
                                                        value="250000001-500000000"> $250,000,001 - $500,000,000 </option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->assets_under_management == '500000001-1000000000') selected @endif
                                                        value="500000001-1000000000"> $500,000,001 - $1,000,000,000
                                                    </option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->assets_under_management == '1000000000') selected @endif
                                                        value="1000000000"> more than $1,000,000,000</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->assets_under_management == '5000000') selected @endif
                                                        value="5000000">more than $5,000,000</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label> Investment Style <span class="text-danger">*</span></label>
                                                <select class="form-select" data-control="select2"
                                                    data-placeholder="Investment Style" name="investment_style">
                                                    <option value="" disabled selected> Investment Style </option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->investment_style == 'conservative') selected @endif
                                                        value="conservative">Conservative</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->investment_style == 'moderate') selected @endif
                                                        value="moderate">Moderate</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->investment_style == 'agresive') selected @endif
                                                        value="agresive">Aggresive</option>
                                                    <option @if ($user->invesmentProfie && $user->invesmentProfie->investment_style == '(not set)') selected @endif
                                                        value="(not set)">(not set)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <div class="col-lg-6 mb-10">
                                                <label>Finra CRD # </label>
                                                <input type="text" name="finra_crd"
                                                    @if ($user->invesmentProfie) value="{{ $user->invesmentProfie->finra_crd }}" @endif
                                                    class="form-control" placeholder="Finra CRD">
                                            </div>
                                            <div class="col-lg-6 mb-10">
                                                <label>Website URL </label>
                                                <input type="text" name="website_url"
                                                    @if ($user->invesmentProfie) value="{{ $user->invesmentProfie->website }}" @endif
                                                    class="form-control" placeholder="Website URL">
                                            </div>

                                            <div class="col-lg-6 mb-10">
                                                <label>LinkedIn URL<span class="text-danger">*</span></label>
                                                <input type="text" name="linkedin_url"
                                                    @if ($user->invesmentProfie) value="{{ $user->invesmentProfie->linkedIn }}" @endif
                                                    class="form-control" placeholder="LinkedIn URL">
                                            </div>
                                        </div>
                                    </div>
                                @endif  
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                </div> 
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <button type="submit" class="btn-sm btn btn-primary">
                                                Update Profile
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
                <div class="tab-pane fade" id="kt_users_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <div class="card-body pt-0 pb-5">
                            <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="table-responsive">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                        id="customers_table">
                                        <thead>
                                            <!--begin::Table row-->
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

                                                <th class="" tabindex="0" aria-controls="kt_customers_table"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer Name: activate to sort column ascending"> Username
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
                                                    span="1" colspan="1"
                                                    aria-label="Email: activate to sort column ascending">Notifications
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
                                        @foreach ($childs as $child)
                                            <tr class="odd">
                                                <td>
                                                    {{ $child->email }}
                                                </td>
                                                <td>
                                                    {{ $child->name }}
                                                </td>
                                                <td>
                                                    {{ $child->userDetail->last_name }}
                                                </td>
                                                <td>
                                                    {{ Str::substr($child->phone, 0, 4) }}***
                                                </td>
                                                <td>
                                                    @if ($child->status == 'active')
                                                        <label class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px" type="checkbox"
                                                                name="status" value="true" checked="checked">
                                                        </label>
                                                    @else
                                                        <label class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px" type="checkbox"
                                                                name="status" value="false">
                                                        </label>
                                                    @endif

                                                </td>
                                                <td>
                                                    @if ($child->is_primary == true)
                                                        <label class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px" type="checkbox"
                                                                name="status" value="true" checked="checked">
                                                        </label>
                                                    @else
                                                        <label class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px" type="checkbox"
                                                                name="status" value="false">
                                                        </label>
                                                    @endif

                                                </td>
                                                <td class="">
                                                    @if ($child->email_verified_at == null)
                                                        <label class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px" type="checkbox"
                                                                name="email_verified" value="true">
                                                            <span class="form-check-label fw-semibold">Resend</span>
                                                        </label>
                                                    @else
                                                        <label class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px" type="checkbox"
                                                                name="email_verified" value="false">
                                                        </label>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)">Manage</a>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary btn-sm">Create
                                                        Invite
                                                    </button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-default getUserDetail"
                                                        data-bs-toggle="modal" data-bs-target="#edit_new_user"
                                                        data-id="{{ $child->id }}">
                                                        <i class="fas fa-pen fs-3"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--end::Card body-->
                        @if ($user->hasRole('issuer'))
                            <div class="card-footer">
                                <div class="d-flex flex-row justify-content-between">
                                    <div class="">
                                        <button type="submit" class="btn-sm btn btn-primary mr-2">
                                            Add Existing User
                                        </button>
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn-sm btn btn-primary mr-2" data-bs-toggle="modal"
                                            data-bs-target="#add_new_user">
                                            Add New User
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!--end::Card-->
                </div>
                <div class="tab-pane fade" id="kt_accreditation_tab" role="tabpanel">
                    <!--begin::Card-->
                    <div class="card pt-4 mb-6 mb-xl-9">
                        <div class="card-header border-0">
                            <div class="card-title">
                                <h2>Accreditation Status</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <form class="form" method="post" action="{{ route('accreditation.update') }}">
                                @csrf
                                <div class="form-group row">
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                    @foreach ($accreditations as $accreditation)
                                        <div class="col-lg-4 mb-10">
                                            <!--begin::Card-->
                                            <div class="card card-flush card-stretch card-bordered  py-4 h-250px">
                                                <div class="card-header justify-content-center">
                                                    <div class="card-title">
                                                        <div>
                                                            <span class="">
                                                                <i class="{{ $accreditation->icon }} fs-3x"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-2 text-center">
                                                    <span class="fs-4"> {{ $accreditation->title }} </span><br>
                                                    <span class="fs-4 text-success">
                                                        @if ($accreditation->amount != null)
                                                            Above ${{ number_format($accreditation->amount) }}
                                                        @endif
                                                    </span><br>
                                                    <span> {{ $accreditation->years }} </span>
                                                </div>
                                                <div
                                                    class="form-check form-check-custom form-check-solid justify-content-center">
                                                    <input class="form-check-input" type="radio"
                                                        value="{{ $accreditation->id }}" name="accreditation" required
                                                        @if ($user->accreditation and $user->accreditation->id == $accreditation->id) checked @endif />
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </div>

                                            <!--end::Card-->
                                        </div>
                                    @endforeach
                                </div>
                                <div class="card-footer text-center">
                                    <div class="d-flex flex-row justify-content-center">
                                        <div class="">
                                            <button type="submit" class="btn-sm btn btn-primary mr-2">
                                                UPDATE ACCREDATION STATUS
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
                                        data-bs-target="#modal-addFolder">
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
                                    @if ($user->hasRole('investor'))
                                        <button type="button" class="btn btn-dark btn-sm no-radius e_sign"
                                            data-bs-toggle="modal" data-bs-target="#modal_e_sign">
                                            <i class="fas fa-pen"></i>
                                            Request E-Sign
                                        </button>
                                    @endif
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

                                                    @foreach ($folders as $folder)
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
                                                                    <span
                                                                        class="svg-icon svg-icon-2x svg-icon-primary me-4">
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
                                                                    <a href="#"
                                                                        class="text-gray-800 text-hover-primary ">
                                                                        {{ $folder->name }} </a>
                                                                    &nbsp;&nbsp;
                                                                    <i class="la la-plus uploadFIle"
                                                                        title="Add Document" data-bs-toggle="modal"
                                                                        data-id="{{ $folder->id }}"
                                                                        data-bs-target="#modal-addFile"> </i>
                                                                    &nbsp;&nbsp;
                                                                    <i class="la la-eye viewDocuments text-primary"
                                                                        title="View Document" data-bs-toggle="modal"
                                                                        data-id="{{ $folder->id }}"
                                                                        data-bs-target="#modal-viewDocument"> </i>

                                                                </div>
                                                            </td>
                                                            <!--end::Name=-->
                                                            <!--begin::Size-->
                                                            <td>
                                                                0
                                                            </td>
                                                            <!--end::Size-->
                                                            <!--begin::Last modified-->
                                                            <td data-order="Invalid date">
                                                                {{ $folder->updated_at->diffForHumans() }}
                                                            </td>
                                                            <!--end::Last modified-->
                                                            <!--begin::Actions-->

                                                            <!--end::Actions-->
                                                        </tr>
                                                    @endforeach


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
                <div class="tab-pane fade" id="kt_engagement_tab" role="tabpanel">

                    <div class="col-lg-3 ">
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-200px mb-5 mb-xl-10"
                            style="background-color: #F1416C;background-image:url({{ asset('assets/media/patterns/vector-1.png') }})">
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
                        <div class="card-header card-header-stretch">
                            <!--begin::Title-->
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
                                                        <div><span class="badge badge-light-primary">5 Days Ago</span>
                                                        </div>
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
    @include('user.partials.index')

@endsection
@section('page_js')

    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script></script> 
    <script>
        $('.information_fields').hide();
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


        $('.checkbox').click(function() {
            if ($('.identification_information').is(':checked')) {
                $('.information_fields').show('slow');
            } else {
                $('.information_fields').hide('slow');
            }
        });
        $('.getUserDetail').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: "{{ route('user.child.details') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    if (response.status == true) {
                        var data = response.data;
                    } else {
                        toastr.error('Some system error', "Error");
                    }
                    $('#user_id').val(data.id);
                    $('#first_name').val(data.name);
                    $('#last_name').val(data.user_detail.last_name);
                    $('#email').val(data.email);
                    $('#phone_number').val(data.phone);
                    $('#user_title').val(data.user_detail.title);
                    $('#birth_date').val(data.user_detail.dob);
                    if (data.invesment_profie) {
                        $('#linkedIn_url').val(data.invesment_profie.linkedIn);
                    }
                    $('#address').val(data.user_detail.address);
                    $('#suite_unit').val(data.user_detail.suit);
                    $('#city').val(data.user_detail.city);
                    $('#state_region').val(data.user_detail.state);
                    $('#zipcode').val(data.user_detail.zip);
                    if (data.identity_verification) {
                        $('#social_security').val(data.identity_verification.social_security);
                        $('#nationality').val(data.identity_verification.nationality);
                        $('#country_residence').val(data.identity_verification.country_residence);
                    }
                    if (response.photo != '') {
                        $('.profilePhoto').css('background-image', 'url(' + response.photo + ')');
                    } else {
                        $('.profilePhoto').css('background-image',
                            'url(http://127.0.0.1:8000/assets/media/svg/avatars/blank.svg)');
                    }


                    // $('#zip_code').val(data.user_detail.zip);
                    // $('#zip_code').val(data.user_detail.zip);
                    // $('#zip_code').val(data.user_detail.zip);
                    console.log(response);
                },
            });


        });
    </script>

    <script>
        $('.uploadFIle').click(function() {
            var id = $(this).data('id');
            $('#folder_id').val(id);
        });
        $('.deleteUser').click(function() {
            var id = $('#user_id').val();
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
                    $.ajax({
                        url: "{{ route('user.child.delete') }}",
                        method: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            if (response.status == true) {

                                toastr.success("User has been deleted", "Success");
                                location.reload();
                                //$( "#kt_customers_table" ).load( "your-current-page.html #mytable" );
                            } else {
                                toastr.error("Error while deleting user", "Error");
                            }
                        }
                    });
                }
            });
        });
        let input = document.getElementById('upload_file');
        input.addEventListener("change", (event) => {
            let image_file = event.target.files[0]
            let name = image_file.name
            $('#file_name').val(name)
            console.log(name);
        });
        $('.viewDocuments').click(function() {
            var folder_id = $(this).data('id');
            $.ajax({
                url: "{{ route('folder.get.files') }}",
                method: 'GET',
                data: {
                    folder_id: folder_id
                },
                success: function(response) {
                    var listItem = '';
                    if (response.status == true) {

                        $(response.data).each(function(index, value) {
                            listItem +=

                                `  <div class="col-lg-6 mb-10">
                            <div class="d-flex flex-center flex-column py-5" style="border:1px solid #000" >
                                <!--begin::Avatar-->
                                <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3"> ` + value
                                .name + ` </a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="mb-9">
                                    <!--begin::Badge-->
                                    <div class="badge badge-lg badge-light-danger d-inline">REQUIRES SIGNATURE</div>
                                    <!--begin::Badge-->
                                </div>
                                <div class="d-flex flex-wrap flex-center">
                                    <!--begin::Stats-->
                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                        <div class="fs-4 fw-bold text-gray-700">
                                            <i class="text-danger la la-trash"></i>
                                        </div>
                                    </div>

                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                        <div class="fs-4 fw-bold text-gray-700">
                                            <i class="text-warning la la-history"></i>
                                        </div>
                                    </div>

                                    <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                        <div class="fs-4 fw-bold text-gray-700">
                                            <i class="text-info la la-download"></i>
                                        </div>
                                    </div>

                                </div>
                                <p class='text-center'>
                                    Signed by McKall Cameron (mckall24@gmail.com). Awaiting a signature from you.

                                </p>
                                <!--end::Info-->
                            </div>
                        </div>


                        `;
                        });
                    }

                    $('#all_documents').html(listItem);

                },
            });
        });
        @if ($user->identityVerification)
            $('.nationality').val('{{ $user->identityVerification->nationality }}')
        @endif
    </script>
    <script>
        $('.kyc_document_upload_btn').click(function() {
            var imgBtnWrapper = $(this).closest('.change_photo_wrapper');
            imgBtnWrapper.find('.change_photo').click();
        });
        $('.check_kyc').click(function() {
            var id = $(this).data('id');
            Swal.fire({
                title: "Are you sure to to check KYC status ?",
                text: "",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, check KYC status!",
                customClass: {
                    confirmButton: "btn-danger"
                }
            }).then(function(result) {
                if (result.value) {
                    $('.loader_img').removeClass('d-none');
                    $('.check_kyc').addClass('d-none');
                    $.ajax({
                        url: "{{ route('user.kyc.check') }}",
                        method: 'POST',
                        data: {
                            id: id
                        },
                        success: function(response) {
                            $('.kyc_wrapper').load(' .kyc_wrapper');

                            if (response.success == false) {

                                if (response.status == 400) {
    if (response.errors && response.errors.length > 0) {
        // Check for specific validation errors
        if (response.errors[1] && response.errors[1].Phone) {
            // Display validation error for Phone field
            console.log(response.errors[1].Phone[0]);
            toastr.error(response.errors[1].Phone[0], "Validation Error");
        } else {
            // Display other validation errors
            jQuery.each(response.errors, function(index, item) {
                if (typeof item === 'object') {
                    jQuery.each(item, function(key, value) {
                        console.log(key + ": " + value);
                        toastr.error(value, "Validation Error");
                    });
                }
            });
        }
    } else {
        // Display generic error message
        console.log(response.errors[0]);
        toastr.error(response.errors[0], "Error");
    }
}




                                if (typeof response.errors !== 'undefined' && response
                                    .errors !== null) {
                                    jQuery.each(response.errors, function(index, item) {
                                        toastr.error(item, "Error");
                                    });
                                }
                            }
                            if (response.success == true) {
                                toastr.success('Verification Has Been Completed', "Success");
                                $('.kyc_buttons').load(' .kyc_buttons');
                            }

                            $('.loader_img').addClass('d-none');
                            $('.check_kyc').removeClass('d-none');
                        },
                        error: function(xhr, status, error) {
                            toastr.error(error, "Error");
                            $('.loader_img').addClass('d-none');
                            $('.check_kyc').removeClass('d-none');
                        }

                    });
                }
            });
        });

        $('body').on('click', '.re_run_kyc', function() {
            $('.loader_img_for_re_run_kyc').removeClass('d-none');
            $('.re_run_kyc').addClass('d-none');
            var id = $(this).data('id');
            $.ajax({
                url: "{{ route('user.re.run.kyc.level') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    $('.loader_img_for_re_run_kyc').addClass('d-none');
                    $('.re_run_kyc').removeClass('d-none');
                    $('.kyc_wrapper').load(' .kyc_wrapper');
                    $('.kyc_doc_wrapper').load(' .kyc_doc_wrapper');
                    $('.check_kyc_leavel').load(' .check_kyc_leavel');
                    $('.kyc_level_wrapper').load(' .kyc_level_wrapper');
                    if (response.status == 200) {
                        toastr.success('KYC Status Has Been Updated', "Success");
                    }
                    if (response.status == false) {
                        toastr.error(response.message, "Error");
                    }

                }
            });
        });


        $('body').on('click', '.update_document', function() {
            var id = $(this).data('id');
            //$('.loader_img_for_update_document').removeClass('d-none');
            //$('.update_document').addClass('d-none'); 
            $.ajax({
                url: "{{ route('user.kyc.document.update') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(response) {

                    //$('.loader_img_for_update_document').addClass('d-none');
                    //$('.update_document').removeClass('d-none');
                    console.log(response);
                    //$('.update_document_wrapper').load(' .update_document_wrapper');
                    if (response.status == 201) {
                        toastr.success('Document Has Been Updated', "Success");
                    } else {
                        toastr.error('Error while updating status', "Error");
                    }
                }
            });
        });
        $('body').on('click', '.e_sign', function() {
            var id = 1;
            $.ajax({
                url: "{{ route('user.esign.template') }}",
                method: 'GET',
                data: {
                    id: id
                },
                success: function(response) {
                    $('select[name="template"]').html('');
                    jQuery.each(response.data.data, function(index, item) {
                        $('select[name="template"]').append(` <option value="` + item
                            .template_id + `"> ` + item.template_name + ` </option>`);
                    });
                }
            });
        });



        const passwordInput = document.getElementById("primary_contact_social_security");
        const toggleButton = document.getElementById("show_ssn_field");

        if (toggleButton && passwordInput) {
            toggleButton.addEventListener("click", () => { 
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    passwordInput.value = "";
                    passwordInput.removeAttribute('readonly');
                    $('#primary_contact_social_security').attr('required', true);
                    Inputmask({
                        "mask": "999-99-9999"
                    }).mask("#primary_contact_social_security");

                }  
            });
        }

        @if ($user->cc)
            $('.cc').val('{{ $user->cc }}')
        @endif
        @if ($user->user_type)
            $('.user_type').val('{{ $user->user_type }}')
        @endif

        @if ($user->identityVerification)
            $('.tax_entity_type').val('{{ $user->identityVerification->tax_entity_type }}')
        @endif
        @if ($user->identityVerification)
            $('.country_residence').val('{{ $user->identityVerification->country_residence }}')
        @endif

        @if ($user->identityVerification)
            $('.doc_type').val('{{ $user->identityVerification->doc_type }}')
        @endif

        $('body').on('click', '.update_aml_status', function() {
            var userId = $(this).data('id');
            var url = "{{ route('user.update.kyc.check', ['id' => ':userId']) }}";
            url = url.replace(':userId', userId);
            $.ajax({
                url: url,
                method: 'GET',
                success: function(response) {
                    if (response.status == true) {
                        $('.update_aml_status').html('KYC / AML Check ' + response.data);
                        toastr.success('KYC / AML Status Has Been Updated', "Success");
                    }
                }
            });
        });




        Inputmask({
            "mask": "-999-999-9999"
        }).mask("#phone_number"); 

        Inputmask({
            "mask": "99-9999999"
        }).mask("#ein_number");
        Inputmask({
                        "mask": "***-**-***"
        }).mask("#primary_contact_social_security");
    </script>
@endsection
