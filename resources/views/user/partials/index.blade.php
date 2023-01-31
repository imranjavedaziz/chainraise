    <!-- Modal-->
    <div class="modal fade" id="modal-addUser" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Add User </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form class="form" method="post" action="#">
                    <div class="modal-body">
                        <div class="card card-custom">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for=""> Name </label>
                                    <input type="text" class="form-control" placeholder="Name" name="name"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Email Address </label>
                                    <input type="email" class="form-control" placeholder="Email Address"
                                        name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Password </label>
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        required>
                                </div>
                            </div>
                            <!--end::Form-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold btn-square"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold btn-square">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal-->
    <div class="modal fade" id="modal-editUser" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit User </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form class="form" method="post" action="{{ route('user.update') }}">
                    <div class="modal-body">
                        <div class="card card-custom">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for=""> Name </label>
                                    <input type="hidden" class="form-control" placeholder="Name" name="id"
                                        required id="user-id">
                                    <input type="text" class="form-control" placeholder="Name" name="name"
                                        required id="user-name">
                                </div>
                                <div class="form-group">
                                    <label for=""> Email Address </label>
                                    <input type="email" class="form-control" placeholder="Email Address"
                                        name="email" required id="user-email">
                                </div>

                                <div class="form-group">
                                    <label for=""> Status </label>
                                    <select class="form-control" name="status" id="user-status">
                                        <option value="active"> Active </option>
                                        <option value="inactive"> In Active </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for=""> Password </label>
                                    <input type="password" class="form-control" placeholder="Password"
                                        name="password">
                                    <small class="text-warning"> Set the password field empty if you don't want to
                                        change the password </small>
                                </div>
                            </div>
                            <!--end::Form-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold btn-square"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold btn-square">Update
                            User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add_new_user" tabindex="-1" style="display: none;" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog  modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" method="post"
                        class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('user.child.save') }}" enctype="multipart/form-data">
                        <!--begin::Heading-->
                        @csrf
                        <input type="hidden" name="parent_id" value="{{ $user->id }}">
                        <div class="mb-13 text-left">
                            <h3 class="mb-3"> New User </h3>
                        </div>
                        <div class="row g-9 mb-8">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> First Name </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Provide First Name of new user"
                                                data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="First Name" name="first_name" required>
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> Last Name </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Provide First Name of new user"
                                                data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Last Name" name="last_name" required>
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> Email </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Specify a email address for new user"
                                                data-kt-initialized="1"></i>
                                        </label>
                                        <input type="email" class="form-control form-control-solid"
                                            placeholder="Email" name="email" required>
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> Phone Number</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="User Phone Number" data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Phone Number" name="phone_number" required>
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span> Title </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Title for new user" data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Title" name="title">
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> Birth Date </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Select date of birth" data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Birth Date" name="birth_date" required>
                                    </div>
                                    <div class="col-md-6 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> LinkedIn URL </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Linked In Profile Address" data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="LinkedIn URL" name="linkedIn_url" required>
                                    </div>
                                    <div class="col-md-6 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class=""> Password </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Set password for new user" data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Password" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 pt-8">
                                <div class="image-input image-input-outline image-input-empty"
                                    data-kt-image-input="true"
                                    style="background-image: url('http://127.0.0.1:8000/assets/media/svg/avatars/blank.svg')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px" style="background-image: none;">
                                    </div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        aria-label="Change avatar" data-kt-initialized="1">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="photo" accept=".png, .jpg, .jpeg">
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
                        <div class="mb-15 fv-row">
                            <div class="d-flex flex-stack">
                                <div class="d-flex align-items-center">
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input
                                            class="form-check-input h-15px w-15px checkbox identification_information"
                                            name="identification_information" type="checkbox">
                                        <span class="form-check-label fw-semibold"> Provide Identification Information
                                            for Associated Person </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="information_fields">
                            <div class="mb-13 text-left">
                                <h3 class="mb-3"> Address </h3>
                            </div>
                            <div class="row g-9 mb-8">
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Street Address </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Street Address" data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Street Address" name="address">
                                </div>
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Suite / Unit </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Provide Suite / Unit" data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Suite / Unit" name="suite_unit">
                                </div>
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> City </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="User City Name" data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" placeholder="City"
                                        name="city">
                                </div>
                            </div>
                            <div class="row g-9 mb-8">
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> State / Region </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Specify a State / Region" data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="State / Region" name="state_region">
                                </div>
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Zip / Postal Code </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Zip / Postal Code" data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Zip / Postal Code" name="zip_code">
                                </div>

                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Social Security # <small>(US Investors Only)</small>
                                        </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Specify a target name for future usage and reference"
                                            data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Social Security #" name="social_security">
                                </div>
                            </div>
                            <div class="row g-9 mb-8">
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Nationality </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Specify a target name for future usage and reference"
                                            data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Nationality" name="nationality">
                                </div>
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Country of Residence </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Specify a target name for future usage and reference"
                                            data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Country of Residence" name="country_residence">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-15 fv-row">
                                <div class="mb-10">
                                    <div class="d-flex">
                                        <label
                                            class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input h-15px w-15px" name="reset_password_invite"
                                                type="checkbox" value="1">
                                            <span class="form-check-label"> Send invite to reset password </span>
                                        </label>
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input h-15px w-15px" name="email_verified"
                                                type="checkbox" value="1" checked="checked">
                                            <span class="form-check-label">Mark Email as Verified</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" id="kt_modal_new_target_submit" class="btn-sm btn btn-primary">
                                <span class="indicator-label">CREATE NEW USER</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <div class="modal fade" id="edit_new_user" tabindex="-1" style="display: none;" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog  modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" method="post"
                        class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('user.child.update') }}" enctype="multipart/form-data">
                        <!--begin::Heading-->
                        @csrf
                        <input type="hidden" name="id" id="user_id">
                        <div class="mb-13 text-left">
                            <h3 class="mb-3"> Edit User </h3>
                        </div>
                        <div class="row g-9 mb-8">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> First Name </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Provide First Name of new user"
                                                data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="First Name" name="first_name" id="first_name" required>
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> Last Name </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Provide First Name of new user"
                                                data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Last Name" name="last_name" id="last_name" required>
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> Email </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Specify a email address for new user"
                                                data-kt-initialized="1"></i>
                                        </label>
                                        <input type="email" class="form-control form-control-solid"
                                            placeholder="Email" name="email" id="email" required>
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> Phone Number</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="User Phone Number" data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Phone Number" name="phone_number" id="phone_number"
                                            required>
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span> Title </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Title for new user" data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Title" name="title" id="user_title">
                                    </div>
                                    <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> Birth Date </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Select date of birth" data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Birth Date" name="birth_date" id="birth_date" required>
                                    </div>
                                    <div class="col-md-6 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required"> LinkedIn URL </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Linked In Profile Address" data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="LinkedIn URL" name="linkedIn_url" id="linkedIn_url"
                                            required>
                                    </div>
                                    <div class="col-md-6 mb-5 fv-row fv-plugins-icon-container">
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class=""> Password </span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                aria-label="Set password for new user" data-kt-initialized="1"></i>
                                        </label>
                                        <input type="text" class="form-control form-control-solid"
                                            placeholder="Password" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 pt-8">
                                <div class="image-input image-input-outline image-input-empty profilePhoto"
                                    data-kt-image-input="true"
                                    style="background-image: url('http://127.0.0.1:8000/assets/media/svg/avatars/blank.svg')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px" style="background-image: none;">
                                    </div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Label-->
                                    <label
                                        class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        aria-label="Change avatar" data-kt-initialized="1">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="photo" accept=".png, .jpg, .jpeg">
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
                        <div class="mb-15 fv-row">
                            <div class="d-flex flex-stack">
                                <div class="d-flex align-items-center">
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input
                                            class="form-check-input h-15px w-15px checkbox identification_information"
                                            name="identification_information" type="checkbox">
                                        <span class="form-check-label fw-semibold"> Provide Identification Information
                                            for Associated Person </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="information_fields">
                            <div class="mb-13 text-left">
                                <h3 class="mb-3"> Address </h3>
                            </div>
                            <div class="row g-9 mb-8">
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Street Address </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Street Address" data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Street Address" name="address" id="address">
                                </div>
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Suite / Unit </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Provide Suite / Unit" data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Suite / Unit" name="suite_unit" id="suite_unit">
                                </div>
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> City </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="User City Name" data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" placeholder="City"
                                        name="city" id="city">
                                </div>
                            </div>
                            <div class="row g-9 mb-8">
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> State / Region </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Specify a State / Region" data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="State / Region" name="state_region" id="state_region">
                                </div>
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Zip / Postal Code </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Zip / Postal Code" data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Zip / Postal Code" name="zip_code" id="zipcode">
                                </div>

                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Social Security # <small>(US Investors Only)</small>
                                        </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Specify a target name for future usage and reference"
                                            data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Social Security #" name="social_security" id="social_security">
                                </div>
                            </div>
                            <div class="row g-9 mb-8">
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Nationality </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Specify a target name for future usage and reference"
                                            data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Nationality" name="nationality" id="nationality">
                                </div>
                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Country of Residence </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Specify a target name for future usage and reference"
                                            data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Country of Residence" name="country_residence"
                                        id="country_residence">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">

                            <button type="submit" id="kt_modal_new_target_submit" class="btn-sm btn btn-primary">
                                <span class="indicator-label">UPDATE USER</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>

                            <button type="button" class="btn-sm btn btn-danger deleteUser">
                                <span class="indicator-label"> REMOVE USER </span>
                            </button>

                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <div class="modal fade" id="modal-addFolder" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Add Folder </h5>
                    {{--                
                <label class="form-check form-switch form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                    <span class="form-check-label fw-semibold text-muted">Upload a Folder</span>
                </label> --}}
                </div>
                <form class="form" method="post" action="{{ route('folder.create') }}">
                    <div class="modal-body">
                        <div class="card card-custom">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="" class="required"> Folder Name </label>
                                    <input type="text" class="form-control" placeholder="Folder Name"
                                        name="name" required>
                                    <input type="hidden" value="{{ $id }}" name="user_id" required>
                                </div>
                                <div class="row mt-4">
                                    <div class="form-group col-lg-6 mb-5">
                                        <label for=""> Related Offer </label>
                                        <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Related Offer" name="offer">
                                            <option value="" disabled selected>None</option>
                                            @foreach ($offers as $offer)
                                                <option value="{{ $offer->id }}"> {{ $offer->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for=""> Sort Order </label>
                                        <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Sort Order" name="sort"
                                            required>
                                            <option value="" disabled selected> Sorting </option>
                                            <option value="manual"> Manual </option>
                                            <option value="a-z"> A-Z </option>
                                            <option value="z-a"> Z-A </option>
                                            <option value="date-uploaded"> Date Uploaded </option>
                                            <option value="date-uploaded-desc"> Date Uploaded (desc)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-15 fv-row">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="fw-semibold">
                                            <button class="btn btn-sm" type="button">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11" y="18"
                                                            width="12" height="2" rx="1"
                                                            transform="rotate(-90 11 18)" fill="currentColor"></rect>
                                                        <rect x="6" y="11" width="12"
                                                            height="2" rx="1" fill="currentColor"></rect>
                                                    </svg>
                                                </span> ADD A RESTRICTION
                                            </button>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Checkboxes-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input h-20px w-20px" type="checkbox"
                                                    name="communication[]" value="email">
                                                <span class="form-check-label fw-semibold">Allow Download </span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input h-20px w-20px" type="checkbox"
                                                    name="communication[]" value="phone">
                                                <span class="form-check-label fw-semibold">Show All Pages</span>
                                            </label>
                                            <!--end::Checkbox-->
                                        </div>
                                        <!--end::Checkboxes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                            </div>
                            <!--end::Form-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-sm btn btn-light-primary font-weight-bold btn-square"
                            data-dismiss="modal">CANCEL</button>
                        <button type="submit"
                            class="btn-sm btn btn-primary font-weight-bold btn-square">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-addFile" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Add Document </h5>
                    {{--                
            <label class="form-check form-switch form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="1">
                <span class="form-check-label fw-semibold text-muted">Upload a Folder</span>
            </label> --}}
                </div>
                <form class="form" method="post" action="{{ route('folder.upload.file') }}"
                    enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="card card-custom">
                            @csrf
                            <div class="card-body row">
                                <div class="form-group col-lg-4">
                                    <label for="" class="required"> Document Name </label>
                                    <input type="text" class="form-control" placeholder="Document Name"
                                        id="file_name" name="name" required>
                                    <input type="hidden" value="{{ $id }}" name="user_id" required>
                                    <input type="hidden" id="folder_id" name="folder_id" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="" class=" "> Document Description </label>
                                    <input type="text" class="form-control" placeholder="Document description"
                                        name="description">
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group ">
                                        <label for=""> Related Offer </label>
                                        <select class="form-select form-select-solid" data-control="select2"
                                            data-hide-search="true" data-placeholder="Related Offer" name="offer">
                                            <option value="" disabled selected>None</option>
                                            @foreach ($offers as $offer)
                                                <option value="{{ $offer->id }}"> {{ $offer->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group ">
                                        <br>
                                        <input type="file" name="file" id="upload_file">
                                    </div>

                                </div>

                            </div>
                            <!--end::Form-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-sm btn btn-light-primary font-weight-bold btn-square"
                            data-dismiss="modal">CANCEL</button>
                        <button type="submit"
                            class="btn-sm btn btn-primary font-weight-bold btn-square">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-viewDocument" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> View Document </h5>
                    
                </div>
                <div class="modal-body">
                    <div class="row" id="all_documents"> 
                    </div> 
                </div>
               
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_e_sign" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> E Sign </h5> 
                </div>
                <form class="form" method="post" action="{{ route('user.esign.template.save') }}">
                    <div class="modal-body">
                        <div class="card card-custom">
                            @csrf
                            <div class="card-body row">
                                <div class="form-group col-lg-6 mb-5">
                                    <label for="" class="required"> Select Template </label>
                                    <select class="form-select form-select-solid" id="templates" name="template" required>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 mb-5">
                                    <label for="" class="required"> Offers </label>
                                    <select class="form-select form-select-solid" name="offer">
                                        @foreach ($offers as $offer)
                                            <option value="{{ $offer->id }}"> {{ $offer->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                               
                                <div class="form-group col-lg-6">
                                    <label for="" class="required"> Investors </label>
                                    <select class="form-select form-select-solid" name="investor">
                                        @foreach ($investors as $investor)
                                            <option value="{{ $investor->id }}"> {{ $investor->name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="" class=""> Investment Amount </label>
                                    <input type="text" name="investment_amount"  placeholder="Investment Amount (if applicable)" class="form-control">
                                </div> 
                            </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-sm btn btn-light-primary font-weight-bold btn-square"
                            data-dismiss="modal">CANCEL</button>
                        <button type="submit"
                            class="btn-sm btn btn-primary font-weight-bold btn-square">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
