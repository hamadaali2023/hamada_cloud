<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use Auth;
use DB;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         return view('matrix.index');
    }

     public function profile()
    {
        return view('profile');
    }


    public function control()
    {
        if(Auth::user()->role == 3)
        {
            return redirect('/');
        }

        $users = DB::table('users')->get();

        return view('control', compact('users'));
    }
    
     public function updateRole(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect('control');
    }
}
