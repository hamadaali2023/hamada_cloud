@extends('layouts.app')
@section('content')
{!! Html::style('bootstrap.min.css') !!}
        {!! Html::style('bootstrap.css') !!}
{!! Html::style('css.css') !!}

<style type="text/css">
    .logo{
        display: none;
    }
    .navbar-custom-menu{
         display: none;
    }
    .register{
        display: none;
    }
.form-group {
     margin-bottom:0px !important; 
}
label {  
    margin-left: 25px !important;
}
</style>
    <div class="container"> <center>  
            <div class="all-form">              
                <div class="row">       
                    <div class="col-xs-12">
                        <button class="active"><a href="{{ url('login') }}" style="color:#fff;">Login</a></button>
                        <button class="notactive register"><a href="{{ url('/register') }}" style="color:#fff;">Register </a></button>
                              <div style="margin: 5px 20px 2px 20px; float: left;"><img src="PeakFitness-Logo.png" width="100px"></div>
                        <div class="clearfix"></div>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                            <div class="{{ $errors->has('name') ? ' has-error' : '' }}">  
                                <label>Name</label>                   
                                <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Name">
                                @if ($errors->has('name'))
                                    <div class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="{{ $errors->has('username') ? ' has-error' : '' }}">  
                                <label>Username</label>        
                                <input id="username" type="text"  name="username" value="{{ old('username') }}" placeholder="Username">
                                @if ($errors->has('username'))
                                    <div class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                     </div>
                                @endif
                            </div>

                            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                 <label>E-Mail Address</label>
                                <input id="email" type="email"  name="email" value="{{ old('email') }}" placeholder="E-Mail ">
                                @if ($errors->has('email'))
                                    <div class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label>Password</label>
                                <input id="password" type="password"  name="password" placeholder="Password ">
                                @if ($errors->has('password'))
                                    <div class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }}"> 
                                <label>Confirm Password</label>  
                                <input id="password-confirm" type="password"  name="password_confirmation" placeholder="Confirm Password ">
                                @if ($errors->has('password_confirmation'))
                                    <div class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </div>
                                @endif
                            </div>
                              <div class="{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}"> 
                                <label></label>  
                                {!! Recaptcha::render() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <div class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </div>
                                @endif
                              
                            </div>
                             
                            <div class="">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Register
                                    </button>
                                </div>
                            </div>
                        </form>

                        
                    </div>   
                     
                </div></center>
            </div>
            
        </div>
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
@endsection
