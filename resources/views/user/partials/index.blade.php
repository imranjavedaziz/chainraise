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
                    <form id="kt_modal_new_target_form" method="post" class="form fv-plugins-bootstrap5 fv-plugins-framework"  action="{{ route('user.child.save') }}" enctype="multipart/form-data">
                        <!--begin::Heading-->
                        @csrf
                        <input type="hidden" name="parent_id" value="{{ $user->id}}">
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
                                            aria-label="User Phone Number"
                                            data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                    placeholder="Phone Number" name="phone_number" required>
                                </div>
                                <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span > Title </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Title for new user"
                                            data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                    placeholder="Title" name="title" >
                                </div>
                                <div class="col-md-4 mb-5 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> Birth Date </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Select date of birth"
                                            data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                    placeholder="Birth Date" name="birth_date" required>
                                </div>
                                <div class="col-md-6 mb-5 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required"> LinkedIn URL </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Linked In Profile Address"
                                            data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                    placeholder="LinkedIn URL" name="linkedIn_url" required>
                                </div>
                                <div class="col-md-6 mb-5 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class=""> Password </span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Set password for new user"
                                            data-kt-initialized="1"></i>
                                    </label>
                                    <input type="text" class="form-control form-control-solid"
                                    placeholder="Password" name="password">
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-2 pt-8">
                                <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url('http://127.0.0.1:8000/assets/media/svg/avatars/blank.svg')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-150px h-150px" style="background-image: none;"></div>
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
 
                       
    
                        <div class="mb-15 fv-row">
                            <div class="d-flex flex-stack">
                                <div class="d-flex align-items-center">
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-15px w-15px" type="checkbox">
                                        <span class="form-check-label fw-semibold"> Provide Identification Information for Associated Person </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-13 text-left">
                            <h3 class="mb-3"> Address </h3>
                        </div>
                        <div class="row g-9 mb-8">
                            <div class="col-md-4 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required"> Street Address </span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        aria-label="Street Address"
                                        data-kt-initialized="1"></i>
                                </label>
                                <input type="text" class="form-control form-control-solid"
                                placeholder="Street Address" name="address">
                            </div>
                            <div class="col-md-4 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required"> Suite / Unit </span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        aria-label="Provide Suite / Unit"
                                        data-kt-initialized="1"></i>
                                </label>
                                <input type="text" class="form-control form-control-solid"
                                placeholder="Suite / Unit" name="suite_unit">
                            </div>
                            <div class="col-md-4 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required"> City </span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        aria-label="User City Name"
                                        data-kt-initialized="1"></i>
                                </label>
                                <input type="text" class="form-control form-control-solid"
                                placeholder="City" name="city">
                            </div>
                        </div>
                        <div class="row g-9 mb-8">
                            <div class="col-md-4 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required"> State / Region </span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        aria-label="Specify a State / Region"
                                        data-kt-initialized="1"></i>
                                </label>
                                <input type="text" class="form-control form-control-solid"
                                placeholder="State / Region" name="state_region">
                            </div>
                            <div class="col-md-4 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required"> Zip / Postal Code </span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                        aria-label="Zip / Postal Code"
                                        data-kt-initialized="1"></i>
                                </label>
                                <input type="text" class="form-control form-control-solid"
                                placeholder="Zip / Postal Code" name="zip_code">
                            </div>

                            <div class="col-md-4 fv-row fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required"> Social Security # <small>(US Investors Only)</small> </span>
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
                        <div class="text-center">
                            <div class="mb-15 fv-row">
                                <div class="mb-10">
                                    <div class="d-flex">
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input h-15px w-15px" name="reset_password_invite" type="checkbox" value="1">
                                            <span class="form-check-label"> Send invite to reset password </span>
                                        </label>
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input h-15px w-15px" name="email_verified" type="checkbox" value="1" checked="checked">
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
