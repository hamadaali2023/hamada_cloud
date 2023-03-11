 @include('layouts.app')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('banar')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      {!! Html::script('account/plugins/jQuery/jquery-2.2.3.min.js') !!}
      {!! Html::script('account/bootstrap/js/jquery.printPage.js') !!}

      {!! Html::script('account/bootstrap/js/jquery.printPage.js') !!}

      {!! Html::style('account/bootstrap/css/bootstrap.css') !!}
      {!! Html::style('account/bootstrap/css/bootstrap.min.css') !!}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >
      {!! Html::style('account/dist/css/AdminLTE.min.css') !!}
      {!! Html::style('account/dist/css/skins/_all-skins.min.css') !!}
      {!! Html::style('account/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
      {!! Html::style('account/dist/css/skins/_all-skins.min.css') !!}
      {!! Html::style('account/plugins/datatables/dataTables.bootstrap.css') !!}
      {!! Html::style('account/plugins/daterangepicker/daterangepicker.css') !!}
      {!! Html::style('account/plugins/datepicker/datepicker3.css') !!}
      {!! Html::style('account/plugins/iCheck/all.css') !!}
      {!! Html::style('account/plugins/colorpicker/bootstrap-colorpicker.min.css') !!}
      {!! Html::style('account/plugins/timepicker/bootstrap-timepicker.min.css') !!}
      {!! Html::style('account/plugins/select2/select2.min.css') !!}
      {!! Html::style('account/dist/css/skins/_all-skins.min.css') !!}

      <!--for editor-->

        {!! Html::script('account/admin/dist/js/editor-min.js') !!}

        {!! Html::style('account/admin/dist/css/skins/_all-skins.min.css') !!}

        {!! Html::script('dist/js/editor-min.js') !!}

        {!! Html::style('dist/css/skins/_all-skins.min.css') !!}

        
         <!-- Global site tag (gtag.js) - Google Analytics -->
               <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135192603-1"></script>
               <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());

                 gtag('config', 'UA-135192603-1');
             </script>

      <!--for editor-->
      
</head>


<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">



  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="padding-top: 0px;">
    <!-- sidebar: style can be found in sidebar.less -->
    <div class="user-panel">
        <div class=" " style="" >
         
          <img src="{{url('frontendstyle/logo.png')}}" width="200px" height="77px" >
        </div>
        
      </div>
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu">        
        <li class="treeview ">                      
          <li><a href="{{url('admnclouds')}}"><img src="{{url('account/category.png')}}" width="20px">Dashboard</a></li>
          <li><a href="{{url('admin/aboutus')}}"><img src="{{url('account/category.png')}}" width="20px">About </a></li> 
          <li><a href="{{url('admin/slider')}}"><img src="{{url('account/padlock.png')}}" width="20px"> Slider </a></li>
          <li><a href="{{url('admin/services')}}"><img src="{{url('account/padlock.png')}}" width="20px"> Services </a></li>
          <li><a href="{{url('admin/ourwork')}}"><img src="{{url('account/padlock.png')}}" width="20px"> Works </a></li>
          <li><a href="{{url('admin/landing')}}"><img src="{{url('account/padlock.png')}}" width="20px"> landing </a></li>
          <li><a href="{{url('admin/contactus')}}"><img src="{{url('account/group.png')}}" width="20px"> Contact Info</a></li>
          </li>
            <li class="">
              <a href="#">
                <i class="fa fa-fw fa-shopping-cart"></i><span> Offers </span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu menu-open" >
                <li>
                  <a href="{{url('admin/offers')}}"><img src="{{url('account/padlock.png')}}" width="20px"> Offers </a>
                </li>
                <li>
                  <a href="{{url('admin/details')}}"><img src="{{url('account/padlock.png')}}" width="20px"> Details </a>
                </li>
                <li>
                  <a href="{{url('admin/package')}}"><img src="{{url('account/padlock.png')}}" width="20px"> Package </a>
                </li>
                <li>
                  <a href="{{url('admin/package_details')}}"><img src="{{url('account/padlock.png')}}" width="20px"> Package details </a>
                </li>
              </ul>
          </li>

          <li class="">
            <a href="#">
              <i class="fa fa-fw fa-shopping-cart"></i><span> Quotation </span>
              <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu menu-open" >             
                <li>
                   <a href="{{url('admin/booking')}}"><img src="{{url('account/padlock.png')}}" width="20px"> Booking </a>
                </li>
                <li>
                  <a href="{{url('admin/request_price')}}"><img src="{{url('account/warehouse.png')}}" width="20px"> Request price </a>
                </li>
                <li>
                  <a href="{{url('admin/quate')}}"><img src="{{url('account/padlock.png')}}" width="20px"> Quate </a>
                </li>
                <li>
                  <a href="{{url('admin/messages')}}"><img src="{{url('account/group.png')}}" width="20px"> Messages</a>
                </li>

                
           
            </ul>
          </li>

      </ul>



    </section>
  </aside>
