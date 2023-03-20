@extends('layouts.app')
@section('title', 'Account Users')
@section('page_name', 'Listings')
@section('page_head')

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
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Active Offers</h1>
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
                        <li class="breadcrumb-item text-muted">Active Offers</li>
                       
                         
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-xxl">

                <div class="row">
                    @hasrole('admin|issuer')
                        <div class="col-xl-12 text-right mb-4 " style="text-align:right">
                            <a href="{{ route('offers.create') }}" class="btn-dark no-radius btn btn-primary btn-sm btn-square"> Create New Offer</a>
                        </div>
                    @endhasrole
                    @foreach ($offers as $offer)
                        <div class="col-xl-4 col-lg-4">
                           
                            <div class="card card-xl-stretch mb-xl-8 no-radius">
                                <div class="card-body p-0">
                                  
                                    <div class="px-9 pt-7 card-rounded h-275px w-100"
                                        @if ($offer->getFirstMediaUrl('offer_image', 'thumb') != null) 
                                            style="background-image: url('{{ $offer->getFirstMediaUrl('offer_image', 'thumb') }}');background-size:100%"
                                        @else
                                            style="background-image: url('')" 
                                        @endif
                                        >
                                        <div class="d-flex text-center flex-column text-white pt-8">
                                        <span class="fs-2x pt-1">
                                            <small class="badge-light-dark fs-0.5x no-radius"
                                                style="font-size:20px;padding:8px;border-radius:6px;"> {{ $offer->name }}
                                            </small>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1 no-radius"
                                        style="margin-top: -100px">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px w-40px me-5">
                                                <span class="symbol-label bg-lighten">
                                                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
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
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#"   class="fs-5 text-gray-800 text-hover-primary fw-bold">Name</a>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-bold no-radius"> {{ $offer->name }}</div>
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px w-40px me-5">
                                                <span class="symbol-label bg-lighten">
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="2" y="2" width="9" height="9"
                                                                rx="2" fill="currentColor"></rect>
                                                            <rect opacity="0.3" x="13" y="2" width="9"
                                                                height="9" rx="2" fill="currentColor"></rect>
                                                            <rect opacity="0.3" x="13" y="13" width="9"
                                                                height="9" rx="2" fill="currentColor"></rect>
                                                            <rect opacity="0.3" x="2" y="13" width="9"
                                                                height="9" rx="2" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                <!--begin::Title-->
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">
                                                        Offering Size </a>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-bold">{{ $offer->size }} {{ $offer->base_currency }}</div> 
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px w-40px me-5">
                                                <span class="symbol-label bg-lighten">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
                                                            <path
                                                                d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z"
                                                                fill="#000000" />
                                                            <path
                                                                d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                <!--begin::Title-->
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">
                                                        Create Date </a>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-bold"> {{ $offer->created_at->diffForHumans() }} </div>

                                                </div>
                                                <!--end::Label-->
                                            </div> 
                                            <!--end::Description-->
                                        </div>
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px w-40px me-5">
                                                <span class="symbol-label bg-lighten">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
                                                            <path
                                                                d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z"
                                                                fill="#000000" />
                                                            <path
                                                                d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z"
                                                                fill="#000000" opacity="0.3" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div> 
                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                <!--begin::Title-->
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">
                                                        Last Updated
                                                    </a>
                                                </div> 
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-bold"> {{ $offer->updated_at->diffForHumans() }} </div> 
                                                </div> 
                                            </div>  
                                            
                                        </div>
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-45px w-40px me-5">
                                                <span class="symbol-label bg-lighten">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor"></path>
                                                            <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div> 
                                            <div class="d-flex align-items-center flex-wrap w-100">
                                                <!--begin::Title-->
                                                <div class="mb-1 pe-3 flex-grow-1">
                                                    <a href="#" class="fs-5 text-gray-800 text-hover-primary fw-bold">
                                                        KYC/AML Status
                                                    </a>
                                                </div> 
                                                <div class="d-flex align-items-center">
                                                    <div class="fw-bold"> @if($offer->user->check_kyc == false) <span class="text-danger">Pending</span>  @else <span class="text-success">Approved</span> @endif </div> 
                                                </div> 
                                            </div>  
                                            
                                        </div>
                                        @hasrole('admin|issuer')
                                            <div class="row">
                                                <div class="col-lg-6" style="text-align: right;">
                                                    <a href="{{ route('offers.edit',$offer->id) }}" class="btn-light-warning no-radius  btn badge py-3 px-4 fs-7 badge-light-warning">  <i class="la la-edit"></i> </a>
                                                </div>
                                                <div class="col-lg-6 text-left">
                                                    <button class="btn-light-danger no-radius btn badge py-3 px-4 fs-7 badge-light-danger deleteOffer" data-id="{{ $offer->id }}">
                                                            <i class="la la-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        @endhasrole
                                        @hasrole('investor')
                                            <div class="row">
                                                <div class="col-lg-12" style="text-align: center">
                                                    <a href="{{ route('dashboard') }}" class="btn btn-info btn-sm">  <i class="la la-eye"></i> </a>
                                                </div>
                                            </div>
                                        @endhasrole
                                    </div> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--end::Content container-->
    </div>
    </div>


@endsection
@section('page_js')

    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script></script>
    <script>
        $('.deleteOffer').click(function() {
            var id = $(this).data('id'); 
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            Swal.fire({
                title: "Are you sure to delete this file?",
                text: "This action can't undo are you sure to delete?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes Delete"
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: "{{ route('offers.delete') }}",
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


@endsection
