<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap theme -->
    <link href="{{ URL::asset('css/bootstrap-theme.css') }}" rel="stylesheet" />
    <!--external css-->
    <!-- font icon -->
    <link href="{{ URL::asset('css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" />    
    

    <link href="{{ URL::asset('css/widgets.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/style-responsive.css') }}" rel="stylesheet" />

    <!-- <link href="{{ URL::asset('css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet" /> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
    <section id="container" class="">
        @include('admin.header.header')
        @include('admin.sidebar.sidebar')
       
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">            
                    <!--overview start-->
                    
                      @yield('content')  
                </section>
            </section>
            <!--main content end-->

        

    </section>
     <!-- javascripts -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    

    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <!-- <script src="{{ URL::asset('js/jquery-ui-1.10.4.min.js') }}"></script> -->
    <script src="{{ URL::asset('js/jquery-1.8.3.min.js') }}"></script>
    <!-- <script src="{{ URL::asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- bootstrap -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- nice scroll -->
    <script src="{{ URL::asset('js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.nicescroll.js') }}"></script>
   
    <!-- custom select -->
    <script src="{{ URL::asset('js/jquery.customSelect.min.js') }}"></script>   
    <!--custome script for all page-->
    <script src="{{ URL::asset('js/scripts.js') }}"></script> 
    <!-- custom script for this page-->
    <script src="{{ URL::asset('js/jquery-jvectormap-1.2.2.min.js') }}"></script> 
    <script src="{{ URL::asset('js/jquery-jvectormap-world-mill-en.js') }}"></script> 
    <script src="{{ URL::asset('js/xcharts.min.js') }}"></script> 
    <script src="{{ URL::asset('js/jquery.autosize.min.js') }}"></script> 
    <script src="{{ URL::asset('js/jquery.placeholder.min.js') }}"></script> 
    <script src="{{ URL::asset('js/gdp-data.js') }}"></script>
    <script src="{{ URL::asset('js/morris.min.js') }}"></script> 
    <script src="{{ URL::asset('js/sparklines.js') }}"></script> 
    <script src="{{ URL::asset('js/jquery.slimscroll.min.js') }}"></script>  

    <!-- Vue JS-->
    <script src="{{URL::asset('vuejs/vendor.js')}}"></script>
    
    @stack('scripts')

    </body>
  </html>