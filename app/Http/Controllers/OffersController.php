<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Offer;

use App\Offers_package;
use Auth;

use App\User;

class OffersController extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth'); 
    }


    /*///////// offers //////////////////*/
    public function show()
    {
        $offers = DB::table('offers')->get();
        return view('matrix.offers.offers',compact('offers'));
    }
   
     public function store(Request $request)
    {
      $this->validate(request(),[
       'name'=> 'required',       
       'description'=> 'required',
      ]);
      
       $Offers = new Offer;
       $Offers->name  = $request->name;  
       $Offers->description  = $request->description;     
       $Offers->save();
       return back()->with("message", " Has been successfully added "); 
     }
     
    public function edit($id)
    {
        $edit = Offer::findOrFail($id);        
        return view('matrix.offers.offers_edit',compact('edit'));
    }

     public function update(Request $request, $id)
     {      
         $offers_edit = Offer::findOrFail($id);
        
          $offers_edit->name    = $request->name;
          $offers_edit->description  = $request->description;  
          $offers_edit->save();
         return back()->with("message", " Has been successfully updated ");
     }


    public function destroy(Offer $id)
    {
               
        $id->delete();
        return back();
    }

    public function restore($id)
    {
        Offer::withTrashed()->find($id)->restore();
        return back();
    }





}
