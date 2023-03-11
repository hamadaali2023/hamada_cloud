<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Booking;

use Auth;
use App\User;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function show()
    {
        $booking=Booking::get();
        return view('matrix.pages.booking',compact('booking'));
    }
    
    public function destroy(Booking $id)
    {
        $id->delete();
        return back();
    }
   
    

}
