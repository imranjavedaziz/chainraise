<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
class RoleController extends Controller
{
    public function index()
    {
        $roles = DB::table('roles')->get();
        return view('role.index',compact('roles'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles'
        ]);
        $role = Role::create(['name' => $request->name]);
        return redirect()->back()->with('succss','New role ahs been created');

    }
}
