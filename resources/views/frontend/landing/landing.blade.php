<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Whisper - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
  
        {!! Html::style('frontendstyle/landing/css/open-iconic-bootstrap.min.css') !!}
   
{!! Html::style('frontendstyle/landing/css/animate.css') !!}
  
{!! Html::style('frontendstyle/landing/css/owl.carousel.min.css') !!}
   
{!! Html::style('frontendstyle/landing/css/owl.theme.default.min.css') !!}

{!! Html::style('frontendstyle/landing/css/magnific-popup.css') !!}

{!! Html::style('frontendstyle/landing/css/aos.css') !!}

{!! Html::style('frontendstyle/landing/css/ionicons.min.css') !!}

{!! Html::style('frontendstyle/landing/css/bootstrap-datepicker.css') !!}
 
{!! Html::style('frontendstyle/landing/css/jquery.timepicker.css') !!}
  
{!! Html::style('frontendstyle/landing/css/flaticon.css') !!}

{!! Html::style('frontendstyle/landing/css/icomoon.css') !!}

{!! Html::style('frontendstyle/landing/css/style.css') !!}


  </head>
  <body>
    
    <nav class="   bg-dark ftco-navbar-light" id="" >
      <div class="container">
       <!-- <a class="navbar-brand" href="{{url('/')}}">  <img  src="{{url('frontendstyle/logo.png')}}"/ style="max-height: 190px; max-width: 190px"></a>-->
       <!--  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button> -->

        <div class="collapse navbar-collapse" id="ftco-nav" style="display: none;">
          <ul class="navbar-nav ml-auto">
           <!--  <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="practice-areas.html" class="nav-link">Practice Areas</a></li>
            <li class="nav-item"><a href="attorneys.html" class="nav-link">Attorneys</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('frontendstyle/landing/images/image_3.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
           
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
            <!--  <span>WE BUILD  </span> . <span>WEB</span> . <span>BUSINESS</span>-->
            </h1>
            <p><a href="{{url('/')}}" class="btn btn-primary py-3 px-4">START HERE</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pb services-section" dir="rtl">
      <div class="container">
        <div class="row col-md-12 ">
          <div class="col-md-4 text-center services align-self-stretch ftco-animate p-4 ">
            <div class="icon"><span class="flaticon-auction"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">دعم فني مستمر  </a></h3>             
            </div>
          </div>
          <div class="col-md-4 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-lawyer"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3" style="color: #FFF;!important"><a href="#" style="color: #FFF !important;">المسئولية والأمانة </a></h3>            
            </div>
          </div>
          <div class="col-md-4 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-money"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">التسليم في الموعد المحدد</a></h3>              
            </div>
          </div>       
        </div>
      </div>
    </section>
    

    <section class="ftco-section bg-light" dir="rtl" style="">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            
            <h2><span class="lytgreen-head" style="text-align: center;     color: #0155ae;"> خدمات  اخرى نقدمها لكم   </span></h2>
          </div>
        </div>
        <div class="row d-flex">

          @foreach ($landing as $desc)
            <div class="col-md-4 d-flex ftco-animate" dir="rtl">
              <div class="blog-entry justify-content-end" style="    -webkit-box-shadow: 0 4px 11px #777;">
                
                 <img src="{{url($desc->imag) }}" alt="odooexp"/ style="   max-height: 178px;
    min-height: 178px;     min-width: 360px;
    max-width: 360px; ">
                <div class="text p-4 float-right d-block" style="    text-align: center;">
                
                  <h3 class="heading mt-2"><a href="#"  style="text-align: center;     color: #0155ae;">{{ $desc->title }}</a></h3>
                  <p style="text-align: center;    "> {{ $desc->description }}</p>
                </div>
              </div>
            </div> 
          @endforeach
        <!--   <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('frontendstyle/landing/images/image_2.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
                <div class="topper d-flex align-items-center">
                  <div class="one py-2 pl-3 pr-1 align-self-stretch">
                    <span class="day">12</span>
                  </div>
                  <div class="two pl-0 pr-3 py-2 align-self-stretch">
                    <span class="yr">2019</span>
                    <span class="mos">January</span>
                  </div>
                </div>
                <h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div> -->
        <!--   <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('frontendstyle/landing/images/image_3.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
                <div class="topper d-flex align-items-center">
                  <div class="one py-2 pl-3 pr-1 align-self-stretch">
                    <span class="day">10</span>
                  </div>
                  <div class="two pl-0 pr-3 py-2 align-self-stretch">
                    <span class="yr">2019</span>
                    <span class="mos">January</span>
                  </div>
                </div>
                <h3 class="heading mt-2"><a href="#">All you want to know about industrial laws</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div> -->
          

 <div class=" ftco-animate">
                 <h4 class="black-color mar_btm1" style="text-align: center;    color: #0155ae;"> <span class="lytgreen-head"> تواصل معنا</span></h4>
  <div class="row col-md-12"> 

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <div class="wdt_100 bg-secondary" >
      <div class="container bg-secondary" >
    
        <div class=" ftco-animate bg-secondary" >
        <div class="row">
               
          <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 bg-secondary" >
            @if(count($errors))
                            <ul>
                                @foreach($errors->all() as $error)
                                      <div style="width: 341px; padding: 7px; margin-top: 20px; margin-right: 20px; font-size: 13px;" class="p-3 mb-2 bg-danger text-white">{{ $error }}</div>
                                @endforeach
                            </ul>
                         @endif
                     </p>
                      @if(session()->has('message'))
                        <div class="alert alert-success " style="width: 341px;text-align: center; padding: 5px; margin-top: 20px; margin-right: 20px; margin-right: 12px; font-size: 13px;">
                            {{ session()->get('message') }}
                        </div>
                      @endif

   
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
            
            <form action="{{ url('messages_add') }}" id="contact-form" method="post" name="f1"  onsubmit="return validate()">
               {{ csrf_field() }}
              <div class="messages"></div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="name" type="text" name="name" placeholder="الاسم" required="" class="form-control">
                     <span id="namelocation" style="color:#e33f3f"></span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="email" type="email" name="mail" placeholder=" البريد الالكتروني " title="Please enter a valid email" required="" class="form-control">
                     <span id="maillocation" style="color:#e33f3f"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="subject" type="text" name="phone" placeholder="الموبايل" required="" class="form-control">
                     <span id="phonelocation" style="color:#e33f3f"></span>
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="subject" type="text" name="subject" placeholder="الموضوع" required="" class="form-control">
                    <span id="subjectlocation" style="color:#e33f3f"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea id="message" name="message" type="text" rows="4" placeholder="الرسالة" class="form-control contact_textarea"></textarea>
                    <span id="messagelocation" style="color:#e33f3f"></span>
                  </div>
                </div>
              
              </div>
                  <div class="row">
                <div class="col-md-12">
                  <div class="form-group">

                       <div class="col-md-8">
                  <input type="submit" value="ارسال" class="btn submit_now">
                </div>
                    <div class="col-md-4">
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
              </div>
            </form>
          </div>
               <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12" style="margin-top: 27px; margin-bottom: 5px; font-size: 13px">
            <div class="contact_info wdt_100">
              <ul>
                @foreach ($contactus as $contact)
             
                      <div style="font-size: 15px;text-align: center; color: #fff;">
                       
                              {{ $contact->title }} 
                      </div>
                      
                  <li class="" style="border-bottom: 1px solid  #fff;;">
                    
                    <p>                    
                       <div class="row">                         
                          
                           <div class= " ">
                              <span class="glyphicon glyphicon-map-marker" style=" color: #fff; font-size: 14px; margin-right: 8px"></span>
                          </div>
                           <div class= "col-md-11 col-xs-10" style="    text-align: right; color: #fff;">
                             {{ $contact->adress }} 
                          </div>
                        </div>
                    </p>                    
                    <p>
                        <div class="row">                         
                          
                           <div class= " ">
                              <i class="fa fa-envelope" style=" color: #fff;margin-right: 8px;font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                           <div class= "col-md-11 col-xs-10"  style="    text-align: right; color: #fff;">
                             {{ $contact->mail }}  
                          </div>
                        </div>
                    </p>
                   <div class="row"> 
                     
                         
                           <div class= " ">
                              <i class="fa fa-phone" style=" color: #fff;margin-right: 8px;font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                           <div class= "col-md-11 col-xs-10"  style="    text-align: right; color: #fff;">
                             {{ $contact->phone }} 
                          </div>
                   </div>
                     

                       <div class="row"> 
                     
                         
                           <div class= " ">
                              <i class="fa fa-calendar" style=" color: #fff;margin-right: 8px; font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                           <div class= "col-md-11 col-xs-10"  style="    text-align: right; color: #fff;">
                              {{ $contact->calendar }} 
                          </div>
                   </div>
                   
                  </li> 

                
                @endforeach
              </ul>
            </div>
          </div>
      {!! Html::style('frontendstyle/landing/style.css') !!}
        </div> </div>
        </div>
      </div>
    </section>
    <!-- 
    <section class="ftco-section testimony-section bg-secondary" dir="rtl">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3" style="    margin-top: -100px;">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate"><br>
            <span class="subheading">خدمات  اخرى نقدمها لكم  </span>
          <h4 class="black-color mar_btm1" style="text-align: center;     color: #0155ae;"> <span class="lytgreen-head"> خدمات  اخرى نقدمها لكم   </span></h4>
           
          </div>
        </div>
        <div class=" ftco-animate">
           <div class="row col-md-12">
            
                  @foreach ($landing as $desc)
                                       
              <div class="owl-item  center col-md-3" style="margin-bottom: 35px; margin-left: 55px;  min-width: 28%;padding-right: 0px !important;
     padding-left: 0px !important; ">            
                <div class="testimony-wrap text-center ">
                    <div class="user-img mb-4" >
                      <img src="{{url($desc->imag) }}" alt="odooexp"/ style="     ">
                    </div>
                    <div class="text p-3">
                       <p class="name">{{ $desc->title }}</p>
                      <p class="mb-4">    {{ $desc->description }}</p>                   
                    </div>
                </div>            
              </div>
 @endforeach
            
          </div>  
       


        </div>




 <div class=" ftco-animate">
                 <h4 class="black-color mar_btm1" style="text-align: center;    color: #0155ae;"> <span class="lytgreen-head"> تواصل معنا</span></h4>
  <div class="row col-md-12"> 

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <div class="wdt_100 bg-secondary" >
      <div class="container bg-secondary" >
    
        <div class=" ftco-animate bg-secondary" >
        <div class="row">
               
          <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 bg-secondary" >
            @if(count($errors))
                            <ul>
                                @foreach($errors->all() as $error)
                                      <div style="width: 341px; padding: 7px; margin-top: 20px; margin-right: 20px; font-size: 13px;" class="p-3 mb-2 bg-danger text-white">{{ $error }}</div>
                                @endforeach
                            </ul>
                         @endif
                     </p>
                      @if(session()->has('message'))
                        <div class="alert alert-success " style="width: 341px;text-align: center; padding: 5px; margin-top: 20px; margin-right: 20px; margin-right: 12px; font-size: 13px;">
                            {{ session()->get('message') }}
                        </div>
                      @endif

   
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
            
            <form action="{{ url('messages_add') }}" id="contact-form" method="post" name="f1"  onsubmit="return validate()">
               {{ csrf_field() }}
              <div class="messages"></div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="name" type="text" name="name" placeholder="الاسم" required="" class="form-control">
                     <span id="namelocation" style="color:#e33f3f"></span>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="email" type="email" name="mail" placeholder=" البريد الالكتروني " title="Please enter a valid email" required="" class="form-control">
                     <span id="maillocation" style="color:#e33f3f"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="subject" type="text" name="phone" placeholder="الموبايل" required="" class="form-control">
                     <span id="phonelocation" style="color:#e33f3f"></span>
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="subject" type="text" name="subject" placeholder="الموضوع" required="" class="form-control">
                    <span id="subjectlocation" style="color:#e33f3f"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea id="message" name="message" type="text" rows="4" placeholder="الرسالة" class="form-control contact_textarea"></textarea>
                    <span id="messagelocation" style="color:#e33f3f"></span>
                  </div>
                </div>
              
              </div>
                  <div class="row">
                <div class="col-md-12">
                  <div class="form-group">

                       <div class="col-md-8">
                  <input type="submit" value="ارسال" class="btn submit_now">
                </div>
                    <div class="col-md-4">
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
              </div>
            </form>
          </div>
               <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12" style="margin-top: 27px; margin-bottom: 5px; font-size: 13px">
            <div class="contact_info wdt_100">
              <ul>
                @foreach ($contactus as $contact)
             
                      <div style="font-size: 15px;text-align: center; color: #fff;">
                       
                              {{ $contact->title }} 
                      </div>
                      
                  <li class="" style="border-bottom: 1px solid  #fff;;">
                    
                    <p>                    
                       <div class="row">                         
                          
                           <div class= " ">
                              <span class="glyphicon glyphicon-map-marker" style=" color: #fff; font-size: 14px; margin-right: 8px"></span>
                          </div>
                           <div class= "col-md-11 col-xs-10" style="    text-align: right; color: #fff;">
                             {{ $contact->adress }} 
                          </div>
                        </div>
                    </p>                    
                    <p>
                        <div class="row">                         
                          
                           <div class= " ">
                              <i class="fa fa-envelope" style=" color: #fff;margin-right: 8px;font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                           <div class= "col-md-11 col-xs-10"  style="    text-align: right; color: #fff;">
                             {{ $contact->mail }}  
                          </div>
                        </div>
                    </p>
                   <div class="row"> 
                     
                         
                           <div class= " ">
                              <i class="fa fa-phone" style=" color: #fff;margin-right: 8px;font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                           <div class= "col-md-11 col-xs-10"  style="    text-align: right; color: #fff;">
                             {{ $contact->phone }} 
                          </div>
                   </div>
                     

                       <div class="row"> 
                     
                         
                           <div class= " ">
                              <i class="fa fa-calendar" style=" color: #fff;margin-right: 8px; font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                           <div class= "col-md-11 col-xs-10"  style="    text-align: right; color: #fff;">
                              {{ $contact->calendar }} 
                          </div>
                   </div>
                   
                  </li> 

                
                @endforeach
              </ul>
            </div>
          </div>
      {!! Html::style('frontendstyle/landing/style.css') !!}
        </div> </div>
            
          </div>       
        </div>








      </div>
    </section>

 -->
<!-- 


    <section class="ftco-section testimony-section bg-secondary" dir="rtl">
      <div class="container bg-secondary" >
        <div class="row justify-content-center mb-5 pb-3" style="    margin-top: -100px;">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading">    <h3 class="black-color mar_btm1"> <span class="lytgreen-head"> تواصل معنا</span></h3></span>
          
          </div>
        </div>
          









 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="wdt_100 bg-secondary" >
      <div class="container bg-secondary" >
    
        <div class=" ftco-animate bg-secondary" >
        <div class="row">
                @if(count($errors))
                            <ul>
                                @foreach($errors->all() as $error)
                                      <div style="padding: 7px; margin-top: 20px; margin-right: 20px; font-size: 13px;" class="p-3 mb-2 bg-danger text-white">{{ $error }}</div>
                                @endforeach
                            </ul>
                         @endif
                     </p>
                      @if(session()->has('message'))
                        <div class="alert alert-success " style="padding: 5px; margin-top: 20px; margin-right: 20px; margin-right: 12px; font-size: 13px;">
                            {{ session()->get('message') }}
                        </div>
                      @endif
          <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 bg-secondary" >
           
            <form action="{{ url('messages_add') }}" id="contact-form" method="post">
               {{ csrf_field() }}
              <div class="messages"></div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="name" type="text" name="name" placeholder="Name" required="" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="email" type="email" name="mail" placeholder="Email" title="Please enter a valid email" required="" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="subject" type="text" name="phone" placeholder="Phone" required="" class="form-control">
                  </div>
                </div>
              </div>
               <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <input id="subject" type="text" name="subject" placeholder="Subject" required="" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea id="message" name="message" type="text" rows="4" placeholder="Message" class="form-control contact_textarea"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" value="submit now" class="btn submit_now">
                </div>
              </div>
            </form>
          </div>
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
                          
                           <div class= " ">
                              <span class="glyphicon glyphicon-map-marker" style="font-size: 14px; margin-right: 8px"></span>
                          </div>
                           <div class= "col-md-11 col-xs-10" style="    text-align: right;">
                             {{ $contact->adress }} 
                          </div>
                        </div>
                    </p>                    
                    <p>
                        <div class="row">                         
                          
                           <div class= " ">
                              <i class="fa fa-envelope" style="margin-right: 8px;font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                           <div class= "col-md-11 col-xs-10"  style="    text-align: right;">
                             {{ $contact->mail }}  
                          </div>
                        </div>
                    </p>
                   <div class="row"> 
                     
                         
                           <div class= " ">
                              <i class="fa fa-phone" style="margin-right: 8px;font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                           <div class= "col-md-11 col-xs-10"  style="    text-align: right;">
                             {{ $contact->phone }} 
                          </div>
                   </div>
                     

                       <div class="row"> 
                     
                         
                           <div class= " ">
                              <i class="fa fa-calendar" style="margin-right: 8px; font-size:14px;padding-top: 5px;padding-bottom: 5px"></i>
                          </div>
                           <div class= "col-md-11 col-xs-10"  style="    text-align: right;">
                              {{ $contact->calendar }} 
                          </div>
                   </div>
                   
                  </li> 

                
                @endforeach
              </ul>
            </div>
          </div>
      {!! Html::style('frontendstyle/landing/style.css') !!}
        </div> </div>
      </div>
    </div>

 -->














































      </div>
    </section>



















  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


        {!! Html::script('frontendstyle/landing/js/jquery.min.js') !!}  
        {!! Html::script('frontendstyle/landing/js/jquery-migrate-3.0.1.min.js') !!}  
        {!! Html::script('frontendstyle/landing/js/popper.min.js') !!}
        {!! Html::script('frontendstyle/anding/js/bootstrap.min.js') !!}
        {!! Html::script('frontendstyle/landing/js/jquery.easing.1.3.js') !!}
        {!! Html::script('frontendstyle/landing/js/jquery.waypoints.min.js') !!}
        {!! Html::script('frontendstyle/landing/js/jquery.stellar.min.js') !!}
        {!! Html::script('frontendstyle/landing/js/owl.carousel.min.js') !!}
        {!! Html::script('frontendstyle/landing/js/jquery.magnific-popup.min.js') !!}
        {!! Html::script('frontendstyle/landing/js/aos.js') !!}
        {!! Html::script('frontendstyle/landing/js/jquery.animateNumber.min.js') !!}
        {!! Html::script('frontendstylelanding/js/bootstrap-datepicker.js') !!}  
        {!! Html::script('frontendstyle/landing/js/jquery.timepicker.min.js') !!}   
        {!! Html::script('frontendstyle/landing/js/scrollax.min.js') !!}
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
   
        {!! Html::script('frontendstyle/landing/js/google-map.js') !!}

        {!! Html::script('frontendstyle/landing/js/main.js') !!}

    
  </body>
</html>