<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Ourwork;


use Auth;

use App\User;
class OurworkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
         $blogs = DB::table('ourwork')->get();
        return view('matrix.pages.ourwork',compact('blogs'));
    }
   
     public function store(Request $request)
    {

       $this->validate(request(),[
       'title'=> 'required',
       'description'=> 'required',
      
      ]);
            
              $ourwork = new Ourwork;
              $ourwork->title  = $request->title;              
              $ourwork->description  = $request->description;
   
              $ourwork->save();
               return back()->with("message", " Has been successfully added "); 
     }


     public function edit($id)
     {
           $edit = Ourwork::findOrFail($id);
           return view('matrix.pages.ourwork_edit',compact('edit'));
     }

     public function update(Request $request, $id)
     {

          $blog_edit = Ourwork::findOrFail($id); 
          $blog_edit->title    = $request->title;         
          $blog_edit->description  = $request->description;
          $blog_edit->save();
          return back()->with("message", " Has been successfully updated ");
     }
     
    public function destroy(Ourwork $id)
    {
        $id->delete();
        return back();
    }
  

    
}