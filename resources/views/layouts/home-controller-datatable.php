if($request->ajax()){
    return Datatables::of(User::query())
    ->addIndexColumn()
    ->addColumn('account_type',function($user){
        return $user->roles->pluck('name')[0] ?? '';   
    })
    ->addColumn('actions', function ($user) {
        return "
        <a href='#' class='edit-user btn btn-sm btn-icon btn-light-warning btn-square'
        data-toggle='modal' data-target='#modal-editUser' data-id='$user->id'
        data-name='$user->name' data-email='$user->email'
        data-status='$user->status'>
            <i class='icon-1x text-dark-5 flaticon-edit'></i>
        </a>
        
        <a href='#' class='btn btn-sm btn-icon btn-light-danger btn-square'
        onclick='deleteUser($user->id)'>
         <i class='icon-1x text-dark-5 flaticon-delete'></i>
        </a> ";


    })
    ->editColumn('status', function ($user) {
        if($user->status == 'active'){
            return '<span class="label label-inline label-light-primary    font-weight-bold">' . ucfirst($user->status) .' </span>';
        }else{
            return '<span class="label label-inline  label-light-danger font-weight-bold">' .  ucfirst($user->status) .' </span>';
        }
    })
    ->rawColumns(['actions','status'])
    ->make(true);
}