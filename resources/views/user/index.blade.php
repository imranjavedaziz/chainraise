@extends('layouts.app')
@section('title', 'Account Users')
@section('page_head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row mb-6">
                <div class="col-lg-12">
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">

                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Users
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="flaticon2-user text-primary"></i>
                        </span>
                        <h3 class="card-label"> Users</h3>
                    </div>
                    <div class="card-toolbar">

                        {{-- <a href="#" class="btn-square btn btn-primary font-weight-bolder" data-toggle="modal"
                            data-target="#modal-addUser">
                            Add New
                        </a> --}}

                        <div class="btn-group">
                            <button class="btn btn-primary btn-square font-weight-bold btn-sm dropdown-toggle"
                                type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-plus"></i> Add Account
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('user.investor.create') }}">Individual Investor</a>
                                <a class="dropdown-item" href="{{ route('user.issuer.create') }}">Issuer</a>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-sm" id="users-table">
                        <thead>
                            <tr>
                                <th>S#</th>
                                <th>Name(User)</th>
                                <th>Account Name</th>
                                <th>Account Type</th>
                                <th>Page <br> View</th>
                                <th>Time <br> Spent(s)</th>
                                <th> <small> Last Seen</small> </th>
                                <th>Date <br> <small>Created</small></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>

        </div>
        <!--end::Container-->

    </div>


    @include('user.partials.index')
@endsection
@section('page_js')
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

    <script>
        $(function() {
            $('#users-table').DataTable({
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
