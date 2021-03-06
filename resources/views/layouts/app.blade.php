<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Contable</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/img/apple-touch-icon-152x152.png">
    
    @yield('css')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">

      @include('layouts.navbar')

      <div id="content">
        <div class="container">
          @yield('contenido')
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    @yield('js')
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/jquery/jquery.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/js/jquery.parallax-1.1.3.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="https://d19m59y37dris4.cloudfront.net/universal/2-1-0/js/front.js"></script>
  </body>
</html>