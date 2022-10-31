@extends('layouts.app')
@section('title', 'Account Users')
@section('page_name','Listings')
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
                    <div class="card-toolbar">
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
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table align-middle gs-0 gy-4" id="account-table">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold text-muted bg-light">
                                    <th class="min-w-15px"> </th>
                                    <th class="ps-4 min-w-150px rounded-start">Name (User)</th>
                                    <th class="min-w-125px">Account Name</th>
                                    <th class="min-w-125px">Account Type</th>
                                    <th class="min-w-100px">Page <small> Views </small>    </th>
                                    <th class="min-w-150px">Time <small> Spent (s) </small>    </th>
                                    <th class="min-w-140px">Total <small> Events </small>    </th>
                                    <th class="min-w-135px">Last Seen  </th>
                                    <th class="min-w-135px text-left rounded-end">Date  </th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label bg-light">
                                                    @if($user->getFirstMediaUrl('profile_photo', 'thumb'))
                                                        @php $photo_path = $user->getFirstMediaUrl('profile_photo', 'thumb')@endphp
                                                    @else
                                                        @php $photo_path = "https://invest.chainraise.io/assets/images/account/male_user.png";  @endphp
                                                    @endif
                                                    <img src="{{ $photo_path }}" class="h-75 align-self-end" alt="">
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('user.details',$user->id)}}" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"> {{ $user->name}} </a> 
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">   {{ $user->userDetail->middle_name }}</a>
                                    </td>
                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"> {{ ucfirst($user->roles->pluck('name')->implode(' '))}} </a>
                                    </td>

                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"> - </a>
                                    </td>

                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"> - min</a>
                                    </td>

                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6"> - </a>
                                    </td>

                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">10/26/2022</a>
                                    </td>

                                    <td>
                                        <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">   {{ $user->created_at}} </a>
                                    </td>
                                   
                                    
                                </tr>  
                                @endforeach                              
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--begin::Body-->
            </div>
        </div>
        <!--end::Content container-->
    </div>
</div>

 
@endsection
@section('page_js')

    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>
         
        $(function() {
            $('#account-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('user.index') !!}',
                columns: [{
                        data: function(data) {
                            return data.DT_RowIndex;
                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data:function(data){
                                return data.account_type;
                        },name:'account_type'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'actions',
                        name: 'actions'
                    }
                ]
            });
        });
    </script>


    <script>
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
    </script>


@endsection
