<div class="modal fade" id="modal-quick-action-account-trust-setting" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TRUST SETTINGS </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" method="post" action="#" id="update_setting_form">
                <div class="modal-body">
                    <div class="card-title mt-6 mb-3">
                        <h2>Trust Setting<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                aria-label="Specify a target priorty" data-kt-initialized="1"></i></h2>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="d-flex align-items-center">
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                        name="bypass_account_setup">
                                    <span class="form-check-label fw-semibold">Bypass Account Setup<i
                                            class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                            aria-label="Specify a target priorty" data-kt-initialized="1"></i></span>
                                </label>
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                        name="bypass_kyc_checkup">
                                    <span class="form-check-label fw-semibold">Bypass KYC Checks</span>
                                </label>
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                        name="bypass_accreditation_checks">
                                    <span class="form-check-label fw-semibold">Bypass Accreditation
                                        Checks</span>
                                </label>
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                        name="bypass_document_restrictions">
                                    <span class="form-check-label fw-semibold">Bypass Document
                                        Restrictions</span>
                                </label>
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-15px w-15px" type="checkbox"
                                        name="bypass_document_restrictions">
                                    <span class="form-check-label fw-semibold"> View All Invite Only </span>
                                </label>

                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        <div class="form-group row mt-10 mb-10">
                            <div class="col-lg-6">
                                <label class="fw-semibold mb-4">Bypass Restrictions on Specific Documents</label>
                                <select class="form-select select2-hidden-accessible" data-control="select2"
                                    data-placeholder="Select an Offer" data-select2-id="select2-data-4-3dsf"
                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                    <option data-select2-id="select2-data-6-oiog"></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5"
                                    dir="ltr" data-select2-id="select2-data-5-eyh4" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--single form-select"
                                            role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-disabled="false" aria-labelledby="select2-4zlx-container"
                                            aria-controls="select2-4zlx-container"><span
                                                class="select2-selection__rendered" id="select2-4zlx-container"
                                                role="textbox" aria-readonly="true" title="Select an Offer"><span
                                                    class="select2-selection__placeholder">Select an
                                                    Offer</span></span><span class="select2-selection__arrow"
                                                role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                            <div class="col-lg-6 pt-10">

                                <select class="form-select select2-hidden-accessible  data-control="select2"
                                    data-placeholder="Select a Document" data-select2-id="select2-data-7-syjx"
                                    tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                    <option data-select2-id="select2-data-9-jsef"></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5"
                                    dir="ltr" data-select2-id="select2-data-8-idv5" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--single form-select"
                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                            tabindex="0" aria-disabled="false"
                                            aria-labelledby="select2-i12h-container"
                                            aria-controls="select2-i12h-container"><span
                                                class="select2-selection__rendered" id="select2-i12h-container"
                                                role="textbox" aria-readonly="true" title="Select a Document"><span
                                                    class="select2-selection__placeholder">Select a
                                                    Document</span></span><span class="select2-selection__arrow"
                                                role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label class="fw-semibold">Bypass E-Sign Document Restrictions</label>
                                <select class="form-select select2-hidden-accessible" data-control="select2"
                                    data-placeholder="Select an E-Sign Template"
                                    data-select2-id="select2-data-10-32v1" tabindex="-1" aria-hidden="true"
                                    data-kt-initialized="1">
                                    <option data-select2-id="select2-data-12-bpt6"></option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                </select><span class="select2 select2-container select2-container--bootstrap5"
                                    dir="ltr" data-select2-id="select2-data-11-yzfj" style="width: 100%;"><span
                                        class="selection"><span
                                            class="select2-selection select2-selection--single form-select"
                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                            tabindex="0" aria-disabled="false"
                                            aria-labelledby="select2-c6se-container"
                                            aria-controls="select2-c6se-container"><span
                                                class="select2-selection__rendered" id="select2-c6se-container"
                                                role="textbox" aria-readonly="true"
                                                title="Select an E-Sign Template"><span
                                                    class="select2-selection__placeholder">Select an E-Sign
                                                    Template</span></span><span class="select2-selection__arrow"
                                                role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark btn-sm font-weight-bold no-radius"
                        id="update_setting_form_button">UPDATE SETTINGS</button>
                </div>
            </form>
        </div>
    </div>
</div>







<div class="modal fade" id="modal-quick-action-account-email-invite" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-1000px  modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Email Message </h5>
                <button type="button" class="btn btn-sm btn-dark no-radius dismiss"  data-bs-dismiss="modal">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!--begin::Modal header-->
           

            <div class="modal-body scroll-y  "> 
                
                <form class="form" method="post"   id="send_email_form" >
                    @csrf
                    <input type="hidden" name="user_ids" id="user_ids" class="user_ids" required=""> 
                    <div class="modal-body"> 
                        <div class="card-body"> 
                            <div class="form-group row">
                                 <div class="col-lg-4">
                                    <input type="text" name="subject" class="form-control" required placeholder="Subject" value="Chain Raise Invite">
                                 </div>
                                 <div class="col-lg-4">
                                    <input type="text" name="from_name" class="form-control" required placeholder="From Name" value="{{ Auth::user()->name }}"> 
                                 </div>
                                 <div class="col-lg-4">
                                    <input type="email" name="from_email" class="form-control" required placeholder="From Email" value="{{ Auth::user()->email }}">
                                 </div>
                            </div> 
    
                            <div class="form-group row">
                                <div class="col-lg-12 mt-5">
                                   <textarea type="text" name="content" class="form-control summernote" required placeholder="Details"></textarea>
                                </div>
                                
                                
                           </div> 
                        </div>
                         
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark btn-sm font-weight-bold no-radius" id="sendEmailBtn">
                           Send Email
                        </button>
                    </div>
                </form>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>



<div class="modal fade" id="modal-quick-action-upload-document" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-1000px  modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Upload Document </h5>
                <button type="button" class="btn btn-sm btn-dark no-radius dismiss"  data-bs-dismiss="modal">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!--begin::Modal header-->
           

            <div class="modal-body scroll-y  "> 
                <form class="form" method="post" enctype="multipart/form-data" id="upload_document_form" >
                    <div class="modal-body">
                        <div class="card card-custom">
                           @csrf
                             <div class="card-body">
                                <div class="form-group">
                                    <label for="" class="required"> Folder Name </label>
                                    <input type="text" class="form-control" placeholder="Folder Name" name="name" required="">
                                    <input type="hidden" name="user_ids" id="user_ids" class="user_ids" required=""> 
                                    
                                </div>
                                <div class="form-group mt-4">
                                    <label for="" class="required"> Upload File  <hr>
                                    <input type="file" name="document" name="form-control" required >
                                </div>
                                <div class="row mt-4">
                                    <div class="form-group col-lg-6 mb-5">
                                        <label for=""> Related Offer </label>
                                        <select class="form-select form-select-solid mt-4" name="offer" required>
                                            @foreach($offers as $offer)
                                                <option value="{{ $offer->id}}"> {{ $offer->name }}  </option>
                                            @endforeach
                                        </select> 
                                    </div>
                                    <div class="form-group col-lg-6 mt-4">
                                        <label for=""> Sort Order </label>
                                        <select class="form-select form-select-solid" name="sort" required>
                                            <option value="manual"> Manual </option>
                                            <option value="a-z"> A-Z </option>
                                            <option value="z-a"> Z-A </option>
                                            <option value="date_asc"> Date Uploaded </option>
                                            <option value="date_desc">  Date Uploaded (desc)</option>
                                        </select> 
                                    </div>
                                    
                                </div>
                                <div class="mb-15 fv-row">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack"> 
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-10">
                                                <input class="form-check-input h-20px w-20px" type="checkbox" name="allow_download" value="email">
                                                <span class="form-check-label fw-semibold">Allow Download </span>
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input h-20px w-20px" type="checkbox" name="show_all_pages" value="phone">
                                                <span class="form-check-label fw-semibold">Show All Pages</span>
                                            </label>
                                            &nbsp;&nbsp;
                                            <label class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input h-20px w-20px" type="checkbox" name="notify_account" value="phone">
                                                <span class="form-check-label fw-semibold"> Notify Account </span>
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
                        <button type="submit" class="btn btn-dark btn-sm font-weight-bold no-radius" id="document_upload_btn"> Upload Document </button>
                    </div>
                </form>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>



<div class="modal fade" id="modal-quick-action-upload-e-document" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-1000px  modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Upload E Sign Documents </h5>
                <button type="button" class="btn btn-sm btn-dark no-radius dismiss"  data-bs-dismiss="modal">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <!--begin::Modal header-->
            <div class="modal-body scroll-y  "> 
                <form class="form" method="post" action="" enctype="multipart/form-data" id="upload_e_sign_document_form"> 
                    <div class="modal-body">
                        <div class="card card-custom">
                           @csrf
                             <div class="card-body">
                                <div class="row mt-4">
                                    <input type="hidden" name="user_ids" id="user_ids" class="user_ids" required=""> 
                                    <div class="form-group col-lg-6 mb-5">
                                        <label for=""> Select Template </label>
                                        <select class="form-select form-select-solid mt-4" name="template" required></select> 
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for=""> Offer </label>
                                        <select class="form-select form-select-solid mt-4" name="offer" required>
                                            @foreach($offers as $offer)
                                                <option value="{{ $offer->id}}"> {{ $offer->name }}  </option>
                                            @endforeach
                                        </select> 
                                    </div>
                                </div>
                                <div class="row mt-4"> 
                                    <div class="form-group col-lg-12 mb-5">
                                        <label for=""> Issuer </label>
                                        <select class="form-select form-select-solid mt-4" name="issuer" required>
                                            @foreach($issuers as $issuer)
                                                <option value="{{ $issuer->id}}"> {{ $issuer->name }}  </option>
                                            @endforeach
                                        </select> 
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark btn-sm font-weight-bold no-radius" id="e_document_upload_btn"> Request E-Sign </button>
                    </div>
                </form>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

 

