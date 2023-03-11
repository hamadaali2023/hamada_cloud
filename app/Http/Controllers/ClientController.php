<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Client;
use Auth;
use App\User;

class ClientController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $clients = DB::table('clients')->get();
        return view('matrix.pages.clients',compact('clients'));
    }
    public function restore_trashed()
    {
        $clients = Client::withTrashed()->get();
        return view('matrix.pages.clients_trashed',compact('clients'));
    }
     public function store(Request $request)
    {
       $file=$request->file('image');
       $destinationPath ='account/images';
       $filename=$file->move($destinationPath,$file->getClientOriginalName());
       $client = new Client;
       $client->title  = $request->title;
       $client->description  = $request->description;            
       $client->image = $filename;
       $client->save();
       return back()->with("message", " Has been successfully added "); 
     }
     
    public function edit($id)
    {
        $edit = Client::findOrFail($id);
        return view('matrix.pages.clients_edit',compact('edit'));
    }

    public function update(Request $request, $id)
     {
         $client_edit = Client::findOrFail($id);
         if($file=$request->file('image'))
         {
            $destinationPath ='account/images';
            $filename=$file->move($destinationPath,$file->getClientOriginalName());
            $client_edit->image = $filename;
         }else{
           $client_edit->image = $request->url;
         }
          $client_edit->title    = $request->title;
          $client_edit->description    = $request->description;
          $client_edit->save();

    
       return back()->with("message", " Has been successfully updated ");
    }


    public function destroy(Client $id)
    {
        $id->delete();
        return back();
    }


    public function restore($id)
    {
        Client::withTrashed()->find($id)->restore();
        return back();
    }
}
