<!DOCTYPE html>
<html>
   <head>
      <title>@yield('title')</title>
      <style>
      .logoz{
   width: 250px;
   height: 100px;
   margin-bottom: 20px;
}
</style>
<!-- Estilos & Jquery 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/slider.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<script src="js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->
</head>
   <body>
     @yield('content')
   </body>
</html>
