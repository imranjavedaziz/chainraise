@extends('layouts.app')
@section('title', 'Offers')
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
                            Offers
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
                        <h3 class="card-label"> Offers</h3>
                    </div>
                    <div class="card-toolbar">
                        
                        <button type="button" class="btn btn-sm  btn-color-primary btn-active-light-primary" data-bs-toggle="modal" data-bs-target="#create_offer">
                           Create Offer
                        </button>
                        
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>S #</th>
                                <th>Name</th>
                                <th>Goal</th>
                                <th>Max Raise</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tbody>
                                @foreach($offers as $offer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $offer->name }}</td>
                                    <td> {{ $offer->goal }} </td>
                                    <td> ${{ $offer->max_raise }} </td>
                                    <td><span class="label label-inline label-light-primary font-weight-bold"> {{ ucfirst($offer->status) }}</span></td>
                                    <td>
                                        <a href='{{ route('offers.edit',$offer->id) }}' class='edit-user btn btn-sm btn-icon btn-light-warning btn-square'
                                            data-id="{{ $offer->id }}">
                                            <i class='icon-1x text-dark-5 fa fa-pencil'></i>
                                        </a>
                                        <a href='#' class='btn btn-sm btn-icon btn-light-danger btn-square'
                                           onclick="deleteOffer({{ $offer->id }})" >
                                            <i class='icon-1x text-dark-5 fa fa-trash'></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
     
                            </tbody>
 
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>

        </div>
        <!--end::Container-->
 
    </div>
 

<!-- Modal-->
@include('offers.partials.index')
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
         function deleteOffer(id) {
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
                    var url = '{{ route('offers.delete') }}';
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
