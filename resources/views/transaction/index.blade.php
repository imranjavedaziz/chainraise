@extends('layouts.app')
@section('title', 'Transactions')
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
                            Transactions
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
                        <h3 class="card-label"> Transactions</h3>
                    </div>
                   
                </div>
                <div class="card-body">
                    <!--begin: Datatables-->
                    <table class="table" id="organizations-table">
                        <thead>
                            <tr>
                                <th>S#</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>KYC</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Payment Method</th>
                                <th>E-Sign</th> 
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach($transactions as $transaction)
                            <tr>
                                 <td> {{ $loop->iteration }} </td>
                                 <td> {{ $transaction->user->name }} </td>
                                 <td> {{ $transaction->offer->name }} </td>
                                 <td> {{ $transaction->funds }} </td>
                                 <td> {{ $transaction->created_at }} </td>
                                 <td> {{ $transaction->kyc_status }} </td>
                                 <td> {{ $transaction->status }} </td>
                                 <td> {{ $transaction->type }} </td>
                                 <td> {{ $transaction->payment_method }} </td>
                                 <td> {{ $transaction->e_sign }} </td> 
                                 <td>   
                                    <i class="fa fa-edit"></i>
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
