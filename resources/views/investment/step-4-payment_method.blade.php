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
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <h3 class="stepper-title"> Investment Limits </h3>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
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
                                        <h5  class="fw-bold d-flex align-items-center text-dark" >
											PAYMENT METHOD
                                        </h5>  
                                       <div class="row">
											<div class="col-lg-12">
												<div class="row">
													<div class="col-lg-2">
														<img src="{{  $offer->getFirstMediaUrl('banner_image', 'thumb') }}" 
														class="img img-thumbnail img-circle"
														alt="">
													</div>
													<div class="col-lg-8">
														<strong class="text-dark">
															{{ $offer->name }}
														</strong>
														 
														<p class="fw-normal">
															{{ $offer->short_description }}
														</p>
														<p class="fw-normal text-success">
                                                            {{ $offer->size }} {{ $offer->base_currency }}
														</p>
													</div>
													<div class="col-lg-2">
														Transaction Summary
														<br>
														<b>
                                                            ${{ $investment_amount }}
														</b>
													</div>
												</div>
                                                <form action="{{ route('invest.step.five') }}" method="get" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="type" value="investor" />
                                                    <input type="hidden" name="external_account" value="{{ $external_account }}" />
                                                    <input type="hidden" name="investment_amount" value="{{ $investment_amount }}" />
                                                    <input type="hidden" name="offer_id" value="{{ $offer_id }}" />
												<div class="row"> 
													<div class="col-lg-12">
														<label class="form-check form-check-custom me-10  mb-5">
															<input class="form-check-input h-20px w-20px" type="checkbox" name="bypass_account_setup" required>
															&nbsp;&nbsp;
															<span class="mat-checkbox-label"><span style="display: none">&nbsp;</span>By checking this box, I,
																the investor, acknowledge
																that I have reviewed the
																Issuer's
																<a _ngcontent-nlk-c373="" target="_blank" href="https://www.sec.gov/cgi-bin/browse-edgar?CIK=0001927195&amp;owner=exclude">Form C and Disclosure
																	Materials</a>, as well as the
																<a _ngcontent-nlk-c373="" target="_blank" href="https://chainraise.io/wp-content/uploads/2022/09/NEW-Educational-Materials-ChainRaise-Portal-LLC-9_28_22.docx.pdf">educational
																	materials</a>
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
																suggestions.</span>
														</label>
														<label class="form-check form-check-custom me-10 mb-5 ">
															<input class="form-check-input h-20px w-20px" type="checkbox" required name="bypass_account_setup">
															&nbsp;&nbsp;
															<span class="mat-checkbox-label"><span style="display: none">&nbsp;</span>
																By checking this box, I, the
																investor, acknowledge that I
																understand I can cancel my
																investment commitment up to
																48 hours before the offer's
																closing deadline. If I have
																made a commitment within
																this 48-hour window, I
																cannot cancel my
																investment.</span>
														</label>
														<label class="form-check form-check-custom me-10 mb-5">
															<input class="form-check-input h-20px w-20px" type="checkbox" required name="bypass_account_setup">
															&nbsp;&nbsp;
															<span class="mat-checkbox-label"><span style="display: none">&nbsp;</span>
																By checking this box, I, the
																investor, acknowledge that
																the securities are subject
																to transfer restrictions and
																that I have reviewed and
																understood these transfer
																restrictions as provided in
																the Portal's .</span>
														</label>
														<label class="form-check form-check-custom me-10 mb-5">
															<input class="form-check-input h-20px w-20px" type="checkbox" required name="bypass_account_setup">
															&nbsp;&nbsp;
															<span class="mat-checkbox-label"><span style="display: none">&nbsp;</span>
																By checking this box, I, the
																investor, acknowledge that I
																have provided truthful and
																accurate representations of
																the documents and
																information requested by the
																Portal.</span>
														</label>
													</div>
                                                    <div class="col-lg-12 " style="text-align: right">
                                                            <button type="submit" class="btn btn-sm btn-dark no-radius">
                                                                Next
                                                            </button>
                                                    </div> 
												</div>
                                                </form>
											</div>
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
