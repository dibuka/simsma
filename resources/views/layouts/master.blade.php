<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>guruTIK | @yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('') }}assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/_all-skins.min.css">
  <style>
    .lbr-btn{
        width: 30%;
    }
  </style>
  @stack('css')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('layouts.header')
    @include('layouts.sidebar')
    @yield('content')
    @include('layouts.footer')
  <div class="control-sidebar-bg"></div>
</div>
<script src="{{ asset('') }}assets/jQuery/jQuery-2.2.0.min.js"></script>
<script src="{{ asset('') }}assets/js/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{ asset('') }}assets/bootstrap/js/bootstrap.min.js"></script>
@stack('js')
<script src="{{ asset('') }}assets/slimScroll/jquery.slimscroll.min.js"></script>
<script src="{{ asset('') }}assets/fastclick/fastclick.js"></script>
<script src="{{ asset('') }}assets/js/app.min.js"></script>
<script src="{{ asset('') }}assets/js/dashboard.js"></script>
<script src="{{ asset('') }}assets/js/demo.js"></script>
</body>
</html>
