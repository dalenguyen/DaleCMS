<!DOCTYPE html>
<html>
  <head>
    <title>Dale nguyen - @yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.png"/>

    <!--[if lte IE 8]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->

    <link rel="stylesheet" href="/public/css/app.css">
    @yield('header_script')

    <!--[if lte IE 8]><link rel="stylesheet" href="/public/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="/public/css/ie9.css" /><![endif]-->
  </head>
  <body>
    @include('layouts.header')

     <div id="main">
         @yield('content')                
     </div>

    @include('layouts.footer')

    <script src="/public/js/jquery.min.js"></script>
     <script src="/public/js/jquery.scrolly.min.js"></script>
     <script src="/public/js/jquery.scrollzer.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/skel/3.0.1/skel.min.js"></script>
     <script src="/public/js/util.js"></script>
     <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
     <script src="/public/js/main.js"></script>
   </body>
 </html>
