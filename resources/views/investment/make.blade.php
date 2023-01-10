@extends('layouts.app')
@section('title', 'Dashboard')
@section('page_name', 'Dashboard')
@section('page_head')
    <style>
        .offering_row{
            background-color: #fff;
            padding:10px 20px;
            box-shadow: 20px 20px 50px grey;"
        }
        .offering_row:hover{
            box-shadow: 5px 5px 70px grey;"
        }
        .stepper.stepper-links .stepper-nav .stepper-item .stepper-title{
            font-size: 1.1rem !important;
        }
       
        .cards_section{
            padding:24px 10px!important;
        }
        .fw-normal{
            font-weight: normal!important;
        }
        .form-check-input{
            width: 1.2em!important;
            height: 1.2em!important;
        }
        input[type="text"]{
            border-radius: 0!important;
        }
        input[type="number"]{
            border-radius: 0!important;
        }
		.upload_document:hover{
			cursor: pointer;
		}
    </style>
@endsection
@section('page_content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard
                    </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        
                        <li class="breadcrumb-item text-muted">
                           <a href="{{ route('dashboard') }}">  Dashboard </a> 
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item">
                            <li class="breadcrumb-item text-muted">Make Investment</li>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item">
                            <li class="breadcrumb-item text-muted"> Account Type </li>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item">
                            <li class="breadcrumb-item text-muted"> Verify Identity </li>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <!--begin::Card-->
                <div class="card" style="box-shadow: 16px 12px 75px -5px rgba(110,98,98,0.58);">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Stepper-->
                        <div class="stepper stepper-links d-flex flex-column pt-8" id="kt_create_account_stepper" data-kt-stepper="true">
                            <!--begin::Nav-->
                            <div class="stepper-nav mb-5">
                                <!--begin::Step 1-->
                                <div class="stepper-item  " data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Account Type</h3>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title"> Verify Identity </h3>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title"> Investment Limits </h3>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title"> Payment Method </h3>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Connect Bank</h3>
                                </div>

                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title"> Sign Subscription Agreement and Token Grant </h3>
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                            <!--begin::Form-->
                            <div class="mx-auto mw-1000px w-100 pt-6 pb-10 fv-plugins-bootstrap5 fv-plugins-framework" id="">
                               
                                <div > 
                                    <div class="w-100"> 
                                        <h5  class="fw-bold d-flex align-items-center text-dark" >
                                            VERIFY IDENTITY
                                        </h5> 
                                        <div class="text-muted fw-semibold fs-7">
                                            ChainRaise has implemented this verification step to stay legally compliant with KYC/AML (Know Your Customer/Anti-Money Laundering) regulations. This is an additional measure to ensure against accepting fraudulent contributions. All investors must complete the KYC/AML form before making any investments through ChainRaise.
                                        </div> 

                                        <div class="d-flex flex-stack pt-15">
                                    
                                            <div class=" row">
                                                <div class="col-lg-12 text-right">

                                                    <a href="{{ route('invest.verify.identity') }}" class="btn btn-sm btn-dark no-radius">
                                                        Account Type
                                                    </a>

                                                    <a href="{{ route('invest.verify.identity') }}" class="btn btn-sm btn-dark no-radius">
                                                        Continue 
                                                        <span class="svg-icon svg-icon-4 ms-1 me-0">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"></rect>
                                                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                       
                                    </div> 
                                </div> 
                                
                                
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Stepper-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
        </div>
        
    </div>


   

@endsection
@section('page_js')

	 
		<script src="{{asset('assets/js/custom/utilities/modals/create-account.js')}}"></script> 
		 <script>	
			$('.update_profile_photo').click(function(){
					var imgBtnWrapper = $(this).closest('.change_photo_wrapper');
					imgBtnWrapper.find('.change_photo').click();
			});  
		 </script>

		 <script>
			 

			 
			$(".electronic_delivery").click(function() {
				if($(this).prop('checked')) {
					$('.notice').addClass('d-none');
				} else {
					$('.notice').removeClass('d-none');
				}
			});
			 
			 
		 </script>
		 <script>
			$('.investment_limit').click(function(){
				if($(this).val() == 'yes'){
					$('.crowdfunding_wrapper').removeClass('d-none');
					$('.annual_income_wrapper').addClass('d-none');
					$('.annual_income_note').addClass('d-none');
				}else{
					$('.crowdfunding_wrapper').addClass('d-none');
					$('.annual_income_wrapper').removeClass('d-none');
					$('.annual_income_note').removeClass('d-none');
				}
			});
			$('.net_worth').click(function(){
				if($(this).val() == 'no'){
					$('.net_worth_form').removeClass('d-none');
				}else{
					$('.net_worth_form').addClass('d-none');
				}
			});
			$('.connect_bank').click(function(){
			   
				if($(this).val() == 'wire'){
					$('.wire_transfer').removeClass('d-none');
					$('.connect_bank_account').addClass('d-none');
				}else if($(this).val() == 'bank'){
					$('.wire_transfer').addClass('d-none');
					$('.connect_bank_account').removeClass('d-none');
				}
			});



		</script>
  
     <script type="text/javascript">
        
        $(document).ready(function(){
              $('#kyc_form').on('submit', function(event){
                    event.preventDefault();

                    var url = $('#kyc_form').attr('data-action');

                    $.ajax({
                        url: url,
                        method: 'POST',
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success:function(response)
                        {
                            if(response.status == true){
                                
                            }
                        },
                        
                    });
                });

            });
    </script>
		 


@endsection
