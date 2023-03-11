<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Services;


use Auth;

use App\User;

class ServicesController extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $services = DB::table('services')->get();
        return view('matrix.pages.services',compact('services'));
    }
    public function restore_trashed()
    {
        $services = Services::withTrashed()->get();
        return view('matrix.pages.services_trashed',compact('services'));
    }
     public function store(Request $request)
    {
      $this->validate(request(),[
       'title'=> 'required',
       'description'=> 'required',
       'image'=> 'required',
      ]);
      
       $file=$request->file('image');
       $destinationPath ='account/images';
       $filename=$file->move($destinationPath,$file->getClientOriginalName());

              $services = new Services;
              $services->title  = $request->title;
              $services->description  = $request->description;
              $services->image = $filename;
              $services->save();
               return back()->with("message", " Has been successfully added "); 
     }
     
    public function edit($id)
    {
        $edit = Services::findOrFail($id);
        return view('matrix.pages.services_edit',compact('edit'));
    }

     public function update(Request $request, $id)
     {
        
     

         $services_edit = Services::findOrFail($id);
         if($file=$request->file('image'))
         {
            $destinationPath ='account/images';
            $filename=$file->move($destinationPath,$file->getClientOriginalName());
            $services_edit->image = $filename;
         }else{
           $services_edit->image = $request->url;
         }
          $services_edit->title    = $request->title;
          $services_edit->description  = $request->description;
          $services_edit->save();
         return back()->with("message", " Has been successfully updated ");
     }


    public function destroy(Services $id)
    {
        $id->delete();
        return back();
    }


    public function restore($id)
    {
        Services::withTrashed()->find($id)->restore();
        return back();
    }
}
