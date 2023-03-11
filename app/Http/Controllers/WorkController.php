<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Ourwork;
use App\Work;
use Auth;
use App\User;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function show(Ourwork $id )
    {
        $Works=Work::wherein('ourwork_id',$id)->get();

       return view('matrix.pages.work',compact('Works','id'));
    }
 
    public function store(Request $request, Ourwork $id)
    {
        $this->validate(request(),[
           'title'=> 'required',
           'description'=> 'required',          
           'url'=> 'required',
        ]);
      
         $work = new Work;       
        if($file=$request->file('image'))         {
            $destinationPath ='account/images';
            $filename=$file->move($destinationPath,$file->getClientOriginalName());
            $work->image = $filename;
         }else{
           $work->image = $request->url1;
          }
       
        $work->title  = $request->title;
        $work->description  = $request->description;
        $work->url  = $request->url;
       
        $work->video  = $request->video;        
        $id->work()->save($work);
        return back()->with("message", " Has been successfully added "); 
    }


     public function edit($id)
     {
           $edit = Work::findOrFail($id);
           return view('matrix.pages.work_edit',compact('edit'));
     }

     public function update(Request $request, $id)
     {
         $feature_edit = Work::findOrFail($id);
         if($file=$request->file('image'))
         {
            $destinationPath ='account/images';
            $filename=$file->move($destinationPath,$file->getClientOriginalName());
            $feature_edit->image = $filename;
         }else{
           $feature_edit->image = $request->url1;
          }
          $feature_edit->title    = $request->title;
          $feature_edit->description  = $request->description;
          $feature_edit->url    = $request->link;
          $feature_edit->video  = $request->video;      
          $feature_edit->save();
         return back()->with("message", " Has been successfully updated ");
     }

    public function destroy(Work $id)
    {
        $id->delete();
        return back();
    }
  

    }
