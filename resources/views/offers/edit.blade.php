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

                        <li class="breadcrumb-item">
                            Edit
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card card-custom">
                
                <div class="card-body">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Update Offer </h5>
                            @if ($errors->any())
                                <div>
                                    @foreach ($errors->all() as $error)
                                        <div class="fv-plugins-message-container invalid-feedback mb-3 text-center">
                                            <div data-field="email" data-validator="notEmpty"> {{ $error }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <br>
                            @endif
                            
                        </div>
                        <form class="form" method="post" action="{{ route('offers.update')}}"  enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="card card-custom">
                                        @csrf
                                        <input type="hidden" class="form-control"  name="id" value="{{ $offer->id}}" required>
                                    <div class="card-body">
                                        <div class="row mb-4" >
                                            <div class="form-group col-lg-6">
                                                <label for=""> Name <span class="text-danger"> *</span></label>
                                                <input type="text"  name="name" class="form-control" value="{{ $offer->name}}" required>
                                            </div>
            
                                            <div class="form-group col-lg-6">
                                                <label for=""> Slug  </label>
                                                <input type="" class="form-control" placeholder="Slug" name="slug" value="{{ $offer->slug}}" >
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="form-group col-lg-6">
                                                <label for=""> Minimum Investment <span class="text-danger"> *</span> </label>
                                                <input type="number" class="form-control" placeholder="Minimum Investment" name="min_investment" value="{{ $offer->min_investment}}"  required>
                                            </div>
            
                                            <div class="form-group col-lg-6">
                                                <label for=""> Goal  <span class="text-danger"> *</span></label>
                                                <input type="" class="form-control" placeholder="Goal" name="goal"  required value="{{ $offer->goal}}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="form-group col-lg-6">
                                                <label for=""> Pledged <span class="text-danger"> *</span></label>
                                                <input type="text" class="form-control" placeholder="Pledged" name="pledged"  required value="{{ $offer->pledged}}">
                                            </div>
            
                                            <div class="form-group col-lg-6">
                                                <label for=""> Max Raise  <span class="text-danger"> *</span></label>
                                                <input type="number" class="form-control" placeholder="Max Raise*" name="max_raise" required value="{{ $offer->max_raise}}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="form-group col-lg-6">
                                                <label for=""> Price Per Unit </label>
                                                <input type="number" class="form-control" placeholder="Price Per Unit" name="price_per_unit" value="{{ $offer->price_per_unit}}">
                                            </div>
            
                                            <div class="form-group col-lg-6">
                                                <label for=""> Industry  <span class="text-danger"> *</span> </label>
                                                <input type="" class="form-control" placeholder="Industry" name="industry" value="{{ $offer->industry}}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="form-group col-lg-6">
                                                <label for=""> Disclosure <span class="text-danger"> *</span> </label>
                                                <input type="text" class="form-control" placeholder="Disclosure" name="disclosure" value="{{ $offer->disclosure}}">
                                            </div>
            
                                            <div class="form-group col-lg-6">
                                                <label for=""> Type  <span class="text-danger"> *</span></label>
                                                <input type="" class="form-control" placeholder="Type" name="type" value="{{ $offer->type}}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="form-group col-lg-6">
                                                <label for=""> Start Time <span class="text-danger"> *</span> </label>
                                                <input type="date" class="form-control" placeholder="Start Date" name="start_time" value="{{ $offer->start_time}}">
                                            </div>
            
                                            <div class="form-group col-lg-6">
                                                <label for=""> End Time <span class="text-danger"> *</span>  </label>
                                                <input type="date" class="form-control" placeholder="End Date" name="end_time" value="{{ $offer->end_time}}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="form-group col-lg-6">
                                                <label for=""> Organizations  <span class="text-danger"> *</span> </label>
                                                <select name="issuer"  class="form-control" required>
                                                        <option value="" selected disabled > Select Organization </option>
                                                        @foreach($issuers as $issuer)
                                                            <option value="{{ $issuer->id }}" > {{ ucfirst($issuer->name)}} </option>
                                                        @endforeach
                                                </select>
                                            </div>
            
                                            <div class="form-group col-lg-6">
                                                <label for=""> Summary  </label>
                                                <textarea type="" class="form-control" placeholder="Summary" name="summary">{{ $offer->summary}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="form-group col-lg-6">    
                                                <label for=""> Short Description </label>
                                                <textarea  class="form-control" placeholder="Short Description" name="short_description">{{ $offer->short_description}}</textarea>
                                            </div>
            
                                            <div class="form-group col-lg-6">    
                                                <label for=""> Description  </label>
                                                <textarea class="form-control" placeholder="Description" name="description">{{ $offer->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="form-group col-lg-6">
                                                <label for=""> Logo </label> <br>
                                                <input type="file" name="logo"/>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">  Banner </label> <br>
                                                <input type="file" name="banner"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="" class="btn-sm btn btn-light-primary font-weight-bold" >Close</a>
                                <button type="submit" class="btn-sm btn btn-primary font-weight-bold btn-square">Update Offer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!--end::Container-->
 
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
