@extends('layouts.app')
@section('title', 'Account Users')
@section('page_name','Listings')
@section('page_head')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Listing</h1>
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
                    <li class="breadcrumb-item text-muted">Listing</li>
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
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Users</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Over {{  $users->count() }} members</span>
                    </h3>

                    
                    <div class="card-toolbar ">
                        <span data-href="{{ route('user.info.csv') }}" id="export" class="btn no-radius btn-sm btn-dark btn-sm" onclick ="exportTasks (event.target);">Export Excel</span>
                        &nbsp;&nbsp;
                        
                        <div class="card-toolbar d-none show_on_multi_check">
                            <!--begin::Menu-->
                            <button class="btn btn-dark btn-sm no-radius btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true"> 
                                ENGAGE SELECTED 
                            </button>
                            
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true" style="">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                </div>
                                  {{-- <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title"> Accounts </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-185px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#modal-quick-action-account-trust-setting" >
                                             Update Trust Settings
                                        </a>
                                        </div>
                                        
                                    </div>
                                    <!--end::Menu sub-->
                                </div> --}}
                                
                              
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3" id="action-send-email"  data-bs-toggle="modal" 
                                    data-bs-target="#modal-quick-action-account-email-invite">
                                        <span class="menu-title"> Email </span>
                                         
                                    </a>
                                    
                                </div>
                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                    <!--begin::Menu item-->
                                    <a href="#" class="menu-link px-3">
                                        <span class="menu-title"> Documents </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--end::Menu item-->
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-185px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                        <a href="#" id="action-upload-document" class="menu-link px-3" data-bs-toggle="modal" 
                                        data-bs-target="#modal-quick-action-upload-document" >
                                             Upload Document
                                        </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="#" id="action-upload-e-document" class="e_sign menu-link px-3" data-bs-toggle="modal" data-bs-target="#modal-quick-action-upload-e-document" >
                                                 E Sign Document
                                            </a>
                                        </div>
                                        
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                
                                
                            </div>
                            <!--begin::Menu 2-->
                            
                            <!--end::Menu 2-->
                            <!--end::Menu-->
                        </div>
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm  btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor"></rect>
                                        <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                        <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                        <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3"></rect>
                                    </g>
                                </svg>
                            </span>
                            Add Account
                            <!--end::Svg Icon-->
                        </button>

                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Create User</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="{{ route('user.investor.create') }}" class="menu-link px-3"> Individual Investor </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="{{ route('user.issuer.create') }}" class="menu-link px-3"> Issuer </a>
                            </div>
                        </div>


                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <div class="flex-lg-row-fluid"> 
                        <div class="card">
                            
                            <div class="card-body p-0">
                                <!--begin::Table-->
                                <div id="kt_inbox_listing_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table table-hover table-row-dashed fs-6 gy-5 my-0 dataTable no-footer" id="kt_inbox_listing"> 
                                    <tbody> 
                                    <tr class="odd">
                                            <td class="ps-9"> 
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-4 me-lg-7">
                                                    <input class="form-check-input multi_select" type="checkbox" data-kt-check="true"   data-kt-check-target="#kt_inbox_listing .form-check-input" value="1">
                                                </div> 
                                            </td> 
                                            <th class="ps-9 fw-bold"> 
                                               Photo
                                            </th> 

                                            <th class="ps-9 fw-bold"> 
                                                Full Name
                                            </th> 
                                            
                                             <th class="ps-9 fw-bold"> 
                                                Account Type
                                             </th> 
                                             <th class="ps-9 fw-bold"> 
                                                KYC Level
                                             </th> 
                                              
                                             <th class="ps-9 fw-bold"> 
                                               Last Seen
                                             </th> 
                                             <th class="ps-9 fw-bold"> 
                                               Date
                                              </th> 
                                              <th class="ps-9 fw-bold"> 
                                                Action
                                               </th> 
                                    </tr>
                                    @foreach($users as $user)
                                    <tr class="odd">
                                        <td class="ps-9"> 
                                            <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                                <input class="form-check-input multi_select" name="user_check" type="checkbox" value="{{ $user->id }}">
                                            </div>
                                        </td> 

                                        <th class="ps-9"> 
                                            <span class="symbol-label bg-light">
                                                @if($user->getFirstMediaUrl('profile_photo', 'thumb'))
                                                    @php $photo_path = $user->getFirstMediaUrl('profile_photo', 'thumb')@endphp
                                                @else
                                                    @php $photo_path = "https://invest.chainraise.io/assets/images/account/male_user.png";  @endphp
                                                @endif
                                                <img src="{{ $photo_path }}" class="h-75 align-self-end" alt="" style="width: 40px">
                                            </span>
                                        </th> 
                                        <th class="ps-9"> 
                                            <a href="{{ route('user.details',$user->id)}}" class="text-dark  text-hover-primary d-block mb-1 fs-6"> 
                                                {{ $user->name}}
                                                @if($user->userDetail) {{ $user->userDetail->middle_name }} @endif
                                            </a> 
                                         </th> 
                                         
                                         <th class="ps-9"> 
                                            <a href="#" class="text-dark  text-hover-primary d-block mb-1 fs-6"> {{ ucfirst($user->roles->pluck('name')->implode(' '))  }} </a>
                                         </th> 
                                         <th class="ps-9"> 
                                            @if($user->kyc) {{ $user->kyc->kyc_level}} @else -- @endif
                                         </th> 
                                         
                                         <th class="ps-9"> 
                                        -
                                         </th> 
                                         <th class="ps-9"> 
                                            {{ $user->created_at->diffforhumans()}}
                                          </th> 
                                          <th class="ps-9"> 
                                            <a href="#" class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3 deleteUser"
                                             @if(Auth::user()->id ==  $user->id ) disabled @endif
                                             data-id="{{  $user->id  }}" >
                                             <i class="la la-trash fs-3 text-danger"></i>
                                            </a>
                                            @if($user->roles->pluck('name')->implode(' ') == 'issuer')
                                                <a href="#" class="btn btn-icon btn-color-muted btn-bg-light btn-active-color-primary btn-sm me-3" title="Update KYC/AML Status" >
                                                    <input type="checkbox" 
                                                    @if($user->check_kyc == true) @checked(true)  @else @checked(false) @endif
                                                    class="update_aml_status" data-id="{{  $user->id }}">  
                                                </a>
                                            @endif
                                           </th> 
                                </tr>
                                    @endforeach

                                  
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                           </div>
                                <!--end::Table-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--begin::Table container-->
                    
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
        </div>
        <!--end::Content container-->
    </div>
</div>

 @include('user.partials.quick-actions')
@endsection
@section('page_js')

    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('.deleteUser').click(function() {
            var id = $(this).data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            Swal.fire({
                title: "Are you sure to delete this user?",
                text: "This action can't undo are you sure to delete?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes Delete"
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: "{{ route('user.delete')}}",
                        method: "POST",
                        data: {
                            id: id, 
                        },
                        success: function(result) {
                            if(result.status == true){
                                toastr.success(result.message, "Success");
                                location.reload();
                            }else{
                                toastr.error(result.message, "Error");
                            }
                        }
                    });
                     
                }




            });

        });
       
        
     </script>

     <script>
         var checked_values = [];
       $('body').on('click','.multi_select',function(){
           if($('.multi_select').is(':checked')){
            $('.show_on_multi_check').removeClass('d-none');
            checked_values = [];
            $("input:checkbox[name=user_check]:checked").each(function(){
                checked_values.push($(this).val());
            });
            console.log(checked_values);
            $('.user_ids').val(checked_values);
           } else{
            $('.show_on_multi_check').addClass('d-none');
           }
       });

       $('body').on('click','#update_setting_form_button',function(event){
            event.preventDefault();
            var form_data = $(this)
            $.ajax({
                url: "{{ route('user.info.update.trust.setting') }}",
                method: "POST",
                data: $('#update_setting_form').serialize(),
                success: function(result) {
                    
                }
            });
       });

       $('body').on('click','#upload_documents',function(event){
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var form = $('#update_document_form')[0];
            var data = new FormData(form);
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "{{ route('user.info.update.document') }}",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 800000,
                success: function(result) {
                    
                }
            });
       });
       
       $('body').on('click','#action-upload-document',function(event){
            $('#user_ids').val(checked_values);
       })

       $('body').on('click','#action-upload-e-document',function(event){
            $('.user_ids').val(checked_values);
       })

       $('body').on('click','.e_sign', function() {
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
                        $('select[name="template"]').append(` <option value="`+item.template_id+`"> `+item.template_name+` </option>`);
                    });
                }
            });
        });
        $('body').on('submit','#send_email_form',function(event){
        
            if ($('.summernote').summernote('isEmpty')) {
                    toastr.error('Required fileds are missing', "Error");
                   return false;
            }
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            var form = $('#send_email_form')[0];
            var data = new FormData(form);
            $('#sendEmailBtn').prop('disabled',true);
            $('#sendEmailBtn').html('Loading ...');
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "{{ route('user.info.invite.email') }}",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 800000,
                success: function(result) {
                    if(result.status==true){ 
                        $('.dismiss').click();
                        toastr.success(result.message, "Success");
                    }
                }
            });

        });
        $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Please Enter Your Content Here  ....',
                tabsize: 2,
                height: 130
            });
            
        });

        $('body').on('submit','#send_email_form',function(event){
            if ($('.summernote').summernote('isEmpty')) {
                    toastr.error('Required fileds are missing', "Error");
                return false;
            }
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var form = $('#send_email_form')[0];
            var data = new FormData(form);
            $('#sendEmailBtn').prop('disabled',true);
            $('#sendEmailBtn').html('Loading ...');
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "{{ route('user.info.invite.email') }}",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 800000,
                success: function(result) {
                    if(result.status==true){ 
                        $('.dismiss').click();
                        toastr.success(result.message, "Success");
                    }
                }
            });
        });

        $('body').on('submit','#upload_document_form',function(event){
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var form = $('#upload_document_form')[0];
            var data = new FormData(form);
            $('#document_upload_btn').prop('disabled',true);
            $('#document_upload_btn').html('Loading ...');
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "{{ route('user.info.update.document') }}",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 800000,
                success: function(result) {
                    $('#document_upload_btn').prop('disabled',false);
                    $('#document_upload_btn').html('Upload Document');
                    if(result.status == true){
                        $('.dismiss').click();
                        toastr.success(result.message, "Success");
                        
                    }else{
                        toastr.error(result.message, "Error");
                    }
                },
                error:function(result){
                    $('#document_upload_btn').prop('disabled',false);
                    $('#document_upload_btn').html('Upload Document');
                    toastr.error(result.message, "Error");
                   
                }
            });
        });
        $('body').on('submit','#upload_e_sign_document_form',function(event){
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }); 
            var form = $('#upload_e_sign_document_form')[0];
            var data = new FormData(form);
            $('#e_document_upload_btn').prop('disabled',true);
            $('#e_document_upload_btn').html('Loading ...');
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "{{ route('user.info.e.document') }}",
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 800000,
                success: function(result) {
                    $('#e_document_upload_btn').prop('disabled',false);
                    $('#e_document_upload_btn').html('Upload Document');
                    if(result.status == true){
                        $('.dismiss').click();
                        toastr.success(result.message, "Success");
                        
                    }else{
                        toastr.error(result.message, "Error");
                    }
                },
                error:function(result){
                    $('#document_upload_btn').prop('disabled',false);
                    $('#document_upload_btn').html('Upload Document');
                    toastr.error(result.message, "Error");
                   
                }
            });
        });
        

    </script>
    <script>
        function exportTasks(_this) {
            let _url = $(_this).data('href');
            window.location.href = _url;
        }

        $('#action-send-email').click(function(){
            var form = $('#send_email_form')[0].reset();
            $('.summernote').summernote('reset');
            $('#sendEmailBtn').prop('disabled',false);
            $('#sendEmailBtn').html('Send Email');
            
        });

        $('body').on('click','.update_aml_status', function(){ 
            var userId = $(this).data('id');
            var url = "{{ route('user.update.kyc.check', ['id' => ':userId']) }}";
            url = url.replace(':userId', userId); 
            $.ajax({
                url: url,
                method: 'GET', 
                success: function(response) {
                     if(response.status == true){ 
                        toastr.success('KYC / AML Status Has Been Updated',  "Success");
                        if(response.data == 'Disabled'){
                            $('.update_aml_status').prop('checked',false);
                        } else{
                            $('.update_aml_status').prop('checked',true);
                        }
                       
                        
                     }
                }
            });
        });
        
    </script>

@endsection
