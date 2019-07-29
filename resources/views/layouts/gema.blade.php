<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('bower_components/bootstrap-4.3.1/css/bootstrap.css')}}"> --}}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  @yield('link')
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    @include('layouts.header')

    <!-- Left side column. contains the sidebar -->
    @include('layouts.aside')

    <!-- Content Wrapper. Contains page content -->
    @yield('content')

    @include('layouts.footer')

    <!-- Control Sidebar -->
    @include('layouts.aside_control')

    <div class="control-sidebar-bg"></div>
  </div>
  
  <!-- jQuery 3 -->
  {{-- <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script> --}}
  <script src="{{asset('bower_components/jquery/dist/jquery-3.4.1.js')}}"></script>
  <!-- Bootstrap 3.3.7 -->
  {{-- <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script> --}}
  <script src="{{asset('bower_components/bootstrap-4.3.1/js/bootstrap.js')}}"></script>
  @yield('script')
  <!-- SlimScroll -->
  <script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('dist/js/demo.js')}}"></script>
  
  <script>
    $(document).ready(function () {
      $('.sidebar-menu').tree()
    })
  </script>
</body>
</html>