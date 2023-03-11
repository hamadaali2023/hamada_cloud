@extends('layouts.app')

@section('content')
  
        {!! Html::style('bootstrap.css') !!}
        {!! Html::style('css.css') !!}


<style type="text/css">
    .logo{
       display: none;
    }
    .navbar-custom-menu{
         display: none;
    }
     .login{
        display: none;
    }
</style>
    <div class="container"> <center>  
                        
            <div class="all-form">   
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                <div class="row">       
                    <div class="col-xs-12"> 

                        <button class=" login"><a href="{{ url('login') }}" style="color:#fff;">Login</a></button>
                       
                        <div style="margin: 3px 20px 2px 20px; float: left;">
                            <img src="{{url('frontendstyle/logo.png')}}" width="100px"></div>
                        <div class="clearfix"></div>
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label>Username</label>  
                            <div class="col-md-6">
                                <input type="text" name="username" value="{{ old('username') }}" placeholder=""> 
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           <label>Password</label>
                            <div class="col-md-6">                               
                                <input  type="password" class="" name="password" placeholder="">
                                
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                         
                         
                         
                        <div class="form-group">
                            <div class="col-md-12 ">
                                <div class="checkbox">
                                    <label>
                                       <input style="width: 20px;" type="checkbox" name="remember"> <span style="    margin-left: 6px;">Remember Me </span>
                                    </label>
                                </div>
                            </div>
                        </div>


                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
        
                    </div>   
                     
                </div></center>
             </form>
            </div>
            
        </div>

@endsection
