<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title> Eatveg </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('public/shop') }}/css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="{{ url('public/shop') }}/css/font-awesome.min.css" rel="stylesheet" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ url('public/shop') }}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('public/shop') }}/css/responsive.css" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('/public/assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('/public/assets/css/fontawesome.min.css') }}">
    @stack('style')
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->

</head>

<body class="sub_page">

    @include ('client.section.navbar')

  <!-- content section -->

  @yield('content_front')

  <!-- end content section -->


  <!-- footer section -->
  @include ('client.section.footer')>
  <!-- end  footer section -->

  <script type="text/javascript" src="{{ url('public/shop') }}/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="{{ url('public/shop') }}/js/bootstrap.js"></script>
  <script type="text/javascript" src="{{ url('public/shop') }}/js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

  @stack('script')
    <script src="{{ asset('/public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('/public/assets/js/custom.js') }}"></script>

</body>

</html>