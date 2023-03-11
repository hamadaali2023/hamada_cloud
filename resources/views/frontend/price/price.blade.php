@extends('frontend/homepage')

@section('frontpage')

  @section('seo')

     <!-- <meta name="description" content="اطلب عرض أسعار من خلال تعبئة النموذج أدناه وسيتصل بك مدير المشروعات لدينا. هذا النموذج مفصّل ومصمّم لك لمشاركة أكبر قدر ممكن من المعلومات حول رؤية وفكرة مشروعك" />-->

      <meta name="keywords" content="" />

      <meta name="author" content="" / >

      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
      
    @stop

<div class="vc_row-full-width vc_clearfix"></div>

<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid bgfixed vc_custom_1455887048379 vc_row-has-fill vc_row-no-padding">

  <!-- <title> طلب سعر  | ماتريكس كلاودز لحلول الاعمال المتكاملة    </title>-->
<style type="text/css">
  .vc_custom_1455887048379{padding-top:17px !important;padding-bottom:56px !important;background-image:url(frontendstyle/home1-contact-bgab99.jpg?id=177) !important;}
</style>
  <div class="wpb_column vc_column_container vc_col-sm-12">
    <div class="vc_column-inner">
      <div class="wpb_wrapper">
        <div class="vc_row wpb_row vc_inner vc_row-fluid container vc_custom_1455454032123">
          <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
              <div class="wpb_wrapper">
                <div class="content-widget-title">
                  <div class="content-title-text">
                    <h3 style="color: #ffffff; font-size: 27px;  line-height: 34px;"> قدم لنا بعض التفاصيل عن مشروعك ودعنا نساعدك  </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="vc_row wpb_row vc_inner vc_row-fluid container  anim-fadeIn"  dir="rtl">
             
            <div class="wpb_column vc_column_container vc_col-md-10"  style="float: right;">
              <div class="vc_column-inner vc_custom_1460112287153">
                <div class="wpb_wrapper" >
                  <h2 style="font-size: 17px;color: #ffffff;text-align: right;    font-family: bukra;" class="vc_custom_heading normalfont vc_custom_1460112242697" > اطلب عرض أسعار من خلال تعبئة النموذج أدناه وسيتصل بك مدير المشروعات لدينا. هذا النموذج مفصّل ومصمّم لك لمشاركة أكبر قدر ممكن من المعلومات حول رؤية وفكرة مشروعك  </h2>
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
          var type=document.f1.type.value;
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
           if(type==""){  
            document.getElementById("typelocation").innerHTML=  
            " من فضلك ادخل النوع ";  
            status=false;
          }else{  
            document.getElementById("typelocation").innerHTML=" ";  
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
                        <div class="alert alert-success " style="    padding: 5px;
    margin-top: 20px;
    margin-right: 0px !important;
    margin-right: 12px;
    font-size: 17px;
    max-width: 547px;">
                            {{ session()->get('message') }}
                        </div>
                      @endif
                   <form  method="post" action="{{ url('requestprice_add') }}" enctype="multipart/form-data" name="f1"  onsubmit="return validate()" > {{ csrf_field() }}
                      
                      <div class="home1contact whitetransparentform"> 
                        <div class="row">
                          <div class="col-sm-6 col-xs-12 formrow"> 
                            <div class="form-group">
                             <span class="wpcf7-form-control-wrap your-name">
                                <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder=" الإسم " />
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
                                <div class="col-sm-6 col-xs-12">
                             <div class="form-group"> 
                              <span class="wpcf7-form-control-wrap subject">
                               
                                <select name="type" id="outputLanguageSelect"   class="wpcf7-form-control" placeholder="Source language">
                                    <option value="" style="color: #000;">نوع الخدمة </option>
                                      @foreach ($menu_service as $menu)
                                         <option value="{{ $menu->title }}" style="color: #000;"  >{{ $menu->title }}</option>
                                      @endforeach                                      
                                  </select>
                                   <span id="typelocation" style="color:#e33f3f"></span>
                              </span>
                             </div>
                          </div>                      
                          <div class="col-sm-6 col-xs-12 formrow">
                             <div class="form-group"> 
                              <span class="wpcf7-form-control-wrap subject">
                                <input type="text" name="site" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder=" موقعك الإلكتروني" />
                                 <span id="sitelocation" style="color:#e33f3f"></span>
                              </span>
                            </div>
                          </div>                   
                          <div class="col-sm-6 col-xs-12">
                             <div class="form-group"> 
                            <div class="file-upload">
                              <div class="file-select">
                                <div class="file-select-button" id="fileName"> اختر ملف   </div>
                                <div class="file-select-name" id="noFile"> لم تختار ملف  ... </div> 
                                <input type="hidden" name="urlfile" value=""   />
                                <input  type="file" name="file" id="file chooseFile" onchange="show(this)">
                                 <span id="filelocation" style="color:#e33f3f"></span>
                              </div>
                            </div> </div>
                            </div>

                          <div class="col-xs-12">
                            <div class="form-group">
                              <span class="wpcf7-form-control-wrap your-message">
                                <textarea name="description"  rows="6" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder=" الوصف  "></textarea>
                                 <span id="descriptionlocation" style="color:#e33f3f"></span>
                              </span>
                            </div>
                          </div>
                            <div class="col-xs-12">
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
</div></div></div>

<style type="text/css">
                            

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
.file-upload .file-select{display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;text-align:left;overflow:hidden;position:relative;}
.file-upload .file-select .file-select-button{float: right;background:#dce4ec;padding:0 15px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select .file-select-name{ color: #fff;   float: right;line-height:40px;display:inline-block;padding:0 10px;}
.file-upload .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
.file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
.file-upload .file-select.file-select-disabled{opacity:0.65;}
.file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
.file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
.file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}       
 </style>


</div>


@stop
