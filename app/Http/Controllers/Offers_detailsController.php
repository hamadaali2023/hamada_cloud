<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;



use App\Offers;
use App\Offers_details;
use Auth;

use App\User;

class Offers_detailsController extends Controller
{  
   public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function show(Offers $id )
    {
        
        $offers_details=Offers_details::wherein('offers_id',$id)->get();
        return view('matrix.pages.offers_details',compact('offers_details','id'));
    }

   
    public function store(Request $request, Offers $id)
    {
        $offers_details = new Offers_details;
        $offers_details->title  = $request->title;  
        $offers_details->checkmark  = $request->check;           
        $id->offersdetails()->save($offers_details);
        return back()->with("message", " Has been successfully added "); 
    }
     public function edit($id)
     {
           $edit = Offers_details::findOrFail($id);   
           $offers = DB::table('offers')->get();        
           return view('matrix.pages.offers_details_edit',compact('edit','offers'));
     }

     public function update(Request $request, $id)
     {
        $offers_details_edit = Offers_details::findOrFail($id);
        $offers_details_edit->title  = $request->title;    
        $offers_details_edit->checkmark  = $request->check;              
        $offers_details_edit->save();
        return redirect('admin/offers')->with("message", " Has been successfully updated ");
     }

    public function destroy(Offers_details $id)
    {
        $id->delete();
        return back();
    }
    public function restore($id)
    {
        Offers_details::withTrashed()->find($id)->restore();
        return back();
    }


}
