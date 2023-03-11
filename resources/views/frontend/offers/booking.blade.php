@extends('frontend/homepage')

@section('frontpage')
       

         @section('seo')

       <!--   <meta name="description" content="أحجز من خلال تعبئة النموذج أدناه وسيتصل بك مدير المشروعات لدينا. هذا النموذج مفصّل ومصمّم لك لمشاركة أكبر قدر ممكن من المعلومات حول رؤية وفكرة مشروعك" />-->

          <meta name="keywords" content="" />

          <meta name="author" content="" / >

          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
          
          <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
          
        @stop

        {!! Html::style('frontendstyle/service/repository/bootstrap/css/bootstrap.css') !!}

        {!! Html::style('frontendstyle/service/repository/bootstrap/css/bootstrap-theme.css') !!}
    
        {!! Html::style('frontendstyle/service/css/main.css') !!}
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
     <div id="container">  <title> أطلب الأن | ماتريكس كلاودز لحلول الاعمال المتكاملة  </title>
           
         
            <section id="section-6" data-rows="2" class="panel contact" data-section-name="contact">
                <div class="container-fluid">
                    <div class="row head">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-xl-8 col-xl-offset-2">
                            <h2 class="animate-in slow-mo" data-anim-type="fade-in-down" data-anim-delay="300"> أطلب الأن </h2>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-xs-12 col-md-10 col-md-offset-1 col-xl-8 col-xl-offset-2">
                        	
                           @if(session()->has('message'))
                            <div class="alert alert-success " style="    padding: 5px;
                                                                         margin-top: 20px;
                                                                         margin-right: 31px !important;
                                                                         margin-right: 12px;
                                                                         font-size: 17px;
                                                                         max-width: 547px;">
                                {{ session()->get('message') }}
                            </div>
                          @endif 

                            <form   method="post" action="{{ url('sendbooking/'.$id->id) }}"    name="f1"  onsubmit="return validate()">
                            	   {{ csrf_field() }}
                                <div class="col-xs-12 col-sm-4 animate-in slow-mo" data-anim-type="fade-in-left" data-anim-delay="300">
                                  <div class="form-group">
                                    <div class="col-xs-12">
                                       <input type="hidden"  name="namepackage" value="{{ $id->title }}"  />
                                      <input type="text"  name="name" class="form-control required"  placeholder=" الإسم " />
                                      <span id="namelocation" style="color:#e33f3f"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 animate-in slow-mo" data-anim-type="fade-in-up" data-anim-delay="500">
                                  <div class="form-group">
                                    <div class="col-xs-12">
                                      <input type="text" name="mail" class="form-control required"  placeholder="البريد الالكتروني" />
                                      <span id="maillocation" style="color:#e33f3f"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 animate-in slow-mo" data-anim-type="fade-in-left" data-anim-delay="300">
                                  <div class="form-group">
                                    <div class="col-xs-12">
                                      <input type="text" name="subject" class="form-control required" i placeholder="الموضوع" />
                                      <span id="subjectlocation" style="color:#e33f3f"></span><br>
                                    </div><br>
                                  </div><br>
                                </div>
                                <div class="col-xs-12 animate-in slow-mo" data-anim-type="fade-in" data-anim-delay="500">
                                  <div class="form-group">
                                    <div class="col-xs-12">
                                      <textarea name="message" id="" class="form-control required" cols="30" rows="10" placeholder="نص الرسالة"></textarea>
                                      <span id="messagelocation" style="color:#e33f3f"></span>
                                    </div>
                                  </div>br>
                                </div>
                                   <div class="col-xs-12 animate-in slow-mo" data-anim-type="fade-in" data-anim-delay="500">
                                  <div class="form-group">
                                    <div class="col-xs-12">
                                      {!! Recaptcha::render() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                   <div class="help-block" style="direction: ltr;  border: #E25757 solid 1px;  border-radius: 5px;
                                                text-align: center; font-weight: bold; color: red;   padding: 0.25%;
                                                margin: 0.5%;  background: #F3ABAB;    width: 300px; ">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </div>
                     @endif
                                    </div>
                                  </div>
                                </div>
                                 
                                <div class="col-xs-12">
                                  <div class="form-group">
                                    <div class="col-sm-12">
                                      <button type="submit" class="btn btn-info hvr-fade animate-in slow-mo" data-anim-type="bounce-in-right" data-anim-delay="300">أرسل</button>
                                    </div>
                                  </div>
                                </div>
                            </form>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
  <script>
    $("#contactForm").validate({
      submitHandler: function (form) {
        var response = grecaptcha.getResponse();
        //recaptcha failed validation
        if (response.length == 0) {
          $('#recaptcha-error').show();
          return false;
        }
          //recaptcha passed validation
        else {
          $('#recaptcha-error').hide();
          return true;
        }
      }
    });
  </script>
<script type="text/javascript">  
      function validate(){  
          var name=document.f1.name.value;  
          var mail=document.f1.mail.value; 
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
              document.getElementById("messagelocation").innerHTML="";  
              status=true;
          }  
            
          return status;  
      }  
</script> 
                </div>
              </div>
          </div>
              <a href="javascript:" class="scrollTop"><i class="glyphicon glyphicon-menu-up"></i></a>
        </div><!-- /#container  -->

@stop

