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
                                <div class="stepper-item " data-kt-stepper-element="nav">
                                    <h3 class="stepper-title">Account Type</h3>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title"> Verify Identity </h3>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
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
                            <div class="mx-auto mw-1000px w-100 pt-6 pb-10 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_create_account_form">
                               
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <h5 class="fw-bold d-flex align-items-center text-dark">
                                            Investment Limits
                                        </h5>
                                        <div class="text-muted fw-semibold fs-7">
                                            Have you made any investments in <a href=""> equity crowdfunding (Reg
                                                CF) offerings </a> on any platform in the past 12 months (including
                                            ChainRaise)?
                                        </div>
                                        <form method="get" enctype="multipart/form-data" action="{{ route('invest.step.four')}}">
                                            @csrf
                                            <input type="hidden" name="type" value="investor" />
                                            <input type="hidden" name="external_account" value="{{ $external_account }}" />
                                            <input type="hidden" name="investment_amount" value="{{ $investment_amount }}" />
                                            <input type="hidden" name="offer_id" value="{{ $offer_id }}" />
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label class="mt-5 mb-10 d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
                                                                                fill="currentColor"></path>
                                                                            <path
                                                                                d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">Yes</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input investment_limit" type="radio"
                                                                name="category" value="yes" required />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <label class="mb-10 d-flex flex-stack mb-5 cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3"
                                                                                d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
                                                                                fill="currentColor"></path>
                                                                            <path
                                                                                d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
                                                                                fill="currentColor"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bold fs-6">No</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input investment_limit" type="radio"
                                                                name="category" value="no" required />
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <div class="crowdfunding_wrapper row mb-4 d-none">
                                                        <div class="col-lg-12">
                                                            <label for="" class="mb-3"> Total Amount Invested in
                                                                Crowdfunding Offerings </label>
                                                            <input type="text" class="form-control" name=""
                                                                id=""
                                                                placeholder="Total Amount Invested in Crowdfunding Offerings">
                                                        </div>
                                                    </div>
                                                    <div class="annual_income_wrapper row mb-4 d-none">
                                                        <div class="col-lg-12 text-center">
                                                            <label for="">
                                                                Do you confirm that either your annual income or net worth are
                                                                greater than US $60,000.00?
                                                            </label>
                                                            <br> <br>
                                                            <input type="radio" name="net_worth" class="net_worth"
                                                                value="yes"> Yes, I confirm this is true
                                                            &nbsp;&nbsp;&nbsp;
                                                            <input type="radio" name="net_worth" class="net_worth"
                                                                value="no"> No, decrease my investment amount
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4 net_worth_form d-none">
                                                        <div class="col-lg-10">
                                                            <label for="" class="mb-4"> Update Investment Amount
                                                            </label>
                                                            <input type="text" class="form-control" name=""
                                                                id="" value="300">
                                                        </div>
                                                        <div class="col-lg-2 pt-10">
                                                            <button class="btn btn-md btn-dark no-radius"> UPDATE </button>
                                                        </div>
                                                        <div class="col-lg-12 pt-3 fw-bold text-center"
                                                            style="color:#b73d3d!important">
                                                            After updating, please review the above question again, and if now
                                                            true, click "Yes, I confirm this is true".
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4 d-none  annual_income_note text-center">
                                                        <div class="col-lg-12">
                                                            <small>
                                                                A person's annual income and net worth may be calculated jointly
                                                                with that person's spouse; however, when such a joint
                                                                calculation is used, the aggregate investment of the investor
                                                                spouses may not exceed the limit that would apply to an
                                                                individual investor at that income or net worth level.
                                                            </small>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4 text-center">
                                                        <div class="col-lg-12" style="text-align: right">
                                                            <button type="submit" class="btn btn-dark btn-sm no-radius">
                                                                Next
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
			$('.nationality').val('{{ $user->identityVerification->nationality  }}')
			 
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
