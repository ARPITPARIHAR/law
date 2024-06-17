<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dashboard')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('files/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css') }}">

    <!-- Feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/feather/css/feather.css') }}">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/jquery.mCustomScrollbar.css') }}">
  </head>
  <body>
    <div id="main_content">
      @include('admin.includes.topbar')
      @include('admin.includes.sidebar')
      <div class="page">
        @yield('content')
      </div>
    </div>

    <!-- Required Framework -->
    <script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/modernizr.js') }}"></script>

    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('files/bower_components/chart.js/js/Chart.js') }}"></script>

    <!-- Amchart js -->
    <script src="{{ asset('files/assets/pages/widget/amchart/amcharts.js') }}"></script>
    <script src="{{ asset('files/assets/pages/widget/amchart/serial.js') }}"></script>
    <script src="{{ asset('files/assets/pages/widget/amchart/light.js') }}"></script>

    <!-- Custom Scrollbar -->
    <script src="{{ asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- Smooth Scroll -->
    <script type="text/javascript" src="{{ asset('files/assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('files/assets/js/pcoded.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('files/assets/js/vartical-layout.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/pages/dashboard/custom-dashboard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('files/assets/js/script.min.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-23581568-13');
    </script>

    <!-- Slimscroll -->
    <link rel="stylesheet" href="{{ asset('css/jquery.slimscroll.css') }}">
    <script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.sidebar').slimScroll({
          height: '250px', // Set the height according to your needs
          railVisible: true, // Show scrollbar rail
          alwaysVisible: true // Keep scrollbar visible
        });
      });
    </script>
  </body>
</html>
