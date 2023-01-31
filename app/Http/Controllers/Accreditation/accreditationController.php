<?php

namespace App\Http\Controllers\Accreditation;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use IMAP;
class accreditationController extends Controller
{
    public function update(Request $request)
    {


        $request->validate([
            'accreditation' => 'required',
            'user_id' => 'required|integer',
        ]);
        $user = User::find($request->user_id);
        $user->accreditation_id = $request->accreditation;
        $user->save();
        return redirect()->back()->with('success',"User accreditation status has been updated");
       
    }
}
