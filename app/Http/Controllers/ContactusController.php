<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Contactus;

use Auth;

use App\User;
class ContactusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $contactus = DB::table('contactus')->get();
        return view('matrix.pages.contactus',compact('contactus'));
    }
    public function restore_trashed()
    {
        $contactus = Contactus::withTrashed()->get();
        return view('matrix.pages.contactus_trashed',compact('contactus'));
    }
     public function store(Request $request)
    {
      $this->validate(request(),[
        'map'=> 'required',
        'mail'=> 'required',
        'adress'=> 'required',
        'phone'=> 'required',
      
      ]);
              $contactus = new Contactus;
              $contactus->title  = $request->title;
              $contactus->map  = $request->map;
              $contactus->mail  = $request->mail;
              $contactus->adress  = $request->adress;
              $contactus->phone  = $request->phone;
              $contactus->calendar  = $request->calendar;
             
              $contactus->save();
               return back()->with("message", " Has been successfully added "); 
     }


     public function edit($contactus)
     {
           $edit = Contactus::findOrFail($contactus);
           return view('matrix.pages.contactus_edit',compact('edit'));
     }

     public function update(Request $request, $contactus)
     {
        $contactus_edit = Contactus::findOrFail($contactus);
        $contactus_edit->title  = $request->title;
        $contactus_edit->map  = $request->map;
        $contactus_edit->mail  = $request->mail;
        $contactus_edit->adress  = $request->adress;
        $contactus_edit->phone  = $request->phone;
        $contactus_edit->calendar  = $request->calendar;
  
        $contactus_edit->save();
         return back()->with("message", " Has been successfully updated ");
     }


    public function destroy(Contactus $contactus)
    {
        $contactus->delete();
        return back();
    }


    public function restore($contactus)
    {
        Contactus::withTrashed()->find($contactus)->restore();
        return back();
    }
}