
<!DOCTYPE html>     
<html data-website-id="1" lang="ar-SY">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="utf-8"/>

         @yield('seo')
         <link rel="shortcut icon" type="image/ico" href="{{url('frontendstyle/icon.ico')}}"/>
        

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        {!! Html::style('frontendstyle/web/content/web.assets_frontend.0.css') !!}
     
        {!! Html::style('frontendstyle/web/content/web.assets_frontend.1.css') !!}
       
        {!! Html::style('frontendstyle/web/content/bootstrap-rtl.min.css') !!}
        
        {!! Html::style('frontendstyle/web/content/rtl.css') !!}
       
        {!! Html::script('frontendstyle/web/content/web.assets_common.js') !!}
     
        {!! Html::script('frontendstyle/web/content/web.assets_frontend.js') !!}
<script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body class="rtl ">             
        <div class="modal fade modal-fullscreen footer-to-bottom" id="MenuNav" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog animated zoomInLeft" >
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <div class="logoNav text-center">
                            <img src="{{url('frontendstyle/logo2.png')}}"/ style="max-width: 180px;max-height: 200px">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container" style="width: 1270px;">
                            <nav class="navbar navbar-custom topNav">
                                <div class="container-fluid" >
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">تغيير التصفح</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="float: right;">
                                        <ul class="nav navbar-nav" style="float: right;    margin-right: 10px; ">
                                            <li class="active" >                                              
                                                <a href="{{ url('الرئيسية') }}" style="font-family: bukra; font-size: 16px">الرئيسية
                                                    <span class="sr-only"></span>
                                                </a>
                                            </li>
                                            <li class="active" >                                               
                                                <a href="{{ url('من-نحن ') }}" style="font-family: bukra; font-size: 16px"> من نحن
                                                    <span class="sr-only"></span>
                                                </a>
                                            </li>                                          
                                                   <li  class="active">
                                                <span>
                                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                                </span>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: bukra; "> الخدمات
                                                    <span class="caret"></span>
                                                </a>
                                                 <ul class="dropdown-menu">
                                                    @foreach ($menu_service as $menu)
                                                        <li>                                                  
                                    <a href="{{ str_replace(' ', '-',(url('service/'.$menu->id.'/'.$menu->title))) }}    " style="font-family: bukra; display: block;
                                                                    padding: 3px 20px;
                                                                    clear: both;
                                                                    font-weight: 400;
                                                                    line-height: 1.42857143;
                                                                    color: #333;
                                                                    white-space: nowrap;
                                                                    font-size: 12px; 

                                                                    
                                                                    line-height: 24px;">{{$menu->title }}  </a>
                                                        </li>                                                     
                                                    @endforeach
                                                </ul>
                                            </li>   
                                            <li  class="active">
                                                <span>
                                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                                </span>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: bukra; "> العروض والإسعار
                                                    <span class="caret"></span>
                                                </a>
                                                 <ul class="dropdown-menu">
                                                    @foreach ($offers_menu as $offer)
                                                        <li>                                                  
                                                            <a href="        {{ str_replace(' ', '-',(url('offers/'.$offer->id.'/'.$offer->name))) }}  " style="font-family: bukra; display: block;
                                                                    padding: 3px 20px;
                                                                    clear: both;
                                                                    font-weight: 400;
                                                                    line-height: 1.42857143;
                                                                    color: #333;
                                                                    white-space: nowrap;
                                                                    font-size: 12px;
                                                                    line-height: 24px;">{{ $offer->name }} </a>
                                                        </li>                                                     
                                                    @endforeach
                                                </ul>
                                            </li> 
                                            <li  class="active">
                                                <span>
                                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                                </span>
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-family: bukra; "> اعمالنا 
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    @foreach ($menu_ourwork as $ourwork)
                                                        <li>                                           
                                                        <a href="{{ str_replace(' ', '-',(url('ourwork/'.$ourwork->id.'/'.$ourwork->title))) }}" style="font-family: bukra; display: block;
                                                                    padding: 3px 20px;
                                                                    clear: both;
                                                                    font-weight: 400;
                                                                    line-height: 1.42857143;
                                                                    color: #333;
                                                                    white-space: nowrap;
                                                                    font-size: 12px;
                                                                    line-height: 24px;">{{ $ourwork->title }} </a>
                                                        </li>                                     
                                                    @endforeach
                                                </ul>
                                            </li>               
                                             <li class="active" >                                              
                                                <a href="{{ url('إتصل-بنا ') }}" style="font-family: bukra; font-size: 16px"> اتصل بنا
                                                </a>
                                            </li>
                                             <li class="active" >                                              
                                                <a href="{{ url('طلب-سعر ') }}" style="font-family: bukra; font-size: 16px">طلب سعر
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    </div>
                                </nav>
                        </div>
                    </div>
                </div>
            
                </div>
            </div>
    <div id="wrapwrap" class="homepage">

    <!--/////// start header  //////////////-->
        <header>
            <div class="navbar navbar-default navbar-static-top hidden">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-top-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="{{ url('/') }}" class="navbar-brand logo">
                            <span alt="Logo of " >
                                <img src="{{url('frontendstyle/web/image/res.company/1/logo2272.jpg')}}?unique=52f39f3" class="img img-responsive"/>
                            </span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-top-collapse">
                        <ul class="nav navbar-nav navbar-right" id="top_menu">            
                            <li class="active">
                                <a href="{{ url('/') }}">
                                    <span> الرئيسية  </span>
                                </a>
                            </li>            
                            <li>
                                <a href="en_US/shop.html">
                                    <span>المتجر</span>
                                </a>
                            </li>       
                            <li>
                                <a href="en_US/event.html">
                                    <span>المناسبات</span>
                                </a>
                            </li>       
                            <li>
                                <a href="#">
                                    <span>اتصل بنا</span>
                                </a>
                            </li>
                            <li class="dropdown active">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span>عن</span> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">         
                            <li>
                                <a href="#">
                                    <span>عن</span>
                                </a>
                            </li>          
                            <li>
                                <a href="#">
                                    <span>من أعمالنا</span>
                                </a>
                            </li>           
                            <li>
                                <a href="#">
                                    <span>قصص النجاح</span>
                                </a>
                            </li>     
                            </ul>
                            </li>   
                            <li>
                                <a href="#">
                                    <span>المناسبات</span>
                                </a>
                            </li>
                            <li class="dropdown ">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span>الخدمات</span> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">          
                            <li>
                                <a href="#">
                                    <span>الاستشارات ودعم التحول للتعاملات الإلكترونية</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>أنظمة تخطيط موارد المؤسسات</span>
                                </a>
                            </li>              
                            <li>
                                <a href="#">
                                    <span>تطوير تطبيقات الهواتف الذكية</span>
                                </a>
                            </li>               
                            <li>
                                <a href="#">
                                    <span>تأسيس مكاتب إدارة المشاريع</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>خدمات الصيانة والدعم الفني</span>
                                </a>
                            </li>               
                            <li>
                                <a href="#">
                                    <span>البوابات والخدمات الرقمية</span>
                                </a>
                            </li>    
                            </ul>
                            </li>     
                            <li>
                                <a href="#">
                                    <span>من أعمالنا</span>
                                </a>
                            </li>     
                            <li>
                                <a href="#">
                                    <span>الشركاء</span>
                                </a>
                            </li>   
                            <li>
                                <a href="#">
                                    <span>الخدمات</span>
                                </a>
                            </li>
                                   
                            <li>
                                <a href="en_US/social.html">
                                    <span>المسؤولية الاجتماعية</span>
                                </a>
                            </li>        
                            <li>
                                <a href="helpdesk/index.html">
                                    <span>المساعدة</span>
                                </a>
                            </li>            
                            <li>
                                <a href="en_US/jobs.html">
                                    <span>الوظائف</span>
                                </a>
                            </li>
                            <li>
                                <a href="en_US/test.html">
                                    <span>test</span>
                                </a>
                            </li>            
                            <li>
                                <a href="en_US/gbvvcvncnc.html">
                                    <span>gbvvcvncnc</span>
                                </a>
                            </li>    
                            <li>
                                <a href="en_US/test-1.html">
                                    <span>test</span>
                                </a>
                            </li>  
                            <li id="my_cart" class="hidden">
                                <a href="en_US/shop/cart.html">
                                    <i class="fa fa-shopping-cart"></i>
                                            سلة التسوق <sup class="my_cart_quantity label label-primary"></sup>
                                </a>
                            </li>                     
                            <li class="divider"></li>
                            <li>
                                    <a href="en_US/web/login.html">
                                            <b>تسجيل دخول</b>
                                    </a>
                            </li>
                       </ul>
                     </div>
                </div>
            </div>   
              <!--////  logo /////////////--> 
             
                <div class="h-top " class="logo  " style="background: #1b2a89" >

                    <a href="#" data-target="#MenuNav" style="float: right; margin-right: 10px; margin-top: 10px" data-toggle="modal" data-placement="top" title="">
                      <span class="fa fa-th" style="color: #fff;font-size:20px;" data-toggle="tooltip" data-placement="top" title="" data-original-title="القائمة"></span>
                    </a>

                    <a href="{{ url('/') }}" class="logo" >
                          <img  src="{{url('frontendstyle/logo.png')}}"/ style="max-height: 190px; max-width: 190px">                         
                    </a> 
                </div>

             <!--////  logo /////////////--> 
            <br><br>

            <div class="h-left">
                <div class="btNav">
                  <a href="#" data-toggle="modal" data-target="#MenuNav" data-original-title="" title="">
                    <img src="{{url('frontendstyle/matrix_website/static/img/visuel/nav.jpg')}}" data-original-title="" title=""/ style="    height: 45px;width: 46px;">
                  </a>
                </div>
              
            </div>
            <script src="matrix_website/static/js/my_cart.js"></script>
            <div class="h-right" style="margin-top:  45px !important" >
                <div class="boutonNav">
                  <ul class="nav-right">
                    <li class="item animate-in" data-anim-type="fade-in-left" data-anim-delay="100">
                      <a data-toggle="tooltip" data-placement="right" title="" target="_blank" href="{{ url('https://www.facebook.com/Matrix.Clouds') }}" data-original-title="فيسبوك">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="item animate-in" data-anim-type="fade-in-left" data-anim-delay="250">
                      <a data-toggle="tooltip" data-placement="right" title="" target="_blank" href="{{ url('https://twitter.com/Matrixclouds') }}" data-original-title="تويتر">


                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="item animate-in" data-anim-type="fade-in-left" data-anim-delay="400">
                      <a data-toggle="tooltip" data-placement="right" title=""  target="_blank" href="{{ url('https://www.linkedin.com/company/matrixclouds/about') }}" data-original-title=" لينكد إن ">


                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </a>
                    </li>
                   <li class="item animate-in" data-anim-type="fade-in-left" data-anim-delay="850">
                      <a data-toggle="tooltip" data-placement="right" title="" target="_blank" href="https://www.youtube.com/channel/UCpy8YxhHwu23hNhwzqhQuHQ" data-original-title="يوتيوب">
                        <i class="fa fa-youtube" aria-hidden="true"></i>
                      </a>
                    </li>
                  
                     <li class="item animate-in" data-anim-type="fade-in-left" data-anim-delay="550">
                      <a href="{{ url('https://api.whatsapp.com/send?phone=201003310039&text=Kindly%20contact%20us%20to%20discuss%20our%20requirements') }}t" data-toggle="tooltip" data-placement="right" title="" target="_blank" data-original-title=" الواتساب  ">
                       
                        <img src="{{url('frontendstyle/whats.png')}}" style="max-height: 22px;max-width:22px" >
                      </a>
                    </li>
                    <li class="item animate-in" data-anim-type="fade-in-left" data-anim-delay="700">
                      <a href="tel:01000829348" data-toggle="tooltip" data-placement="right" title="" data-original-title="   01014141625 ">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                      </a>
                    </li>
                 
                  </ul>
                </div>
            </div>
            
    </header>
    <!--/////// end header  //////////////-->




{!! Html::style('frontendstyle/dist/cache/wpfc-minified/d31dv4lo/bmq4k.css') !!}

@yield('slider')