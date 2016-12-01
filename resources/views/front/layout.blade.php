<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->    
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- bootstrap theme -->
    <!-- <link href="css/bootstrap-theme.css" rel="stylesheet"> -->
    <!--external css-->

    <!-- Bootstrap CSS -->  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- font icon -->
    <link href="{{ URL::asset('css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet" />
  
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
    <section id="container" class="">
        @include('front.header')
    </section>
    <div class="container">

        @yield('content')

    </div>
     <!-- javascripts -->
    <!--<script src="js/jquery.js"></script>-->
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui-1.10.4.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- nice scroll -->
    <script src="{{ URL::asset('js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.nicescroll.js') }}"></script>
   
    @stack('scripts')
  </body>

  </html>