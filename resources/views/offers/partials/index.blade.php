<div class="modal fade" id="create_offer" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Create Offer </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" method="post" action="{{ route('offers.create')}}"  enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="card card-custom">
                            @csrf
                        <div class="card-body">
                            <div class="row mb-4" >
                                <div class="form-group col-lg-6">
                                    <label for=""> Name <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for=""> Slug  </label>
                                    <input type="" class="form-control" placeholder="Slug" name="slug" >
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-lg-6">
                                    <label for=""> Minimum Investment <span class="text-danger"> *</span> </label>
                                    <input type="number" class="form-control" placeholder="Minimum Investment" name="min_investment"  required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for=""> Goal  <span class="text-danger"> *</span></label>
                                    <input type="" class="form-control" placeholder="Goal" name="goal"  required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-lg-6">
                                    <label for=""> Pledged <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" placeholder="Pledged" name="pledged"  required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for=""> Max Raise  <span class="text-danger"> *</span></label>
                                    <input type="number" class="form-control" placeholder="Max Raise*" name="max_raise" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-lg-6">
                                    <label for=""> Price Per Unit </label>
                                    <input type="number" class="form-control" placeholder="Price Per Unit" name="price_per_unit">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for=""> Industry  <span class="text-danger"> *</span> </label>
                                    <input type="" class="form-control" placeholder="Industry" name="industry">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-lg-6">
                                    <label for=""> Disclosure <span class="text-danger"> *</span> </label>
                                    <input type="text" class="form-control" placeholder="Disclosure" name="disclosure">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for=""> Type  <span class="text-danger"> *</span></label>
                                    <input type="" class="form-control" placeholder="Type" name="type">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-lg-6">
                                    <label for=""> Start Time <span class="text-danger"> *</span> </label>
                                    <input type="date" class="form-control" placeholder="Start Date" name="start_time">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for=""> End Time <span class="text-danger"> *</span>  </label>
                                    <input type="date" class="form-control" placeholder="End Date" name="end_time">
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
                                    <textarea type="" class="form-control" placeholder="Summary" name="summary"></textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-lg-6">    
                                    <label for=""> Short Description </label>
                                    <textarea  class="form-control" placeholder="Short Description" name="short_description"></textarea>
                                </div>

                                <div class="form-group col-lg-6">    
                                    <label for=""> Description  </label>
                                    <textarea class="form-control" placeholder="Industry" name="description"></textarea>
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
                    <button type="button" class="btn-sm btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn-sm btn btn-primary font-weight-bold btn-square">Create Offer</button>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="modal fade" id="update_offer" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Create Offer </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" method="post" action="{{ route('offers.create')}}" >
                <div class="modal-body">
                    <div class="card card-custom">
                        
                            @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-lg-6">    
                                    <label for=""> Name <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                                </div>

                                <div class="form-group col-lg-6">    
                                    <label for=""> Slug  </label>
                                    <input type="" class="form-control" placeholder="Slug" name="name" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">    
                                    <label for=""> Minimum Investment <span class="text-danger"> *</span> </label>
                                    <input type="text" class="form-control" placeholder="Minimum Investment" name="min_investment"  required>
                                </div>

                                <div class="form-group col-lg-6">    
                                    <label for=""> Goal  <span class="text-danger"> *</span></label>
                                    <input type="" class="form-control" placeholder="Goal" name="goal"  required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">    
                                    <label for=""> Pledged <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" placeholder="Pledged" name="pledged"  required>
                                </div>

                                <div class="form-group col-lg-6">    
                                    <label for=""> Max Raise  <span class="text-danger"> *</span></label>
                                    <input type="" class="form-control" placeholder="Max Raise*" name="max_raise" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">    
                                    <label for=""> Price Per Unit </label>
                                    <input type="text" class="form-control" placeholder="Price Per Unit" name="price_per_unit">
                                </div>

                                <div class="form-group col-lg-6">    
                                    <label for=""> Industry  <span class="text-danger"> *</span> </label>
                                    <input type="" class="form-control" placeholder="Industry" name="industry">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">    
                                    <label for=""> Disclosure <span class="text-danger"> *</span> </label>
                                    <input type="text" class="form-control" placeholder="Disclosure" name="disclosure">
                                </div>

                                <div class="form-group col-lg-6">    
                                    <label for=""> Type  <span class="text-danger"> *</span></label>
                                    <input type="" class="form-control" placeholder="Type" name="type">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">    
                                    <label for=""> Start Time <span class="text-danger"> *</span> </label>
                                    <input type="date" class="form-control" placeholder="Start Date" name="start_time">
                                </div>

                                <div class="form-group col-lg-6">    
                                    <label for=""> End Time <span class="text-danger"> *</span>  </label>
                                    <input type="date" class="form-control" placeholder="End Date" name="end_time">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">    
                                    <label for=""> Organizations  <span class="text-danger"> *</span> </label>
                                    <select name="organization"  class="form-control" required>
                                            <option value="" selected disabled > Select Organization </option>
                                            @foreach($organizations as $organization)
                                                <option value="{{ $organization->id }}" > {{$organization->name}} </option>
                                            @endforeach
                                    </select>
                                    
                                </div>

                                <div class="form-group col-lg-6">    
                                    <label for=""> Summary  </label>
                                    <textarea type="" class="form-control" placeholder="Summary" name="summary"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">    
                                    <label for=""> Short Description </label>
                                    <textarea  class="form-control" placeholder="Short Description" name="short_description"></textarea>
                                </div>

                                <div class="form-group col-lg-6">    
                                    <label for=""> Description  </label>
                                    <textarea class="form-control" placeholder="Industry" name="description"></textarea>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary font-weight-bold btn-square">Create Offer</button>
                </div>
            </form>
        </div>
    </div>
</div>