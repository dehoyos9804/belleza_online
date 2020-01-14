<!DOCTYPE html>
<html >
<head lang="es">
  <!-- Site made with Mobirise Website Builder v4.9.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href='{{url("/admin-lte")}}/assets/images/logo2.png' type="image/x-icon">
  <meta name="description" content="Web Page Creator Description">

  <title>@yield('titulo')</title>

  <link rel="stylesheet" href='{{url("/admin-lte")}}/assets2/web/assets/mobirise-icons2/mobirise2.css'>
  <link rel="stylesheet" href='{{url("/admin-lte")}}/assets2/web/assets/mobirise-icons/mobirise-icons.css'>
  <link rel="stylesheet" href='{{url("/admin-lte")}}/assets2/tether/tether.min.css'>
  <link rel="stylesheet" href='{{url("/admin-lte")}}/assets2/bootstrap/css/bootstrap.min.css'>
  <link rel="stylesheet" href='{{url("/admin-lte")}}/assets2/bootstrap/css/bootstrap-grid.min.css'>
  <link rel="stylesheet" href='{{url("/admin-lte")}}/assets2/bootstrap/css/bootstrap-reboot.min.css'>
  <link rel="stylesheet" href='{{url("/admin-lte")}}/assets2/theme/css/style.css'>
  <link rel="stylesheet" href='{{url("/admin-lte")}}/assets2/mobirise/css/mbr-additional.css' type="text/css">
  
</head>

<body>
<section class="menu cid-rksCTOZgFK" once="menu" id="menu1-d">
    @yield('menu')
</section>

<section>
    @yield('contenido')
</section>

<section class="cid-rksGdCiTkl" id="footer1-e">
    @yield('footer')
</section>


<script src='{{url("/admin-lte")}}/assets/web/assets/jquery/jquery.min.js'></script>
<script src='{{url("/admin-lte")}}/assets/popper/popper.min.js'></script>
<script src='{{url("/admin-lte")}}/assets/tether/tether.min.js'></script>
<script src='{{url("/admin-lte")}}/assets/bootstrap/js/bootstrap.min.js'></script>
<script src='{{url("/admin-lte")}}/assets/touchswipe/jquery.touch-swipe.min.js'></script>
@stack('scripts') 
<script src='{{url("/admin-lte")}}/assets/parallax/jarallax.min.js'></script>
<script src='{{url("/admin-lte")}}/assets/viewportchecker/jquery.viewportchecker.js'></script>
<script src='{{url("/admin-lte")}}/assets/smoothscroll/smooth-scroll.js'></script>
<script src='{{url("/admin-lte")}}/assets/dropdown/js/script.min.js'></script>
<script src='{{url("/admin-lte")}}/assets/theme/js/script.js'></script>
  
</body>
</html>