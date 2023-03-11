<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\Services;
use App\MinServices;
use softDeletes;
use Auth;
use App\User;

class MinServicesController  extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function show(Services $id )
    {
        $min_services=MinServices::wherein('services_id',$id)->get();
        return view('matrix.pages.min_services',compact('min_services','id'));
    }

    public function restore_trashed(Services $id)
    {
      return  view('matrix.pages.min_services_trashed',compact('id'));
    }
    public function store(Request $request, Services $id)
    {
       
        $this->validate(request(),[
           'title'=> 'required',
           'description'=> 'required',
           'image1'=> 'required',
        ]);
      
        $file=$request->file('image1');
        $destinationPath ='account/images';
        $filename=$file->move($destinationPath,$file->getClientOriginalName());

        $feature = new MinServices;
        $feature->title  = $request->title;
        $feature->description  = $request->description;
        $feature->image1 = $filename;
        $id->minservices()->save($feature);
        return back()->with("message", " Has been successfully added "); 
    }












     public function edit($id)
     {
           $edit = MinServices::findOrFail($id);
           
           return view('matrix.pages.min_services_edit',compact('edit'));
     }

     public function update(Request $request, $id)
     {
         $feature_edit = MinServices::findOrFail($id);
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

    public function destroy(MinServices $id)
    {
        $id->delete();
        return back();
    }
    public function restore($id)
    {
        MinServices::withTrashed()->find($id)->restore();
        return back();
    }

    }
