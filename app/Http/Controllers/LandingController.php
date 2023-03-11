<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Landing;


use Auth;

use App\User;

class LandingController extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $landing = DB::table('landing')->get();
        return view('matrix.pages.landing',compact('landing'));
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

              $landing = new Landing;
              $landing->title  = $request->title;
              $landing->description  = $request->description;
              $landing->imag = $filename;
              $landing->save();
               return back()->with("message", " Has been successfully added "); 
     }
     
    public function edit($id)
    {
        $edit = Landing::findOrFail($id);
        return view('matrix.pages.landing_edit',compact('edit'));
    }

     public function update(Request $request, $id)
     {
        
         $services_edit = Landing::findOrFail($id);
         if($file=$request->file('image'))
         {
            $destinationPath ='account/images';
            $filename=$file->move($destinationPath,$file->getClientOriginalName());
            $services_edit->imag = $filename;
         }else{
           $services_edit->imag = $request->url;
         }
          $services_edit->title    = $request->title;
          $services_edit->description  = $request->description;
          $services_edit->save();
         return back()->with("message", " Has been successfully updated ");
     }


    public function destroy(Landing $id)
    {
        $id->delete();
        return back();
    }


}
