<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Offer;
use App\Package;
use App\Details;
use App\PackageDetails;

use Auth;
use App\User;

class PackegesDetailsController extends Controller
{  
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function show()
    {
       
        $packages = DB::table('packages')->get();
        $details = DB::table('details')->get();

        $package_details = DB::table('package_details')
        ->join('packages','package_id','=','packages.id')
        ->join('details','detail_id','=','details.id')
        ->select('package_details.id as packid','packages.title as title','details.name as name')       
        ->get();

        return view('matrix.offers.packege_details',compact('package_details','packages','details'));
    }
   
    public function store(Request $request)
    {
       $Offers = new PackageDetails;
       $Offers->package_id  = $request->package_id;  
       $Offers->detail_id  = $request->detail_id;     
       $Offers->save();
       return back()->with("message", " Has been successfully added "); 
     }
     
    public function edit($id)
    {
        $edit = PackageDetails::findOrFail($id);    
        $packages = DB::table('packages')->get();
        $details = DB::table('details')->get();    
        return view('matrix.offers.package_details_edit',compact('edit','packages','details'));
    }

     public function update(Request $request, $id)
     {      
        $offers_edit = PackageDetails::findOrFail($id);
        
        $offers_edit->package_id  = $request->package_id;  
        $offers_edit->detail_id  = $request->detail_id;   
        $offers_edit->save();
        return back()->with("message", " Has been successfully updated ");
     }


    public function destroy(PackageDetails $id)
    {
        $id->delete();
        return back();
    }

    public function restore($id)
    {
        PackageDetails::withTrashed()->find($id)->restore();
        return back();
    }





}
