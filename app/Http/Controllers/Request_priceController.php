<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use DB;
use App\Requestprice;
use Auth;
use softDeletes;
use App\User;
		
class Request_priceController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
     
        $prices = DB::table('price')->whereNull('deleted_at')->get();
       
        return view('matrix.pages.request_price',compact('prices'));
    }

    public function destroy(Requestprice $id)
    {
        $id->delete();
        return back();
    }


    public function restore($id)
    {
        Requestprice::withTrashed()->find($id)->restore();
        return back();
    }
}