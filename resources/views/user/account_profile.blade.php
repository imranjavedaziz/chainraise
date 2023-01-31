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
                                        @if($user->userDetail){{ $user->userDetail->last_name }}@endif
                                        - <small class="text-info">
                                            {{ ucfirst($user->roles()->pluck('name')->implode(' ')) }}</small>
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
                            <div class="d-flex flex-row text-center">
                                 
                                <div class="m-lg-3">
                                    <b>0</b> <br>
                                    Total Investments
                                </div>
                                <div class="m-lg-3">
                                    <b>$0.00</b> <br>
                                    Total Funds Committed
                                </div>
                                <div class="m-lg-3">
                                    <b>$0.00</b> <br>
                                    Total Funds Contributed
                                </div>
                            </div>
                            
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
                
             
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_payment_tab">Payment Method</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                        href="#kt_documents_tab">Documents</a>
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
                                                            @if($user->userDetail) value="{{ $user->userDetail->middle_name }}" @endif />
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Last Name: <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Last Name" name="last_name"
                                                            @if($user->userDetail) value="{{ $user->userDetail->last_name }}" @endif/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <label>Title:</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Title" name="title"
                                                                @if($user->userDetail) value="{{ $user->userDetail->title }}" @endif/>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Phone Number: <span class="text-danger">*</span> </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="(201) 555-0123" name="phone"
                                                                value="{{ $user->phone }}" />

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Date of Birth <span class="text-danger">*</span> </label>
                                                        <div class="input-group" id="">
                                                            <input type="date" class="form-control"
                                                                placeholder="Date of Birth*" required name="dob"
                                                                @if($user->userDetail) value="{{ $user->userDetail->dob }}" @endif>

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
                                    <div class="form-group row mb-10">


                                    </div>

                                    <div class="form-group row mb-10">
                                        
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
                                                    @if($user->userDetail) value="{{ $user->userDetail->entity_name }}" @endif required>
                                            </div>
                                            <div class="clear-fix"></div>
                                         
                                        <div class="col-lg-12 mb-3">
                                            <h6>
                                                Address
                                            </h6>
                                        </div>


                                        {{-- End Issuer Details --}}


                                        <div class="col-lg-6">
                                            <label>Address <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="address"
                                            @if($user->userDetail) value="{{ $user->userDetail->address }}" @endif  placeholder="Street Address*"
                                                required>
                                        </div>

                                        <div class="col-lg-6">
                                            <label> Suit / Unit </label>
                                            <input type="text" class="form-control" name="suit"
                                            @if($user->userDetail)   value="{{ $user->userDetail->suit }}" @endif placeholder="Suit / Unit">
                                        </div>
                                    </div>




                                    <div class="form-group row mb-10">
                                        <div class="col-lg-4">
                                            <label>City <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="city"
                                              @if($user->userDetail)  value="{{ $user->userDetail->city }}" @endif placeholder="City*" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <label>State / Region <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="state"
                                              @if($user->userDetail)  value="{{ $user->userDetail->state }}" @endif placeholder="State / Region*"
                                                required>
                                        </div>

                                        <div class="col-lg-4">
                                            <label>Zip / Postal Code <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" name="zip" id="zip_code"
                                              @if($user->userDetail)  value="{{ $user->userDetail->zip }}" @endif placeholder="Zip / Postal Code*"
                                                required>
                                        </div>
                                    </div>

                                   
                                        <div class="form-group row mb-10">
                                            <div class="col-lg-6">
                                                <label>State/Region of Legal Formation <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" class="form-control" name="legal_formation"
                                                    placeholder="State/Region of Legal Formation*"
                                                    @if($user->userDetail) value="{{ $user->userDetail->legal_formation }}" @endif required>
                                            </div>

                                            <div class="col-lg-6">
                                                <label>Date of Incorporation <span class="text-danger">*</span> </label>
                                                <input type="date" class="form-control" name="date_incorporation"
                                                    placeholder="Date of Incorporation*"
                                                    @if($user->userDetail) value="{{ $user->userDetail->date_incorporation }}" @endif required>
                                            </div>
                                        </div>
                                   

                                    
                                    <div class="card-title mt-6 mb-3">
                                        <h2>Identity Verification</h2>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="form-group mb-10 col-lg-4">
                                            <label> Social Security # <small>(US Investors Only)</small>
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"
                                                placeholder="Primary Contact Social Security" required
                                                name="primary_contact_social_security"
                                                @if ($user->identityVerification) value="{{ $user->identityVerification->primary_contact_social_security }}" @endif />
                                        </div>

                                            <div class="form-group mb-10 col-lg-4">
                                                <label> Tax Entity Type <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" placeholder="Tax Entity Type"
                                                    required name="tax_entity_type"
                                                    @if ($user->identityVerification) value="{{ $user->identityVerification->tax_entity_type }}" @endif />
                                            </div>
                                            <div class="form-group mb-10 col-lg-4">
                                                <label> Tax Identification # <span class="text-danger">*</span> </label>
                                                <input type="number" class="form-control"
                                                    placeholder="Tax Identification" required name="tax_identification"
                                                    @if ($user->identityVerification) value="{{ $user->identityVerification->tax_identification }}" @endif />
                                            </div>
                                        
                                           
                                            
                                       
                                        <div class="row">
                                            
                                        </div>
                                        
                                    </div>

                                    <div class="form-group row mb-10">
                                        <div class="col-lg-4">
                                            <label>Nationality <span class="text-danger">*</span></label>
                                            <select class="form-select nationality" required data-control="select2"
                                                name="nationality" data-placeholder="Select an option"
                                                data-live-search="true">
                                                @include('user.country')
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Country of Residence <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="country_residence"
                                                @if ($user->identityVerification) value="{{ $user->identityVerification->country_residence }}" @endif>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Identification Type <span class="text-danger">*</span></label>
                                            <select class="form-control">
                                                <option value=""> Passport  </option>
                                                <option value="">  Driver's License </option>
                                                <option value="">  National Identity  </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div
                                            class="notice   bg-light-dark rounded border-dark border border-dashed p-6 text-center mb-12 change_photo_wrapper">
                                            <div
                                                class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column change_photo_wrapper">
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
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12 text-center ">
                                            
                                            <button type="submit" class="btn-sm btn mr-2 no-radius btn-dark">
                                                 Update Account
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
                <!--end:::Profile Tab pane-->

                <!--begin:::Users Tab pane-->
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
                            if (response.status) {
                                if (response.status == 200) {
                                    toastr.success(
                                        'Verification has been competed checking Updating KYC Level',  "Success");
                                } else if (response.status == 201) {
                                    toastr.success(
                                        'Verification has been competed checking Updating KYC Level',
                                        "Success");
                                } else if (response.status == 400) {
                                    jQuery.each(response.data.errors, function(index, item) {
                                        console.log(item);
                                        toastr.error(item, "Error");
                                    });
                                    // toastr.error(response.data.title, "Error");
                                } else if (response.status == 401) {
                                    toastr.error('Unauthorized Access Denied', "Error");
                                } else if (response.status == 404) {
                                    toastr.error(response.data.title, "Error");
                                }
                                if (response.status == 409) {
                                    toastr.error(response.data.title, "Error");
                                }
                                if (response.status == 'document') {
                                    toastr.error('Please Upload Document First', "Error");
                                }
                                if (response.status == false) {
                                    toastr.error('Internal Server Error', "Error");
                                }
                                $('.loader_img').addClass('d-none');
                                $('.check_kyc').removeClass('d-none');
                            }
                        }
                    });
                }
            });
        });
        
        $('body').on('click','.re_run_kyc' , function() {
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
                        toastr.success('KYC Level Has Been Updated',  "Success");
                    }
                    if(response.status == false){
                        toastr.error(response.message,  "Error");
                    }

                }
            });
        });
        $('body').on('click','.update_document', function() {
            var id = $(this).data('id');
            $('.loader_img_for_document_upload').removeClass('d-none');
            $('.update_document').addClass('d-none');
            $.ajax({
                url: "{{ route('user.kyc.document.update') }}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function(response) {
                    
                    $('.loader_img_for_document_upload').addClass('d-none');
                    $('.update_document').removeClass('d-none');

                    $('.update_document_wrapper').load(' .update_document_wrapper');
                    if (response.status == 201) {
                        toastr.success('Document Has Been Updated',  "Success");
                    }else{
                        toastr.error('Error while updating status',  "Error");
                    }
                }
            });
        });

        
        
        
    </script>
    <script>
        jQuery(function(){
           jQuery('#kt_documents_tab').click();
        });
        </script>
@endsection
