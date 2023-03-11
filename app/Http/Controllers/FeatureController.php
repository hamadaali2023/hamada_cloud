<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\Services;
use App\Features;
use softDeletes;
use Auth;
use App\User;

class FeatureController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function show(Services $id )
    {
        $Features=Features::wherein('services_id',$id)->get();
        return view('matrix.pages.feature',compact('Features','id'));
    }

    public function restore_trashed(Services $id)
    {
      return  view('matrix.pages.feature_trashed',compact('id'));
    }
    public function store(Request $request, Services $id)
    {
       
        $this->validate(request(),[
           'title'=> 'required',
           'description'=> 'required',
           'image'=> 'required',
        ]);
      
        $file=$request->file('image');
        $destinationPath ='account/images';
        $filename=$file->move($destinationPath,$file->getClientOriginalName());

        $feature = new Features;
        $feature->title  = $request->title;
        $feature->description  = $request->description;
        $feature->image = $filename;
        $id->features()->save($feature);
        return back()->with("message", " Has been successfully added "); 
    }












     public function edit($id)
     {
           $edit = Features::findOrFail($id);
           
           return view('matrix.pages.feature_edit',compact('edit'));
     }

     public function update(Request $request, $id)
     {
         $feature_edit = Features::findOrFail($id);
         if($file=$request->file('image'))
         {
            $destinationPath ='account/images';
            $filename=$file->move($destinationPath,$file->getClientOriginalName());
            $feature_edit->image = $filename;
         }else{
           $feature_edit->image = $request->url;
         }
          $feature_edit->title    = $request->title;
          $feature_edit->description  = $request->description;
          $feature_edit->save();
         return back()->with("message", " Has been successfully updated ");
     }

    public function destroy(Features $id)
    {
        $id->delete();
        return back();
    }
    public function restore($id)
    {
        Features::withTrashed()->find($id)->restore();
        return back();
    }

    }
