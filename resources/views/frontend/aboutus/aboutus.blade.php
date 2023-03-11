
@extends('frontend/homepage')

@section('frontpage')

     @section('seo')

      <meta name="keywords" content="نبذة عن ماتركس " />

     <!-- <meta name="description" content=" ماتريكس كلاودز هي واحدة من الشركات الرائدة في مصر والشرق الأوسط في مجال حلول الاعمال ,تعمل ماتريكس كلاودز في مجال حلول واستشارات الأعمال والتي تركز فيها على المشاريع التقنية والهندسية الاستراتيجية لعملائها من أجل توفير ميزة تنافسية قابلة للتنفيذ لاستثمار العميل.   " />-->
     

      <meta name="author" content="Matrix Cloud" / >

      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
      
      <title> Matrix Clouds About Us </title>

    @stop


    <!-- ////////// start content  ///////// -->
            <div id="">
               
                 <section id="section-about-2"  >
                                       
                              
                         <div class="row head">
                            <div class="col-xs-10  col-sm-8 col-sm-offset-2" style="margin-top: 50px">
                                <h5 >
                                          <div style="font-size: 18px">
                                        نبذة عن
                                        <span class="green" style="font-size: 18px"> ماتركس </span><br></div>                                 
                                      
                                    </h5>                                
                                   
                            </div>
                            <div class="row">
                                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 animate-in slow-mo" data-anim-type="fade-in-up" data-anim-delay="350">
                                    @foreach ($description as $desc)
                                        <p>
                                          {{ $desc->description }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                 
                   
                </section>

                <section id="section-about-1"    >               
              

                        <div class="col-xs-12 col-md-12  animate-in slow-mo" data-anim-type="fade-in-up" data-anim-delay="150">

                            <div id="portfolio-list">
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
                                  @foreach ($abouts as $about)
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 mix buildings interior">
                                    <div class="portfolio-item">
                                        <img src="{{url($about->image) }}" alt=""/>
                                        <div class="overlay">
                                      
                                        <div class="content hamadaaa">
                                            <h3>
                                                <a href="#" class="point" onclick="return false;">
                                                    {{ $about->title }}  </a>                                                
                                            </h3>
                                            <p style="text-align: justify;">
                                               {{ $about->description }}
                                            </p>
                                        </div>  </div> 
                                    </div>
                                </div>
                                  @endforeach
                            </div>

                            
                        </div>   

                    
    </div>        
</div>

@stop
