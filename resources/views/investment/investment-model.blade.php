<div class="modal fade" id="kt_modal_top_up_wallet"   tabindex="-1"  aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2></h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div
                    class="btn btn-sm btn-icon btn-active-color-primary"
                    data-kt-modal-action-type="close"
                >
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <rect
                                opacity="0.5"
                                x="6"
                                y="17.3137"
                                width="16"
                                height="2"
                                rx="1"
                                transform="rotate(-45 6 17.3137)"
                                fill="currentColor"
                            />
                            <rect
                                x="7.41422"
                                y="6"
                                width="16"
                                height="2"
                                rx="1"
                                transform="rotate(45 7.41422 6)"
                                fill="currentColor"
                            />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <div
                    class="stepper stepper-links d-flex flex-column gap-5"
                    id="kt_modal_top_up_wallet_stepper"
                >
                    <!--begin::Nav-->
                    <div class="stepper-nav justify-content-center py-2">
                        <!--begin::Step 1-->
                        <div
                            class="stepper-item current"
                            data-kt-stepper-element="nav"
                        >
                            <h3 class="stepper-title">Select Account Type</h3>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Verify Identity</h3>
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Investment Limits</h3>
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Payment Method</h3>
                        </div>

                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Connect Bank</h3>
                        </div>

                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Sign Subscription Agreement and Token Grant
                            </h3>
                        </div>
                        <!--end::Step 4-->
                    </div>
                    <!--end::Nav-->
                    <!--begin::Form-->
                    <form class="mx-auto w-100 mw-900px pt-15 pb-10"  novalidate="novalidate" id="kt_modal_top_up_wallet_stepper_form">
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <div class="w-100"> 
                                <div class="pb-10 pb-lg-15"> 
                                    <h2  class="fw-bold d-flex align-items-center text-dark" >
                                        Select Account Type
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"  title="You will be charged the set amount from your selected payment option"
                                        ></i>
                                    </h2> 
                                    <div class="text-muted fw-semibold fs-6">
                                        What type of account are you investing as?
                                    </div> 
                                </div> 
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label  class="required fw-semibold fs-6 mb-5"  >Account Type</label>
                                    <!--end::Label-->
                                    <!--begin::Row-->
                                    <div  class="row row-cols-1 row-cols-md-2 g-5">
                                        <div class="col">
                                            <input
                                                type="radio"
                                                class="btn-check"
                                                name="account_type"
                                                value="individual"
                                                id="kt_radio_buttons_2_option_1"
                                                checked="checked"
                                            />
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100"
                                                for="kt_radio_buttons_2_option_1">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin010.svg-->
                                                <span  class="svg-icon svg-icon-3hx svg-icon-primary"  >
                                                    <svg  width="24"  height="24"  viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"  >
                                                        <path
                                                            opacity="0.3"
                                                            d="M12.5 22C11.9 22 11.5 21.6 11.5 21V3C11.5 2.4 11.9 2 12.5 2C13.1 2 13.5 2.4 13.5 3V21C13.5 21.6 13.1 22 12.5 22Z"
                                                            fill="currentColor"
                                                        />
                                                        <path
                                                            d="M17.8 14.7C17.8 15.5 17.6 16.3 17.2 16.9C16.8 17.6 16.2 18.1 15.3 18.4C14.5 18.8 13.5 19 12.4 19C11.1 19 10 18.7 9.10001 18.2C8.50001 17.8 8.00001 17.4 7.60001 16.7C7.20001 16.1 7 15.5 7 14.9C7 14.6 7.09999 14.3 7.29999 14C7.49999 13.8 7.80001 13.6 8.20001 13.6C8.50001 13.6 8.69999 13.7 8.89999 13.9C9.09999 14.1 9.29999 14.4 9.39999 14.7C9.59999 15.1 9.8 15.5 10 15.8C10.2 16.1 10.5 16.3 10.8 16.5C11.2 16.7 11.6 16.8 12.2 16.8C13 16.8 13.7 16.6 14.2 16.2C14.7 15.8 15 15.3 15 14.8C15 14.4 14.9 14 14.6 13.7C14.3 13.4 14 13.2 13.5 13.1C13.1 13 12.5 12.8 11.8 12.6C10.8 12.4 9.99999 12.1 9.39999 11.8C8.69999 11.5 8.19999 11.1 7.79999 10.6C7.39999 10.1 7.20001 9.39998 7.20001 8.59998C7.20001 7.89998 7.39999 7.19998 7.79999 6.59998C8.19999 5.99998 8.80001 5.60005 9.60001 5.30005C10.4 5.00005 11.3 4.80005 12.3 4.80005C13.1 4.80005 13.8 4.89998 14.5 5.09998C15.1 5.29998 15.6 5.60002 16 5.90002C16.4 6.20002 16.7 6.6 16.9 7C17.1 7.4 17.2 7.69998 17.2 8.09998C17.2 8.39998 17.1 8.7 16.9 9C16.7 9.3 16.4 9.40002 16 9.40002C15.7 9.40002 15.4 9.29995 15.3 9.19995C15.2 9.09995 15 8.80002 14.8 8.40002C14.6 7.90002 14.3 7.49995 13.9 7.19995C13.5 6.89995 13 6.80005 12.2 6.80005C11.5 6.80005 10.9 7.00005 10.5 7.30005C10.1 7.60005 9.79999 8.00002 9.79999 8.40002C9.79999 8.70002 9.9 8.89998 10 9.09998C10.1 9.29998 10.4 9.49998 10.6 9.59998C10.8 9.69998 11.1 9.90002 11.4 9.90002C11.7 10 12.1 10.1 12.7 10.3C13.5 10.5 14.2 10.7 14.8 10.9C15.4 11.1 15.9 11.4 16.4 11.7C16.8 12 17.2 12.4 17.4 12.9C17.6 13.4 17.8 14 17.8 14.7Z"
                                                            fill="currentColor"
                                                        />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <span class="d-block fw-semibold text-start"  >
                                                    <span   class="text-dark fw-bold d-block fs-3"  >Individual</span>
                                                    <span class="text-muted fw-semibold fs-6">
                                                        Individual investor
                                                        managing a single
                                                        account
                                                    </span>
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <input
                                                type="radio"
                                                class="btn-check"
                                                name="account_type"
                                                value="entity"
                                                id="kt_radio_buttons_2_option_2"
                                            />
                                            <label  class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100"
                                                for="kt_radio_buttons_2_option_2">
                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin009.svg-->
                                                <span  class="svg-icon svg-icon-3hx svg-icon-primary">
                                                    <svg  width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"  >
                                                        <path
                                                            opacity="0.3"
                                                            d="M15.8 11.4H6C5.4 11.4 5 11 5 10.4C5 9.80002 5.4 9.40002 6 9.40002H15.8C16.4 9.40002 16.8 9.80002 16.8 10.4C16.8 11 16.3 11.4 15.8 11.4ZM15.7 13.7999C15.7 13.1999 15.3 12.7999 14.7 12.7999H6C5.4 12.7999 5 13.1999 5 13.7999C5 14.3999 5.4 14.7999 6 14.7999H14.8C15.3 14.7999 15.7 14.2999 15.7 13.7999Z"
                                                            fill="currentColor"
                                                        />
                                                        <path
                                                            d="M18.8 15.5C18.9 15.7 19 15.9 19.1 16.1C19.2 16.7 18.7 17.2 18.4 17.6C17.9 18.1 17.3 18.4999 16.6 18.7999C15.9 19.0999 15 19.2999 14.1 19.2999C13.4 19.2999 12.7 19.2 12.1 19.1C11.5 19 11 18.7 10.5 18.5C10 18.2 9.60001 17.7999 9.20001 17.2999C8.80001 16.8999 8.49999 16.3999 8.29999 15.7999C8.09999 15.1999 7.80001 14.7 7.70001 14.1C7.60001 13.5 7.5 12.8 7.5 12.2C7.5 11.1 7.7 10.1 8 9.19995C8.3 8.29995 8.79999 7.60002 9.39999 6.90002C9.99999 6.30002 10.7 5.8 11.5 5.5C12.3 5.2 13.2 5 14.1 5C15.2 5 16.2 5.19995 17.1 5.69995C17.8 6.09995 18.7 6.6 18.8 7.5C18.8 7.9 18.6 8.29998 18.3 8.59998C18.2 8.69998 18.1 8.69993 18 8.79993C17.7 8.89993 17.4 8.79995 17.2 8.69995C16.7 8.49995 16.5 7.99995 16 7.69995C15.5 7.39995 14.9 7.19995 14.2 7.19995C13.1 7.19995 12.1 7.6 11.5 8.5C10.9 9.4 10.5 10.6 10.5 12.2C10.5 13.3 10.7 14.2 11 14.9C11.3 15.6 11.7 16.1 12.3 16.5C12.9 16.9 13.5 17 14.2 17C15 17 15.7 16.8 16.2 16.4C16.8 16 17.2 15.2 17.9 15.1C18 15 18.5 15.2 18.8 15.5Z"
                                                            fill="currentColor"
                                                        />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <span
                                                    class="d-block fw-semibold text-start"
                                                >
                                                    <span
                                                        class="text-dark fw-bold d-block fs-3"
                                                        >Entity</span
                                                    >
                                                    <span
                                                        class="text-muted fw-semibold fs-6"
                                                    >
                                                        Registered Investment
                                                        Advisors, Financial
                                                        Advisors, Family
                                                        Offices, Trusts, IRAs or
                                                        those investing on
                                                        behalf of an entity
                                                    </span>
                                                </span>
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div data-kt-stepper-element="content"> 
                            <div class="w-100"> 
                                <div class="pb-3 pb-lg-12">
                                    <h1 class="fw-bold text-dark">
                                        Verify Identity
                                    </h1> 
                                </div>
                                <div  class="row text-left" data-kt-modal-top-up-wallet-option="dollar">
                                    <div class="card-body">
                                        <div class="form-group row mb-10">
                                            <input  type="hidden" name="type"  value="investor"   /> 
                                            <div class="row">
                                                <div class="col-lg-10" style="text-align:left;">
                                                    <div class="row mb-10 text-left">
                                                        <div class="col-lg-4">
                                                            <label  >First Name:
                                                                <span class="text-danger"
                                                                    >*</span
                                                                ></label
                                                            >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="First Name*"
                                                                required=""
                                                                name="first_name"
                                                                value="{{ $user->name }}"
                                                            />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label
                                                                >Middle Name:
                                                                <span
                                                                    class="text-danger"
                                                                ></span
                                                            ></label>
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Middle Name"
                                                                name="middle_name"
                                                                value="{{ $user->userDetail->middle_name }}"
                                                            />
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label
                                                                >Last Name:
                                                                <span
                                                                    class="text-danger"
                                                                    >*</span
                                                                ></label
                                                            >
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                placeholder="Last Name"
                                                                name="last_name"
                                                                value="{{ $user->userDetail->last_name }}"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label
                                                                >Title:</label
                                                            >
                                                            <div
                                                                class="input-group"
                                                            >
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="Title"
                                                                    name="title"
                                                                    value="{{ $user->userDetail->title }}"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label
                                                                >Phone Number:
                                                                <span
                                                                    class="text-danger"
                                                                    >*</span
                                                                >
                                                            </label>
                                                            <div
                                                                class="input-group"
                                                            >
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    placeholder="(201) 555-0123"
                                                                    name="phone"
                                                                    value="{{ $user->phone }}"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label
                                                                >Date of Birth
                                                                <span
                                                                    class="text-danger"
                                                                    >*</span
                                                                >
                                                            </label>
                                                            <div
                                                                class="input-group"
                                                                id=""
                                                            >
                                                                <input
                                                                    type="date"
                                                                    class="form-control"
                                                                    placeholder="Date of Birth*"
                                                                    required=""
                                                                    name="dob"
                                                                    value="{{ $user->userDetail->dob }}"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 pt-6">
                                                    @if($user->getFirstMediaUrl('profile_photo', 'thumb'))
                                                         @php $photo_path =$user->getFirstMediaUrl('profile_photo', 'thumb')@endphp
                                                    @else
                                                        @php $photo_path = asset('assets/media/avatars/300-1.jpg')  @endphp
                                                    @endif

                                                    <div class="image-input image-input-outline image-input-empty"
                                                        data-kt-image-input="true"
                                                        style="background-image: url('{{ $photo_path }}');" >
                                                        <!--begin::Preview existing avatar-->
                                                        <div  class="image-input-wrapper w-150px h-150px"  style=" background-image: none;  "  ></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="change"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Change avatar"
                                                            data-kt-initialized="1"
                                                        >
                                                            <i
                                                                class="bi bi-pencil-fill fs-7"
                                                            ></i>
                                                            <!--begin::Inputs-->
                                                            <input
                                                                type="file"
                                                                name="profile_avatar"
                                                                accept=".png, .jpg, .jpeg"
                                                            />
                                                            <input
                                                                type="hidden"
                                                                name="avatar_remove"
                                                                value="1"
                                                            />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="cancel"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Cancel avatar"
                                                            data-kt-initialized="1"
                                                        >
                                                            <i
                                                                class="bi bi-x fs-2"
                                                            ></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="remove"
                                                            data-bs-toggle="tooltip"
                                                            aria-label="Remove avatar"
                                                            data-kt-initialized="1"
                                                        >
                                                            <i
                                                                class="bi bi-x fs-2"
                                                            ></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="form-group row mb-10" style="text-align: left">
                                            <div class="col-lg-12 mb-3">
                                                <h3>COMPANY INFORMATION</h3>
                                            </div>

                                            <div class="col-lg-6 mb-10">
                                                <label
                                                    >Entity Name
                                                    <span class="text-danger"
                                                        >*</span
                                                    >
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="entity_name"
                                                    placeholder="Entity Name"
                                                    value="{{ $user->userDetail->entity_name }}"

                                                    required=""
                                                />
                                            </div>
                                            <div class="clear-fix"></div>
                                            <div class="col-lg-12 mb-3">
                                                <h6>Address</h6>
                                            </div>

                                            <div class="col-lg-6">
                                                <label
                                                    >Address
                                                    <span class="text-danger"
                                                        >*</span
                                                    >
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="address"
                                                    value="Ad dolorem anim exce"
                                                    placeholder="{{ $user->userDetail->address }}"
                                                    required=""
                                                />
                                            </div>

                                            <div class="col-lg-6">
                                                <label> Suit / Unit </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="suit"
                                                    value="{{ $user->userDetail->suit }}"
                                                    placeholder="Suit / Unit"
                                                />
                                            </div>
                                        </div>

                                        <div class="form-group row mb-10">
                                            <div class="col-lg-4">
                                                <label
                                                    >City
                                                    <span class="text-danger"
                                                        >*</span
                                                    >
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="city"
                                                    value="{{ $user->userDetail->city }}"
                                                    placeholder="City*"
                                                    required=""
                                                />
                                            </div>

                                            <div class="col-lg-4">
                                                <label
                                                    >State / Region
                                                    <span class="text-danger"
                                                        >*</span
                                                    >
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="state"
                                                    value="{{ $user->userDetail->state }}"
                                                    placeholder="State / Region*"
                                                    required=""
                                                />
                                            </div>

                                            <div class="col-lg-4">
                                                <label
                                                    >Zip / Postal Code
                                                    <span class="text-danger"
                                                        >*</span
                                                    >
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="zip"
                                                    id="zip_code"
                                                    value="{{ $user->userDetail->zip }}"
                                                    placeholder="Zip / Postal Code*"
                                                    required=""
                                                />
                                            </div>
                                        </div>

                                        <div class="form-group row mb-10" style="text-align: left">
                                            <div class="col-lg-6">
                                                <label
                                                    >State/Region of Legal
                                                    Formation
                                                    <span class="text-danger"
                                                        >*</span
                                                    >
                                                </label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="legal_formation"
                                                    placeholder="State/Region of Legal Formation*"
                                                    value="{{ $user->userDetail->legal_formation }}"
                                                    required=""
                                                />
                                            </div>

                                            <div class="col-lg-6">
                                                <label
                                                    >Date of Incorporation
                                                    <span class="text-danger"
                                                        >*</span
                                                    >
                                                </label>
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    name="date_incorporation"
                                                    placeholder="Date of Incorporation*"
                                                    value="{{ $user->userDetail->date_incorporation }}"
                                                    required=""
                                                />
                                            </div>
                                        </div>

                                        <div class="row"></div>

                                        <div class="card-title mt-6 mb-3">
                                            <h2>Identity Verification</h2>
                                        </div>
                                        <div class="row" style="text-align: left">
                                            <div
                                                class="form-group mb-10 col-lg-4"
                                            >
                                                <label>
                                                    Primary Contact SSN  #
                                                    <small
                                                        >(US Investors
                                                        Only)</small
                                                    >
                                                    <span class="text-danger"
                                                        >*</span
                                                    ></label
                                                >
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    placeholder="Primary Contact Social Security"
                                                    required=""
                                                    name="primary_contact_social_security"
                                                    value="{{ $user->identityVerification->primary_contact_social_security }}"
                                                />
                                            </div>

                                            <div
                                                class="form-group mb-10 col-lg-4"
                                            >
                                                <label>
                                                    Tax Entity Type
                                                    <span class="text-danger"
                                                        >*</span
                                                    ></label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Tax Entity Type"
                                                    required=""
                                                    name="tax_entity_type"
                                                    value="{{ $user->identityVerification->tax_entity_type }}"
                                                />
                                            </div>
                                            <div
                                                class="form-group mb-10 col-lg-4"
                                            >
                                                <label>
                                                    Tax Identification #
                                                    <span class="text-danger"
                                                        >*</span
                                                    >
                                                </label>
                                                <input
                                                    type="number"
                                                    class="form-control"
                                                    placeholder="Tax Identification"
                                                    required=""
                                                    name="tax_identification"
                                                    value="{{ $user->identityVerification->tax_identification }}"
                                                />
                                            </div>
                                        </div>

                                        <div class="form-group row mb-10">
                                            <div class="col-lg-3">
                                                <label >Nationality
                                                    <span class="text-danger" >*</span></label>
                                               <span  class="select2 select2-container select2-container--bootstrap5"
                                                    dir="ltr"
                                                    data-select2-id="select2-data-2-imr9"
                                                    style="width: 100%"  >
                                                    <span class="selection"><span
                                                            class="select2-selection select2-selection--single form-select"
                                                            role="combobox"
                                                            aria-haspopup="true"
                                                            aria-expanded="false"
                                                            tabindex="0"
                                                            aria-disabled="false"
                                                            aria-labelledby="select2-nationality-wp-container"
                                                            aria-controls="select2-nationality-wp-container"
                                                            ><span
                                                                class="select2-selection__rendered"
                                                                id="select2-nationality-wp-container"
                                                                role="textbox"
                                                                aria-readonly="true"
                                                                title="United States
                                                        "
                                                                >United States </span
                                                            ><span
                                                                class="select2-selection__arrow"
                                                                role="presentation"
                                                                ><b
                                                                    role="presentation"
                                                                ></b></span></span></span
                                                    ><span
                                                        class="dropdown-wrapper"
                                                        aria-hidden="true"
                                                    ></span
                                                ></span>
                                            </div>
                                            <div class="col-lg-3">
                                                <label
                                                    >Country of Residence
                                                    <span class="text-danger"
                                                        >*</span
                                                    ></label
                                                >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="country_residence"
                                                />
                                            </div>
                                        </div>

                                       
                                        <div class="card-title mt-6">
                                            <h2>
                                                Trust Setting
                                                    <i
                                                    class="fas fa-exclamation-circle ms-2 fs-7"
                                                    data-bs-toggle="tooltip"
                                                    aria-label="Specify a target priorty"
                                                    data-kt-initialized="1"
                                                ></i>
                                            </h2>
                                        </div>
                                        <div class="card-title mt-6 text-center">
                                            <button class="btn btn-dark btn-sm " style="border-radius: 0; ">
                                             Check KYC Status
                                            </button>
                                         </div>
                                         
                                        <div class="row">
                                            <div class="col-lg-12 mt-4 mb-6">
                                               <strong class="">
                                                Uploads a document for KYC-checks (Auth)
                                               </strong>
                                                  
                                               

                                            </div>
                                            <div class="col-lg-3">
                                                <label for="">
                                                    Document Type
                                                </label>
                                                <select name="DocumentType" id="" class="form-control">
                                                        <option value="license"> License </option>
                                                        <option value="identificationCard"> Identification Card </option>
                                                        <option value="passport"> Passport </option>
                                                </select>
                                                
                                            </div>
                                            <div class="col-lg-3 ">
                                                <label for="">
                                                    Document Front <span class="text-danger">*</span>
                                                </label>
                                                <input type="file" class="mt-4" name="DocumentFront" id="" required>
                                            </div>
                                            <div class="col-lg-3 ">
                                                <label for="">
                                                    Document Back <span class="text-danger">*</span>
                                                </label>
                                                <input type="file" class="mt-4" name="DocumentBack" id="" required>
                                            </div>
                                            <div class="col-lg-3 ">
                                                <label for=""> 
                                                    Self Portrait <span class="text-danger">*</span>
                                                </label>
                                                <input type="file" class="mt-4" name="SelfPortrait" id="" required>
                                            </div>
                                            
                                        </div>
                                       

                                         
                                    </div>
                                </div>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-3 pb-lg-12">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-dark">
                                        Investment Limits
                                    </h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-6">
                                        Have you made any investments in
                                        <a href="#" class="link-primary">
                                            equity crowdfunding (Reg CF)
                                            offerings
                                        </a>
                                        on any platform in the past 12 months
                                        (including ChainRaise)?
                                    </div>

                                    <label   class="mt-5 mb-10 d-flex flex-stack mb-5 cursor-pointer"  >
                                        <!--begin:Label-->
                                        <span class="d-flex align-items-center me-2"  >
                                            <!--begin:Icon-->
                                            <span    class="symbol symbol-50px me-6" >
                                                <span  class="symbol-label bg-light-primary" >
                                                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                    <span   class="svg-icon svg-icon-1 svg-icon-primary"  >
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                opacity="0.3"
                                                                d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
                                                                fill="currentColor"
                                                            ></path>
                                                            <path
                                                                d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
                                                                fill="currentColor"
                                                            ></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <!--end:Icon-->
                                            <!--begin:Info-->
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold fs-6"
                                                    >Yes</span
                                                >
                                            </span>
                                            <!--end:Info-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span
                                            class="form-check form-check-custom form-check-solid"
                                        >
                                            <input
                                                class="form-check-input investment_limit"
                                                type="radio"
                                                name="category"
                                                value="yes"
                                                required
                                            />
                                        </span>
                                        <!--end:Input-->
                                    </label>
                                    <label  class="mb-10 d-flex flex-stack mb-5 cursor-pointer">
                                        <!--begin:Label-->
                                        <span  class="d-flex align-items-center me-2" >
                                            <!--begin:Icon-->
                                            <span   class="symbol symbol-50px me-6" >
                                                <span class="symbol-label bg-light-primary" >
                                                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                    <span  class="svg-icon svg-icon-1 svg-icon-primary"  >
                                                        <svg
                                                            width="24"
                                                            height="24"
                                                            viewBox="0 0 24 24"
                                                            fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                opacity="0.3"
                                                                d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
                                                                fill="currentColor"
                                                            ></path>
                                                            <path
                                                                d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
                                                                fill="currentColor"
                                                            ></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                            <!--end:Icon-->
                                            <!--begin:Info-->
                                            <span class="d-flex flex-column">
                                                <span class="fw-bold fs-6"
                                                    >No</span
                                                >
                                            </span>
                                            <!--end:Info-->
                                        </span>
                                        <!--end:Label-->
                                        <!--begin:Input-->
                                        <span
                                            class="form-check form-check-custom form-check-solid"
                                        >
                                            <input
                                                class="form-check-input investment_limit"
                                                type="radio"
                                                name="category"
                                                value="no"
                                                required
                                            />
                                        </span>
                                        <!--end:Input-->
                                    </label>
                                    <div
                                        class="crowdfunding_wrapper row mb-4 d-none"
                                    >
                                        <div class="col-lg-12">
                                            <label for="">
                                                Total Amount Invested in
                                                Crowdfunding Offerings
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name=""
                                                id=""
                                                placeholder="Total Amount Invested in Crowdfunding Offerings"
                                            />
                                        </div>
                                    </div>

                                    <div
                                        class="annual_income_wrapper row mb-4 d-none"
                                    >
                                        <div class="col-lg-12 text-center">
                                            <label for="">
                                                Do you confirm that either your
                                                annual income or net worth are
                                                greater than US $60,000.00?
                                            </label>
                                            <br />
                                            <br />
                                            <input
                                                type="radio"
                                                name="net_worth"
                                                class="net_worth"
                                                value="yes"
                                            />
                                            Yes, I confirm this is true
                                            &nbsp;&nbsp;&nbsp;
                                            <input
                                                type="radio"
                                                name="net_worth"
                                                class="net_worth"
                                                value="no"
                                            />
                                            No, decrease my investment amount
                                        </div>
                                    </div>
                                    <div class="row mb-4 net_worth_form d-none">
                                        <div class="col-lg-10">
                                            <label for="">
                                                Update Investment Amount
                                            </label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name=""
                                                id=""
                                                value="300"
                                            />
                                        </div>
                                        <div class="col-lg-2 pt-5">
                                            <button
                                                class="btn btn-sm btn-primary"
                                            >
                                                Update
                                            </button>
                                        </div>
                                        <div
                                            class="col-lg-12 pt-3 text-warning fw-bold"
                                        >
                                            After updating, please review the
                                            above question again, and if now
                                            true, click "Yes, I confirm this is
                                            true".
                                        </div>
                                    </div>
                                    <div
                                        class="row mb-4 d-none annual_income_note text-center"
                                    >
                                        <div class="col-lg-12">
                                            <small>
                                                A person's annual income and net
                                                worth may be calculated jointly
                                                with that person's spouse;
                                                however, when such a joint
                                                calculation is used, the
                                                aggregate investment of the
                                                investor spouses may not exceed
                                                the limit that would apply to an
                                                individual investor at that
                                                income or net worth level.
                                            </small>
                                        </div>
                                    </div>
                                    <!--end::Description-->
                                </div>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 5-->

                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-3 pb-lg-12">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-dark">
                                        Connect Bank
                                    </h1>
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    Image Offer
                                                </div>
                                                <div class="col-lg-8">
                                                    Techware Labs <br />
                                                    Techware Labs <br />
                                                    (Reg CF) Combining
                                                    cybersecurity and computer
                                                    maintenance services into
                                                    the web3 space

                                                    <br />
                                                    <strong class="text-success"
                                                        >$1M</strong
                                                    >
                                                </div>
                                                <div class="col-lg-2">
                                                    <strong>
                                                        Transaction Summary
                                                    </strong>
                                                    <b> $3,000.00 </b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-8">
                                        <div class="col-lg-12 mb-5">
                                            <label
                                                class="form-check form-check-custom me-10"
                                            >
                                                <input
                                                    class="form-check-input h-20px w-20px"
                                                    type="checkbox"
                                                    name="bypass_account_setup"
                                                />
                                                &nbsp;&nbsp;
                                                <span class="mat-checkbox-label"
                                                    ><span style="display: none"
                                                        >&nbsp;</span
                                                    >By checking this box, I,
                                                    the investor, acknowledge
                                                    that I have reviewed the
                                                    Issuer's
                                                    <a
                                                        _ngcontent-nlk-c373=""
                                                        target="_blank"
                                                        href="https://www.sec.gov/cgi-bin/browse-edgar?CIK=0001927195&amp;owner=exclude"
                                                        >Form C and Disclosure
                                                        Materials</a
                                                    >, as well as the
                                                    <a
                                                        _ngcontent-nlk-c373=""
                                                        target="_blank"
                                                        href="https://chainraise.io/wp-content/uploads/2022/09/NEW-Educational-Materials-ChainRaise-Portal-LLC-9_28_22.docx.pdf"
                                                        >educational
                                                        materials</a
                                                    >
                                                    provided on the Portal,
                                                    understood the risks that
                                                    come with investing in
                                                    issuing companies on the
                                                    Portal, and acknowledge that
                                                    my entire investment may be
                                                    lost and I will be
                                                    financially and
                                                    psychologically fine if it
                                                    is. I understand that the
                                                    decision whether to consult
                                                    a professional advisor
                                                    regarding my investment is
                                                    my decision and that the
                                                    Portal does not offer any
                                                    investment advice or
                                                    suggestions.</span
                                                >
                                            </label>
                                        </div>

                                        <div class="col-lg-12 mb-5">
                                            <label
                                                class="form-check form-check-custom me-10"
                                            >
                                                <input
                                                    class="form-check-input h-20px w-20px"
                                                    type="checkbox"
                                                    name="bypass_account_setup"
                                                />
                                                &nbsp;&nbsp;
                                                <span class="mat-checkbox-label"
                                                    ><span style="display: none"
                                                        >&nbsp;</span
                                                    >
                                                    By checking this box, I, the
                                                    investor, acknowledge that I
                                                    understand I can cancel my
                                                    investment commitment up to
                                                    48 hours before the offer's
                                                    closing deadline. If I have
                                                    made a commitment within
                                                    this 48-hour window, I
                                                    cannot cancel my
                                                    investment.</span
                                                >
                                            </label>
                                        </div>

                                        <div class="col-lg-12 mb-5">
                                            <label
                                                class="form-check form-check-custom me-10"
                                            >
                                                <input
                                                    class="form-check-input h-20px w-20px"
                                                    type="checkbox"
                                                    name="bypass_account_setup"
                                                />
                                                &nbsp;&nbsp;
                                                <span class="mat-checkbox-label"
                                                    ><span style="display: none"
                                                        >&nbsp;</span
                                                    >
                                                    By checking this box, I, the
                                                    investor, acknowledge that
                                                    the securities are subject
                                                    to transfer restrictions and
                                                    that I have reviewed and
                                                    understood these transfer
                                                    restrictions as provided in
                                                    the Portal's .</span
                                                >
                                            </label>
                                        </div>

                                        <div class="col-lg-12 mb-5">
                                            <label
                                                class="form-check form-check-custom me-10"
                                            >
                                                <input
                                                    class="form-check-input h-20px w-20px"
                                                    type="checkbox"
                                                    name="bypass_account_setup"
                                                />
                                                &nbsp;&nbsp;
                                                <span class="mat-checkbox-label"
                                                    ><span style="display: none"
                                                        >&nbsp;</span
                                                    >
                                                    By checking this box, I, the
                                                    investor, acknowledge that I
                                                    have provided truthful and
                                                    accurate representations of
                                                    the documents and
                                                    information requested by the
                                                    Portal.</span
                                                >
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <h1 class="fw-bold text-dark mb-10">
                                    Connect Bank
                                </h1>
                                <div class="row row-cols-1 row-cols-md-2 g-5">
                                    <div class="col-lg-12">
                                        <label
                                            class="mt-5 mb-10 d-flex flex-stack mb-5 cursor-pointer"
                                        >
                                            <!--begin:Label-->
                                            <span
                                                class="d-flex align-items-center me-2"
                                            >
                                                <!--begin:Icon-->
                                                <span
                                                    class="symbol symbol-50px me-6"
                                                >
                                                    <i
                                                        class="la la-bank fs-1"
                                                    ></i>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span
                                                    class="d-flex flex-column"
                                                >
                                                    <span class="fw-bold fs-6"
                                                        >Bank Account</span
                                                    >
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span
                                                class="form-check form-check-custom form-check-solid"
                                            >
                                                <input
                                                    class="form-check-input connect_bank"
                                                    type="radio"
                                                    name="connect_bank"
                                                    value="bank"
                                                    required
                                                />
                                            </span>
                                            <!--end:Input-->
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label
                                            class="mb-10 d-flex flex-stack mb-5 cursor-pointer"
                                        >
                                            <!--begin:Label-->
                                            <span
                                                class="d-flex align-items-center me-2"
                                            >
                                                <!--begin:Icon-->
                                                <span
                                                    class="symbol symbol-50px me-6"
                                                >
                                                    <i
                                                        class="la la-globe fs-1"
                                                    ></i>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span  class="d-flex flex-column"  >
                                                    <span class="fw-bold fs-6">
                                                        Wire Transfer
                                                    </span>
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span
                                                class="form-check form-check-custom form-check-solid"
                                            >
                                                <input
                                                    class="form-check-input connect_bank"
                                                    type="radio"
                                                    name="connect_bank"
                                                    value="wire"
                                                    required
                                                />
                                            </span>
                                            <!--end:Input-->
                                        </label>
                                    </div>
                                </div>
                                <div class="row d-none connect_bank_account">
                                    <div class="col-lg-12 text-center">
                                        <h3>Connect Bank Account</h3>
                                        <br />
                                        <button class="btn btn-dark btn-sm">
                                            LINK MY BANK ACCOUNT
                                        </button>
                                        <br />
                                        <br />
                                        <small class="text-center">
                                            Please note that we will only accept
                                            funds from accounts that match your
                                            full name used during identity
                                            verification.
                                        </small>
                                    </div>
                                </div>

                                <div class="row d-none wire_transfer">
                                    <div class="col-lg-12 text-left">
                                        <h3>Wire Instructions</h3>
                                        <p>
                                            To complete your investment, please
                                            wire funds within the next 5
                                            business days to , details below.
                                        </p>
                                        <ul class="text-left">
                                            <li>Account Name</li>
                                            <li>Account Number</li>
                                            <li>Routing Number</li>
                                            <li>Bank Information</li>
                                        </ul>

                                        <p class="text-center">
                                            On the wire, please include the
                                            transaction code below
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input
                                                    type="text"
                                                    value="LBZIVCV8D6BN3T"
                                                    class="form-control"
                                                />
                                            </div>
                                        </div>
                                        <p class="text-center">
                                            Please note that we will only accept
                                            funds from accounts that match your
                                            full name used during identity
                                            verification.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-kt-stepper-element="content">
                            <div class="w-100">
                                <h1 class="fw-bold text-dark mb-10">
                                    Sign Subscription Agreement and Token Grant
                                </h1>
                                <div class="row row-cols-1 row-cols-md-2 g-5">
                                    <div class="col-lg-12 text-center">
                                        <button class="btn btn-sm btn-dark">
                                            Continue E-Signing Document
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-stack pt-10">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button
                                    type="button"
                                    class="btn btn-lg btn-light-primary me-3"
                                    data-kt-stepper-action="previous"
                                >
                                    Back
                                </button>
                            </div>
                            <div>
                                <button
                                    type="button"
                                    class="btn btn-lg btn-primary"
                                    data-kt-stepper-action="next"
                                >
                                    Continue
                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--begin::Modal body-->
        </div>
    </div>
</div>