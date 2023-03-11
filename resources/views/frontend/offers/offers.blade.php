@extends('frontend/homepage')

@section('frontpage')

	  
	@section('seo')

	  <meta name="keywords" content="" />

    <!--  <meta name="description" content="{{$Offer->description}}" />     --> 

      <meta name="author" content="" / >

      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
      
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
      
    @stop

	<div class="vc_row wpb_row vc_row-fluid vc_custom_1456216710396">
		<!-- <title> {{$Offer->name}} | ماتريكس كلاودز لحلول الاعمال المتكاملة   </title>-->
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner" style="direction: rtl;">
			<div class="wpb_wrapper">
				<div class="vc_row wpb_row vc_inner vc_row-fluid container vc_custom_1456247332295">
					<div class="wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<div class="content-widget-title">
									<div class="content-title-text">
										<h3 style="  color: #1b2a89">  {{$Offer->name}} </h3><br>									
										<p style="margin-bottom: 10px; font-family: bukra;line-height:32px; font-size: 18px;"> {{$Offer->description}} </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="vc_row wpb_row vc_inner vc_row-fluid container  anim-slideInUp vc_custom_1456247342992">	
                     
                   <!--  ///////////////////////////////-->
                     @foreach ($Package as $key => $value)

                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="pricing-table pricing-table-vertical">                                 
                                        <div class="pricing-table-price">
                                            <h3>{{$value->price}}  </h3>
                                        </div>
                                        <div class="pricing-table-packagename">
                                            <h3 style="     font-family: bukra; ">{{$value->title}} </h3>
                                        </div>                                  
                                    <div class="pricing-table-content">
                                        <ul>
                                               @foreach ($value->Details as $key => $value2)
                                                    <li>
                                                        <div class="pricing-list-icon"> 
                                                              @if(($value2->check) =="1") 
                                                               <i class="fa fa-check yes"></i>            
                                                              @else
                                                              <i class="fa fa-times no" style="color:  #e722229e;"></i> 
                                                              @endif 
                                                              
                                                        </div>
                                                        @if(($value2->check) =="1") 
                                                        <div class="pricing-list-text" >
                                                            {{$value2->name}} 
                                                        </div>
                                                        @else
                                                         <div class="pricing-list-text" style="color:  #00000066;">
                                                            {{$value2->name}} 
                                                        </div>
                                                       @endif 
                                                    </li>
                                                @endforeach                                             
                                        </ul>
                                    </div>
                                    <style type="text/css">
                                        .pricing-table-button:hover{
                                            background: #1b2a89;
                                        }

                                    </style>
                                    <div class="pricing-table-button" style="background: #4b85cd;font-family: Andalus">
                                        <a href=" {{ url('booking/'.$value->id) }}" title="شراء "> أطلب الأن </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach  

                   <!--  ///////////////////////////////-->




				</div>
<br></br>
			</div>
		</div>
	</div>
</div>



@stop