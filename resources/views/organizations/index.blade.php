@extends('layouts.app')
@section('title', 'Organizations')
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
                            Organizations
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
                        <h3 class="card-label"> Organizations</h3>
                    </div>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm  btn-color-primary btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#create_organization">
                           Create Organizations
                        </button>
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
                                <th>Category</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($organizations as $organization)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $organization->name }}</td>
                                <td> {{ $organization->category }}  </td>
                                <td><span class="label label-inline @if($organization->status == 'active')label-light-primary @else label-light-danger @endif font-weight-bold"> {{ ucfirst($organization->status) }}  </span></td>
                                <td>
                                    <a href='#' class='editOrganization btn btn-sm btn-icon btn-light-warning btn-square'
                                    data-bs-toggle="modal" data-bs-target="#modal-editOrganization" data-id="{{$organization->id }}"
                                    data-name="{{$organization->name }}" data-category="{{$organization->category }}"
                                    data-status="{{$organization->status }}">
                                        <i class='icon-1x text-dark-5 fa fa-pencil'></i>
                                    </a>

                                    <a href='#' class='btn btn-sm btn-icon btn-light-danger btn-square' onclick="deleteOrganization({{$organization->id}})">
                                        <i class='icon-1x text-dark-5 fa fa-trash'></i>
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
 

<!-- Modal-->
@include('organizations.partials.index')
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
