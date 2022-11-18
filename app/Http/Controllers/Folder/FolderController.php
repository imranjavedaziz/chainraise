<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:folders',
           // 'parent_id' => 'integer',
            'offer' => 'integer',
            'sort' => 'required',
            'user_id' => 'required',
        ]);
      
        $folder = new Folder;
        $folder->name =  $request->name;
        $folder->offer_id =  $request->offer;
        $folder->sort =  $request->sort;
        $folder->user_id =  $request->user_id;
        $folder->save();
        return redirect()->back()->with('success','Folder has been created');
    }

    public function uploadFile(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'user_id' => 'required',
            'folder_id' => 'required',
            //'description' => 'required',
            //'offer' => 'required',
        ]);
         if($request->has('file')){
            $document = new Document;
            $document->name =  $request->name;
            $document->user_id =  $request->user_id;
            $document->folder_id =  $request->folder_id;
            $document->offer_id =  $request->offer;
            $document->description =  $request->description; 
            $document->save();
            $document->addMediaFromRequest('file')->toMediaCollection('documents');
        }
         
        return redirect()->back()->with('success','File has been uploaded');
    }

    public function getFiles(Request $request)
    {
       $documents = Document::where('folder_id',$request->folder_id)->get();
       return response([
        'status' => true,
        'data'=>$documents
       ]);
    }


    
}
