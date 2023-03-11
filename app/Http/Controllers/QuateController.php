<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Quate;

use Auth;

use App\User;
class QuateController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {        
        $quates = DB::table('quatation')->get();
        return view('matrix.pages.quate',compact('quates'));
    }
   
  

    public function destroy(Quate $id)
    {
        $id->delete();
        return back();
    }


    public function restore($id)
    {
        Quate::withTrashed()->find($id)->restore();
        return back();
    }
}