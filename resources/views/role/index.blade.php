@extends('layouts.app')
@section('title', 'Roles')
@section('page_head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('page_content')

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
                            Roles
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
                        <h3 class="card-label"> Roles</h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="#" class="btn-square btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#role_model">
                           Create Role
                        </a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-sm" id="organizations-table">
                        <thead>
                            <tr>
                                <th>S#</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>
                                        {{ $loop->iteration}}
                                    </td>
                                    <td>
                                        {{ $role->name}}
                                    </td>
                                    <td>
                                        -
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
 

    <div class="modal fade" id="role_model" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Create Role </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form class="form" method="post" action="{{ route('role.save') }}">
                <div class="modal-body">
                    <div class="card card-custom">
                            @csrf
                         <div class="card-body">
                            <div class="row">
                                <div class="form-group col-lg-12">    
                                    <label for=""> Name </label>
                                    <input type="text" class="form-control" placeholder="Name" required name="name">
                                </div>
                            </div>
                         </div>
                        <!--end::Form-->
                       </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold btn-square">Create Role</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    



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
         
         $("#organizations-table").on("click", ".editOrganization", function(e) {
             
            var id = $(this).data('id');
            var name = $(this).data('name');
            var category = $(this).data('category');
            var status = $(this).data('status');
            $('#organization-id').val(id);
            $('#organization-name').val(name);
            $('#organization-category').val(category);
            $('#organization-status').val(status);
        });
        function deleteOrganization(id) {
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
                    var url = '{{ route('organizations.delete') }}';
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
