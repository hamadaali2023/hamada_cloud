<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

use DB;
use App\Messages;
use Auth;
use softDeletes;
use App\User;
		
class MessagesController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
     
        $messages = DB::table('messages')->whereNull('deleted_at')->get();
       
        return view('matrix.pages.messages',compact('messages'));
    }

    public function destroy(Messages $id)
    {
        $id->delete();
        return back();
    }


    public function restore($id)
    {
        Messages::withTrashed()->find($id)->restore();
        return back();
    }
}