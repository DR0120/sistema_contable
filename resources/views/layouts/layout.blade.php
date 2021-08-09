<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema Financiero | 1-2021</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">

  @yield('css')
</head>
<body class="hold-transition" id="navbar">
<div class="wrapper">
  @if (Auth::user()->roles()->first()->name == 'admin')
    @include('layouts.navbarAdmin')
  @else
    @include('layouts.navbar')
  @endif

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
      <div class="container">
        @yield('contenido')
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


<!-- jQuery -->
<script src="/adminlte/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>

<script src="https://kit.fontawesome.com/ef6287927a.js" crossorigin="anonymous"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('message'))
<?php echo
            "<script>
                Swal.fire('¡Guardado!','". session('message') ."','success')
             </script>
            "?>
@endif

@if (Auth::user()->roles()->first()->name == 'admin')
  <?php echo
  "<script>
    document.getElementById('navbar').classList.add('sidebar-mini');
  </script>
  "?> 
@else
  <?php echo
  "<script>
    document.getElementById('navbar').classList.add('layout-top-nav');
    document.getElementById('navbar').classList.add('layout-navbar-fixed');
  </script>
  "?> 
@endif

@yield('js')

</body>
</html>
