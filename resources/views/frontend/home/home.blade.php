@extends('frontend/homepage')

@section('frontpage')


    @section('seo')
      <meta name="keywords" content="نبذة عن ماتركس " />

      <meta name="description" content=" ماتريكس كلاودز تقدم أفضل الحلول التقنية للشركات في مجالات تصميم وبرمجة المواقع والتسويق الالكتروني وتطبيقات الموبايل والفيديوهات الدعائية .  " />
     
      <meta name="author" content="Matrix Cloud" / >

      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    @stop
     <main>   
    <style type="text/css">
        .hamada{
            color: #fff;
            font-size: 20px;
        }
        .owl-prev{
                display: none;
        }
        .owl-next{
                display: none;
        }
        .portfolio-item img{zoom: 1; width: 100%;
                      -webkit-transition: all 0.9s ease;
                       -moz-transition: all 0.9s ease; -ms-transition: all 0.9s ease; 
                       -0-transition: all 0.9s ease; transition: all 0.9s ease;     min-height: 270px; max-height: 263px;
        }
      
@media (min-width: 992px);
.vc_col-md-7 {
    width: 53.333333% !important;
}

</style>



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

<style type="text/css">
  .vc_custom_1455887048379{padding-top:17px !important;padding-bottom:56px !important;background-image:url(frontendstyle/home1-contact-bgab99.jpg?id=177) !important;}

   .banar{    height: 509px;padding-top:50px !important;padding-bottom:56px !important;background-image:url(frontendstyle/online-marketing.jpg) !important;}










@media screen and (max-width: 480px) {
#main-slide .carousel {
height: 200px !important;
}
}
</style>           
            <div id="wrap">
                   <title> ماتريكس كلاودز لحلول الاعمال المتكاملة  | Matrix Clouds  </title>
                <div id="container">
                    <div class="oe_structure"></div>
                     <!--/////// start slider  //////////////-->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                       <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" ></li>
                               @for($i=1;$i<$client;$i++)
                                 <li data-target="#myCarousel" data-slide-to={{$i}}></li>
                              @endfor
                        </ol>
                        <style type="text/css">
                        </style>
                        <div class="carousel-inner" >     
                                  <style type="text/css">
                                    @media screen and (max-width: 600px) {
                                         .h-lefttt{
                                            display:none;
                                        }
                                      }
                                  </style>
                              @foreach ($slids as $slid)                                 
                            <div class="item active">
                                <div class="overlaw"></div>                                                   
                                  <img src="{{url($slid->image) }}" alt="odooexp"/ style="   max-height: 585px;   min-height: 439px;">    
                                      <center> 
                                        <div class="imgG " style="top: 70% !important;">                                 
                                          @if(($slid->title1) !=="") 
                                            <h1  class="animate-in slow-mo" data-anim-type="fade-in-left" data-anim-delay="300" >
                                                <strong style="padding:10px; !important;color: #1b2a89;
                                                    background: #ffffffd6;">{{ $slid->title1}} 
                                                </strong>
                                            </h1>                             
                                           
                                          @endif  
                                        
                                          @if(($slid->title2) !=="") 
                                                <div class="h-lefttt">                       
                                            <a  class="btn btn-outline-secondary animate-in slow-mo " data-anim-type="zoom-in" data-anim-delay="400" href="{{url($slid->title2) }}" title="">اقرأ المزيد
                                                  </a></div>
                                          @endif                                
                                        </div>  
                                      </center>
                            </div>  
                           
                              @endforeach
                            @foreach ($sliders as $slider)
                                <div class="item">
                                    <div class="overlaw"></div>
                                    <img src="{{url($slider->image) }}" style=" max-height: 585px;   min-height: 439px; " alt="1"/>
                                      <center><div class="imgG "  style="top: 70% !important;">    
                                        @if(($slider->title1) !=="")  
                                        <h1 class="animate-in slow-mo" data-anim-type="fade-in-left" data-anim-delay="300" >
                                            <strong style="padding:10px;color: #1b2a89;
                                                  background: #ffffffd6;"> {{ $slider->title1}} 
                                            </strong>
                                        </h1>  
                                        @endif
                                         @if(($slider->title2) !=="")  
                                         <div class="h-lefttt">
                                        <a   class="btn btn-outline-secondary animate-in slow-mo  h-lefttt" data-anim-type="zoom-in" data-anim-delay="400" href="{{url($slider->title2) }}" title="">اقرأ المزيد  
                                        </a> </div>
                                                                                        
                                        @endif
                                    </div></center>
                                </div>
                            @endforeach
                         
                       
                        </div>
                    </div>
                    <!--/////// end slider  //////////////-->


                     <!--/////// start Company information  //////////////-->

                    <section id="section-2" >
                        <div class="">
                            <div class="row head">
                                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
                                  <br>
                                    <h2 >
                                          <div style="    font-size: 20px;   font-weight: 800; color: #1b2a89;"><h1 style="    font-size: 20px;   font-weight: 800; color: #1b2a89;">
                                              الريادة في تقديم الخدمات و الاستشارات التكنولوجية
                                          </h1></div>   
                                                                           
                                        @foreach ($description as $desc)
                                        <p style="       font-size: 17px;    font-weight: 500;    line-height: 30px;text-align: center;">
                                          {{ $desc->description }}
                                        </p>
                                          @endforeach
                                           <center>
                                        <div class="col-sm-4">
                                          </div>  
                                            <div class=" col-sm-4 col-xs-12">
    <a href="{{url('offers/1/عروض-تصمم-وبرمجة-المواقع') }}" style=" color: white; font-size:14px;font-family:bukra; font-weight: bold;" class="col-md-4 btn btn-block btn-info btn-sm" >  أستكشف أحدث العروض والأسعار  </a>    
                                          </div>  
                                          <div class="col-sm-4">
                                             
                                          </div>   
                                          </center>   

                                           </h2>  

                                   
                                </div>     
                                
                           
                            </div>
                        </div>
                    </section>
    <!--                ///////////////////////////-->
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid bgfixed banar vc_row-has-fill vc_row-no-padding">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
      
          <div class="vc_row wpb_row vc_inner vc_row-fluid container  anim-fadeIn" dir="rtl">
              <div class="mobile-no-padding wpb_column vc_column_container col-xs-12 vc_col-md-6" style=" background: rgba(250, 250, 250, 0.7);">
                <div class="vc_column-inner vc_custom_1461059744030">
                  <div class="wpb_wrapper">
                  <div class="wpb_wrapper"> <br>
                          <span style="padding-top: 15px;  padding: 10px;  color: #041ec1;font-size: 18px; font-weight: 500;    font-family: bukra;">
                           هل تريد تصميم موقع الكتروني رائع وفعال؟
                          </span>
                        <style type="text/css">
                          .btnhover a:hover {
                            background: red;
                          }
                        </style>
                        <p class="btnhover" style="padding-top: 15px; padding:  10px;text-align: justify;">
                          <span style="  text-align: justify;  color: #656565;line-height: 24px; font-size: 13px; font-family: bukra;"> إذا كنت صاحب مشروع ناشئ أو لديك فكرة مشروع تريد بناؤه أو هناك مشكلة في السوق وتسعى لحلها و تقديم أكبر قيمة ممكنة فيها؟ ماتريكس كلاودز هي الحل .اطلب عرض أسعار من خلال تعبئة النموذج في صفحة طلب سعر  لطلب تقدير مجاني لتصميم الموقع الخاص بك أو أي خدمة من الخدمات الاخري التي نقدمها . كلما كنت أكثر تفصيلاً ، كلما تمكنا من تحديد نطاق مشروعك بشكل أسرع. سوف نتصل بك في خلال 48 ساعة إذا كنت بحاجة إلى مساعدة فورية ، فالرجاء الاتصال بنا على رقم 01014141625‎
 </span><br><br>
                            <a  class=" btn btn-outline-secondary animate-in slow-mo" data-anim-type="zoom-in" data-anim-delay="400" href="{{ url('طلب-سعر ') }}" title="" style="background: #1b2a89;
    color: white;
        margin-right: 186px; font-size: 16 "> طلب سعر
                                                  </a>
                        </p>
                      
                      </div>
                  
                  </div>
                </div>
              </div>
            <div class="wpb_column vc_column_container vc_col-md-4" style="float: right;">
              <div class="vc_column-inner vc_custom_1460112287153">             
            </div>
            </div>
          
  </div>
</div></div></div></div>
<!--                    ////////////////////////////->
                    <!--/////// end Company information  //////////////-->

                    <div class="oe_structure"></div>
                    <section id="section-3" data-rows="2">
                        <div class="container-fluid">
                            <div class="row head">
                                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
                                    <h2 class="animate-in slow-mo" data-anim-type="fade-in-right" data-anim-delay="300">
                                        <span class="green">خدماتنا </span>
                                    </h2>
                                    <h5 class="animate-in slow-mo" data-anim-type="fade-in-right" data-anim-delay="300">
                                       هدفنا الرئيسي في ماتريكس تقديم كافة الحلول للشركات ومساعدتها علي التطوير المستمر لذلك قمنا بتوفير خدمات عديدة ومتنوعة في شتى المجالات المتعلقة بالتسويق الألكتروني ولقد ساعدنا العديد من الشركات و المؤسسات وحتى الأشخاص فى بناء هويتهم الإلكترونية و تطوير علامتهم التجارية و تصميم مواقعهم بطريقة احترافية وترويجها على مختلف الوسائل الإلكترونية. سوف نساعدك  لبناء علاقة مستدامة مع عملائك على شبكة الإنترنت وبناء روابط الصلة بينك وبين عملائك الحاليين والمحتملين ولتحقيق أعلى عائد من إنشاء موقعك والترويج لمنتجاتك وأفكارك وخدماتك على الإنترنت
                                    </h5>

                                </div>
                                <div class="col-xs-12 col-sm-12">
                                  <style type="text/css">
                                    .portfolio-item:hover .hamadaaa{
                                     
                                   visibility:visible ;
                                    }
                                      .hamadaaa{
                                     
                                   visibility: hidden;
                                    }

                                  .overlay {
                                              border-color: black;
                                              color: black;
                                              padding: 50px;
                                              background-size: 200% 200%;
                                              }

                                              .overlay:hover {color: white;
                                              border-color: #A72424;
                                              background-image: 
                                              linear-gradient(to top, #1b2a89b5  51%, transparent 50%);
                                              background-position: 0 100%;
                                              -webkit-transition: background-position 800ms, color 800ms ease, border-color 300ms ease;
                                              -moz-transition: background-position 800ms, color 800ms ease, border-color 300ms ease;
                                              -ms-transition: background-position 800ms, color 800ms ease, border-color 300ms ease;
                                              -o-transition: background-position 800ms, color 800ms ease, border-color 300ms ease;
                                              transition: background-position 800ms, color 800ms ease, border-color 300ms ease;
                                    }
                                   
                                  </style>
                                       @foreach ($services as $service)
                                    <div id="portfolio-list">
                                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mix buildings interior">
                                              <a href="{{ str_replace(' ', '-',(url('service/'.$service->id.'/'.$service->title))) }} "><div class="portfolio-item">
                                                <img class="img-fluid" src="{{url($service->image) }}"  alt="Responsive image">
                                                <div class="overlay">
                                                
                                                <div class="content hamadaaa" >
                                                    <h3 style="color: #fff;">
                                                       {{ $service->title }}  
                                                    </h3>
                                                     <p style="color: #fff;">
                                                         

                                                    </p>
                                                </div> </div>
                                               
                                            </a>
                                            </div>
                                        </div>
                                    </div>
 @endforeach
                                </div>
                                </div>
                        </div>
                    </section>
                    <!--/////// end our services  //////////////-->

                    <!--/////// start our Clients  //////////////-->
                 
                     <!-- <section id="section-4" data-rows="3">
                            <div class="container-fluid">
                              <div class="row head">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                  <h2 class="animate-in slow-mo" data-anim-type="fade-in-right" data-anim-delay="300" > عملاءنا </h2>
                                  
                                </div>
                              </div>

                              <div class="row animate-in slow-mo" data-anim-type="fade-in-up" data-anim-delay="400">
                                <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                                <div class="owl-carousel owl-theme">
                                    @foreach ($clients as $client)
                                        <div class="item">
                                            <li class="col-xs-12 col-md-3 "> 
                                                <a target="_blank" href="#">
                                                    <div class="text-center"> 
                                                                                                     
                                                    </div>                                                  
                                                </a> 
                                            </li>
                                            <li class="col-xs-12 col-md-4 "> 
                                                <a target="_blank" href="#">
                                                    <div class="text-center"> 
                                                        <img src="{{url($client->image) }}" width="120" height="120px" class="hvr-wobble-top"/ style="margin-bottom: 30px">                                                
                                                    </div>                                                  
                                                </a> 
                                            </li> 
                                            <li class="col-xs-12 col-md-4 " style=""> 
                                                <a target="_blank" href="#">
                                                    <div class="text-left hamada"> 
                                                      {{ $client->title }}  <br> 
                                                        {{ $client->description }} 
                                                    </div> <br>
                                                  
                                                </a> 
                                            </li>                                       
                                        </div>
                                    @endforeach
                                </div>
                                </div>
                              </div>
                            </div>
                          </section>-->


                    <!--/////// end our Clients  //////////////-->

                </div>
            </div>
            <div id="training" class="modal fade" role="dialog" data-backdrop="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <img src="{{url('frontendstyle/matrix_website/static/img/training.png')}}"/> </div>
                </div>
              </div>
            </div>

            <script>
                $(document).ready(function(){
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
        </main>


        <div class="vc_row-full-width vc_clearfix"></div>
<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid bgfixed vc_custom_1455887048379 vc_row-has-fill vc_row-no-padding">
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="vc_row wpb_row vc_inner vc_row-fluid container vc_custom_1455454032123">
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="content-widget-title">
                  <div class="content-title-text">
                    <h3 style="color:#ffffff;"> تواصل معنا  </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row wpb_row vc_inner vc_row-fluid container  anim-fadeIn"  dir="rtl">
              <div class="mobile-no-padding wpb_column vc_column_container vc_col-md-4">
                <div class="vc_column-inner vc_custom_1461059744030">
                  <div class="wpb_wrapper">
                    <h2 style="font-size: 24px;color: #ffffff;text-align: right; font-family: bukra;" class="vc_custom_heading normalfont vc_custom_1460112282320" > معلومات الإتصال </h2>
                    <div class="wpb_text_column wpb_content_element"> 
                      <div class="wpb_wrapper"> 
                        <p>
                          <span style="    color: #ffffff; font-size: 11px; font-family: bukra;"> خدمة العملاء لدينا في خدمتكم طوال الوقت، فنحن نسعى جاهدين لنحوزعلى رضاكم وأن نكون دوماً عند حسن ظنكم. يسعدنا استقبال ملاحظاتكم واستفساراتكم  طوال الوقت )
   مواعيد العمل من يوم السبت إلى يوم الخميس، من الساعة 8:00 صباحاً وحتى الساعة 5:00 مساءً. </span>
                        </p>
                      </div>
                    </div>
                    <div class="contactv1-information">
                     <style type="text/css">
                        .contactv1-information ul li i {
                        color: #1b2a89 !important;
                        
                      }
                     </style>
                      <ul style="color:#ffffff;">     
                          @foreach ($contact as $aderss)                          
                          <li>

                            <i class="fa fa-map-marker" ></i> {{ $aderss->adress }}
                          </li>     
                          @endforeach
                              @foreach ($contact as $phone)                         
                          <li>
                            <i class="fa fa-phone"></i>  {{ $phone->phone }}  
                          </li>                     
                              @endforeach
                          @foreach ($contact as $mail)
                          <li>
                            <i class="fa fa-envelope"></i>{{ $mail->mail }}
                          </li>
                          @endforeach
                             
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            <div class="wpb_column vc_column_container vc_col-sm-7 "  style="float: right;">
              <div class="vc_column-inner vc_custom_1460112287153" >
                <div class="wpb_wrapper" >
                  <h2 style="font-size: 15px;color: #ffffff;text-align: right;    font-family: bukra;" class="vc_custom_heading normalfont vc_custom_1460112242697" >  نحن نقدر ملاحظاتك القيمة ، اقتراحاتك ، او أي استفسار لديك. يرجى ترك البيانات الخاصة بك  وسوف نقوم بالرد عليك في أقرب وقت ممكن  </h2>
                  <div role="form" class="wpcf7" id="wpcf7-f188-p1126-o2"  dir="rtl">
                   <div class="screen-reader-response">
                   </div>
                     
                       @if(session()->has('message'))
                        <div class="alert alert-success " style="padding: 5px; margin-top: 20px; margin-right: 20px; margin-right: 12px; font-size: 17px;">
                            {{ session()->get('message') }}
                        </div>
                      @endif






                   <form action="{{ url('messages_add') }}" method="post" class="wpcf7-form" name="f1"  onsubmit="return validate()"> {{ csrf_field() }}
                    <div style="display: none;"> 
                      <input type="hidden" name="_wpcf7" value="188" />
                      <input type="hidden" name="_wpcf7_version" value="5.0.2" /> 
                      <input type="hidden" name="_wpcf7_locale" value="en_US" />
                       <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f188-p1126-o2" />
                        <input type="hidden" name="_wpcf7_container_post" value="1126" />
                      </div>
                      <div class="home1contact whitetransparentform"> 
                        <div class="row">
                          <div class="col-sm-6 col-xs-12 formrow"> 
                            <div class="form-group">
                             <span class="wpcf7-form-control-wrap your-name">
                              <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder=" الإسم " />
                              <span id="namelocation" style="color:#e33f3f"></span>
                             </span>
                            </div>
                          </div>
                          <div class="col-sm-6 col-xs-12">
                            <div class="form-group"> 
                              <span class="wpcf7-form-control-wrap your-email">
                                <input type="email" name="mail" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder=" البريد الإلكتروني  " />
                                 <span id="maillocation" style="color:#e33f3f"></span>
                              </span>
                            </div>
                          </div>
                          <div class="col-sm-6 col-xs-12 formrow"> 
                            <div class="form-group">
                             <span class="wpcf7-form-control-wrap your-name">
                              <input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder=" الموبايل " />
                               <span id="phonelocation" style="color:#e33f3f"></span>
                             </span>
                            </div>
                          </div>
                          <div class="col-sm-6 col-xs-12">
                             <div class="form-group"> 
                              <span class="wpcf7-form-control-wrap subject">
                                <input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder=" الموضوع " />
                                <span id="subjectlocation" style="color:#e33f3f"></span>
                              </span>
                             </div>
                          </div>
                          <div class="col-xs-12">
                            <div class="form-group">
                              <span class="wpcf7-form-control-wrap your-message">
                                <textarea name="message" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="الرساله"></textarea>
                                 <span id="messagelocation" style="color:#e33f3f"></span>
                              </span>
                            </div>
                          </div>
                             <div class="col-xs-12">
                            <div class="form-group">
                              <span class="wpcf7-form-control-wrap your-message">
                                  {!! Recaptcha::render() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                     <div class="help-block" style="direction: ltr;  border: #E25757 solid 1px;  border-radius: 5px;
                                                text-align: center; font-weight: bold; color: red;   padding: 0.25%;
                                                margin: 0.5%;  background: #F3ABAB;    width: 300px; ">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </div>
                     @endif
                              </span>
                            </div>
                          </div>
                                
                        </div>
                        <p>
                          <input type="submit" value="إرسال" class="wpcf7-form-control wpcf7-submit alternative-button" />
                        </p>
                      </div>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                  </form>
                  </div>
              </div>
            </div>
            </div>
          
  </div>
</div></div></div></div>


@stop

