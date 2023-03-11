<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Testimonil;


use Auth;

use App\User;
class TestimonilController extends Controller
{ public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $testimonils = DB::table('testimonil')->get();
        return view('matrix.pages.testimonil',compact('testimonils'));
    }
    public function restore_trashed()
    {
        $testimonils = Testimonil::withTrashed()->get();
        return view('matrix.pages.testimonil_trashed',compact('testimonils'));
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

              $testimonil = new Testimonil;
              $testimonil->title  = $request->title;
              $testimonil->description  = $request->description;
              $testimonil->image = $filename;
              $testimonil->save();
               return back()->with("message", " Has been successfully added "); 
     }


      public function edit($id)
      {
           $edit = Testimonil::findOrFail($id);
           return view('matrix.pages.testimonil_edit',compact('edit'));
      }

     public function update(Request $request, $id)
     {
         $testimonil_edit = Testimonil::findOrFail($id);
         if($file=$request->file('image'))
         {
            $destinationPath ='account/images';
            $filename=$file->move($destinationPath,$file->getClientOriginalName());
            $testimonil_edit->image = $filename;
         }else{
           $testimonil_edit->image = $request->url;
         }
          $testimonil_edit->title    = $request->title;
          $testimonil_edit->description  = $request->description;
          $testimonil_edit->save();
          return back()->with("message", " Has been successfully updated ");
     }


    public function destroy(Testimonil $id)
    {
        $id->delete();
        return back();
    }


    public function restore($id)
    {
        Testimonil::withTrashed()->find($id)->restore();
        return back();
    }
}