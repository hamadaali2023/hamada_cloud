<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use DB;
use App\Aboutus;
use Auth;
use softDeletes;
use App\User;
class AboutusController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
       // $aboutus = DB::table('aboutus')->get();
        $aboutus = DB::table('aboutus')->whereNull('deleted_at')->skip(1)->take(3)->get();
        $description = DB::table('aboutus')->whereNull('deleted_at')->limit(1)->get();
        return view('matrix.pages.aboutus',compact('aboutus','description'));
    }
    public function restore_trashed()
    {
        $aboutus = Aboutus::withTrashed()->get();
        return view('matrix.pages.aboutus_trashed',compact('aboutus'));
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
                $aboutus = new Aboutus;
                $aboutus->title  = $request->title;
                $aboutus->description  = $request->description;
                $aboutus->image = $filename;
                $aboutus->save();
                return back()->with("message", " Has been successfully added "); 
             
     }


     public function edit($about)
     {
           $edit = Aboutus::findOrFail($about);
           return view('matrix.pages.aboutus_edit',compact('edit'));
     }

     public function update(Request $request, $about)
     {
         $aboutus_edit = Aboutus::findOrFail($about);
         if($file=$request->file('image'))
         {
            $destinationPath ='account/images';
            $filename=$file->move($destinationPath,$file->getClientOriginalName());
            $aboutus_edit->image = $filename;
         }else{
           $aboutus_edit->image = $request->url;
         }
          $aboutus_edit->title    = $request->title;
          $aboutus_edit->description  = $request->description;
          $aboutus_edit->save();
         return back()->with("message", " Has been successfully updated ");
     }


    public function destroy(Aboutus $about)
    {
        $about->delete();
        return back();
    }


    public function restore($about)
    {
        Aboutus::withTrashed()->find($about)->restore();
        return back();
    }
}