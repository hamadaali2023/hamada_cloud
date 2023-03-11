<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Offers;
use App\Offers_package;
use Auth;
use App\User;
class Offers_packageController extends Controller
{  
   public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function show(Offers $id )
    {
        
        $packages=Offers_package::wherein('offers_id',$id)->get();
        return view('matrix.pages.offers_package',compact('packages','id'));
    }

    public function store(Request $request, Offers $id)
    {
        $packages = new Offers_package;
        $packages->title  = $request->title;       
        $packages->price  = $request->price;                      
        $id->offerspackage()->save($packages);
        return back()->with("message", " Has been successfully added "); 
    }
    public function edit($id)
    {
           $edit = Offers_package::findOrFail($id);   
           $offers = DB::table('offers')->get();        
           return view('matrix.pages.offers_package_edit',compact('edit','offers'));
    }

    public function update(Request $request, $id)
     {
        $Offers_package_edit = Offers_package::findOrFail($id);
        $Offers_package_edit->title  = $request->title;
        $Offers_package_edit->price  = $request->price;                 
        $Offers_package_edit->save();
        return redirect('admin/offers')->with("message", " Has been successfully updated ");
     }

    public function destroy(Offers_package $id)
    {
        $id->delete();
        return back();
    }
    public function restore($id)
    {
        Offers_package::withTrashed()->find($id)->restore();
        return back();
    }

}
