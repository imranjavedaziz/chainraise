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
                            <i class="flaticon2-supermarket text-primary"></i>
                        </span>
                        <h3 class="card-label"> Users</h3>
                    </div>
                    <div class="card-toolbar">

                        <a href="#" class="btn-square btn btn-primary font-weight-bolder" data-toggle="modal"
                            data-target="#modal-addUser">
                            Add New
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-sm" id="users-table">
                        <thead>
                            <tr>
                                <th>S#</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $user->name }} </td>
                                    <td> {{ $user->email }} </td>
                                    <td>
                                        <span
                                            class="label label-inline @if ($user->status == 'active') label-light-primary @else label-light-danger @endif font-weight-bold">
                                            {{ ucfirst($user->status) }} </span>
                                    </td>
                                    <td>
                                        <a href='#' class='edit-user btn btn-sm btn-icon btn-light-warning btn-square'
                                            data-toggle="modal" data-target="#modal-editUser" data-id="{{ $user->id }}"
                                            data-name="{{ $user->name }}" data-email="{{ $user->email }}"
                                            data-status="{{ $user->status }}">
                                            <i class='icon-1x text-dark-5 flaticon-edit'></i>
                                        </a>
                                        <a href='#' class='btn btn-sm btn-icon btn-light-danger btn-square'
                                           onclick="deleteUser({{ $user->id }})" >
                                            <i class='icon-1x text-dark-5 flaticon-delete'></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach






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
