    <!-- Modal-->
    <div class="modal fade" id="modal-addUser" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Add User </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form class="form" method="post" action="#">
                    <div class="modal-body">
                        <div class="card card-custom">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for=""> Name </label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Email Address </label>
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for=""> Password </label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            <!--end::Form-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold btn-square"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold btn-square">Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


        <!-- Modal-->
        <div class="modal fade" id="modal-editUser" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit User </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form class="form" method="post" action="{{ route('user.update') }}">
                    <div class="modal-body">
                        <div class="card card-custom">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for=""> Name </label>
                                    <input type="hidden" class="form-control" placeholder="Name" name="id" required id="user-id">
                                    <input type="text" class="form-control" placeholder="Name" name="name" required id="user-name">
                                </div>
                                <div class="form-group">
                                    <label for=""> Email Address </label>
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" required id="user-email">
                                </div>

                                <div class="form-group">
                                    <label for=""> Status </label>
                                    <select class="form-control" name="status" id="user-status">
                                            <option value="active"> Active </option>
                                            <option value="inactive"> In Active </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for=""> Password </label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                    <small class="text-warning"> Set the password field empty if you don't want to change the password </small>
                                </div>
                            </div>
                            <!--end::Form-->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold btn-square"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary font-weight-bold btn-square">Update User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>