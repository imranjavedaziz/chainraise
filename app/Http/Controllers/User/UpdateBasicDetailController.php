<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Folder;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateBasicDetailController extends Controller
{
    public function updateDocument(Request $request)
    {
       
        $request->validate([
            //'document' => 'required',
            'name' => 'required',
            'offer' => 'required',
            'sort' => 'required',
            'user_ids' => 'required',
        ]);
        
        $users = explode(',', $request->user_ids);
        $user_count = count($users);
       // $file = $request->hasFile('document');
        //$file = $file->store('somepath');

        

        if($request->has('document')) {
            $fileName = time().'.'.$request->document->extension();   
            $request->document->move(public_path('uploads'), $fileName);
        }
        $path = "http://127.0.0.1:8000/uploads/".$fileName; 
        
  
        foreach($users as $user){
            $user = User::find($user);
            $folder = new Folder;
            $folder->name =  $request->name;
            $folder->offer_id =  $request->offer;
            $folder->sort =  $request->sort;
            $folder->user_id =  $user->id;
            $folder->save();
            if($request->hasFile('document')) {
                $document = new Document;
                $document->name =  $request->name;
                $document->user_id =  $user->id;
                $document->folder_id =  $folder->id;
                $document->offer_id =  $request->offer;
                $document->description =  $request->description; 
                $document->save();
                $document->addMediaFromUrl('https://beta.chainraise.info/manage/storage/3/49dfd984589075283f191270ef1995fb.png')->toMediaCollection('documents');
                
            }
            
            
        }
        //$document->addMediaFromRequest('document')->toMediaCollection('documents');
        
        return redirect()->back()->with('success','Folder has been created');
        
    }
}
