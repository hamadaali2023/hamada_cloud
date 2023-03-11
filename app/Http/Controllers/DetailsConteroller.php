<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Offer;
use App\Package;
use App\Details;
use Auth;
use App\User;

class DetailsConteroller extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function show()
    {
        $details = DB::table('details')->get();
        return view('matrix.offers.details',compact('details'));
    }
   
     public function store(Request $request)
    {
      $this->validate(request(),[
       'name'=> 'required',       
      ]);
      
     
       $Offers = new Details;
       $Offers->name  = $request->name;  
       $Offers->check  = $request->check;     
       $Offers->save();
       return back()->with("message", " Has been successfully added "); 
     }
     
    public function edit($id)
    {
        $edit = Details::findOrFail($id);        
        return view('matrix.offers.details_edit',compact('edit'));
    }

     public function update(Request $request, $id)
     {      
         $details_edit = Details::findOrFail($id);
        
          $details_edit->name  = $request->name;  
          $details_edit->check  = $request->check;  
          $details_edit->save();
         return back()->with("message", " Has been successfully updated ");
     }


    public function destroy(Details $id)
    {
               
        $id->delete();
        return back();
    }

    public function restore($id)
    {
        Details::withTrashed()->find($id)->restore();
        return back();
    }





}
