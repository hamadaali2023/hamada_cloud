@extends('frontend/homepage')

@section('frontpage')


   @section('seo')

    <!--  <meta name="description" content="نحن نقدر ملاحظاتك القيمة ، اقتراحاتك ، او أي استفسار لديك. يرجى ترك البيانات الخاصة بك وسوف نقوم بالرد عليك في أقرب وقت ممكن" />-->

      <!--<meta name="keywords" content="تواصل معنا " />-->

      <meta name="author" content="" / >

      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
      
     

    @stop



   <div id="container">
     <!--<title> تواصل معنا | ماتريكس كلاودز لحلول الاعمال المتكاملة    </title>-->
            <div class="oe_structure"></div>
                <section id="" style="">
                         <div class="container-fluid">                       
                        <div class="col-md-12 ">                        
                            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1455722240590 vc_row-no-padding">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                         
                                            <div class="wpb_gmaps_widget wpb_content_element vc_custom_1455722267653 nopaddingmap"> 
                                                <div class="wpb_wrapper">
                                                    <div class="wpb_map_wraper"> 
                                                        @foreach ($maps as $bbb) 
                                                        <iframe src="{{ $bbb->map }}" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                         @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <div class="container-fluid"> -->                      
        <div class="col-md-10 col-md-offset-1 " dir=" rtl ">                          
            <div class="col-xs-12 col-md-12">                              
                <div class="vc_row wpb_row vc_inner">
                    
                            <div class="wpb_wrapper col-xs-12 col-md-4">
                               
                            </div>
                             <div class="wpb_wrapper col-xs-12 col-md-8">
                                <h3 style="font-size: 22px;color: #282B75;     font-family: bukra;" class="vc_custom_heading vc_custom_1456073870619" >تواصل معنا </h3>
                                 <p style="font-size: 14px;color: #282B75;    font-family: bukra;" class="vc_custom_heading vc_custom_1456073870619" >
                                 نحن نقدر ملاحظاتك القيمة ، اقتراحاتك ، او أي استفسار لديك. يرجى ترك البيانات الخاصة بك و سوف نقوم بالرد عليك في أقرب وقت ممكن  .</p>
                            </div>
                  
               
                <div role="form" class="wpcf7" id="wpcf7-f618-p554-o1" lang="en-US" >
                
                         
               <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="row">
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12" style="margin-bottom: 5px; font-size: 13px">
            <div class="contact_info wdt_100">
              <ul>
                @foreach ($contactus as $contact)
             
                      <div style="font-size: 15px;text-align: center;">
                       
                              {{ $contact->title }} 
                      </div>
                      
                  <li class="" style="border-bottom: 1px solid #525252;">
                    
                    <p>                    
                       <div class="row">                         
                           <div class= "col-md-11 col-xs-10">
                             {{ $contact->adress }} 
                          </div>
                           <div class= " ">
                              <span class="glyphicon glyphicon-map-marker" style="font-size: 14px; margin-right: 8px"></span>
                          </div>
                        </div>
                    </p>                    
                    <p>
                        <div class="row">                         
                           <div class= "col-md-11 col-xs-10">
                             {{ $contact->mail }}  
                          </div>
                           <div class= " ">
                              <i class="fa fa-envelope" style="margin-right: 8px;font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                        </div>
                    </p>
                   <div class="row"> 
                     
                       <div class= "col-md-11 col-xs-10">
                             {{ $contact->phone }} 
                          </div>
                           <div class= " ">
                              <i class="fa fa-phone" style="margin-right: 8px;font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                  
                   </div>
                     

                       <div class="row"> 
                     
                       <div class= "col-md-11 col-xs-10">
                              {{ $contact->calendar }} 
                          </div>
                           <div class= " ">
                              <i class="fa fa-calendar" style="margin-right: 8px; font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                  
                   </div>
                   
                  </li> 

                
                @endforeach
              </ul>
            </div>
          </div>
          

<script type="text/javascript">  
      function validate(){  
          var name=document.f1.name.value;  
          var mail=document.f1.mail.value; 
          var phone=document.f1.phone.value; 
          var subject=document.f1.subject.value;
          var message=document.f1.message.value;

          
          var status=false; 

          if(name==""){  
            document.getElementById("namelocation").innerHTML=  
            "  من فضلك أدخل الأسم";  
            status=false;
          }else{  
              document.getElementById("namelocation").innerHTML="";  
              status=true;
          }  

          if(mail==""){  
            document.getElementById("maillocation").innerHTML=  
            " من فضلك أدخل البريد الإلكتروني";  
            status=false;
          }else{  
              document.getElementById("maillocation").innerHTML="";  
              status=true;
          }  

          if(phone==""){  
            document.getElementById("phonelocation").innerHTML=  
            "  من فضلك ادخل رقم الموبايل";  
            status=false;
          }else{  
              document.getElementById("phonelocation").innerHTML=" ";  
              status=true;
          }  

           if(subject==""){  
            document.getElementById("subjectlocation").innerHTML=  
            " من فضلك ادخل الموضوع";  
            status=false;
          }else{  
              document.getElementById("subjectlocation").innerHTML="";  
              status=true;
          }  

           if(message==""){  
            document.getElementById("messagelocation").innerHTML=  
            "  من فضلك ادخل الراسله";  
            status=false;
          }else{  
              document.getElementById("messagelocation").innerHTML=" ";  
              status=true;
          }  
            
          return status;  
      }  
</script> 
          <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
             @if(session()->has('message'))
                            <div class="alert alert-success " style="padding: 5px; margin-top: 20px; margin-right: 20px; margin-right: 12px; font-size: 17px;">
                                {{ session()->get('message') }}
                            </div>
                          @endif
            <form id="contact-form" method="post" action="{{ url('messages_add') }}" name="f1"  onsubmit="return validate()">
                {{ csrf_field() }}
              <div class="messages"></div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="name" type="text" name="name" placeholder="الإسم"  class="form-control">
                     <span id="namelocation" style="color:#e33f3f"></span>
                  </div>
                 
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="email" type="email" name="mail" placeholder="البريد الإلكتروني" title="Please enter a valid email"  class="form-control">
                    <span id="maillocation" style="color:#e33f3f"></span>
                  </div>
                  
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="subject" type="text" name="phone" placeholder=" الموبايل "  class="form-control">
                      <span id="phonelocation" style="color:#e33f3f"></span>
                  </div>
                
                </div>
              </div>
               <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="subject" type="text" name="subject" placeholder="الموضوع"  class="form-control">
                    <span id="subjectlocation" style="color:#e33f3f"></span>
                  </div>
                </div>
              </div> 
               
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea id="message" name="message" type="text" rows="4" placeholder=" اكتب رسالتك " class="form-control contact_textarea"></textarea>
                    <span id="messagelocation" style="color:#e33f3f"></span>
                  </div> 
                </div>
                
              </div>
                  <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                   {!! Recaptcha::render() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <div class="help-block" style=" direction: ltr; border: #E25757 solid 1px;  border-radius: 5px;
                                                text-align: center; font-weight: bold; color: red;   padding: 0.25%;
                                                margin: 0.5%;  background: #F3ABAB;    width: 300px; ">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                        </div>
                     @endif
                  </div>
                </div>
              </div> 
              <div class="row">
              
                <div class="col-md-12">
                  <input type="submit" value=" إرسال " class="btn submit_now">
                </div>
              </div>
             

              <br><br>
            </form><br><br>
          </div>
         <br><br>
        </div>

                </div>
                          </div>
                       </div>
                </div>
           {!! Html::style('frontendstyle/css/style.css') !!}
   









          

            </section>   
       
        </div>
         
@stop
