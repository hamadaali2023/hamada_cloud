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

class PackagesController extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    /*////////pppp packages///////////////*/

    public function show()

    {
       $packages = DB::table('packages')
        ->join('offers','offer_id','=','offers.id')
        ->select('offers.id as offerid','offers.name as offername','packages.price as price','packages.id as packageid','packages.title as packagename')
        ->get();
        $offers = DB::table('offers')->get();
        return view('matrix.offers.packages',compact('packages','offers'));
    }
   
     public function store(Request $request)
    {
     
     
       $Offers = new Package;
       $Offers->offer_id  = $request->offer_id;  
       $Offers->title  = $request->name;  
       $Offers->price  = $request->price;  
        
       $Offers->save();
       return back()->with("message", " Has been successfully added "); 
     }
     
    public function edit($id)
    {
        $edit = Package::findOrFail($id); 
        $offers = DB::table('offers')->get();       
        return view('matrix.offers.packages_edit',compact('edit','offers'));
    }

     public function update(Request $request, $id)
     {      
         $Package_edit = Package::findOrFail($id);
        
          $Package_edit->title  = $request->name;  
          $Package_edit->price  = $request->price;   
          $Package_edit->save();
         return back()->with("message", " Has been successfully updated ");
     }


    public function destroy(Package $id)
    {
               
        $id->delete();
        return back();
    }

    public function restore($id)
    {
        Package::withTrashed()->find($id)->restore();
        return back();
    }





}
