@extends('frontend/homepage')

@section('frontpage')
       

  @section('seo')

      <meta name="description" content="{{$id->description }}" />

      <meta name="keywords" content="{{$id->title }}" />

      <meta name="author" content="" / >

      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
      
     

    @stop


        {!! Html::style('frontendstyle/service/repository/bootstrap/css/bootstrap.css') !!}
  

        {!! Html::style('frontendstyle/service/repository/bootstrap/css/bootstrap-theme.css') !!}
    

        {!! Html::style('frontendstyle/service/css/main.css') !!}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
   
  <div id="container"> <title> {{$id->title }} | ماتريكس كلاودز لحلول الاعمال المتكاملة   </title>
            <section id="section-1" class="panel home" data-section-name="home" >
                <div class="container">
                    <div id="header" class="row"> 
                        <div class="  tabl" >
                           
                        </div>
                        <div class="col-xs-12  tabl" >
                            <style>
                                #header ul li.bordered a:hover{                        
                                   background: #1b2a89 !important;
                                }
                            </style>
                            <ul class="nav nav-pills nav-left">                                
                                <li class="bordered talb" ><a title="" href="{{ url('طلب-سعر ') }}">
                                طلب سعر
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    @foreach ($minservices as $minserv)
                        <div class="row" >
                            <div class="col-xs-12 col-md-12">
                  <h1 class="animate-in slow-mo col-xs-12    " data-anim-type="fade-in-right" data-anim-delay="300" 
                  style="   
                            margin-top: 30%;
                            margin-right: 10%; 
                            font-weight: 700;
                            font-family: bukra;
                            font-size: 29px;
                            color: #fff;"> {{ $minserv->title }} </h1>  
                            <div class="col-xs-12 col-md-7  "style="      line-height: 30px;  margin-right:10%;  font-family: bukra; font-size: 18px; color: #fff;"> {{ $minserv->description }}
                            </div>                       
                        
                            </div>                      
                        </div>
                    @endforeach
                </div><!-- /.container  -->
                <a href="#section-2" class="scroll"></a>
            </section>
            <section id="section-2" class="panel design" data-section-name="design">
                <div class="container-fluid">
                    <div class="row head">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                            <h2 class="animate-in slow-mo" data-anim-type="fade-in-right" data-anim-delay="300">
                            <i class="fab fa-google-plus-g"></i> وصف الخدمة </h2>
                            <p class="animate-in slow-mo" data-anim-type="fade-in-left" data-anim-delay="400">
                                {{ $id->description }}                               
                            </p>
                        </div>
                    </div><br><br><br>
                    <div class="row " >
                        <div class="col-xs-12 col-sm-4 col-sm-offset-1">
                            <img src="{{url($id->image) }}" alt="" class="img-responsive" style="    height: 339px;width: 100%; margin-bottom:20px"  />
                        </div>
                        <div style="color: #1b2a89;     margin-right: 12px; font-size: x-large; margin-bottom: 19px;    font-family:bukra;">&nbsp;لماذا نحن دائما الأفضل  </div>
                        <div class="col-xs-12 col-sm-6">
                            
                            <ul class="list-unstyled">
                                 @foreach ($features as $feature)
                                    <li class="animate-in slow-mo" data-anim-type="bounce-in-right" data-anim-delay="200" title="text tooltip">                                        
                                        <img src="{{url($feature->image) }}" style="min-width: 25px !important;  max-height: 25px;  min-height: 25px;" alt="1"/>  
                                          <span style="    font-size: 18px;
    font-family: bukra;
    font-weight: bold;">&nbsp;&nbsp;{{ $feature->title }}</span>    
                                        <p style="    margin-right: 49px;  margin-bottom: 10px; font-family: bukra; font-size: 14px;"> {{ $feature->description }} </p>
                                    </li> 
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="#section-3" class="scroll"></a>
            </section>
            <!--
            <section id="section-4" data-rows="3" class="panel dev" data-section-name="dev">
                <div class="container-fluid">
                    <div class="row head inverse">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                            <h2 class="animate-in slow-mo" data-anim-type="fade-in-right" data-anim-delay="300">منهجية التطوير</h2>
                            <p class="animate-in slow-mo" data-anim-type="fade-in-right" data-anim-delay="400"><i class="icon183-1"></i></p>
                            <h4 class="animate-in slow-mo" data-anim-type="fade-in-left" data-anim-delay="300">فكرة التطبيق</h4>
                        </div>
                    </div>
                    <div class="row animate-in slow-mo" data-anim-type="fade-in-up" data-anim-delay="400">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَهناك حقيقة مثبتة منذ زمن طويل ...َ</p>
                                </div>
                                <div class="item">
                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَهناك حقيقة مثبتة منذ زمن طويل ...َ</p>
                                </div>
                                <div class="item">
                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَهناك حقيقة مثبتة منذ زمن طويل ...َ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                            <p class="text-center">
                                <a href="javascript:void(0);" class="btn btn-info hvr-fade animate-in slow-mo" data-anim-type="bounce-in-down" data-anim-delay="600" data-toggle="modal" data-target="#reqModal" title="">طلب تسعيرة</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>-->
         
            <section id="section-6" data-rows="2" class="panel contact" data-section-name="contact">
                <div class="container-fluid">
                    <div class="row head">
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-xl-8 col-xl-offset-2">
                            <h2 class="animate-in slow-mo" data-anim-type="fade-in-down" data-anim-delay="300"> أطلب  الخدمة </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-10 col-md-offset-1 col-xl-8 col-xl-offset-2">
 <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper
          <div class="vc_row wpb_row vc_inner vc_row-fluid container  anim-fadeIn"  dir="rtl">
            <div class="wpb_column vc_column_container vc_col-md-1"  style="float: right;margin-right: 15px">
            </div>
            <div class="wpb_column vc_column_container vc_col-md-10"  style="float: right;">
              <div class="vc_column-inner vc_custom_1460112287153">
                <div class="wpb_wrapper" >
            
                  <div role="form" class="wpcf7" id="wpcf7-f188-p1126-o2"  dir="rtl">
                   <div class="screen-reader-response">
                   </div>
                        <script type="text/javascript">  
                              function validate(){  
                                  var name=document.f1.name.value;  
                                  var mail=document.f1.mail.value; 
                                  var majal=document.f1.majal.value; 
                                  var phone=document.f1.phone.value;
                                  var company=document.f1.company.value;
                                 
                                  var site=document.f1.site.value;
                                //  var image=document.f1.file.value;
                                  var description=document.f1.description.value;
                                  
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

                                  if(majal==""){  
                                    document.getElementById("majallocation").innerHTML=  
                                    "  من فضلك أدخل المجال ";  
                                    status=false;
                                  }else{  
                                    document.getElementById("majallocation").innerHTML="";  
                                      status=true;
                                  }  
                                  if(phone==""){  
                                    document.getElementById("phonelocation").innerHTML=  
                                     "  من فضلك ادخل رقم الموبايل";  
                                    status=false;
                                  }else{  
                                    document.getElementById("phonelocation").innerHTML="";  
                                      status=true;
                                  }  
                                   if(company==""){  
                                    document.getElementById("companylocation").innerHTML=  
                                    "  من فضلك ادخل اسم الشركة ";  
                                    status=false;
                                  }else{  
                                      document.getElementById("companylocation").innerHTML="";  
                                      status=true;
                                  }  
                                 
                                  if(site==""){  
                                    document.getElementById("sitelocation").innerHTML=  
                                    " من فضلك ادخل رابط الموقع ";  
                                    status=false;
                                  }else{  
                                    document.getElementById("sitelocation").innerHTML=" ";  
                                      status=true;
                                  }  

                                  //   if(image==""){  
                                  //   document.getElementById("filelocation").innerHTML=  
                                  //   "  من فضلك أرفق ملف ";  
                                  //   status=false;
                                  // }else{  
                                  //   document.getElementById("filelocation").innerHTML=" ";  
                                  //     status=true;
                                  // } 
                                   if(description==""){  
                                    document.getElementById("descriptionlocation").innerHTML=  
                                    " من فضلك اكتب الرساله ";  
                                    status=false;
                                  }else{  
                                    document.getElementById("descriptionlocation").innerHTML=" ";  
                                      status=true;
                                  }  
                                
                                
                                  return status;  
                              }  

                        function show(input) {
                                debugger;
                                var validExtensions = ['png','jpeg','pdf','docx']; //array of valid extensions
                                var fileName = input.files[0].name;
                                var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
                                if ($.inArray(fileNameExt, validExtensions) == -1) {
                                    input.type = ''
                                    input.type = 'file'
                                    $('#user_img').attr('src',"");
                                    alert("Only these file types are accepted : "+validExtensions.join(', '));
                                }
                                else
                                {
                                if (input.files && input.files[0]) {
                                    var filerdr = new FileReader();
                                    filerdr.onload = function (e) {
                                        $('#user_img').attr('src', e.target.result);
                                    }
                                    filerdr.readAsDataURL(input.files[0]);
                                  }
                                }
                            }
                        </script>

                             @if(session()->has('message'))
                            <div class="alert alert-success " style="   padding: 5px;
                                                                            margin-top: 20px;
                                                                            margin-right: 50px !important;
                                                                            margin-right: 12px;
                                                                            font-size: 17px;
                                                                            max-width: 547px;">
                                {{ session()->get('message') }}
                                
                          @endif
                            </div>
                <form  method="post" action="{{ url('quate/'.$id->id) }}" enctype="multipart/form-data" name="f1"  onsubmit="return validate()" >
                 
                 {{ csrf_field() }}
                      
                      <div class="home1contact whitetransparentform"> 
                        <div class="row">
                          <div class="col-sm-6 col-xs-12 formrow"> 
                            <div class="form-group">
                             <span class="wpcf7-form-control-wrap your-name">
                              
                                <input type="hidden" name="nameservic" value="{{$id->title }}"   />
                                <input type="text" name="name" value=""   placeholder=" الإسم " />
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
                                <input type="text" name="majal" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder=" االمجال" />
                                 <span id="majallocation" style="color:#e33f3f"></span>
                             </span>
                            </div>
                          </div>
                          <div class="col-sm-6 col-xs-12">
                             <div class="form-group"> 
                              <span class="wpcf7-form-control-wrap subject">
                                 <input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder=" الموبايل " />
                                 <span id="phonelocation" style="color:#e33f3f"></span>
                              </span>
                             </div>
                          </div>
                          <div class="col-sm-6 col-xs-12 formrow">
                             <div class="form-group"> 
                              <span class="wpcf7-form-control-wrap subject">
                                <input type="text" name="company" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder=" اسم الشركة " />
                                 <span id="companylocation" style="color:#e33f3f"></span>
                              </span>
                             </div>
                          </div>
                                          
                          <div class="col-sm-6 col-xs-12 ">
                             <div class="form-group"> 
                              <span class="wpcf7-form-control-wrap subject">
                                <input type="text" name="site" value=""  class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder=" موقعك الإلكتروني" />
                                 <span id="sitelocation" style="color:#e33f3f"></span>
                              </span>
                            </div>
                          </div> 
                            <div class="col-xs-12">
                            <div class="form-group"  style="margin-right: -20px">
                              <span class="wpcf7-form-control-wrap your-message">
                                 <textarea name="description" id="" class="form-control required" cols="30" rows="10" placeholder="نص الرسالة"></textarea>
                                 <span id="descriptionlocation" style="color:#e33f3f"></span>
                              </span>
                            </div>
                          </div>                  
                          <div class="col-sm-6 col-xs-12">
                             <div class="form-group"  style="margin-right: -20px"> 
                            <div class="file-upload">
                              <div class="file-select">
                                <div class="file-select-button" id="fileName"> اختر ملف   </div>
                                <div class="file-select-name" id="noFile"> لم تختار ملف  ... </div> 
                                <input  type="file" name="file" id="file chooseFile" onchange="show(this)">
                                  <input type="hidden" name="urlfile" value=""   />
                                 <span id="filelocation" style="color:#e33f3f"></span>
                              </div>
                            </div> </div>
                            </div>

                        
                            <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                              <span class="wpcf7-form-control-wrap your-message">
                                   <div class="{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}"> 
                                <label></label>  
                                {!! Recaptcha::render() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <div class="help-block" style=" direction: ltr; border: #E25757 solid 1px;  border-radius: 5px;
                                                text-align: center; font-weight: bold; color: red;   padding: 0.25%;
                                                margin: 0.5%;  background: #F3ABAB;    width: 300px; ">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </div>
                                @endif
                                
                            </div>
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
</div>
</div>

</div>
<!--/////////////////////////////-->

                        </div>
                    </div>
                </div>
         

            <a href="javascript:" class="scrollTop"><i class="glyphicon glyphicon-menu-up"></i></a>
        </div><!-- /#container  -->

<style type="text/css">
                          

.whitetransparentform input[type="email"], .whitetransparentform input[type="number"], .whitetransparentform input[type="password"], .whitetransparentform input[type="tel"], .whitetransparentform input[type="url"], .whitetransparentform input[type="text"], .whitetransparentform input[type="time"], .whitetransparentform input[type="week"], .whitetransparentform input[type="search"], .whitetransparentform input[type="month"], .whitetransparentform input[type="datetime"], .whitetransparentform input[type="date"], .whitetransparentform textarea, .whitetransparentform textarea.form-control, .whitetransparentform select, .whitetransparentform .form-control {
    background: #fff !important;
    border-color: #ccc !important;
    color: #34496a  !important;
}  
::placeholder {
  color: #676a6d !important;
  opacity: 1; /* Firefox */
}
textarea {

 background-color: yellow;
 color: #34496a !important;
 
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: #676a6d !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: #676a6d !important;
}
.copyright {
  display:block;
  margin-top: 100px;
  text-align: center;
  font-family: Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-weight: bold;
  text-transform: uppercase;
}
.copyright a{
  text-decoration: none;
  color: #EE4E44;
}


/****** CODE ******/

.file-upload{display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
.file-upload .file-select{display:block;border: 2px solid #cccccc;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;overflow:hidden;position:relative;}
.file-upload .file-select .file-select-button{float: right;background:#cccccc;padding:0 15px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select .file-select-name{ color: #fff;   float: right;line-height:40px;display:inline-block;padding:0 10px;}
.file-upload .file-select:hover{border-color:#cccccc;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select:hover .file-select-button{background:#cccccc;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
.file-upload .file-select.file-select-disabled{opacity:0.65;}
.file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}       
 </style>


@stop

