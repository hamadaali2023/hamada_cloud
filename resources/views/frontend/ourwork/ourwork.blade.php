
@extends('frontend/homepage')

@section('frontpage')
 
  @section('seo')

     <!-- <meta name="description" content=" نقدم لكم بعض من أعمالنا في خدمة تصميم وبرمجة المواقع الألكترونية قمنا بانشائها بأعلي التقنيات والأساليب الحديثة واعتمدنا على البساطة في تصميم المواقع لتسهيل عمليات نقل المعلومات و إختصار زمن تحميل الموقع إلى أقل مدة ممكنة و ما يميز أعمالنا هو تنفيذهل باحترافية شديدة بحيث نحول الصورة في ذهن العميل إلى واقع " />-->
     <!-- <meta name="keywords" content="بعض من اعمالنا في كافة القطاعات" />-->
      <meta name="author" content="" / >
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
     <!-- <title> أعمالنا | ماتريكس كلاودز لحلول الاعمال المتكاملة    </title>-->

    @stop


            <main>
            <div id="container">
                <div class="oe_structure"></div>
                <section id="section-web">
                    <div class="container-fluid">
                        <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <h1 class="animate-in slow-mo" data-anim-type="fade-in-left" data-anim-delay="300"> {{$id-> title }}
                            </h1>
                            <div class="col-md-12">
                                <p>
                                  {{$id->description }}
                                  
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12 col-md-offset-1 margeTOP1">
                          
                            <div class="col-xs-12 col-md-12 margeTOP1">

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

                                    #portfolio-list .mix {
                                      margin: 14px !important;
                                    }
                                    
                              </style>

                                @foreach ($ourworks as $ourwork)
                                    <div id="portfolio-list" class="animate-in slow-mo" data-anim-type="fade-in-up" data-anim-delay="200">
                                        <div class="col-md-3  col-xs-12 mix buildings interior hamadahover">
                                            <div class="portfolio-item">
                                                @if(($ourwork->image) !=="") 
                                                   <img src="{{url($ourwork->image) }}"style="     alt=""/>
                                              
                                                @endif 
                                                @if(($ourwork->video) !=="") 
                                                    <iframe style="     max-width: 335px;
min-width: 314px;
max-height: 250px;
min-height: 250px;
width: 335px !important;" src="{{$ourwork->video }}">
                                                   </iframe>
                                                 @endif 
                                                <div class="overlay">
                                                    <div class="content hamada">
                                                        <a target="_blank" href="{{ url($ourwork->url) }}"><h3> {{ $ourwork->title }} </h3>
                                                        <p>
                                                           {{ substr(strip_tags($ourwork->description), 0, 80) }} 
                                                        </p></a>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                              
                             
                              
                             
                               
                                
                               
                              
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <br/>
                                <br/>
                                <br/>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                    </div>
                    </section>
                <div class="oe_structure"></div>
               
                <div class="oe_structure"></div>
            </div>
            
                </main>
            

</div>
            </div>

@stop