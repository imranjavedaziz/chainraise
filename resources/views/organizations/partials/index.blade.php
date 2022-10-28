<div class="modal fade" id="create_organization" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Create Organization </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form class="form" method="post" action="{{ route('organizations.create') }}">
            <div class="modal-body">
                <div class="card card-custom">
                        @csrf
                     <div class="card-body">
                        <div class="row mb-8">
                            <div class="form-group col-lg-12">    
                                <label for=""> Name </label>
                                <input type="text" class="form-control" placeholder="Name" required name="name">
                            </div>
                        </div>
                        <div class="row mb-8">
                            <div class="form-group col-lg-12">    
                                <label for=""> Category </label>
                                <input type="text" class="form-control" placeholder="Category" required name="category">
                            </div>
                        </div>
                        <div class="row mb-8">
                            <div class="form-group col-lg-12">    
                                <label for=""> Status </label>
                                <select  class="form-control" name="status">
                                        <option value="active"> Active</option>
                                        <option value="inactive"> In Active</option>
                                </select>
                            </div>
                        </div>
                     </div>
                    <!--end::Form-->
                   </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-sm btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" class="btn-sm btn btn-primary font-weight-bold btn-square">Create Organization</button>
            </div>
        </form>
        </div>
    </div>
</div>


        <!-- Modal-->
        <div class="modal fade" id="modal-editOrganization" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Organization </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form class="form" method="post" action="{{ route('organizations.update') }}">
                    <div class="modal-body">
                        <div class="card card-custom">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-lg-12">    
                                        <label for=""> Name </label>
                                        <input type="hidden" class="form-control" placeholder="Name" required name="id" id="organization-id">
                                        <input type="text" class="form-control" placeholder="Name" required name="name" id="organization-name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">    
                                        <label for=""> Category </label>
                                        <input type="text" class="form-control" placeholder="Category" required name="category" id="organization-category">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">    
                                        <label for=""> Status </label>
                                        <select  class="form-control" name="status" id="organization-status">
                                                <option value="active"> Active</option>
                                                <option value="inactive"> In Active</option>
                                        </select>
                                    </div>
                                </div>
                             </div>
                            <!--end::Form-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold btn-square"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold btn-square">Update Organization</button>
                    </div>
                </form>
            </div>
        </div>
    </div>