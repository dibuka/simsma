<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>guruTIK | Login SimSMA</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('') }}assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('') }}assets/css/AdminLTE.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a><b>Sim</b>SMA</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Masuk</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group has-feedback">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8"></div>
            <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
            </div>
        </div>
    </form>
  </div>
</div>
<script src="{{ asset('') }}assets/jQuery/jQuery-2.2.0.min.js"></script>
<script src="{{ asset('') }}assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
