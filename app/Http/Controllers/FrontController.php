<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Services;
use App\Aboutus;
use App\Ourwork;
use App\Quate;
use App\Requestprice;
use App\Contactus;
use App\Client;
use App\MinServices;
use App\Messages;
use App\Newsletter;
use App\Offer;
use App\Package;
use App\Details;
use App\Booking;

use Mail;
class FrontController extends Controller
{    

  
    public function home()
    {
      //$clients= DB::table('services')->get()->reverse();
      $clients  = DB::table('slider')->whereNull('deleted_at')->get();
      $client=count($clients);
     // dd($client);
      $contact = DB::table('contactus')->whereNull('deleted_at')->limit(1)->get();
      $services = DB::table('services')->whereNull('deleted_at')->get();

      $menu_service = DB::table('services')->whereNull('deleted_at')->limit(12)->get();
     
      $clients = DB::table('clients')->whereNull('deleted_at')->take(5)->get();
      $slids  = DB::table('slider')->whereNull('deleted_at')->take(1)->get();      
      $sliders = DB::table('slider')->whereNull('deleted_at')->skip(1)->take(3)->get();
      $description = DB::table('aboutus')->whereNull('deleted_at')->limit(1)->get();
      $offers_menu = DB::table('offers')->get();
      $menu_ourwork = DB::table('ourwork')->get();
      return view('frontend.home.home',compact('offers_menu','contact','client','slids','menu_service','menu_ourwork','services','clients','sliders','description'));
    }


    public function services(Services $id)
    {
      $description = DB::table('aboutus')->whereNull('deleted_at')->limit(1)->get();
      $features = DB::table ('feature')->wherein('services_id',$id)->whereNull('deleted_at')->limit(4)->get();
      $minservices = DB::table ('minservices')->wherein('services_id',$id)->whereNull('deleted_at')->limit(1)->get();
      $menu_service = DB::table('services')->whereNull('deleted_at')->limit(12)->get();
      $offers_menu = DB::table('offers')->get();
       $menu_ourwork = DB::table('ourwork')->get();
     return view('frontend.services.services',compact('offers_menu','description','features','minservices','menu_service','menu_ourwork','id'));
    }

  
    public function ourwork(Ourwork $id)
    {    $description = DB::table('aboutus')->whereNull('deleted_at')->limit(1)->get();
         $menu_service = DB::table('services')->whereNull('deleted_at')->limit(12)->get();
         $menu_ourwork = DB::table('ourwork')->get();
         $ourworks = DB::table ('work')->wherein('ourwork_id',$id)->get();
         $offers_menu = DB::table('offers')->get();
         return view('frontend.ourwork.ourwork',compact('description','ourworks','menu_ourwork','menu_service','offers_menu','id'));
    }
   
    public function aboutus()
    {   
        $offers_menu = DB::table('offers')->get();
        $description = DB::table('aboutus')->whereNull('deleted_at')->limit(1)->get();
        $abouts = DB::table('aboutus')->whereNull('deleted_at')->skip(1)->take(3)->get();
        $menu_service = DB::table('services')->whereNull('deleted_at')->limit(12)->get();
         $menu_ourwork = DB::table('ourwork')->get();
        return view('frontend.aboutus.aboutus',compact('offers_menu','description','abouts','menu_service','menu_ourwork'));
    }

    public function contactus()
    {     $description = DB::table('aboutus')->whereNull('deleted_at')->limit(1)->get();
          $contactus = DB::table('contactus')->whereNull('deleted_at')->limit(2)->get();
          $maps = DB::table('contactus')->whereNull('deleted_at')->limit(1)->get();
          $menu_service = DB::table('services')->whereNull('deleted_at')->limit(12)->get();
          $offers_menu = DB::table('offers')->get();
          $menu_ourwork = DB::table('ourwork')->get();
          return view('frontend.contactus.contact',compact('offers_menu','description','contactus','menu_service','menu_ourwork','maps'));
    }

    public function request_price()
    {
        $description = DB::table('aboutus')->whereNull('deleted_at')->limit(1)->get();
        $menu_service = DB::table('services')->whereNull('deleted_at')->limit(12)->get();
        $offers_menu = DB::table('offers')->get();
        $menu_ourwork = DB::table('ourwork')->get();
        return view('frontend.price.price',compact('offers_menu','description','menu_service','menu_ourwork'));
    }
    public function offers($id)
    {
         $Offer=Offer::find($id);
         $Package=Package::where('offer_id',$Offer->id)->get();
      
        $description = DB::table('aboutus')->whereNull('deleted_at')->limit(1)->get();
        $menu_service = DB::table('services')->whereNull('deleted_at')->limit(12)->get();
        $offers_menu = DB::table('offers')->get();
        $menu_ourwork = DB::table('ourwork')->get();
        return view('frontend.offers.offers',compact('offers_menu','Package','Offer','description','menu_service','menu_ourwork','id'));
    }
    public function booking( Package $id)
    {

      $description = DB::table('aboutus')->whereNull('deleted_at')->limit(1)->get();
      $menu_service = DB::table('services')->whereNull('deleted_at')->limit(12)->get();
      $offers_menu = DB::table('offers')->get();
      $menu_ourwork = DB::table('ourwork')->get();
     return view('frontend.offers.booking',compact('offers_menu','description','menu_service','menu_ourwork','id'));
    }
    
   

  
       public function messages(Request $request)
    {              
       $this->validate(request(),[
                'g-recaptcha-response'=> 'required',
              ]);
            
            // $data = array(
            //           'name'=>$request->name,
            //           'mail'=>$request->mail,
            //           'subject'=>$request->subject,
            //           'bodyMessage'=>$request->message
            //   );
            //   Mail::send('frontend.emails.contact',$data , function ($message) use ($data)
            //   {
            //          $message->from('hamadaali221133@gmail.com', 'new mail');
            //         $message->to('hamadaali221133@gmail.com');
            //         $message->subject('subject');
            //   });

          $quate = new Messages;            
          $quate->name  = $request->name;
          $quate->mail  = $request->mail;
          $quate->subject  = $request->subject;
          $quate->phone  = $request->phone;
          $quate->message  = $request->message;            
          $quate->save();
          return back()->with("message", " تم ارسال طلبك بنجاح وسيقوم المختص بالمتابعة معك في أقرب وقت  "); 
     }

    public function newsletter(Request $request)
    {              
          $quate = new Newsletter;            
          $quate->mail  = $request->mail;                      
          $quate->save();
          return back()->with("newsletter", " تم ارسال طلبك بنجاح وسيقوم المختص بالمتابعة معك في أقرب وقت   "); 
     }


    public function sendquote(Request $request , $id)
    {
        $this->validate(request(),[
                'g-recaptcha-response'=> 'required',
        ]);

          $quate = new Quate;
         if($file=$request->file('file'))
         {
            $destinationPath ='account/images';
            $filename=$file->move($destinationPath,$file->getClientOriginalName());
            $quate->file = $filename;
         }else{
           $quate->file = $request->urlfile;
         }
          $quate->nameservic  = $request->nameservic; 
          $quate->name  = $request->name;            
          $quate->mail  = $request->mail;
          $quate->phone  = $request->phone;
          $quate->majal  = $request->majal;
          $quate->company  = $request->company;
          $quate->message  = $request->description; 
      
          $quate->site  = $request->site;
          $quate->save();
          return back()->with("message", " تم ارسال طلبك بنجاح وسيقوم المختص بالمتابعة معك في أقرب وقت  "); 
             
     }

    public function requestprice(Request $request)
    {
         $this->validate(request(),[
                'g-recaptcha-response'=> 'required',
              ]);
          $ourwork = new Requestprice;
         if($file=$request->file('file'))
         {
            $destinationPath ='account/images';
            $filename=$file->move($destinationPath,$file->getClientOriginalName());
            $ourwork->file = $filename;
         }else{
            $ourwork->file = $request->urlfile;
         }
            $ourwork->name  = $request->name;             
            $ourwork->mail  = $request->mail;
            $ourwork->phone  = $request->phone;
            $ourwork->majal  = $request->majal;
            $ourwork->company  = $request->company;
            $ourwork->description  = $request->description; 
            $ourwork->file = $filename;
            $ourwork->site  = $request->site;
            $ourwork->type  = $request->type;
            $ourwork->save();

           
            //   $file=$request->file('file');
            //   $destinationPath ='account/images';
            //   $filename=$file->move($destinationPath,$file->getClientOriginalName());
            //   $ourwork = new Requestprice;
            //   $ourwork->name  = $request->name;             
            //   $ourwork->mail  = $request->mail;
            //   $ourwork->phone  = $request->phone;
            //   $ourwork->majal  = $request->majal;
            //   $ourwork->company  = $request->company;
            //   $ourwork->description  = $request->description; 
            //   $ourwork->file = $filename;
            //   $ourwork->site  = $request->site;
            //   $ourwork->type  = $request->type;
            //   $ourwork->save();
              return back()->with("message", "تم ارسال طلبك بنجاح وسيقوم المختص بالمتابعة معك في أقرب وقت"); 
    }

   
    public function sendbooking(Request $request,  $id)
    {
         $this->validate(request(),[
                'g-recaptcha-response'=> 'required',
         ]);
        $booking = new Booking;
        $booking->name  = $request->name;             
        $booking->namepackage  = $request->namepackage;  
        $booking->mail  = $request->mail;
        $booking->subject  = $request->subject;             
        $booking->message  = $request->message;
        $booking->save();
        return back()->with("message", " تم ارسال طلبك بنجاح وسيقوم المختص بالمتابعة معك في أقرب وقت  "); 
    }

    


    public function landing()
    {    
           $landing = DB::table('landing')->get();
           $contactus = DB::table('contactus')->whereNull('deleted_at')->limit(2)->get();
          // $maps = DB::table('contactus')->whereNull('deleted_at')->limit(1)->get();
          // $menu_service = DB::table('services')->whereNull('deleted_at')->limit(12)->get();
          // $offers_menu = DB::table('offers')->get();
          // $menu_ourwork = DB::table('ourwork')->get();
          return view('frontend.landing.landing',compact('landing','contactus'));
    }


   
}
